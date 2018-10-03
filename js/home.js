function validate() {
    var contName = document.getElementById('name').value;
    var dob = document.getElementById('dob').value;
    var gender = document.getElementsByName('gender').value;
    var contactno = document.getElementById('contactno').value;
    var email = document.getElementById('email').value;
    var status = document.getElementsByName('status').value;
    var wedding_anniversary = document.getElementById('wedding_anniversary').value;

    var facebookurl = document.getElementById('facebookurl').value;
    var twitterurl = document.getElementById('twitterurl').value;
    var linkedinurl = document.getElementById('linkedinurl').value;
    var websiteurl = document.getElementById('websiteurl').value;
    var blogurl = document.getElementById('blogurl').value;

    var language = document.getElementsByName('language').value;
    var article = document.getElementById('article').value;

    console.log('Name : ',contName);
    console.log('Dob : ',dob);
    console.log('Gender : ',gender);
    console.log('Contact No : ',contName);
    console.log('Email : ',email);
    console.log('Status : ',status);
    console.log('Wedding Anniv : ',wedding_anniversary);
    console.log('Facebookurl : ',facebookurl);
    console.log('Twitter : ',twitterurl);
    console.log('Linked in : ',linkedinurl);
    console.log('Website : ',websiteurl);
    console.log('Blog : ',blogurl);
    console.log('Language : ',language);
    console.log('Article : ',article);

    return false;

}