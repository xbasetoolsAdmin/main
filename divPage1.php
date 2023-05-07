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

echo '

    <script>

function sendt(id){
    var sub = $("#subject").val();
    var msg = $("#msg").val();
    var pr = $("#proi"+id).val();
     $.ajax({
     method:"GET",
     url:"CreateTicket.html?s="+btoa(sub)+"&m="+btoa(msg),
     dataType:"text",
     success:function(data){
     $("#resulta").html(data).show();
     },
   });
}

    </script>
               <ul class="nav nav-tabs">
    <li class="active"><a href="#mytickets" data-toggle="tab" aria-expanded="true">My Tickets</a></li>
    <li class=""><a href="#open" data-toggle="tab" aria-expanded="false"> <span class="glyphicon glyphicon-pencil"></span> New Ticket</a></li>
</ul>    		

<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade in" id="open"> 
    <div class="form-group col-lg-5 ">
          <h3>Support Tickets</h3>
									 <b> Title</b><br>
<input type="text" placeholder="Seller request.." class="form-control" id="subject" required></input><br><b>Message</b>
<br>
<textarea id="msg'.$row['id'].'" class="form-control" name="memo" style="width: 100%; height: 100px;" placeholder="Message Here" required></textarea>
<br>
<center><button type="submit" value="Open ticket"  class="btn btn-primary" onclick="javascript:sendt('.$row['id'].');">Submit <span class="glyphicon glyphicon-chevron-right"></span></button </center>
<br><br> </center><div id="resulta"> </div>

 </div><br><br>
 <div class="col-lg-7">
      <div class="bs-component">
        <div class="well well">
          <ul>
            <li>In order to refund ticket go to <b>Account</b> -&gt; <b>My Orders</b> and choose the tool and click on <b>Report</b> button</li>
            <li>Do not create double-tickets , create just one ticket and include all your problems then wait for your ticket to be replied</li>
          </ul>
        </div>
      </div>
    </div>
 </div>

';

 $uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
  $qq = @mysqli_query($dbcon, "SELECT * FROM ticket WHERE uid='$uid' ORDER by id desc") or die("error here");
echo '	 		<br>
 
    <div class="tab-pane fade active in" id="mytickets"> 

<table width="100%" class="table table-striped table-bordered table-condensed" id="table">
      <thead>
        <tr>
              <th scope="col"></th>
          <th scope="col">ID</th>
          <th scope="col">Date Created</th>     
          <th scope="col">Title</th>      
          <th scope="col">Status</th>
          <th scope="col">Last Reply</th>
          <th scope="col">Last Updated</th>
        </tr>
      </thead>
 <tbody id="tbody2">';
 while($row = mysqli_fetch_assoc($qq)){
     $st = $row['status'];
    switch ($st){
      case "0" :
       $st = "closed";
       break;
      case "1" :
       $st = "open";
       break;
      case "2":
       $st = "open";
       break;
    }
    $idticket = $row['id'];
	if (empty($row['lastup'])) {
		$lastup = "n/a"; 
		} else { 
		$lastup = $row['lastup']; 	
		}
?>
<tr onmouseover="this.style.cursor='pointer'" onclick="pageDiv('ticket<?php echo $idticket; ?>','Ticket #<?php echo $idticket; ?> - JERUX SHOP','showTicket<?php echo $idticket; ?>.html',0);" style="cursor: pointer;">   
<?php
if ($row['seen'] == "1") {
	echo "
     <td>  </td>
 <td> <b>".htmlspecialchars($row['id'])." </b></td>
    <td><b> ".htmlspecialchars($row['date'])." </b></td>
    <td><b> ".htmlspecialchars($row['subject'])." </b></td>
    <td> <b>".$st." </b></td>
	    <td><b> ".htmlspecialchars($row['lastreply'])." </b></td>
	    <td><b> ".htmlspecialchars($lastup)." </b></td>
            </tr>
"; } else {
echo "
     <td>  </td>
 <td> ".htmlspecialchars($row['id'])." </td>
    <td> ".htmlspecialchars($row['date'])." </td>
    <td> ".htmlspecialchars($row['subject'])." </td>
    <td> ".$st."</td>
	    <td> ".htmlspecialchars($row['lastreply'])." </td>
	    <td> ".htmlspecialchars($lastup)." </td>
            </tr>
     ";
 } }

 echo '

 </tbody>
 </table>'; 
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
$query = mysqli_query($dbcon, "SELECT DISTINCT(`windows`) FROM `rdps` WHERE `sold` = '0' ORDER BY windows ASC");
	while($row = mysqli_fetch_assoc($query)){
	echo '<option value="'.$row['windows'].'">'.$row['windows'].'</option>';
	}
?>
</td>
<td><select class='filterselect form-control input-sm' name="rdp_access"><option value="">ALL</option><option value="ADMIN">ADMIN</option><option value="USER">USER</option></select></td><td><input class='filterinput form-control input-sm' name="rdp_hosting" size='3'></td><td><select class='filterselect form-control input-sm' name="rdp_seller"><option value="">ALL</option>
<?php
$query = mysqli_query($dbcon, "SELECT DISTINCT(`resseller`) FROM `rdps` WHERE `sold` = '0' ORDER BY resseller ASC");
	while($row = mysqli_fetch_assoc($query)){
		 $qer = mysqli_query($dbcon, "SELECT DISTINCT(`id`) FROM resseller WHERE username='".$row['resseller']."' ORDER BY id ASC")or die(mysql_error());
		   while($rpw = mysqli_fetch_assoc($qer))
			 $SellerNick = "seller".$rpw["id"]."";
	echo '<option value="'.$SellerNick.'">'.$SellerNick.'</option>';
	}
?>
</select></td><td><button id='filterbutton'class="btn btn-primary btn-sm" disabled>Filter <span class="glyphicon glyphicon-filter"></span></button></td></tr></tbody></table></div>
</div>


<table width="100%"  class="table table-striped table-bordered table-condensed sticky-header" id="table">
<thead>
    <tr>
      <th scope="col" >Country</th>
      <th scope="col" >State</th>
      <th scope="col" >Windows</th>
      <th scope="col" >Ram</th>
      <th scope="col">Access</th>
      <th scope="col">Detect Hosting</th>
      <th scope="col">Seller</th>
      <th scope="col">Price</th>
      <th scope="col">Added on </th>

      <th scope="col">Buy</th>
    </tr>
</thead>
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
</table>
<script type="text/javascript">
$('#filterbutton').click(function () {$("#table tbody tr").each(function() {var ck1 = $.trim( $(this).find("#rdp_country").text().toLowerCase() );var ck2 = $.trim( $(this).find("#rdp_windows").text().toLowerCase() );var ck3 = $.trim( $(this).find("#rdp_access").text().toLowerCase() );var ck4 = $.trim( $(this).find("#rdp_hosting").text().toLowerCase() );var ck5 = $.trim( $(this).find("#rdp_seller").text().toLowerCase() ); var val1 = $.trim( $('select[name="rdp_country"]').val().toLowerCase() );var val2 = $.trim( $('select[name="rdp_windows"]').val().toLowerCase() );var val3 = $.trim( $('select[name="rdp_access"]').val().toLowerCase() );var val4 = $.trim( $('input[name="rdp_hosting"]').val().toLowerCase() );var val5 = $.trim( $('select[name="rdp_seller"]').val().toLowerCase() ); if((ck1 != val1 && val1 != '' ) || (ck2 != val2 && val2 != '' ) || (ck3 != val3 && val3 != '' ) || ck4.indexOf(val4)==-1 || (ck5 != val5 && val5 != '' )){ $(this).hide();  }else{ $(this).show(); } });$('#filterbutton').prop('disabled', true);});$('.filterselect').change(function () {$('#filterbutton').prop('disabled', false);});$('.filterinput').keyup(function () {$('#filterbutton').prop('disabled', false);});
function buythistool(id){
  bootbox.confirm("Are you sure?", function(result) {
        if(result ==true){
      $.ajax({
     method:"GET",
     url:"buytool.php?id="+id+"&t=rdps",
     dataType:"text",
     success:function(data){
         if(data.match(/<button/)){
		 $("#rdp"+id).html(data).show();
         }else{
            bootbox.alert('<center><img src="files/img/balance.png"><h2><b>No enough balance !</b></h2><h4>Please refill your balance <a class="btn btn-primary btn-xs"  href="addBalance.html" onclick="window.open(this.href);return false;" >Add Balance <span class="glyphicon glyphicon-plus"></span></a></h4></center>')
         }
     },
   });
       ;}
  });
}
function openitem(order){
  $("#myModalLabel").text('Order #'+order);
  $('#myModal').modal('show');
  $.ajax({
    type:       'GET',
    url:        'showOrder'+order+'.html',
    success:    function(data)
    {
        $("#modelbody").html(data).show();
    }});

}

</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body" id="modelbody">


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
