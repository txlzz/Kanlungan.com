<?php
	require('connect.php');
	$id = $_GET['id'];
	$usersql = $conn->prepare ("Select * from users where id='$id'");
	$usersql->execute();
	$user = $usersql->fetch();
?>
<!-- admin edit user's info --> 
<!DOCTYPE html>
<html>
<head> 
<link rel='stylesheet' href='style.css'/>
</head>

<body>
	<form name="update" action="household_save.php" method="POST">
		<div class="imgcontainer"> <br>
		<p class="signup-txt">Edit User details </p> </div> <br/>
		<div class="container">
		<input type = "hidden" id = "id" name = "id" value="<?= $user['id']; ?>" required/> 
		<input type = "hidden" id = "password" name = "password" value="<?= $user['password']; ?>" required/> 
		<div class="text"> Familyname <input type = "text" id = "username" name = "username" placeholder="Enter Username" value="<?= $user['username']; ?>" required/> </div>
		<div class="text"> Street <br> <input type = "text" id="street" name = "street" placeholder="Enter Street" value="<?= $user['street']; ?>" required/> </div> <br/>
		<div class="text"> No. of family members <br> <input type="number" id="fambers" name="fambers" placeholder="Enter No. of Family" value="<?= $user['fambers']; ?>" required />  </div>
		<div class="text"> Contact Number <br> <input type = "text" id="contactnum" name = "contactnum" placeholder="Enter contact no." value="<?= $user['contactnum']; ?>" required/> </div> 
		<div class="text"> Status <br> <input type = "text" id="status" name = "status" placeholder="Enter Status" value="<?= $user['status']; ?>" required/>  </div> <br> <br>

		<button name="submit" input type="submit" value="Update" id="submit" name="update">UPDATE </button> <br /><br /> 
		</div> 
	</form>	
</body>
</html>
