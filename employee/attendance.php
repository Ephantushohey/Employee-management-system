<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('process/dbh.php');
	$sql = "SELECT * FROM `attendance` where id = '$id'";
	$result = mysqli_query($conn, $sql);
	$attendance = mysqli_fetch_array($result);
	$empName = ($attendance['employee_name']);
	//echo "$id";
?>

<html>
<head>
	<title>ATTENDANCE</title>
	<link rel="stylesheet" type="text/css" href="styleapply.css">
</head>
<body bgcolor="#F0FFFF">
	
	<header>
		<nav>
			<h1>EMS</h1>
			<ul id="navli">
				<li><a class="homeblack" href="eloginwel.php?id=<?php echo $id?>"">HOME</a></li>
				<li><a class="homeblack" href="myprofile.php?id=<?php echo $id?>"">My Profile</a></li>
				<li><a class="homeblack" href="empproject.php?id=<?php echo $id?>"">My Projects</a></li>
				<li><a class="homered" href="applyleave.php?id=<?php echo $id?>"">Apply Leave</a></li>
                <li><a class="homered" href="applyleave.php?id=<?php echo $id?>"">Attendance</a></li>
				<li><a class="homeblack" href="elogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
   <button type="button" id="inline" class="btn btn-danger mb-3" data-model-fixed="true" data-content="inline"><i class="fa fa-fw fa-file-alt"></i> CLock in</button>
   <?php
// PHP program to pop an alert
// message box on the screen
  
// Display the alert box 
echo '<script>alert("you have successfully clocked in")</script>';
  
?>
<button type="button" id="inline" class="btn btn-danger mb-3" data-model-fixed="true" data-content="inline"><i class="fa fa-fw fa-file-alt"></i> CLock out</button>
<?php
// PHP program to pop an alert
// message box on the screen
  
// Display the alert box 
echo '<script>alert("you have successfully clocked out")</script>';
  
?>
	
   </body>
   </html>
	