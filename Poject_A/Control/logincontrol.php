<?php
session_start();
include("../Model/loginmodel.php");
if(isset($_POST["btn_log"]))
{
    $isPost=true;
    if($_POST["uname"]!="")
    {
        $username=$_POST["uname"];
    }
    if($_POST["pass"]!="")
    {
        $password=$_POST["pass"];
    }
}
if(!empty($_POST["uname"]) && !empty($_POST["pass"]))
{
    $jsondata=file_get_contents("../Model/data.json") or die("File not found");
    $phpdata=json_decode($jsondata,true);
    foreach($phpdata['User'] as $obj ) 
    {
        if(($username==$obj['Username']) && ($password==$obj['Password']))
        {
            $_SESSION["uname"]=$_POST["uname"];
            $_SESSION["pass"]=$_POST["pass"];
            header("Location:../View/home.php");
        }
        else
        {
            $error=1;
        }
    }
}
