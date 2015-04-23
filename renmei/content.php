<?php
session_start();
if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
 header("Location: user-login.php");
} 
echo $_SESSION['username'];
/*  header("Location: test3.php"); */

?>