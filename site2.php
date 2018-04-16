<?php
$host = "localhost";
$user = "root";
$pass = "";

$conn = mysqli_connect($host,$user,$pass);
if(!$conn)
{
die("Connection failed: " .mysqli_connect_error());
}

$db = mysqli_select_db($conn,'loginfaculty');

if(isset($_POST['submit']))
{


$atten = $_POST['subject'];

   
    
    
    $ID=$_POST['id'];
foreach($ID as $id)
{

		mysqli_query($conn,"UPDATE user SET present= present + 1 WHERE uid = '".$id."'");
}
}
 header("Location: d1.php");
?>