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
  
<div class="row m-2 pt-3" style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
<div class="col-sm-12 Id="mainDiv" table-responsive">
 <table id="table" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">
<thead>
    <tr>
      <th scope="col" >Country</th> 
      <th scope="col">TLD</th>
       <th scope="col">Hosting</th>  
       <th scope="col">Seller</th>
      <th scope="col">Check</th>
      <th scope="col">Price</th>
     <th scope="col">Added on </th>
       <th scope="col">Buy</th>
        	</tr>
          </thead>
          <tbody>
                

          </table>
<script type="text/javascript">
		$(document).ready(function() {
			$('#table').DataTable( {
				"lengthMenu":
         [
                   [10, 25, 100, 500, -1], 
                   [10, 25, 100, 500, "All"]
         
        ],
				'iDisplayLength': 1000,
				"aaSorting": []
			} 
    );
		}
 );
		
    $('#filterbutton').click(function () {$("#table tbody tr").each(function() {var ck1 = $.trim( $(this).find("#cpanel_country").text().toLowerCase() );var ck2 = $.trim( $(this).find("#cpanel_tld").text().toLowerCase() );var ck3 = $.trim( $(this).find("#cpanel_hosting").text().toLowerCase() );var ck4 = $.trim( $(this).find("#cpanel_seller").text().toLowerCase() ); var val1 = $.trim( $('select[name="cpanel_country"]').val().toLowerCase() );var val2 = $.trim( $('input[name="cpanel_tld"]').val().toLowerCase() );var val3 = $.trim( $('input[name="cpanel_hosting"]').val().toLowerCase() );var val4 = $.trim( $('select[name="cpanel_seller"]').val().toLowerCase() ); if((ck1 != val1 && val1 != '' ) || ck2.indexOf(val2)==-1 || ck3.indexOf(val3)==-1 || (ck4 != val4 && val4 != '' )){ $(this).hide();  }else{ $(this).show(); } });$('#filterbutton').prop('disabled', true);});$('.filterselect').change(function () {$('#filterbutton').prop('disabled', false);});$('.filterinput').keyup(function () {$('#filterbutton').prop('disabled', false);});


function buythistool(id){
  bootbox.confirm("Are you sure?", function(result) {
        if(result ==true){
      $.ajax({
     method:"GET",
     url:"buytool.php?id="+id+"&t=cpanels",
     dataType:"text",
     success:function(data){
         if(data.match(/<button/)){
		 $("#cpanel"+id).html(data).show();
         }else{
            bootbox.alert('<center><img src="files/img/balance.png"><h2><b>No enough balance !</b></h2><h4>Please refill your balance <a class="btn btn-primary btn-xs"  href="addBalance" onclick="window.open(this.href);return false;" >Add Balance <span class="glyphicon glyphicon-plus"></span></a></h4></center>')
         }
     },
   });
       ;}
  });
}
g:xcheck=0;
function check(id){   
     if(xcheck > 1){
    bootbox.alert("<b>Wait</b> - Other checking operation is executed!");
  } else {
    xcheck++;
    var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('Checking...').show();
	$.ajax({
	type: 		'GET',
	url: 		'CheckCpanel'+id+'.html',
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
		xcheck--;
	}});
} }

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


      </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-notify modal-success" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="heading" id="myModalHeader"></p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">×</span>
                    </button>
                </div>
                <div class="modal-body" id="modelbody">
                </div>
                <div class="modal-footer justify-content-center">
                    <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalConfirmBuy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm modal-notify modal-info" role="document">
 
            <div class="modal-content text-center">
 
                <div class="modal-header d-flex justify-content-center">
                    <p class="heading">Are you sure?</p>
                </div>
 
                <div class="modal-body">
                    <i class='fas fa-shopping-cart fa-4x animated rotateIn'></i>
                </div>
 
                <div class="modal-footer flex-center">
                    <a onClick='confirmbye()' class="btn btn-outline-info waves-effect" data-dismiss="modal">Yes</a>
                    <a type="button" class="btn btn-info" data-dismiss="modal">No</a>
                </div>
            </div>
 
        </div>
    </div>

    <div class="modal fade top" id="modalCoupon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">
 
            <div class="modal-content">
 
                <div class="modal-body">
                    <div class="row d-flex justify-content-center align-items-center">
                        <img src="layout/images/balance.png">
                        <span class="pt-3 mx-4" style="font-size: 14 px"><b>No enough balance !</b> Please refill your balance</span>
                        <a type="button" href="addBalance" onclick="window.open(this.href);return false;" class="btn btn-danger">Add Balance
                            <i class="fas fa-book ml-1 white-text"></i>
                        </a>
                        <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">No, thanks</a>
                    </div>
                </div>
            </div>
 
        </div>
    </div>

