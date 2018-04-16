<?php
	//Start session
	session_start();
 
	//Include database connection details
	require_once('connection.php');
 
	//Array to store validation errors
	$errmsg_arr = array();
$_SESSION['error']='';
 
	//Validation error flag
	$errflag = false;
	//Sanitize the POST values
	$username = $_POST['username'];
	$password = $_POST['password'];

 
	//Create query
	$qry="SELECT * FROM user WHERE uid='$username' AND pwd='$password'";
	$result=mysql_query($qry);
 
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {

$_SESSION['uuuid'] = $username;
 $row = mysql_fetch_assoc( $result );
  $_SESSION['FNAME']=$row['first'];
$_SESSION['lNAME']=$row['last'];

			header("location: d1.php");
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'user name and password not found';
			$errflag = true;
			if($errflag) {
				$_SESSION['error'] ='user name and password not found';
				$_SESSION['error1']='a';
				header("location: loginstaff.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>