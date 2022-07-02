<!DOCTYPE html>

<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h2 style="text-align: center;">
			Welcome 
			<?php
				session_start();
				$username=$_SESSION['uname'];
				echo $username;
			?> to Instrutor Home page!!
	</h2>
	<fieldset>
		<fieldset>
			<table>
				<tr>
					<td><a href="profile.php">My Profile</a></td>
				</tr>
				<tr>
					<td><a href="jobs.php">View Jobs</a></td>
				</tr>
			</table>
		</fieldset>
		<a href="../Control/logout.php">Logout</a>
	</fieldset>
</body>
</html>