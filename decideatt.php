<?php

$b=$_POST['branh'];

if($b=='ECE')
{
header("Location: form2.php");
}
else{
header("Location: form.php");
}
?>