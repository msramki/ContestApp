<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contestdb";

$con=mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "INSERT INTO contestdetail
    (CandidateName, DOB, Gender,ContactNo, EmailId, MaritialStatus, 
    WedAnniv, Fburl, Twurl, Linurl, Weburl, Blogurl, Language, SubjectTitl, 
    ArticleText) VALUES ('".$_POST['CName']."','".$_POST['DOB']."','".$_POST['Gender']."',
    '".$_POST['ContactNo']."','".$_POST['EmailId']."','".$_POST['MaritialStatus']."','".$_POST['WedAnniv']."',
    '".$_POST['Fburl']."','".$_POST['Twurl']."','".$_POST['Linurl']."','".$_POST['Weburl']."',
    '".$_POST['Blogurl']."','".$_POST['CLanguage']."','".$_POST['SubjectTitl']."','".$_POST['ArticleText']."')";

// Perform queries 
$result = mysqli_query($con,$sql);
if(mysqli_affected_rows($con)>0)
{
    echo 'SAVED';
}
else{
echo "NOTSAVED";
}
mysqli_close($con);
?>
