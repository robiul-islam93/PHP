<?php
session_start();

if(!isset($_SESSION['email'])){
  header("Location: login.php");
}

include("sidebar.php");

if($_SESSION["role"] == "admin"){
  header("Location: role_management.php");
}


if($_SESSION["role"] == "user"){
  header("Location: user_Dashboard.php");
}


?>