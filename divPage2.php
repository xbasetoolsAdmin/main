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
<ul class="nav nav-tabs">
  <li class="active"><a href="#filter" data-toggle="tab">Filter</a></li>
</ul>
<div id="myTabContent" class="tab-content" >
  <div class="tab-pane active in" id="filter"><table class="table"><thead><tr><th>Country</th>
<th>Windows Type</th>
<th>Access</th>
<th>Detected Hosting</th>
<th>Seller</th>
<th></th></tr></thead><tbody><tr><td><select class='filterselect form-control input-sm' name="rdp_country"><option value="">ALL</option>
<?php
$query = mysqli_query($dbcon, "SELECT DISTINCT(`country`) FROM `rdps` WHERE `sold` = '0' ORDER BY country ASC");
	while($row = mysqli_fetch_assoc($query)){
	echo '<option value="'.$row['country'].'">'.$row['country'].'</option>';
	}
?>
</select></td><td><select class='filterselect form-control input-sm' name="rdp_windows">
<option value="">ALL</option>
<?php
$query = mysqli_query($dbcon, "SELECT DISTINCT(`windows`) FROM `accounts` WHERE `sold` = '0' ORDER BY windows ASC");
	while($row = mysqli_fetch_assoc($query)){
	
		echo '<option value="'.$row['windows'].'">'.$row['windows'].'</option>';
	}
?>
</td>
<td><select class='filterselect form-control input-sm' name="rdp_access"><option value="">ALL</option><option value="ADMIN">ADMIN</option><option value="USER">USER</option></select></td><td><input class='filterinput form-control input-sm' name="rdp_hosting" size='3'></td><td><select class='filterselect form-control input-sm' name="rdp_seller"><option value="">ALL</option>
<?php
$query = mysqli_query($dbcon, "SELECT DISTINCT(`resseller`) FROM `accounts` WHERE `sold` = '0' ORDER BY resseller ASC");
	while($row = mysqli_fetch_assoc($query)){
		
	
	
	
		$qer = mysqli_query($dbcon, "SELECT DISTINCT(`id`) FROM resseller WHERE username='".$row['resseller']."' ORDER BY id ASC")or die(mysql_error());
		   while($rpw = mysqli_fetch_assoc($qer))
			 $SellerNick = "seller".$rpw["id"]."";
	echo '<option value="'.$SellerNick.'">'.$SellerNick.'</option>';
	}
?>
</select></td><td><button id='filterbutton'class="btn btn-primary btn-sm" disabled>Filter <span class="glyphicon glyphicon-filter"></span></button></td></tr></tbody></table></div>
</div>

<table>
  <tbody>
 <?php
include("cr.php");
$q = mysqli_query($dbcon,"SELECT * FROM rdps WHERE sold='0' ORDER BY RAND()")or die(mysql_error());					
	while($row = mysqli_fetch_assoc($q)){
	 	 $countryfullname = $row['country'];
		 $code = array_search("$countryfullname", $countrycodes);
		 $countrycode = strtolower($code);
	 	 $tld = end(explode(".", parse_url($row['url'], PHP_URL_HOST))); 
		 $qer = mysqli_query($dbcon, "SELECT * FROM resseller WHERE username='".$row['resseller']."'")or die(mysql_error());
		   while($rpw = mysqli_fetch_assoc($qer))
			 $SellerNick = "seller".$rpw["id"]."";
     echo "
 <tr>    
    <td id='rdp_country'><i class='flag-icon flag-icon-$countrycode'></i>&nbsp;".htmlspecialchars($row['country'])." </td>
    <td> ".htmlspecialchars($row['city'])." </td>
    <td id='rdp_windows'> ".htmlspecialchars($row['windows'])." </td>
    <td> ".htmlspecialchars($row['ram'])." </td>
    <td id='rdp_access'> ".htmlspecialchars($row['access'])." </td>
    <td id='rdp_hosting'> ".htmlspecialchars($row['hosting'])."</td>
    <td id='rdp_seller'> ".htmlspecialchars($SellerNick)."</td>
    <td> ".htmlspecialchars($row['price'])."</td>
	    <td> ".htmlspecialchars($row['date'])."</td>
    <td>";
    echo '
	<span id="rdp'.$row['id'].'" title="buy" type="cpanel"><a onclick="javascript:buythistool('.$row['id'].')" class="btn btn-primary btn-xs"><font color=white>Buy</font></a></span><center>
    </td>
            </tr>
     ';
 }

 ?>
 </tbody>
