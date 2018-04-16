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

$db = mysqli_select_db($conn,'loginfaculty');


$uidd = $_POST['uid'];
$pwd = $_POST['pwd'];
$_SESSION['uuid'] = $uidd;

$sql = "SELECT * FROM user WHERE uid='$uidd' AND pwd='$pwd';
$result = $conn->query($sql);

if(!$row = $result->fetch_assoc()){
  echo "your username or password is incorrect";
}
else{
  $_SESSION['uuid'] = $uidd;
}


?>