
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
    background-image: url("f.jpg");
    background-size: 180%;
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

<h1 style="color:cyan;">Faculty Registration</h1>

<div>
  <form action="signupfactulty.php" method="post">
    <label for="fname" style="color:yellow;">First Name</label><br>
    <input type="text" id="first" name="first" placeholder="Your name.." required>
     <br>
    <label for="lname" style="color:black;">Last Name</label><br>
    <input type="text" id="last" name="last" placeholder="Your last name..">
    <br>
<select name="branch" style="width:100;height:30;">
  <option  value="CSE">CSE</option>
  <option  value="ECE">ECE</option>
  </select><br>
    <label for="phnno" style="color:cyan;">Mobile Number</label><br>
    <input type="text" id="uid" name="uid" placeholder="mobile no." required>
    <br>
    
        <label for="password" style="color:cyan;">Password</label><br>
    <input type="password"  required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" id="pwd" title="include one Uppercase,one Lowercase, one special Character and a digit" ; name="pwd" required placeholder="min 8 characters..">
    <br>
	
      <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
