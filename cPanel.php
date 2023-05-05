
   <html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIMK</title>
   <!-- jQuery library -->
<script src="files/js/jquery.js"></script>

<!-- DataTables CSS and JS library -->
<link rel="stylesheet" type="text/css" href="css/addon/datatables.select.css"/>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
</head>
<body>
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
</select>
</div>
<table id="account_data" class="display" style="width:100%">
    <thead>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Country</th>
            <th>Created</th>
            <th>Status</th>
        </tr>
    </thead>
   
    <tfoot>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Country</th>
            <th>Created</th>
            <th>Status</th>
        </tr>
    </tfoot>
</table>
<script>

