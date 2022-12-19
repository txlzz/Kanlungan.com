<?php
	require ('connect.php');

	$showUsersSql = $conn->prepare ("Select * from users where role='user'");
	$showUsersSql->execute();
	$showUsers = $showUsersSql->fetchAll();	
	
?>

 <!-- Admin Homepage --> 

<link rel='stylesheet' href='style.css'/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<div class="wrapper">
        <!--Top menu -->
<br>
        <div class="sidebar">
            <div class="profile"> <br> <br>
				<img src="logo.png" alt="logo" class="logo"> <br> <br> 

            </div>
            <ul>
			<li>
                    <a href="adminboard.php">
                        <span class="item">Admin Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="baranggay.php">
                        <span class="item">Baranggay Information</span>
                    </a>
                </li>
                <li>
                    <a href="evacuation.php">
                        <span class="item">Evacuation Center</span>
                    </a>
                </li>
                <li>
                    <a href="reports.php">
                        <span class="item">Reports</span>
                    </a>
                </li>
            </ul>
		<br> <br> &nbsp; &nbsp; &nbsp; <p class="Logout-text"> <a href="index.php"> &nbsp;<i class="fas fa-sign-out-alt"> Log-out </i> </a><p>
        </div>
        </div>

    </div>
<div class="imgcontainer">
<br>
			<nav class="navtop">
<div> <h1> Households Information System </h1> </div>
<br>

<table class="admin_seg">
				<thead>
					<tr> 
						<th><p> User ID </p></th>
						<th><p> Family Name </p></th>
						<th><p> Street Number </p></th>
						<th><p> Family Members </p></th>
						<th><p> Contact Number </p></th>
						<th><p> Status </p></th>
						<th><p> Update </p></th>
						<th><p> Delete </p></th>
					</tr>
				</thead>
				<?php foreach ($showUsers as $usersList): ?>
				<tbody>
					<tr>
						<td><p><?= $usersList['id']; ?> </p></td>
						<td><p><?= $usersList['username']; ?> </p></td>
						<td><p><?= $usersList['street']; ?> </p></td>
						<td><p><?= $usersList['fambers']; ?> </p></td>
						<td><p><?= $usersList['contactnum']; ?> </p></td>
						<td><p><?= $usersList['status']; ?> </p></td>
						<td><a href="household_update.php?id=<?= $usersList['id'] ?>">Update</a></td>
						<td><a href="household_delete.php?id=<?= $usersList['id'] ?>">Delete</a></td>
					</tr>
				</tbody>
			 <?php endforeach; ?>
			 </table>
			 
