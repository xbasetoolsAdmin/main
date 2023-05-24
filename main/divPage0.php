








<ul class="nav nav-tabs">
  <li class="active"><a href="#filter" data-toggle="tab">Filter</a></li>
</ul>
<div id="myTabContent" class="tab-content" >
  <div class="tab-pane active in" id="filter"><table class="table"><thead><tr><th>Country</th>
<th>Domain TLD</th>
<th>Detected Hosting</th>
<th>Seller</th>
<th></th></tr></thead><tbody><tr><td><select class='filterselect form-control input-sm' name="cpanel_country"><option value="">ALL</option>
<?php
$query = mysqli_query($dbcon, "SELECT DISTINCT(`country`) FROM `cpanels` WHERE `sold` = '0' ORDER BY country ASC");
	while($row = mysqli_fetch_assoc($query)){
	echo '<option value="'.$row['country'].'">'.$row['country'].'</option>';
	}
?>
</select></td><td><input class='filterinput form-control input-sm' name="cpanel_tld" size='3'></td><td><input class='filterinput form-control input-sm' name="cpanel_hosting" size='3'></td><td><select class='filterselect form-control input-sm' name="cpanel_seller"><option value="">ALL</option>
<?php
$query = mysqli_query($dbcon, "SELECT DISTINCT(`resseller`) FROM `cpanels` WHERE `sold` = '0' ORDER BY resseller ASC");
	while($row = mysqli_fetch_assoc($query)){
		 $qer = mysqli_query($dbcon, "SELECT DISTINCT(`id`) FROM resseller WHERE username='".$row['resseller']."' ORDER BY id ASC")or die(mysql_error());
		   while($rpw = mysqli_fetch_assoc($qer))
			 $SellerNick = "seller".$rpw["id"]."";
	echo '<option value="'.$SellerNick.'">'.$SellerNick.'</option>';
	}
?>
</select></td><td><button id='filterbutton'class="btn btn-primary btn-sm" disabled>Filter <span class="glyphicon glyphicon-filter"></span></button></td></tr></tbody></table></div>
</div>
