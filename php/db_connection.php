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
    $sql = "INSERT INTO contestdetail('Name', 'Dob', 'Gender', 'ContactNo',
     'Email', 'MaritalStatus', 'WedAnniv', 'facebookurl', 'twitterurl', 'linkedinurl', 
     'websiteurl', 'blogurl', 'languagepreferred', 'article') 
     VALUES ('".$_POST['Name']."','".$_POST['Name']."','".$_POST['Name']."','".$_POST['Name']."','
     ".$_POST['Name']."','".$_POST['Name']."','".$_POST['Name']."','".$_POST['Name']."',
     '".$_POST['Name']."','".$_POST['Name']."','".$_POST['Name']."','".$_POST['Name']."',
     '".$_POST['Name']."','".$_POST['Name']."')";
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
