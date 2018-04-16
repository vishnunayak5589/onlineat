<?php
$host = "localhost";
$user = "root";
$pass = "";

$conn = mysqli_connect($host,$user,$pass);
if(!$conn)
{
die("Connection failed: " .mysqli_connect_error());
}

$db = mysqli_select_db($conn,'loginstudent');



if(isset($_POST['submit']))
{
$atten = $_POST['idn'];

   
    
    
    



		mysqli_query($conn,"DELETE FROM student WHERE idno='".$atten."' ");
mysqli_query($conn,"DELETE FROM ecestu WHERE idno='".$atten."' ");
}

 header("Location: logindataadmin.php");
?>