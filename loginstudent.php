

<html>
<?php
session_start();

?>
<head><title>Faculty Login Window</title>
<link rel=stylesheet href="styles.css" type="text/css">
<script language="javascript">
function fun()
{
var id=document.getElementById("id").value;
var pwd=document.getElementById("pwd").value;
if(id=="" || pwd=="")
{
 alert("Invalid Id/Password");
}
else
{
 window.open("./facultycheckuser.jsp?id="+id+"&pwd="+pwd);
}
}

function rem()
{
//alert("erase");
document.getElementById("id").value="";
document.getElementById("password").value="";
}

</script>
</head>
<body background="ls.jpg" style="background-repeat:no-repeat; background-size:80%";>
<p align="center"><b><font size="5" face="Comic Sans MS">Student Information 
System </font><font face="Comic Sans MS" size="2"><br>
STUDENT ZONE</font></b></p>
<table border="1" cellpadding="2" cellspacing="2" width="300" align="center" bordercolor="gray">
<tr>
<td style="color:white; background-color:gray"><b>Login </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.netspiderpk.cjb.com" target="_blank"><img src="lock.gif" alt="Protected by Net Spider Development" border="0"></a></td>
</tr>
<tr>
<td style="color:black">&nbsp;<form name="loginform" action="loginstnt_ex1.php" method="post">
<table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
  <tr>
    <td colspan="2">
		<!--the code bellow is used to display the message of the input validation-->
		 	</td>
  </tr>
  <tr>
    <td width="116"><div align="right">Username</div></td>
    <td width="177"><input name="username" type="text" required/></td>
  </tr>
  <tr>
    <td><div align="right">Password</div></td>
    <td><input name="password" type="password" required/></td>
  </tr>
<tr>
<td><?=$_SESSION['error']?></td></tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input name="" type="submit" value="login" /></td>
  </tr>
</table>
</form>

</td>
</tr>
<tr>
<td align="center" bgcolor="#000000">
<img border="0" id="url" src="login_spy.gif" width="115" height="35" onclick="fun()">
<a href="./login2.html" onclick="rem()"><img border="0" src="reset_spy.gif" width="115" height="35"></a>
<a href="studentreg.php"><img border="0" src="4.jpg" width="100" height="80"></a></td>
</tr>

</table>
</body>
</html>

