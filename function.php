<?php
session_start();
$_SESSION['username']=$username;
$_SESSION['email']=$email;
$_SESSION['age']=$age;
$_SESSION['continent']=$continent;
$_SESSION['password']=$oldpassword;
$_SESSION['newpassword']=$newpassord;
$_SESSION['confirmpassword']=$confirmpassword;
$url="profile.php";
header( string:  "Location: " . $url);
header (string:"Location:profile.php");




?>