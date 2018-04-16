
<!DOCTYPE html>
<html>
<style>

input[type=tel],input[type=password],input[type=text],input[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
body{
    background-image: url("streg.jpg");
    background-size: 100%;
    background-repeat: no-repeat;   
}


h1{
text-align:center;
color: black
}

input[type=submit] {
    width: 100%;
    background-color: #FF6833;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: red;
}


div {
    border-radius: 5px;
    background-color: transparent;
    padding: 20px;
    margin:0 450px
}
</style>
<body>

<h1 style="color:cyan;">Student Registration</h1>

<div>
  <form action="signupstudent.php" method="post">
    <label for="fname" style="color:cyan;">First Name</label><br>
    <input type="text" id="first" name="first" placeholder="Your name.." required>
     <br>
    <label for="lname" style="color:cyan;">Last Name</label><br>
    <input type="text" id="last" name="last" placeholder="Your last name..">
    <br>
 	<select name="branch" style="width:100;height:30;">
  <option  value="CSE">CSE</option>
  <option  value="ECE">ECE</option>
  </select>
    <label for="phnno" style="color:cyan;">ID NUMBER</label><br>
    <input type="text" id="idno" name="idno" placeholder="ID no....." required>
    <br>
    
        <label for="password" style="color:cyan;">Password</label><br>
    <input type="password"  required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" id="pwd" title="include one Uppercase,one Lowercase, one special Character and a digit" ; name="pwd" required placeholder="min 8 characters..">
    <br>
	
      <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
