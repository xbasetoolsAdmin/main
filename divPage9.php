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
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane active in" id="filter">
            <table class="table">
                <thead>
                    <tr>
                        <th>Scam Name</th>
                        <th>Description</th>
                        <th>Seller</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
  <td>
                            <input class='filterinput form-control input-sm' name="scam_name" size='3'>
                        </td>
                        <td>
                            <input class='filterinput form-control input-sm' name="scam_info" size='3'>
                        </td>
                        <td>
                            <select class='filterselect form-control input-sm' name="scam_seller">
                                <option value="">ALL</option>
                                <?php
$query = mysqli_query($dbcon, "SELECT DISTINCT(`resseller`) FROM `accounts` WHERE `sold` = '0' or `sold` = '1' ORDER BY resseller ASC");
	while($row = mysqli_fetch_assoc($query)){
		 $qer = mysqli_query($dbcon, "SELECT DISTINCT(`id`) FROM resseller WHERE username='".$row['resseller']."' ORDER BY id ASC")or die(mysql_error());
		   while($rpw = mysqli_fetch_assoc($qer))
			 $SellerNick = "seller".$rpw["id"]."";
	echo '<option value="'.$SellerNick.'">'.$SellerNick.'</option>';
	}
?>
                            </select>
                        </td>
                        <td>
                            <button id='filterbutton' class="btn btn-primary btn-sm" disabled>Filter <span class="glyphicon glyphicon-filter"></span></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <table width="100%" class="table table-striped table-bordered table-condensed sticky-header" id="table">
        <thead>
            <tr>
                <th scope="col">Scampage Name</th>
                <th scope="col">Description</th>
                <th scope="col">Seller</th>
                <th scope="col">Price</th>
                <th scope="col">Added on </th>
                <th scope="col">Buy</th>
            </tr>
        </thead>
        <tbody>

            <?php
$q = mysqli_query($dbcon, "SELECT * FROM scampages WHERE sold='0' or sold='1' ORDER BY RAND()")or die(mysqli_error());
 while($row = mysqli_fetch_assoc($q)){
	    $qer = mysqli_query($dbcon, "SELECT * FROM resseller WHERE username='".$row['resseller']."'")or die(mysql_error());
		   while($rpw = mysqli_fetch_assoc($qer))
			
$SellerNick = "seller".$rpw["id"]."";
     echo " <tr>     
    <td id='scam_name'> ".htmlspecialchars($row['scamname'])." </td> 
	<td id='scam_info'> ".htmlspecialchars($row['infos'])." </td>
    <td id='scam_seller'> ".htmlspecialchars($SellerNick)."</td>
    <td> ".htmlspecialchars($row['price'])."</td>
	    <td> ".$row['date']."</td>";
    echo '
    <td>
	<span id="scam'.$row['id'].'" title="buy" type="scam"><a onclick="javascript:buythistool('.$row['id'].')" class="btn btn-primary btn-xs"><font color=white>Buy</font></a></span><center>
    </td>
            </tr>
     ';
 }

 ?>
	    </tbody>
	    <tfoot>
	    </tfoot>
