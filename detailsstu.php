<!doctype html>
    <html lang="en">
    <head>
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
    <body>
      <?php
      $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
        
      $selected = mysql_select_db("loginfaculty", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM user ");
      ?>
	  <br>
	  <br>
	  <br>
	  <br>
	   <br>
	  <br>
	  <br>
	  <br>
      <table border="2" style= "background-color: #ccffff; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>FIRST NAME</th>
          <th>LAST NAME</th>
          <th>ID NO</th>
          <th>BRANCH</th>
          
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
	
              
             
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
	
	<br>
	<br>
	<br>
	<br>
	
	<button onclick="location.href = 'home.html';" id="sign_user" class="float-left submit-button" >BACK TO HOME</button>
	
     <?php mysql_close($connector); ?>
    </body>
    </html>