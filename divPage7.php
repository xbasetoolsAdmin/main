
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
<div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
        <div class="col-sm-12 table-responsive">
            <div id="account_data_wrapper" class="dataTables_wrapper no-footer">
                <div class="dataTables_length" id="account_data_length"><label>Show <select name="account_data_length" aria-controls="account_data" class="">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="500">500</option>
                            <option value="10000">All</option>
                        </select> entries</label></div>
                <div id="account_data_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="account_data"></label></div>
                <div id="account_data_processing" class="dataTables_processing" style="display: none;">Processing...</div>
                <div class="dataTables_scroll">
                    <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                        <div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1178.33px; padding-right: 17px;">
                            <table class="display responsive table-hover dataTable no-footer" style="width: 1178.33px; color: var(--font-color); background-color: var(--color-card); margin-left: 0px;" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th class="all sorting" tabindex="0" aria-controls="account_data" rowspan="1" colspan="1" style="width: 34.7222px;" aria-label="ID: activate to sort column ascending">ID</th>
                                        <th data-priority="3" class="sorting" tabindex="0" aria-controls="account_data" rowspan="1" colspan="1" style="width: 146.806px;" aria-label="Website Name: activate to sort column ascending">Website Name</th>
                                        <th data-priority="4" class="sorting" tabindex="0" aria-controls="account_data" rowspan="1" colspan="1" style="width: 89.5312px;" aria-label="Country: activate to sort column ascending">Country</th>
                                        <th data-priority="7" class="sorting" tabindex="0" aria-controls="account_data" rowspan="1" colspan="1" style="width: 79.5486px;" aria-label="Details: activate to sort column ascending">Details</th>
                                        <th data-priority="8" class="sorting" tabindex="0" aria-controls="account_data" rowspan="1" colspan="1" style="width: 63.6111px;" aria-label="Price: activate to sort column ascending">Price</th>
                                        <th data-priority="9" class="sorting" tabindex="0" aria-controls="account_data" rowspan="1" colspan="1" style="width: 68.5938px;" aria-label="Seller: activate to sort column ascending">Seller</th>
                                        <th data-priority="10" class="sorting" tabindex="0" aria-controls="account_data" rowspan="1" colspan="1" style="width: 81.5451px;" aria-label="Source: activate to sort column ascending">Source</th>
                                        <th class="all sorting" tabindex="0" aria-controls="account_data" rowspan="1" colspan="1" style="width: 66.5972px;" aria-label="Proof: activate to sort column ascending">Proof</th>
                                        <th data-priority="11" class="sorting" tabindex="0" aria-controls="account_data" rowspan="1" colspan="1" style="width: 134.931px;" aria-label="Date Created: activate to sort column ascending">Date Created</th>
                                        <th class="all sorting" tabindex="0" aria-controls="account_data" rowspan="1" colspan="1" style="width: 52.7257px;" aria-label="Buy: activate to sort column ascending">Buy</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
                        <table id="account_data" class="display responsive table-hover dataTable no-footer dtr-inline" style="width: 100%; color: var(--font-color); background-color: var(--color-card);" role="grid" aria-describedby="account_data_info">
                            <thead>
                                <tr role="row" style="height: 0px;">
                                    <th class="all sorting" aria-controls="account_data" rowspan="1" colspan="1" style="width: 34.7222px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="ID: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">ID</div>
                                    </th>
                                    <th data-priority="3" class="sorting" aria-controls="account_data" rowspan="1" colspan="1" style="width: 146.806px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Website Name: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">Website Name</div>
                                    </th>
                                    <th data-priority="4" class="sorting" aria-controls="account_data" rowspan="1" colspan="1" style="width: 89.5312px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Country: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">Country</div>
                                    </th>
                                    <th data-priority="7" class="sorting" aria-controls="account_data" rowspan="1" colspan="1" style="width: 79.5486px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Details: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">Details</div>
                                    </th>
                                    <th data-priority="8" class="sorting" aria-controls="account_data" rowspan="1" colspan="1" style="width: 63.6111px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Price: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">Price</div>
                                    </th>
                                    <th data-priority="9" class="sorting" aria-controls="account_data" rowspan="1" colspan="1" style="width: 68.5938px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Seller: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">Seller</div>
                                    </th>
                                    <th data-priority="10" class="sorting" aria-controls="account_data" rowspan="1" colspan="1" style="width: 81.5451px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Source: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">Source</div>
                                    </th>
                                    <th class="all sorting" aria-controls="account_data" rowspan="1" colspan="1" style="width: 66.5972px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Proof: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">Proof</div>
                                    </th>
                                    <th data-priority="11" class="sorting" aria-controls="account_data" rowspan="1" colspan="1" style="width: 134.931px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Date Created: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">Date Created</div>
                                    </th>
                                    <th class="all sorting" aria-controls="account_data" rowspan="1" colspan="1" style="width: 52.7257px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Buy: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">Buy</div>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="odd">
                                    <td valign="top" colspan="10" class="dataTables_empty">No data available in table</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="dataTables_info" id="account_data_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
                <div class="dataTables_paginate paging_simple_numbers" id="account_data_paginate"><a class="paginate_button previous disabled" aria-controls="account_data" data-dt-idx="0" tabindex="0" id="account_data_previous">Previous</a><span></span><a class="paginate_button next disabled" aria-controls="account_data" data-dt-idx="1" tabindex="0" id="account_data_next">Next</a></div>
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
