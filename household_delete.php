<?php
  require('connect.php');
  $id = $_GET['id'];

	$deleteUsersSql = $conn->prepare ("Delete from users where id='$id'");
	$deleteUsersSql->execute();

		echo"
				<script>
			    	alert ('Success');
			    </script> ";
		
		header ("Location: adminboard.php");
			
?>