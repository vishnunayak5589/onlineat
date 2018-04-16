<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";

$conn = mysqli_connect($host,$user,$pass);
if(!$conn)
{
die("Connection failed: " .mysqli_connect_error());
}

$db = mysqli_select_db($conn,'loginstudent');

$first = $_POST['first'];
$last = $_POST['last'];
$idno = $_POST['idno'];
$brnch = $_POST['branch'];
$pwd = $_POST['pwd'];


if($brnch=='CSE')
{

mysqli_query($conn,"INSERT IGNORE INTO student(first, last, idno, pwd,branch) VALUES('{$first}','{$last}','{$idno}','{$pwd}','{$brnch}' ) ");

header("location: loginstudent.php");
}
else{
mysqli_query($conn,"INSERT IGNORE INTO ecestu(first, last, idno, pwd,branch) VALUES('{$first}','{$last}','{$idno}','{$pwd}','{$brnch}' ) ");

header("location: loginstudent2.php");
}
?>