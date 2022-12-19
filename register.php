<?php
	require ("connect.php");
	
	$sqlstr = "INSERT INTO users (username, password, fambers,street,contactnum,role,status) VALUES (:username, :password, :fambers, :street, :contactnum, 'user', :status)";
	$saveUser = $conn->prepare($sqlstr);
	$saveUser->bindparam(':username', $_POST['username']);
	$saveUser->bindparam(':password', $_POST['password']);
	$saveUser->bindparam(':fambers', $_POST['fambers']);
	$saveUser->bindparam(':street', $_POST['street']);
	$saveUser->bindparam(':contactnum', $_POST['contactnum']);
	$saveUser->bindparam(':status', $_POST['status']);
	$saveUser->execute();

	echo "
	<script>
		alert ('New User Added');
		window.location.href = 'index.php';
	</script>
	";
?>