<html>
<head>
<title>Home page</title>
</head
<style>

</style>
<body style="background-color:cyan">



<form action="site3.php" method="post">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1 style="color:blue;">Select Period&nbsp;:&nbsp;<select style="width:150;height:30;">
  <option value="9">9:00AM  -  10:00AM</option>
  <option value="10">10:00AM  -  11:00AM</option>
  <option value="11">11:00AM  -  12:00AM</option>
  <option value="12">12:00PM  -  1:00PM</option>
</select>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select Subject&nbsp;:&nbsp;
<select name="subject" style="width:100;height:30;">
  <option  value="dld">DLD</option>
  <option  value="prob">PROBABILITY</option>
  <option  value="mp">MICRO PROC</option>
  <option  value="mat">MATHS</option> 
</select></h1>
<br><br><br><br>
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
	width:250px;
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
        
      $selected = mysql_select_db("loginstudent", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM ecestu ");
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
          <th>MARK ATT</th>
          <th>ID NO</th>
          
         
          
        </tr>
      </thead>
      <tbody>

        <?php
$i=1;
          while( $row = mysql_fetch_assoc( $result ) ){
 $id=  $row['id'];
            echo
            "<tr>
             
              <td>{$row['idno']}<input type='checkbox' checked='checked' name='id[]' value ='{$row['idno']}'></td>
             
             
           
             
            </tr>";
$i=$i+1;
          }
        ?>
          }
        
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
<center>
<input type="submit" value="submit" name="submit">
</center>
</form>

</body>
</html>


