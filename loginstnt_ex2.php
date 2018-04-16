<?php
	//Start session
	session_start();
 
	//Include database connection details
	require_once('connectstu.php');
 $_SESSION['error']='';
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$username = clean($_POST['username']);
	$password = clean($_POST['password']);
 
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: login.php");
		exit();
	}
 
	//Create query
	$qry="SELECT * FROM ecestu WHERE idno='$username' AND pwd='$password'";
	$result=mysql_query($qry);
 
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			
			$row = mysql_fetch_assoc( $result );
			$_SESSION['uuidd']= $username;
			
  $_SESSION['FNAME']=$row['first'];
$_SESSION['lNAME']=$row['last'];
			
			header("location: fra2.php");
			exit();
		}else {
			//Login failed
			
			$errflag = true;
			if($errflag) {
				$_SESSION['error'] = 'user name and password not found';
				
				header("location: loginstudent2.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>