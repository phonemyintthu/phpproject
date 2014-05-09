<?php 
session_start(); 

if(!$_SESSION['username']){ 
    header("Location: index.html"); 
    exit; 
} 
echo 'Welcome, '.$_SESSION['username']; 
header("Location:http://kyawphyo.we.bs/php website/html/index.html");
?>