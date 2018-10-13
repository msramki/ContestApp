<?php 
function validateContact($contactNo, $emailId){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contestdb";
    $retvalue= 'OK';
    $con=mysqli_connect($servername,$username,$password,$dbname);
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    $sql = "select Id from contestdetail where ContactNo='".$contactNo."' or EmailId ='".$emailId."'";
    
    if ($result=mysqli_query($con,$sql))
    {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
    if($rowcount>0)
    {
    $retvalue= 'NOTOK';
    }
    // Free result set
    mysqli_free_result($result);
    }
    
    mysqli_close($con);
    return $retvalue;
}
echo validateContact($_POST['ContactNo'],$_POST['EmailId']);
?>