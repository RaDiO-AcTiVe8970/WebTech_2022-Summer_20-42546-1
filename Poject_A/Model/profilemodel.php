<?php  
	session_start();
	setcookie("uname", $_SESSION['uname'], time()+3600);
    setcookie("pass", $_SESSION['pass'], time()+3600);
	$username=$_COOKIE['uname'];
	$password=$_COOKIE['pass'];
?>