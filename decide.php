<?php

$b=$_POST['branh'];

if($b=='ECE')
{
header("Location: loginstudent2.php");
}
else{
header("Location: loginstudent.php");
}
?>