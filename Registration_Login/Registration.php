<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
	</head>
	<body>
		<h1>Welcome to Registration Page!</h1>
		<?php
			$isPost=false;
			$username="";
			$password="";
			$religion="";
			$nationality="";
			$email="";
			$gender="";
			$address="";
			if (isset($_POST["btn_Reg"]))
			{
				$isPost=true;
				if($_POST["uname"]!="")
				{
					$username=$_POST["uname"];
					if($_POST["pass"]!="")
					{
						$password=$_POST["pass"];
						if($_POST["rel"]!="")
						{
							$religion=$_POST["rel"];
							if($_POST["nt"]!="")
							{
								$nationality=$_POST["nt"];
								if($_POST["email"]!="")
								{
									$email=$_POST["email"];
									if($_POST["gender"]!="")
									{
										$gender=$_POST["gender"];
										if($_POST["address"]!="")
										{
											$address=$_POST["address"];
										}
									}
								}
							}
						}
					}
				}
			}
		?>
		<form action="#" method="post">
		<table>
			<tr>
				<td>Username:
					<td>
						<input type="text" id="uname" name="uname" placeholder="Enter Username">
						<?php
							if($isPost==true && $username=="")
							{
								echo "<span style='color:red;'>*Required Username</span>";
							}
						?>
						<br>
					</td>
				</td>
				<td>Nationality:
					<td>
						<input type="text" id="nt" name="nt" placeholder="Enter Nationality">
						<?php
							if($isPost==true && $nationality=="")
							{
								echo "<span style='color:red;'>*Required Nationality</span>";
							}
						?>
					</td>
				</td>
			</tr>
			<tr>
				<td>Password:
					<td>
						<input type="password" id="pass" name="pass" placeholder="Enter Password">
						<?php
							if($isPost==true && $password=="")
							{
								echo "<span style='color:red;'>*Required Password</span>";
							}
						?>
					</td>
				</td>
				<td>Religion:
					<td>
						<select name="rel">
							<option value="">Please Choose Religion!</option>
							<option value="Islam">Islam</option>
							<option value="Hindu">Hindu</option>
							<option value="Christian">Chirstian</option>
							<option value="Buddha">Buddha</option>
						</select>
						<?php
							if($isPost==true && $religion=="")
							{
								echo "<span style='color:red;'>*Required Religion</span>";
							}
						?>
					</td>
				</td>
			</tr>
			<tr>
				<td>E-Mail:
					<td>
						<input type="email" id="email" name="email" placeholder="Enter E-Mail">
					</td>
				</td>
				<td>Address:
					<td>
						<textarea name="address" rows="3" cols="30" placeholder="Enter Address"></textarea>
						<?php
							if($isPost==true && $address=="")
							{
								echo "<span style='color:red;'>*Required Address</span>";
							}
						?>
					</td>
				</td>
			</tr>
			<tr>
				<td>Gender:
					<td>
						<input type="radio" name="gender" value="Male">Male
						<input type="radio" name="gender" value="Female">Female
						<input type="radio" name="gender" value="Other">No-rights
						<?php
							if($isPost==true && $gender=="")
							{
								echo "<span style='color:red;'>*Required Gender</span>";
							}
						?>
					</td>
				</td>
			</tr>
			<?php
				if($isPost==true && $username="" && $password!="" && $religion!="" && $nationality!="" && $email!="" && $gender!="" && $address!="")
					{
						echo "<form action='Display.php' method='post'>";
					}
			?>
		</table>
		<br><input type="submit" name="btn_Reg" value="Register">
		</form>
	</body>