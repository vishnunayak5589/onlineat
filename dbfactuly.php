<?php
$mysql_hostname = "localhost";
$mysql_user = "vishnu";
$mysql_password = "loki";
$mysql_database = "loginfaculty";
$prefix = "";
$db = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database, please try again");
mysql_select_db($mysql_database, $bd) or die("Could not select database, please try again");
?>
