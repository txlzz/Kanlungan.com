<?php
    require ("connect.php");

    $sqlstr = 'UPDATE users SET username = :username, password = :password, street = :street, status = :status, contactnum = :contactnum, fambers = :fambers  WHERE id = :id';
    $updateUser = $conn->prepare($sqlstr);
    $updateUser->bindparam(':id', $_POST['id']);
    $updateUser->bindparam(':username', $_POST['username']);
    $updateUser->bindparam(':password', $_POST['password']);
    $updateUser->bindparam(':street', $_POST['street']);
    $updateUser->bindparam(':status', $_POST['status']);
    $updateUser->bindparam(':contactnum', $_POST['contactnum']);
    $updateUser->bindparam(':fambers', $_POST['fambers']);
    $updateUser->execute();

	echo "
    	<script>
    		alert ('Sucessfullly Updated');
    	</script>
		";
        header ("Location: adminboard.php");

 ?>