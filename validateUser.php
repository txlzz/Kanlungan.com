<?php
	require ("connect.php");
	
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$usersql = $conn->prepare ("Select * from users where username = '$username' AND password = '$password'");

	$usersql->execute();
	$user = $usersql->fetch();
	if ($user) {
		if ($user['role'] == 'admin') {
			echo "
			<script>
				alert ('WELCOME ADMIN');
			</script> ";
			header('Location: adminboard.php');
		}
		else if ($user['role'] == 'user') {
			"<script>
				alert ('WELCOME USER');
			</script> ";
			header('Location: adminboard.php?id='.$user['userid']);		
		} else {
			"<script>
				alert ('No Records Found');
				window.location.href = 'index.php';
			</script> ";
		}
	}
	else {
		echo"
			<script>
				alert ('INVALID USER');
			</script>";
		}
	echo "
		<script>
			window.location.href = 'index.php';
		</script>
		";
?>