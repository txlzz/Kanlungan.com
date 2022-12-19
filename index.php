<html>
<head> 
</head>	
<body>

 <!-- PHP --> 
	<form name="login_old_member" action= "validateUser.php" method = "POST" > 

 <!-- CSS na diri --> 
 <link rel='stylesheet' href='style.css'/>
<br> 
<div class="imgcontainer"> 
<br> 
<p class="signup-txt"> Kanlungan Evacuation Support </p>
<br> 
<img src="logo.png" alt="logo" class="logo"> </div>

<div class="container">
 <!-- HTML --> 
 
<div class="text1">
<label for="uname"><b>Username</b></label> 
<input type = "text" id = "username" name = "username" placeholder="Enter Username" required="true"/><br/>
</div> 

<div class="text2">
<label for="psw"><b>Password</b></label>
<input type = "password" id = "password" name = "password" placeholder="Enter Password" required="true"/> <br /><br />
</div> 

<button name="submit" value="LOGIN" id="submit" name="login_old_member">LOGIN </button> <br /><br />
<p class="register-text"> Are you a resident? <a href = "residents_reg.php"> Register here</a>.</p> <br>

			
	</form>
</body>
</html>