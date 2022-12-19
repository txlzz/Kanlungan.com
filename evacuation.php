<?php
	require ('connect.php');

	$showUsersSql = $conn->prepare ("Select * from center ");
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
<div> <h1> Evacuation Center </h1> </div>
<br>

<table class="admin_seg">
				<thead>
					<tr> 
					<th><p> Zone Number</p></th>
						<th><p> Evacuation Center</p></th>
						<th><p> Address </p></th>
						<th><p> Hotline</p></th>
					</tr>
				</thead>
				<?php foreach ($showUsers as $centerList): ?>
				<tbody>
					<tr>
						<td><p><?= $centerList['cid']; ?> </p></td>
						<td><p><?= $centerList['cname']; ?> </p></td>
						<td><p><?= $centerList['caddress']; ?> </p></td>
						<td><p><?= $centerList['chotline']; ?> </p></td>
					</tr>
				</tbody>
			 <?php endforeach; ?>
			 </table>
