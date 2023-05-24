

<table width="100%"  class="table table-striped table-bordered table-condensed sticky-header" id="table">

<?php		include("cr.php");
	  

$q = mysqli_query($dbcon, "SELECT * FROM cpanels WHERE sold='0' ORDER BY RAND()")or die(mysql_error());
	 


function      srl   ($item)
{
  
		$item0                        = $item;
		$item1                       = rtrim($item0);
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
    <td id='cpanel_country'><i class='flag-icon flag-icon-$countrycode'></i>&nbsp;".htmlspecialchars($row['country'])." </td>
		    <td id='cpanel_tld'> .".$tld." </td>
    <td id='cpanel_hosting'> ".htmlspecialchars($row['infos'])." </td>
    <td id='cpanel_seller'> ".htmlspecialchars($SellerNick)."</td>
";
	 echo '<td><span id="shop'.$row["id"].'" type="cpanel"><a onclick="javascript:check('.$row["id"].');" class="btn btn-info btn-xs"><font color=white>Check</font></a></span><center></td>';
echo "
    <td> ".htmlspecialchars($row['price'])."</td>
	    <td> ".htmlspecialchars($row['date'])."</td>
    ";

    echo '
    <td>
	<span id="cpanel'.$row['id'].'" title="buy" type="cpanel"><a onclick="javascript:buythistool('.$row['id'].')" class="btn btn-primary btn-xs"><font color=white>Buy</font></a></span><center>
    </td>
            </tr>
     ';
 }

 ?>

</tbody>
</table>
	
