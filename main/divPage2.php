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
          <tbody><?php
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
    <td id='country'><i class='flag-icon flag-icon-$countrycode'></i>&nbsp;".htmlspecialchars($row['country'])." </td>
		    <td id='tld'> .".$tld." </td>
    <td id='hosting'> ".htmlspecialchars($row['infos'])." </td>
    <td id='seller'> ".htmlspecialchars($SellerNick)."</td>
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

<script type="text/javascript">
$('#filterbutton').click(function () {$("#table tbody tr").each(function() {var ck1 = $.trim( $(this).find("#country").text().toLowerCase() );var ck2 = $.trim( $(this).find("#tld").text().toLowerCase() );var ck3 = $.trim( $(this).find("#hosting").text().toLowerCase() );var ck4 = $.trim( $(this).find("#seller").text().toLowerCase() ); var val1 = $.trim( $('select[name="country"]').val().toLowerCase() );var val2 = $.trim( $('input[name="tld"]').val().toLowerCase() );var val3 = $.trim( $('input[name="hosting"]').val().toLowerCase() );var val4 = $.trim( $('select[name="seller"]').val().toLowerCase() ); if((ck1 != val1 && val1 != '' ) || ck2.indexOf(val2)==-1 || ck3.indexOf(val3)==-1 || (ck4 != val4 && val4 != '' )){ $(this).hide();  }else{ $(this).show(); } });$('#filterbutton').prop('disabled', true);});$('.filterselect').change(function () {$('#filterbutton').prop('disabled', false);});$('.filterinput').keyup(function () {$('#filterbutton').prop('disabled', false);});
function buythistool(id){
  

  bootbox.confirm("Are you sure?", 
  

  function(result) {
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