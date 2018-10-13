<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contestdb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$sql = "select * from contestdetail";
    $sql = "INSERT INTO 'contestdetail'
    ('CandidateName', 'DOB', 'Gender', 'ContactNo', 'EmailId', 'MaritialStatus', 
    'WedAnniv', 'Fburl', 'Twurl', 'Linurl', 'Weburl', 'Blogurl', 'Language', 'SubjectTitl', 
    'ArticleText') VALUES ('".$_POST['Name']."','".$_POST['DOB']."','".$_POST['Gender']."',
    '".$_POST['ContactNo']."','".$_POST['EmailId']."','".$_POST['MaritialStatus']."','".$_POST['WedAnniv']."',
    '".$_POST['Fburl']."','".$_POST['Twurl']."','".$_POST['Linurl']."','".$_POST['Weburl']."',
    '".$_POST['Blogurl']."','".$_POST['Language']."','".$_POST['SubjectTitl']."','".$_POST['ArticleText']."')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
