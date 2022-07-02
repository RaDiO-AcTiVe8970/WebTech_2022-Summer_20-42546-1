<!DOCTYPE html>
<?php
	session_start();
?>
<html>
<head>
	<title>Jobs</title>
</head>
<body>
	<h2 style="text-align: center;">
			Available Jobs for  
			<?php
				$username=$_SESSION['uname'];
				echo $username;
			?>
	</h2>
	<?php
		include("../Control/jobcontrol.php");
	?>
	<a href="home.php">Go back to home page</a>
</body>
</html>