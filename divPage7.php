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
     echo " <tr>
			</div>	"; 	 echo '
			
			
			'; echo "          ";      echo '           
			
			';  }   ?&gt;
			<table id="cpanel_data" class="display dataTable" style="width:100%" aria-describedby="cpanel_data_info">
				<thead>
					<tr>
						<th class="sorting sorting_asc" tabindex="0" aria-controls="cpanel_data" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 51.6875px;">Name</th>
						<th class="sorting" tabindex="0" aria-controls="cpanel_data" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 68.015625px;">Position</th>
						<th class="sorting" tabindex="0" aria-controls="cpanel_data" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 47.9375px;">Office</th>
						<th class="sorting" tabindex="0" aria-controls="cpanel_data" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 26.1875px;">Age</th>
						<th class="sorting" tabindex="0" aria-controls="cpanel_data" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 32.4375px;">Start date</th>
						<th class="sorting" tabindex="0" aria-controls="cpanel_data" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 54.0625px;">Salary</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td id="cpanel_country">
							<i class="flag-icon flag-icon-$countrycode"></i>&nbsp;".htmlspecialchars($row['country'])."
						</td>
						<td id="cpanel_tld">
							.".$tld."
						</td>
						<td id="cpanel_hosting">
							".htmlspecialchars($row['infos'])."
						</td>
						<td id="cpanel_seller">
							".htmlspecialchars($SellerNick)."</td>
						<td>
							<span id="shop'.$row[" id"].'"="" type="cpanel">
								<a onclick="javascript:check('.$row[" id"].');"="" class="btn btn-info btn-xs">
									<font color="white">Check</font>
								</a>
							</span>
							<center></center>
						</td>
						<td>
							".htmlspecialchars($row['price'])."</td>
						<td>
							".htmlspecialchars($row['date'])."</td>
						<td>
							<span id="cpanel'.$row['id'].'" title="buy" type="cpanel">
								<a onclick="javascript:buythistool('.$row['id'].')" class="btn btn-primary btn-xs">
									<font color="white">Buy</font>
								</a>
							</span>
							<center>
							</center>
						</td>
					</tr>
				</tbody>
			</table>