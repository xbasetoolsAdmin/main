<?php require_once('p_header.php'); 
ob_start();
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";
if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: ../");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>
<?php
require_once('main.php');
?>


<table id="table" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);" ">

	       <?php
require_once('p_footer.php');

?>
