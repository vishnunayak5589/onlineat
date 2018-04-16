 <html>
<?php
session_start();
?>
<style>
a{
color:white;
}
</style>
<body background="d1.jpg" style="background-repeat:no-repeat; background-size:100%">
<h1 style="text-align:right; color:white;">HI,<?= $_SESSION['FNAME']?></h1> 
<center>
<a href="decid.php" target="main2">MARK ATTENDENCE OF STUDENT</a><br><br>
<br>
<a href="attenfact.php" target="main2">MARK YOUR ATTENDENCE </a><br><br>
<br>
<a href="commonatt.php" target="main2">View attendance of  students </a><br><br>

<a href="detailofstudent.php" target="main2">View Details of all students</a><br><br>
<br>
<a href="signout.html" target="main2"> Signout</a><br><br>
</center>
</body>
</html>