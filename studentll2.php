 <html>
<?php
session_start();
?>
 <body background="08.jpg">
<h1 style="text-align:right; color:white;">HI <? = $_SESSION['FNAME']?></h1>
<center>
<br>
<a href="facultystudentinfo2.php" target="main">View attendance</a><br><br>

<a href="details.php" target="main"> View details of faculties</a><br><br>
<br>

<a href="signout.html" target="main"> Logout</a><br><br>
<br>
</center>
</body>
</html>