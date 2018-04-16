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


$sub1 = $_POST['subject'];

   
    
    
    $ID=$_POST['id'];
foreach($ID as $id)
{

		mysqli_query($conn,"UPDATE ecestu SET $sub1= $sub1 + 1 WHERE idno = '".$id."'");
}
$db = mysqli_select_db($conn,'loginfaculty');
mysqli_query($conn,"UPDATE totclas SET $sub1= $sub1 + 1 ");

}
 header("Location: d1.php");
?>