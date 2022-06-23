<?php
	session_start();
	$x='Username';
	$jsondata= file_get_contents("data.json") or die("File not found");
	$phpdata= json_decode($jsondata,true);			//decode= json to arr or obj, encode=arr or obj to json
	echo "Welcome to Profile!"."<br>";
	foreach($phpdata as $b)
		{
			echo "Username is ".$b['Password']."<br>";
			/*echo "Password is:".$b["Password"]."<br>";
			echo "Religion is:".$b["Religion"]."<br>";
			echo "Nationality is:".$b["Nationality"]."<br>";
			echo "E-Mail is:".$b["Email"]."<br>";
			echo "Gender is:".$b["Gender"]."<br>";
			echo "Address is:".$b["Address"]."<br>";*/
			/*
			if($b==='Username')
			{
				echo $output;
			}*/
		} 
	//print_r($phpdata);
	//echo "Username is:".$phpdata['Username']."<br>";
?>