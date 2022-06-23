<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
	</head>
	<body>
		<h1>Welcome to Registration Page!</h1>
		<?php
		class User
		{
			public $username;
			public $password;
			public $religion;
			public $nationality;
			public $email;
			public $gender;
			public $address;

			function register($username, $password,$religion,$nationality,$email,$gender, $address)
			{
				$this->username=$username;
				$this->password=$password;
				$this->religion=$religion;
				$this->nationality=$religion;
				$this->email=$email;
				$this->gender=$gender;
				$this->address=$address;
			}
		}
			session_start();
			$isPost=false;
			$username='';
			$password='';
			$religion='';
			$nationality='';
			$email='';
			$gender='';
			$address='';
			$error=0;

			if (isset($_POST["btn_Reg"]))
			{
				$isPost=true;
				if($_POST["uname"]!="")
				{
					$username=$_POST["uname"];
					$_SESSION['uname']=$_POST["uname"];
				}
				if($_POST["pass"]!="")
				{
					$password=$_POST["pass"];
				}
				if($_POST["rel"]!="")
				{
					$religion=$_POST["rel"];
				}
				if($_POST["nt"]!="")
				{
					$nationality=$_POST["nt"];
				}
				if($_POST["email"]!="")
				{
					$email=$_POST["email"];
				}
				if($_POST["gender"]!="")
				{
					$gender=$_POST["gender"];
				}
				if($_POST["address"]!="")
				{
					$address=$_POST["address"];
				}
			}
			
		?>
		<form action="#" method="post">
		<fieldset>
			<legend>Login Information</legend>
				<table>
					<tr>
						<td>Username:
							<td>
								<input type="text" id="uname" name="uname" placeholder="Enter Username">
								<?php
									if($isPost==true && $username=="")
									{
										$error=1;
										echo "<span style='color:red;'>*Required Username</span>";
									}
								?>
								<br>
							</td>
						</td>
					<tr>
						<td>Password:
							<td>
								<input type="password" id="pass" name="pass" placeholder="Enter Password">
								<?php
									if($isPost==true && $password=="")
									{
										$error=1;
										echo "<span style='color:red;'>*Required Password</span>";
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
					</tr>
				</table>
		</fieldset>
		<fieldset>
			<legend>General Information</legend>
				<table>
					<tr>
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
										$error=1;
										echo "<span style='color:red;'>*Required Religion</span>";
									}
								?>
							</td>
						</td>
					</tr>
					<tr>
						<td>Nationality:
							<td>
								<input type="text" id="nt" name="nt" placeholder="Enter Nationality">
								<?php
									if($isPost==true && $nationality=="")
									{
										$error=1;
										echo "<span style='color:red;'>*Required Nationality</span>";
									}
								?>
							</td>
						</td>
					</tr>
					<tr>
						<td>Address:
							<td>
								<textarea name="address" rows="3" cols="30" placeholder="Enter Address"></textarea>
								<?php
									if($isPost==true && $address=="")
									{
										$error=1;
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
								<input type="radio" name="gender" value="Other">Others
								<?php
									if($isPost==true && $gender=="")
									{
										$error=1;
										echo "<span style='color:red;'>*Required Gender</span>";
									}
								?>
							</td>
						</td>
					</tr>
				</table>
		</fieldset>
		<br><input type="submit" name="btn_Reg" value="Register">
		<?php
			if($isPost==true && !empty($username) && !empty($password) && !empty($nationality) && !empty($religion) && !empty($address) && !empty($email) && !empty($gender))
				{
					//$myObj= new User;
					//$myObj->register($username, $password,$religion,$nationality,$email,$gender, $address);
					$myArr=array('User'=>array('Username'=>$username, 
								'Password'=>$password, 
								'Religion'=>$religion, 
								'Nationality'=>$nationality,
								'Email'=>$email, 
								'Gender'=>$gender, 
								'Address'=>$address));
					$myData=fopen("data.json", "a") or die("File not found");
					fwrite($myData, json_encode($myArr));
					fclose($myData);
					header("Location:Display.php");
				}
				else
					{
						//header("Location:Registration.php");
					}
		 ?>
		</form>
	</body>
</html>