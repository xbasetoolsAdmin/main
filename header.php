<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";
if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
  header("location: login");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Main - Admin Panel</title>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="./assets/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../buyer/assets/flags.css">
    <link rel="stylesheet" type="text/css" href="css/tickets.css">
<script type="text/javascript" src="./assets/jquery.js"></script>
<script type="text/javascript" src="./assets/bootstrap.js"></script>
	
	
	
< rel="stylesheet" type="text/css" href="./assets/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../buyer/assets/flags.css">
    <link rel="stylesheet" type="text/css" href="css/tickets.css">
<script type="text/javascript" src="./assets/jquery.js"></script>
<script type="text/javascript" src="./assets/bootstrap.js"></script>
<script type="text/javascript" src="./assets/bootbox.min.js"></script>
<script type="text/javascript" src="./assets/sorttable.js"></script>
<font face="Arial">
    <link href="./assets/style.css" rel="stylesheet">
		
<style>
<font face="Arial">
    <link href="./assets/style.css" rel="stylesheet">
		
<style>
