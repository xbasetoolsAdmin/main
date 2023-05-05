   <?php
ob_start();
session_start();

date_default_timezone_set('UTC');
include "../includes/config.php";

if(!isset($_SESSION['sname']) and !isset($_SESSION['spass'])){
   header("location: ../");
   exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>   
<table width="100%" id="dataTable" class="table table-striped table-bordered table-condensed sticky-header dataTable no-footer" role="grid" aria-describedby="dataTable_info" style="width: 100%;">        <thead>
  <thead>
  <tr>
  <th>ID</th>
  <th>Type</th>
  <th>Country</th>
  <th>Site Name</th>
  <th>Information</th>
  <th>Open</th>
  <th>Date added</th>
  <th>Price</th>
  <th>Action</th>
  </tr>
        </thead>
		 <tbody id='tbody2'>
 <?php
$uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
$qu = mysqli_query($dbcon, "SELECT * FROM accounts WHERE acctype='account' AND resseller='$uid' ORDER BY id DESC")or die(mysqli_error());

 while($row = mysqli_fetch_assoc($qu)){
	 
    echo "<tr class='accounts-tabel'>
    <td> ".htmlspecialchars($row['id'])." </td>
    <td> ".strtoupper(htmlspecialchars($row['acctype']))." </td>
    <td> ".htmlspecialchars($row['country'])." </td>
    <td> ".htmlspecialchars($row['sitename'])." </td>
    <td> ".htmlspecialchars($row['infos'])." </td>
	<td>  "; ?>
   
   
	<a data-toggle="modal" class="btn btn-primary btn-xs" data-target="#myModald<?php echo  $row['id']; ?>" >
<font color=white>Open #<? echo htmlspecialchars($row['id']); ?> </a></center> 


 </tbody>
 </table>