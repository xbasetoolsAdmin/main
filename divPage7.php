
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

    
    
        					
    
          <div class="alert alert-info text-left" role="alert" style="margin: 15px;">
        <ul>
            <li>For Any problem for account after buy just open report and seller will fix it or replace.</li>
            <li>There is <b> 0 </b> Accounts Available.</li>
        </ul>
    </div>
    <input type="hidden" id="cat" name="cat" value="6">
    <div class="row m-3 pt-1" style="color: var(--font-color);">
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="table_infos" style="margin-bottom: 10px; margin-top: 5px">infos :</label>
            <select name="table
			  -infos" id="table_infos" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
             
		    <option value="">All</option>
           
		</select>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="table_name" style="margin-bottom: 10px; margin-top: 5px">TABLE NAME :</label>
		
            <input type="array_search" class="form-control" id="table_name" style="color: var(--font-color); background-color: var(--color-card);">
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="table_country" style="margin-bottom: 10px; margin-top: 5px">COUNTRY :</label>
            <select name="table_country" id="table_country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
              
		    <option value="">All Countries</option>
            
		</select>
      
	    </div>
       
	    
	    <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
		<label for="table_seller" style="margin-bottom: 10px; margin-top: 5px">Seller :
		    </label>
            <select name="table_seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option>
		    </select>
	    </div>
      </div>
    <div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
         <div class="col-sm-12 table-responsive">
	        <div id="table" class="dataTables_wrapper no-footer">
                      <div class="dataTables_length" id="table_length">
			   <label>
				   Show
			                  <select name="table_length" aria-controls="table" class=" ">
			                     <option value=" ">  </option>
                                      </select> 
			         entries
			</label>
		    </div>
                <div id="table_filter" class="dataTables_filter">
			<label>Search:<input type="array_search" class="" placeholder="" aria-controls="table_name">
			</label>
		    </div>
                <div id="table_processing" class="dataTables_processing" style="display: none;">Processing...</div>
                <div class="dataTables_scroll">
                    <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">    
                        <div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1227.22px; padding-right: 17px;">
                            <table class="display responsive table-hover dataTable no-footer" style="width: 1227.22px; color: var(--font-color); background-color: var(--color-card); margin-left: 0px;" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th class="all sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 37.7604px;" aria-label="ID: activate to sort column ascending">ID</th>
                                        <th data-priority="3" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 155.035px;" aria-label="table_infos: activate to sort column ascending">Website Name</th>
                                        <th data-priority="4" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 95.5729px;" aria-label="table_country: activate to sort column ascending">Country</th>
                                        <th data-priority="7" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 83.6285px;" aria-label="table_name: activate to sort column ascending">Details</th>
                                        <th data-priority="8" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 67.6562px;" aria-label="table_price: activate to sort column ascending">Price</th>
                                        <th data-priority="9" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 72.6562px;" aria-label="table_seller: activate to sort column ascending">Seller</th>
                                        <th data-priority="10" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 86.6146px;" aria-label="table_source: activate to sort column ascending">Source</th>
                                        <th class="all sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 70.6597px;" aria-label="table_proof: activate to sort column ascending">Proof</th>
                                        <th data-priority="11" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 142.135px;" aria-label="Date Created: activate to sort column ascending">Date Created</th>
                                        <th class="all sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 55.7812px;" aria-label="Buy: activate to sort column ascending">Buy</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
                        <table id="table" class="display responsive table-hover dataTable no-footer dtr-inline" style="width: 100%; color: var(--font-color); background-color: var(--color-card);" role="grid" aria-describedby="account_data_info">
                            <thead>
                                <tr role="row" style="height: 0px;">
                                    <th class="all sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 37.7604px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="ID: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">
						ID
					</div>
                                    </th>
                                    <th data-priority="3" class="sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 155.035px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="table_name: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">
						Website Name
					</div>
                                    </th>
                                    <th data-priority="4" class="sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 95.5729px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="table_country: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">
						Country
					</div>
                                    </th>
                                    <th data-priority="7" class="sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 83.6285px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="table_info: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">
						Details
					</div>
                                    </th>
                                    <th data-priority="8" class="sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 67.6562px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="table_price: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">Price</div>
                                    </th>
                                    <th data-priority="9" class="sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 72.6562px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="table_seller: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">
						Seller
					</div>
                                    </th>
                                    <th data-priority="10" class="sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 86.6146px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="table_source: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">
						Source
					</div>
                                    </th>
                                    <th class="all sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 70.6597px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="table_proof: activate to sort column ascending">
                                            <div class="dataTables_sizing" style="height:0;overflow:hidden;">
					         Proof
				         </div>
                                    </th>
                                    <th data-priority="11" class="sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 142.135px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="date_created: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">
						Date Created
					    </div>
                                    </th>
                                    <th class="all sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 55.7812px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Buy: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">
						Buy
				     </div>
                                    </th>
                                </tr>
                            </thead>

                            <tbody> <?php
    include("cr.php");
    $q = mysqli_query($dbcon, "SELECT * FROM banks WHERE sold='0' ORDER BY RAND()")or die(mysqli_error());
     while($row = mysqli_fetch_assoc($q)){
    	 
    	 	 $countryfullname = $row['country'];
    	  $code = array_search("$countryfullname", $countrycodes);
    	 $countrycode = strtolower($code);
    	    $qer = mysqli_query($dbcon, "SELECT * FROM resseller WHERE username='".$row['resseller']."'")or die(mysql_error());
            
    		   while($rpw = mysqli_fetch_assoc($qer));
         
                 echo "
 $SellerNick = "seller".$rpw["id"]."";

<tr class='odd'>  
<td id='bank_country'><i class='flag-icon flag-icon-$countrycode'></i>&nbsp;".htmlspecialchars($row['country'])." </td>
<td id='bank_sitename'> ".htmlspecialchars($row['bankname'])." </td> 
<td> ".htmlspecialchars($row['balance'])." </td> 
<td> ".htmlspecialchars($row['infos'])." </td>
<td id='bank_seller'> ".htmlspecialchars($SellerNick)."</td>
<td> ".htmlspecialchars($row['price'])."</td>
<td> ".$row['date']."</td>
        <td>
	<span id='bank'".$row['id'].'" title="buy" type="bank"><a onclick="javascript:buythistool('.$row['id'].')" class="btn btn-primary btn-xs"><font color=white>Buy</font></a></span><center>
    </td></td>";
	     
   
	     echo "
                                    <td valign="top" colspan="10" class="dataTables_empty">No data available in table</td>
                                </tr>
            
     ';
 }

 ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="dataTables_info" id="table_info" role="status" aria-live="polite">
			Showing 0 to 0 of 0 entries
		</div>
                <div class="dataTables_paginate paging_simple_numbers" id="table_paginate">
		<a class="paginate_button previous disabled" aria-controls="table" data-dt-idx="0" tabindex="0" id="table_previous">
                                          Previous
			             </a>
			       <span>
			</span>
		<a class="paginate_button next disabled" aria-controls="table" data-dt-idx="1" tabindex="0" id="table_next">
				Next
			</a>
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

     
<script type="text/javascript">
$('#filterbutton').click(
	function () {$("#table tbody tr").each(
		
		function() {
			var ck1 = $.trim( $(this).find("#bank_country").text().toLowerCase() );
			    var ck2 = $.trim( $(this).find("#bank_sitename").text().toLowerCase() );var ck3 = $.trim( $(this).find("#bank_seller").text().toLowerCase() ); var val1 = $.trim( $('select[name="bank_country"]').val().toLowerCase() );var val2 = $.trim( $('input[name="bank_sitename"]').val().toLowerCase() );var val3 = $.trim( $('select[name="bank_seller"]').val().toLowerCase() ); if((ck1 != val1 && val1 != '' ) || ck2.indexOf(val2)==-1 || (ck3 != val3 && val3 != '' )){ $(this).hide();  }else{ $(this).show(); } });
    

$('#filterbutton').prop('disabled', true);});


$('.select').change(function () {$('#filterbutton').prop('disabled', false);});$('.filterinput').keyup(function () {$('#filterbutton').prop('disabled', false);});
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

</div>
</body>
</html>


  
  
  
  
  
