


<?php ob_start(); session_start(); date_default_timezone_set('UTC'); include "p_header.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {    header("location: login.html");    exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?> 

    <div class="alert alert-info text-left" role="alert" style="margin: 15px;">
        <ul>
            <li>We Have Fresh E-mails Lists for Diffrents Countries ( You Can Use it for Spam ). </li>
            <li>Our E-mails Lists Guarante for you Good results because most of them are from Shops and Big Sites .</li>
            <li>Combo use for cracking (Brute forcing attack) not use for login to email.</li>
            <li>There is <b> 0 </b> Available.</li>
        </ul>
    </div>
    
    
    <input type=hidden id="type" name="type" value="8" />
    <div class="row m-3 pt-1" style="color: var(--font-color);">
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="infos" style="margin-bottom: 10px; margin-top: 5px">Description:</label>
            <input type="search" class="form-control" id="infos" style="color: var(--font-color); background-color: var(--color-card);">
        </div>
        
        
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="Country" style="margin-bottom: 10px; margin-top: 5px">Country :</label>
            <select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All Countries</option>
            </select>
        </div>
        
        
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="seller" style="margin-bottom: 10px; margin-top: 5px">Seller :</label>
            <select name="seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option>
            </select>
        </div>
    </div>
    
    <div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
        <div class="col-sm-12 table-responsive id="mainDiv">
            <table id="lead_item" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">
                <thead>
                    <tr>
                        <th data-priority="1"></th>
                        <th class="all">ID</th>
                        <th data-priority="3">Country</th>
                        <th data-priority="6">Description</th>
                        <th data-priority="7">Email N</th>
                        <th data-priority="8">Seller</th>
                     <!---   <th data-priority="2">Proof</th>--->
                        <th data-priority="9">Price</th>
                        <th data-priority="10">Added on </th>
                        <th class="all">Buy</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
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
</div><div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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

<script type="text/javascript">
$(document).ready(function() {
 $('#table').DataTable({
 "lengthMenu": [
 [10, 25, 100, 500, -1],
  [10, 25, 100, 500, "All"] ],
      'iDisplayLength': 1000,
            "aaSorting": []
                });
            }
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
            bootbox.alert('<center><img src="files/img/balance.png"><h2><b>No enough balance !</b></h2><h4>Please refill your balance <a class="btn btn-primary btn-xs"  href="addBalance.html" onclick="window.open(this.href);return false;" >Add Balance <span class="glyphicon glyphicon-plus"></span></a></h4></center>')
         }
     },
   });
       ;}
  });
}
g:xcheck=0;
g:xcheck=0;
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
$(document).keydown(function(event){
    if(event.which=="17")
    cntrlIsPressed = true;
    });
    $(document).keyup(function(){
    cntrlIsPressed = false;
    });
    var cntrlIsPressed = false;
    $(window).on("popstate", function(e) {
    location.replace(document.location);
    });
    $(window).on('load', function() {
    $('.dropdown').hover(function(){ $('.dropdown-toggle', this).trigger('click'); });
    pageDiv(0'Add Balance - OdinShop','',1);
    var clipboard = new Clipboard('.copyit');
    clipboard.on('success', function(e) {
    setTooltip(e.trigger, 'Copied!');
    hideTooltip(e.trigger);
    e.clearSelection();
    });
    });
    function setTooltip(btn, message) {
    //console.log("hide-1");
    $(btn).tooltip('hide')
    .attr('data-original-title', message)
    .tooltip('show');
    //console.log("show");
    }
    function hideTooltip(btn) {
    setTimeout(function() {$(btn).tooltip('hide'); /*console.log("hide-2");*/}, 1000);
    }
    </script>
</body>
</html>
    
