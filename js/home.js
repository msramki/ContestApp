// ClassicEditor
// .create( document.querySelector( '#article' ) )
// .catch( error => {
//     console.error( error );
// } );


function toggleWeddingAnniversary() {
    // var singlestatus = document.getElementById('single').checked;
    // var weddingannivrow = document.getElementById('weddingannivrow')
    // if(singlestatus)
    // {
    //     weddingannivrow.style.display = 'block';
    //     weddingannivrow.classList.add('form-group');
    //     weddingannivrow.classList.add('row');
    //     weddingannivrow.classList.add(' wed-status');
    // }else{
    //     weddingannivrow.style.display = 'none';
    // }
}

function validate() {
    var contName = document.getElementById('name').value;
    var dob = document.getElementById('dob').value;
    var maleStatus = document.getElementById('male').value;
    var contactno = document.getElementById('contactno').value;
    var email = document.getElementById('email').value;
    var singlestatus = document.getElementById('single').checked;
    var wedding_anniversary = document.getElementById('wedding_anniversary').value;

    var facebookurl = document.getElementById('facebookurl').value;
    var twitterurl = document.getElementById('twitterurl').value;
    var linkedinurl = document.getElementById('linkedinurl').value;
    var websiteurl = document.getElementById('websiteurl').value;
    var blogurl = document.getElementById('blogurl').value;

    var english = document.getElementById('english').checked;
    var tamil = document.getElementById('tamil').checked;
    var article = document.getElementById('article').value;

    console.log('Name : ', contName);
    console.log('Dob : ', dob);
    console.log('Gender : ', maleStatus ? 'Male' : 'Female');
    console.log('Contact No : ', contName);
    console.log('Email : ', email);
    console.log('Single Status : ', singlestatus);
    console.log('Wedding Anniv : ', wedding_anniversary);
    console.log('Facebookurl : ', facebookurl);
    console.log('Twitter : ', twitterurl);
    console.log('Linked in : ', linkedinurl);
    console.log('Website : ', websiteurl);
    console.log('Blog : ', blogurl);
    console.log('Language : ', english ? 'English' : tamil ? 'Tamil' : 'Hindi');
    console.log('Article : ', article);

    return false;

}