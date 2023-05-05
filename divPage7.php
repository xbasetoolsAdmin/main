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


   <div id="example_wrapper" class="dataTables_wrapper">
   <div class="dataTables_length" id="example_length">
   <label>Show <select name="example_length" aria-controls="example" class="">
   <option value="10">10</option>
   <option value="25">25</option>
   <option value="50">50</option>
   <option value="100">100</option>
   </select> entries</label>
   </div>
   <div id="example_filter" class="dataTables_filter">
   <label>Search:<input type="search" class="" placeholder="" aria-controls="example">
   </label>
   </div>
   <table id="example" class="display dataTable" style="width:100%" aria-describedby="example_info">
        <thead>
  <tr>
			<th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 39.140625px;">Name</th>
			<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 54.421875px;">Position</th>
			<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 39.484375px;">Office</th>
			<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Extn.: activate to sort column ascending" style="width: 33.71875px;">Extn.</th>
			<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 52.578125px;">Start date</th>
			<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 41.484375px;">Salary</th>
 </tr>
        </thead>
		            <tbody>
					          <tr class="odd">
							  <td valign="top" colspan="6" class="dataTables_empty">Loading...</td>
						   
                  
 <?php
include("cr.php");
$q = mysqli_query($dbcon, "SELECT * FROM banks WHERE sold='0' ORDER BY RAND()")or die(mysqli_error());
 while($row = mysqli_fetch_assoc($q)){
	 
	 	 $countryfullname = $row['country'];
	  $code = array_search("$countryfullname", $countrycodes);
	 $countrycode = strtolower($code);
	    $qer = mysqli_query($dbcon, "SELECT * FROM resseller WHERE username='".$row['resseller']."'")or die(mysql_error());
		   while($rpw = mysqli_fetch_assoc($qer))
			 $SellerNick = "seller".$rpw["id"]."";
     echo "
 <tr>     
    <td id='bank_country'><i class='flag-icon flag-icon-$countrycode'></i>&nbsp;".htmlspecialchars($row['country'])." </td>
    <td id='bank_sitename'> ".htmlspecialchars($row['bankname'])." </td> 
    <td> ".htmlspecialchars($row['balance'])." </td> 
	<td> ".htmlspecialchars($row['infos'])." </td>
    <td id='bank_seller'> ".htmlspecialchars($SellerNick)."</td>
    <td> ".htmlspecialchars($row['price'])."</td>
	    <td> ".$row['date']."</td>";
    echo '
    <td>
	<span id="bank'.$row['id'].'" title="buy" type="bank"><a onclick="javascript:buythistool('.$row['id'].')" class="btn btn-primary btn-xs"><font color=white>Buy</font></a></span><center>
    </td>
            </tr>
             </tbody>
                  <tfoot>
                      <tr>
			<th rowspan="1" colspan="1">Name</th>
			<th rowspan="1" colspan="1">Position</th>
			<th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Extn.</th>
			<th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th>
			                      
   </tfoot>
    </table>
	 <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
	 <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
	 <a class="paginate_button previous disabled" aria-controls="example" aria-disabled="true" aria-role="link" data-dt-idx="previous" tabindex="-1" id="example_previous">Previous</a><span>
	 </span>
	 <a class="paginate_button next disabled" aria-controls="example" aria-disabled="true" aria-role="link" data-dt-idx="next" tabindex="-1" id="example_next">Next</a>
	 </div>


   </div>';
 }

 ?>
 


           
</body>
<script>
document.addEventListener('DOMContentLoaded',
 function () {
    let table = new DataTable('#example', {
        ajax: function (d, cb) {
            fetch('../ajax/data/objects.php')
                .then(response => response.json())
                .then(data => cb(data));
        },
        columns: [
            { data: 'name' },
            { data: 'position' },
            { data: 'office' },
            { data: 'extn' },
            { data: 'start_date' },
            { data: 'salary' }
        ]
    } );
} );

function buythistool(id){
  bootbox.confirm("Are you sure?", function(result) {
        if(result ==true){
      $.ajax({
     method:"GET",
     url:"buytool.php?id="+id+"&t=banks",
     dataType:"text",
     success:function(data){
         if(data.match(/<button/)){
		 $("#bank"+id).html(data).show();
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