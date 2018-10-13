// ClassicEditor
// .create( document.querySelector( '#article' ) )
// .catch( error => {
//     console.error( error );
// } );

$(function () {
    $("#wedding_anniversary").datepicker({ maxDate: new Date(),dateFormat: 'dd-mm-yy' });
    $("#dob").datepicker({ maxDate: new Date(),dateFormat: 'dd-mm-yy' });
    clearFields();
});

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

function isAlpha(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode== 32 || (charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)) {
        return true;
    }
    return false;
}
function clearFields()
{
    document.getElementById('name').value='';
    document.getElementById('dob').value='';
    document.getElementById('male').checked= true;
    document.getElementById('contactno').value='';
    document.getElementById('email').value='';
    document.getElementById('single').checked = true;
    document.getElementById('wedding_anniversary').value='';
    document.getElementById('facebookurl').value='';
    document.getElementById('twitterurl').value='';
    document.getElementById('linkedinurl').value='';
    document.getElementById('websiteurl').value='';
    document.getElementById('blogurl').value='';
    document.getElementById('english').checked = true;
    document.getElementById('hindi').checked = false;
    document.getElementById('tamil').checked = false;
    document.getElementById('subject').value='';
    document.getElementById('article').value='';
}

function validate() {
    var contName = document.getElementById('name').value.trim();
    var dob = document.getElementById('dob').value.trim();
    var maleStatus = document.getElementById('male').checked;
    var contactno = document.getElementById('contactno').value.trim();
    var email = document.getElementById('email').value.trim();
    var singlestatus = document.getElementById('single').checked;
    var wedding_anniversary = document.getElementById('wedding_anniversary').value.trim();

    if(contName=='' || dob =='' || contactno =='' || email=='')
    {
        alert('Please fill all mandatory fields');
        return false;
    }

    if(isEmail(email) == false)
    {
        alert('Please enter valid email');
        return false;
    }

    if(singlestatus == false && wedding_anniversary == '')
    {
        alert('Please enter Wedding Anniversary');
        return false;
    }
    

    var facebookurl = document.getElementById('facebookurl').value.trim();
    var twitterurl = document.getElementById('twitterurl').value.trim();
    var linkedinurl = document.getElementById('linkedinurl').value.trim();
    var websiteurl = document.getElementById('websiteurl').value.trim();
    var blogurl = document.getElementById('blogurl').value.trim();

    var english = document.getElementById('english').checked;
    var tamil = document.getElementById('tamil').checked;
    var subject = document.getElementById('subject').value.trim();
    var article = document.getElementById('article').value.trim();

    if(article == '')
    {
        alert('Please fill content for the subject');
        return false;  
    }

    console.log('contName:',contName);
    console.log('dob:',dob);
    console.log('maleStatus:',maleStatus);
    console.log('contactno:',contactno);
    console.log('email:',email);
    console.log('singlestatus:',singlestatus);
    console.log('wedding_anniversary:',wedding_anniversary);
    console.log('facebookurl:',facebookurl);
    console.log('twitterurl:',twitterurl);
    console.log('linkedinurl:',linkedinurl);
    console.log('websiteurl:',websiteurl);
    console.log('blogurl:',blogurl);
    console.log('english:',english);
    console.log('tamil:',tamil);
    console.log('subject:',subject);
    console.log('article:',article);

    $.ajax({
        url: 'php/validate_contact.php',
        type: 'POST',
        data: { "ContactNo": contactno, "EmailId": email },
        success: function (response) {
            console.log(response);
            var isContactOK = response;
            if (isContactOK == 'OK') {
                $.ajax({
                    url: 'php/insert_record.php',
                    type: 'POST',
                    data: {
                        "CName": contName, "DOB": dob, "Gender": (maleStatus ? 'Male' : 'Female'),
                        "ContactNo": contactno, "EmailId": email, "MaritialStatus": (singlestatus ? 'Single' : 'Married'),
                        "WedAnniv": wedding_anniversary, "Fburl": facebookurl, "Twurl": twitterurl, "Linurl": linkedinurl,
                        "Weburl": websiteurl, "Blogurl": blogurl, "CLanguage": (english ? 'English' : tamil ? 'Tamil' : 'Hindi'),
                        "SubjectTitl":subject,"ArticleText": article
                    },
                    success: function (saveresponse) {
                        console.log(saveresponse)
                        if(saveresponse=='SAVED')
                        {
                            alert('Submitted successfully');
                            clearFields();
                            $.ajax({
                                url: 'php/send_email.php',
                                type: 'POST',
                                data: {
                                    "CName": contName,"ContactNo": contactno, "EmailId": email,"SubjectTitl":subject,"ArticleText": article
                                },
                                success: function (response) {
                                    console.log(response);
                                    window.location.href = "https://andamangreenland.in/";
                                },
                                error:function(response)
                                {
                                    window.location.href = "https://andamangreenland.in/";
                                }
                            });
                        }else{
                            alert('Please try later');
                        }
                    },
                });
            }
            else{
                alert('Application for this EmailId or Contact Number already submitted');
            }
        },
    });
    return false;
}