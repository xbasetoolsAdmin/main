<?php
   ob_start();
   session_start();
   date_default_timezone_set('UTC');
   include "includes/config.php";
   
   if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
       header("location: ../");
       exit();
      $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
   ?>



    <div class="alert alert-info text-left" role="alert" style="margin: 15px;">
        <ul>
            <li> Click on check button before buy any RDP to know if it's work or not.</li>
            <li>There is <b> 38 </b> RDPs Available.</li>
        </ul>
    </div>
    <div class="row m-3 pt-1" style="color: var(--font-color);">
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="country" style="margin-bottom: 10px; margin-top: 5px">Country :</label>
            <select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                
                <option value="">All Countries</option>
                
            </select>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="hosting" style="margin-bottom: 10px; margin-top: 5px">Hosting :</label>
            <select name="detect_hosting" id="detect_hosting" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option>
                
            </select>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="windows" style="margin-bottom: 10px; margin-top: 5px">windows :</label>
            <select name="windows" id="windows" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option>
                
            </select>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
            <label for="ram" style="margin-bottom: 10px; margin-top: 5px">Ram :</label>
            <input type="search" class="form-control" id="ram" style="color: var(--font-color); background-color: var(--color-card);">
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="type" style="margin-bottom: 10px">Type :</label>
            <select name="source" id="source" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option>
                
            </select>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="access" style="margin-bottom: 10px; margin-top: 5px">Access :</label>
            <select name="access" id="access" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option>
                <option value="ADMIN">ADMIN</option>
            </select>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
            <label for="seller" style="margin-bottom: 10px; margin-top: 5px">Seller :</label>
            <select name="seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option>
                <option value="Seller382">Seller382</option>
                <option value="Seller473">Seller473</option>
                <option value="Seller457">Seller457</option>
                <option value="Seller306">Seller306</option>
                <option value="Seller420">Seller420</option>
            </select>
        </div>
    </div>
    <div class="row m-2 pt-3" style="color: var(--font-color); background-color: var(--color-card);">
        <div class="col-sm-12 table-responsive" id="mainDiv">
            <table id="table" class="display responsive table-hover" style="width:100%" style="color: var(--font-color); background-color: var(--color-card);">
                <thead>
                    <tr>
                        <th data-priority="1"></th>
                        <th class="all">ID</th>
                        <th data-priority="3">Country</th>
                        <th data-priority="15">City</th>
                        <th data-priority="14">Windows</th>
                        <th data-priority="6">Ram</th>
                        <th data-priority="17">Access</th>
                        <th data-priority="8">Hosting</th>
                        <th data-priority="9">CPU</th>
                        <th data-priority="10">Warranty</th>
                        <th data-priority="11">Seller</th>
                        <th data-priority="12">Source</th>
                        <th data-priority="13">Price</th>
                        <th class="all" style="width:9% !important;">Ip BlackList</th>
                        <th class="all">Check</th>
                        <th data-priority="16">Added on</th>
                        <th class="all">Buy</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div id="mainDiv"></div>
<script type="text/javascript">

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
        pageDiv(0,'Add Balance - OdinShop','',1);
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
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-notify modal-success" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="heading" id="myModalHeader"></p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
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
</body>
</html>
