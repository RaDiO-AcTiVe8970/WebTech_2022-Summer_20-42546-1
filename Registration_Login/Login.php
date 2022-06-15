<!DOCTYPE html>
<html>
	<head>
		<title>Login page</title>
	</head>
	<body>
		<?php
			$isPost=false;
			$username="";
			$password="";
			if(isset($_POST['btn_log']))
			{
				$isPost=true;
				if($_POST['uname']!="")
				{
					$username=$_POST['uname'];
					if($_POST['pass']!="")
					{
						$password=$_POST['pass'];
					}
				}
			}
		?>
		<h1> Welcome to Login page!</h1>
		<form action="#" method="post">
			<table>
				<tr>
					<td>Username:
						<td><input type="text" id="uname" name="uname">
							<?php
								if($isPost==true && $username=="")
								{
									echo "<span style='color:red;'>*Required username</span>";
								}
							 ?>
						</td>
					</td>
				</tr>
				<tr>
					<td>
						Password:
						<td>
							<input type="password" id="pass" name="pass">
							<?php
								if($isPost==true && $password=="")
								{
									echo "<span style='color:red;'>*Required password</span>";
								}
							 ?>
						</td>
					</td> 
				</tr>
			</table>
			<input type="submit" name="btn_log" value="Login">
		</form>
	</body>
</html>