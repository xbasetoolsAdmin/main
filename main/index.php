<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "../includes/config.php";
include "p_header.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: ../");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>
<!doctype html>


<script type="text/javascript" src="category/data01.js"></script>
</script>
</script>
<style>
    .navbar {
        background-color: #001f3f;
    }
</style>
 
    <div id="mainDiv">              
pageDiv(0, 'Main - FeluxShop', 'main', 1);
 </div>
