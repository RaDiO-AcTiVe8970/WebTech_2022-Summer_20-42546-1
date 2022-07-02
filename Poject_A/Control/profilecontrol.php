<?php
	include("../Model/profilemodel.php");
	$jsondata= file_get_contents("../Model/data.json") or die("File not found");
	$phpdata= json_decode($jsondata,true);			//decode= json to arr or obj, encode=arr or obj to json
	foreach($phpdata['User'] as $b)
		{
			if(($username==$b['Username'])&&($password==$b['Password']))
	        {
	        	echo "<fieldset>";
	        	echo "Username: ".$b['Username']."<br>";
				echo "Password: ".$b["Password"]."<br>";
				echo "Religion: ".$b["Religion"]."<br>";
				echo "Nationality: ".$b["Nationality"]."<br>";
				echo "E-Mail: ".$b["Email"]."<br>";
				echo "Gender: ".$b["Gender"]."<br>";
				echo "Address: ".$b["Address"]."<br>";
				echo "</fieldset>";
	        }
		} 
?>