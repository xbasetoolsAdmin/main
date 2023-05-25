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
<div class="col-sm-12 table-responsive" id="mainDiv">
<table id="table" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);" ">
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
<th data-priority="9">Source</th>
<th class="all">Technologies</th>
<th data-priority="10">Seller</th>
<th class="all">Check</th>
<th class="all">Price</th>
<th data-priority="13">Added on </th>
<th class="all">Send Test</th>
<th data-priority="4">DA</th>
<th data-priority="5">PA</th>
<th class="all">Buy</th>
               </tr>
               </thead>
               <tbody>          
   <th data-priority="1"></th>
            <tr>
            
</thody>
</table>
