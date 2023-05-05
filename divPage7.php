<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";
include("cr.php");

if(!isset($_SESSION['sname']) and !isset($_SESSION['spass'])){
   header("location: ../");
   exit();
}
	function srl($item)
		{
		$item0 = $item;
		$item1 = rtrim($item0);
		$item2 = ltrim($item1);
		
return $item2;
		} 
$usrid     = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
$orderid     = mysqli_real_escape_string($dbcon, $_GET['id']);
$q = mysqli_query($dbcon, "SELECT * FROM purchases WHERE buyer='$usrid' and id='$orderid'") or die(mysql_error());

while ($row = mysqli_fetch_assoc($q)) {
	///////////////// Cpanel
 if ($row['type'] == "cpanel") {
	 $itemid = $row['s_id'];
$qe = mysqli_query($dbcon, "SELECT * FROM accounts WHERE id='$itemid'") or die(mysql_error());
?>

 
 <thCountry</th>
  <th>Detect Hosting</th> 
   <th>Domain</th>
  <td>.non-https Url</th>
      <th>Url</th>

<table class="table"> 
<td><span class="flag-icon flag-icon-<?php echo htmlspecialchars($countrycode); ?>"> </span> <?php echo htmlspecialchars($country);?> <td>     
<?php echo htmlspecialchars($hosting);?></td>           
  <td> <?php echo $domain;?> </td>	
  <td> <?php echo $maindom;?><td>
  <td><?php echo $maindom; ?></td>
  <td><?php echo $maindom;?></td>
 <td><?php echo $maindom;?></td>
</tr>	
</table>
