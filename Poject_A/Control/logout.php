<?php
session_start();
if(session_destroy())
{
    setcookie('uname','',time()-60);
    setcookie('pass','',time()-60);
    header("Location:../View/login.php");
}
?>