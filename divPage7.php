<?php
include"component/header.php";
?>
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
<label for="infos" style="margin-bottom: 10px; margin-top: 5px">Website Name :</label>
<select name="sitename" id="sitename" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
<option value="">All</option>
</select>
</div>
<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
<label for="infos" style="margin-bottom: 10px; margin-top: 5px">Details:</label>
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
<div class="col-sm-12 table-responsive">
<div id="premium_data_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="premium_data_length"><label>Show <select name="premium_data_length" aria-controls="premium_data" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="500">500</option><option value="10000">All</option></select> entries</label></div><div id="premium_data_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="premium_data"></label></div><div id="premium_data_processing" class="dataTables_processing" style="display: none;">Processing...</div><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1178.33px; padding-right: 17px;"><table class="display responsive table-hover dataTable no-footer" style="width: 1178.33px; color: var(--font-color); background-color: var(--color-card); margin-left: 0px;" role="grid"><thead>
<tr role="row"><th class="all sorting" tabindex="0" aria-controls="premium_data" rowspan="1" colspan="1" style="width: 34.7222px;" aria-label="ID: activate to sort column ascending">ID</th><th data-priority="3" class="sorting" tabindex="0" aria-controls="premium_data" rowspan="1" colspan="1" style="width: 146.806px;" aria-label="Website Name: activate to sort column ascending">Website Name</th><th data-priority="4" class="sorting" tabindex="0" aria-controls="premium_data" rowspan="1" colspan="1" style="width: 89.5312px;" aria-label="Country: activate to sort column ascending">Country</th><th data-priority="7" class="sorting" tabindex="0" aria-controls="premium_data" rowspan="1" colspan="1" style="width: 79.5486px;" aria-label="Details: activate to sort column ascending">Details</th><th data-priority="8" class="sorting" tabindex="0" aria-controls="premium_data" rowspan="1" colspan="1" style="width: 63.6111px;" aria-label="Price: activate to sort column ascending">Price</th><th data-priority="9" class="sorting" tabindex="0" aria-controls="premium_data" rowspan="1" colspan="1" style="width: 68.5938px;" aria-label="Seller: activate to sort column ascending">Seller</th><th data-priority="10" class="sorting" tabindex="0" aria-controls="premium_data" rowspan="1" colspan="1" style="width: 81.5451px;" aria-label="Source: activate to sort column ascending">Source</th><th class="all sorting" tabindex="0" aria-controls="premium_data" rowspan="1" colspan="1" style="width: 66.5972px;" aria-label="Proof: activate to sort column ascending">Proof</th><th data-priority="11" class="sorting" tabindex="0" aria-controls="premium_data" rowspan="1" colspan="1" style="width: 134.931px;" aria-label="Date Created: activate to sort column ascending">Date Created</th><th class="all sorting" tabindex="0" aria-controls="premium_data" rowspan="1" colspan="1" style="width: 52.7257px;" aria-label="Buy: activate to sort column ascending">Buy</th></tr>
</thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table id="premium_data" class="display responsive table-hover dataTable no-footer dtr-inline" style="width: 100%; color: var(--font-color); background-color: var(--color-card);" role="grid" aria-describedby="premium_data_info"><thead>
<tr role="row" style="height: 0px;"><th class="all sorting" aria-controls="premium_data" rowspan="1" colspan="1" style="width: 34.7222px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="ID: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">ID</div></th><th data-priority="3" class="sorting" aria-controls="premium_data" rowspan="1" colspan="1" style="width: 146.806px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Website Name: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Website Name</div></th><th data-priority="4" class="sorting" aria-controls="premium_data" rowspan="1" colspan="1" style="width: 89.5312px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Country: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Country</div></th><th data-priority="7" class="sorting" aria-controls="premium_data" rowspan="1" colspan="1" style="width: 79.5486px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Details: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Details</div></th><th data-priority="8" class="sorting" aria-controls="premium_data" rowspan="1" colspan="1" style="width: 63.6111px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Price: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Price</div></th><th data-priority="9" class="sorting" aria-controls="premium_data" rowspan="1" colspan="1" style="width: 68.5938px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Seller: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Seller</div></th><th data-priority="10" class="sorting" aria-controls="premium_data" rowspan="1" colspan="1" style="width: 81.5451px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Source: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Source</div></th><th class="all sorting" aria-controls="premium_data" rowspan="1" colspan="1" style="width: 66.5972px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Proof: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Proof</div></th><th data-priority="11" class="sorting" aria-controls="premium_data" rowspan="1" colspan="1" style="width: 134.931px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Date Created: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Date Created</div></th><th class="all sorting" aria-controls="premium_data" rowspan="1" colspan="1" style="width: 52.7257px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Buy: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Buy</div></th></tr>
</thead>

<tbody><tr  class="odd">
             <td class="align-text-center" valign="top" colspan="10" class="dataTables_empty">No data available in table</td></tr>
 </tbody>
 </table>
 </div>
 </div>
 <div class="dataTables_info" id="premium_data_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>

 <div class="dataTables_paginate paging_simple_numbers" id="account_item_paginate">


 <a class="paginate_button previous disabled" aria-controls="premium_data" data-dt-idx="0" tabindex="0" id="premium_data_previous">Previous</a><span></span><a class="paginate_button next disabled" aria-controls="premium_data" data-dt-idx="1" tabindex="0" id="premium_data_next">Next</a></div></div>


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
<i class="fas fa-shopping-cart fa-4x animated rotateIn"></i>
</div>

<div class="modal-footer flex-center">
<a onclick="confirmbye()" class="btn btn-outline-info waves-effect" data-dismiss="modal">Yes</a>
<a type="button" class="btn btn-info waves-effect waves-light" data-dismiss="modal">No</a>
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
<a type="button" href="addBalance" onclick="window.open(this.href);return false;" class="btn btn-danger waves-effect waves-light">Add Balance
<i class="fas fa-book ml-1 white-text"></i>
</a>
<a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">No, thanks</a>
</div>
</div>
</div>

</div>
</div>

<script>

            $(document).ready(function(){
                 var webID;

                load_data();

                function load_data(myarray) {
                    $('#premium_data').DataTable({
                        "processing": true,
                        "serverSide": true,
                        "responsive": true,
                        "scrollX": true,
                        "order": [],
                        "lengthMenu": [[10, 25, 50, 100, 500, 10000], [10, 25, 50, 100, 500, "All"]],
                        "columnDefs": [
                            {
                                "targets": [ 0 ],
                                "visible": false
                            }
                        ],

                        "ajax":{
                            url:"divPage31.html",
                            type:"POST",
                            data:{
                             data_filter:myarray,
                             cat:document.getElementById('cat').value,
                             draw : 'draw',
                             row : 'start',
                             rowperpage : 'length',
                             columnIndex : 'order',
                             columnName : 'columns',
                             columnSortOrder : 'order',
                             searchValue : 'search'
                             }
                        },
                          "columns": [
                                { "data": 0 },
                                { "data": 1 },
                                { "data": 2 },
                                { "data": 3 },
                                { "data": 4 },
                                { "data": 5 },
                                { "data": 6 },
                                { "data": 7 },
                                { "data": 8 },
                                { "data": 9 },
                                { "data": 10}
                                ],

                        "pageLength": 500
                    });
                }

               $(document).on('change', '.form-control', function(){

                    $('#premium_data').DataTable().destroy();
                var country = $('#country').val();
                var details = $('#infos').val();
                var seller1 = $('#seller').val();
                var website = $('#sitename').val();
                $idseller = seller1.split("Seller");
                var seller= $idseller[1];
                 var myarray = {};
                 myarray[0] = country;
                 myarray[1] = details;
                 myarray[2] = seller;
                 myarray[3] = website;


              if(country != '' || details != '' || seller != '' || website != '')
                {

                   load_data(myarray);
                }
                else
                {
                    load_data();
                }

                });


            });

            function buythistool(id){
         $('#modalConfirmBuy').modal('show');
         webID= id;
                        }

        function confirmbye(id){
              id= webID;
                $.ajax({
                            method:"GET",
                            url:"buytool.php?id="+id+"&t=accounts",
                            dataType:"text",
                            success:function(data){
                                    if(data.match("buy")){
                                let lastid = data.split("buy,")[1];
                                $("#premium"+id).html(`<button onclick=openitem(${lastid}) class="btn btn-success btn-sm" style="font-size: 11px; cursor:pointer">Order ${'#'+lastid}</button>`).show();

                            }
                            else{
                                if(data.match("deleted")){

                                $("#premium"+id).html('Already sold / Deleted').show();


                                  }else{
                                  $('#modalCoupon').modal('show');
                                }


                            }
                            },
                        });
            }
    function openitem(order){

        $.ajax({
        type:       'GET',
        url:        'showOrder'+order,
        success:    function(data)
        {
        $("#myModalHeader").text('Order #'+order);
        $("#modelbody").append(data);
        $('#myModal').modal();


        }});

        }

        </script>
