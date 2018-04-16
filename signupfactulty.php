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

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$brnch = $_POST['branch'];
$pwd = $_POST['pwd'];




mysqli_query($conn,"INSERT IGNORE INTO user(first, last, uid, pwd,dept) VALUES('{$first}','{$last}','{$uid}','{$pwd}','{$brnch}')");

header("location: loginstaff.php");
?>