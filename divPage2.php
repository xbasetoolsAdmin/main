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

<div class="table-responsive">
  <table class="table table-hover table-sm border-success">
    <thead>
      <tr>
        <th scope="col"> </th>
    </thead>
    <tbody>
<?php
		include("cr.php");
	    $q = mysqli_query($dbcon, "SELECT * FROM accounts WHERE sold='0' ORDER BY RAND()")or die(mysql_error());
	   	function srl($item)
		{
		$item0 = $item;
		$item1 = rtrim($item0);
		$item2 = ltrim($item1);
		return $item2;
		} 

 while($row = mysqli_fetch_assoc($q)){
	 	 $countryfullname = $row['country'];
	  $code = array_search("$countryfullname", $countrycodes);
	 $countrycode = strtolower($code);

	 $url = $row['url'];
	 	$d = explode("|", $url);
		$urled = srl($d[0]);

	 	  $tld = end(explode(".", parse_url($urled, PHP_URL_HOST))); 
    $qer = mysqli_query($dbcon, "SELECT * FROM resseller WHERE username='".$row['resseller']."'")or die(mysql_error());
		   while($rpw = mysqli_fetch_assoc($qer))
			 $SellerNick = "seller".$rpw["id"]."";
     echo "
 <tr>   
    <td".htmlspecialchars($row['id'])." </td>   
   <td><i class='flag-icon flag-icon-$countrycode'></i></td>
   <td>&nbsp;".htmlspecialchars($row['country'])." </td>
      <td'> .".$tld." </td>
        <td> ".htmlspecialchars($row['sitename'])." </td>
    <td> ".htmlspecialchars($row['infos'])." </td>
    <td> ".htmlspecialchars($SellerNick)."</td>";
	 echo '<td><span id="shop'.$row["id"].'" type="cpanel"><a onclick="javascript:check('.$row["id"].');" class="btn btn-info btn-xs"><font color=white>Check</font></a></span><center></td>';
	 echo " <td> ".htmlspecialchars($row['price'])."</td>
      <td> ".htmlspecialchars($row['date'])."</td>
    ";

    echo '
    <td>
	<span id="acounts'.$row['id'].'" title="buy" type="accounts"><a onclick="javascript:buythistool('.$row['id'].')" class="btn btn-primary btn-xs"><font color=white>Buy</font></a></span><center>
    </td>
            </tr>
     ';
 }

 ?>

 </tbody>
 </table>
