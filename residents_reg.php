<!DOCTYPE html>
<html>
<head>
<title> Sign Up </title>
</head>
<body>
	<form name="register" action="register.php" method="POST">

	
 <!-- CSS na diri --> 
<link rel='stylesheet' href='style.css'/>
<div class="imgcontainer">

<br>
<p class="signup-txt"> Kanlungan Family Registration </p> <br>
<img src="reg.png" alt="logo" class="logo"> </div>
	<div class="container">
		
<div class="text">
<label for="uname"><b>Family Name</b></label> 
	<input type = "text" id ="username" name = "username" placeholder="Enter fname" required/> <br/>
</div>

<div class="text">
<label for="psw"><b> Passcode </b></label>
	<input type = "password" id="password" name = "password" placeholder="Enter Passcode" required/> <br/>
</div>

<div class="text">
<label for="uname"><b>Contact Number</b></label> 
	<input type = "text" id ="contactnum" name = "contactnum" placeholder="Enter Contact Number" required/> <br/>
</div>

<div class="text">
<label for="uname"><b>No. of Family Members</b></label> 
	<input type = "number" id ="fambers" name = "fambers" placeholder="Enter Number" required/> <br/>
</div>

<div class="text">
<label for="uname"><b> Street </b></label> <br>
	<input type = "text" id ="street" name = "street" placeholder="Enter Street " required/> <br/>
</div>

<div class="text">
<tr><td rowspan="2"> Shelter Status </td>  <br> 
<td><input type="radio" name="status" value="Safe House"/>Safe House</td>  
<tr>  &nbsp; &nbsp;
<td><input type="radio" name="status" value="Needs Evacuation Support"/>Needs Evacuation Support</td></tr>  <br>
</tr> 
</div>
</div> <br>

<button name="submit" value="SIGNUP" id="submit" name="signup_new_member"> REGISTER </button> <br/>
<p class="register-text"> Are you an admin? <a href = "index.php"> Click here to log in</a>.</p>
<br> 

</form>
</body>
</html>