<!doctype html>
    <html lang="en">
    <head>
<?php
session_start();
?>
	<style>
*{
	margin:0px;
	padding:0px;
	}
body{
	font-family:Tahoma, Geneva, sans-serif;

background-color: #ffffcc;
	}
	
	
	#sign_user{
	font-size:14px;
	color:#FFF;
	text-align:center;
	background-color:#3B5998;
	width:475px;
	padding:10px;
	margin-top:10px;
	cursor: pointer;
	}
	</style>
      <meta charset="UTF-8">
      <title>DISPLAY PAGE</title>
    </head>
    <body background="fs.jpg" style="background-repeat:no-repeat; background-size:100%">
      <?php
      $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
        
      $selected = mysql_select_db("loginstudent", $connector)
        or die("Unable to connect");
$iiidd=$_SESSION['idnoo'];
      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM student WHERE idno='".$iiidd."'");
      ?>
	  <br>
	  <br>
	  <br>
	  <br>
	   <br>
	  <br>
	<h2 style="text-align:center;color:white;">Your Attendance</h2><br>
	
      <table border="2" style= "background-color: #ccffff; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>FIRST NAME</th>
          <th>LAST NAME</th>
          <th>ID NO</th>
	<th>BRANCH</th>
	<th>DSPD</th>
	<th>AWP</th>
	<th>CO</th>
	<th>LAA</th>
	
	
          
          
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysql_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row['first']}</td>
              <td>{$row['last']}</td>
              <td>{$row['idno']}</td>
              <td>{$row['branch']}</td>
		<td>{$row['DSPD']}</td>
		<td>{$row['AWP']}</td>
		<td>{$row['CO']}</td>
		<td>{$row['LA']}</td>
             
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
	
	<br>
	<br>
	<br>
	<br>
	
	
	
     <?php mysql_close($connector); ?>
    </body>
    </html>