<?php
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




<div class="row m-2 pt-3" style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
<div class="col-sm-12 table-responsive">
<table id="cpanel_data" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);" ">
<thead>
<tr>
<th data-priority="1"></th>
<th class="all">ID</th>
<th data-priority="3">Country</th>
<th data-priority="8">Type</th>
<th data-priority="15">TLD</th>
<th data-priority="14">Domain</th>
<th data-priority="11">Hosting</th>
<th data-priority="12">CMS</th>
<th class="all" style="width:9% !important;">Ip Blacklist</th>
<th class="all">Seo Info</th>
             </tr> 
            </thead>
               <tbody>
               <tr>
