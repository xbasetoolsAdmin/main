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
<style>
#table {
  .sortable
}
table th:not(.sorttable_sorted):not(.sorttable_sorted_reverse):not(.sorttable_nosort):after { 
    content: " \25BE" 
}

.label-as-badge {
    border-radius: 0.5em;
}

body {
    padding-top:50px;
}
table.floatThead-table {
    border-top: none;
    border-bottom: none;
    background-color: #fff;
}
@media (min-width: 768px) {
  .dropdown:hover .dropdown-menu {
    display: block;
  }
}

#mydiv {
  height: 400px;
  position: relative;
}
.ajax-loader {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  margin: auto; /* presto! */

}

   
    

</style>
<script type="text/javascript">
             function ajaxinfo() {
                $.ajax({
                    type: 'GET',
                    url: 'ajaxinfo.html',
                    timeout: 10000,

                    success: function(data) {
                        if (data != '01') {
                            var data = JSON.parse(data);
                            for (var prop in data) {
                                $("#" + prop).html(data[prop]).show();
                            }
                        } else {
                            window.location = "logout.html";
                        }
                    }
                });

            }
            setInterval(function() {
                ajaxinfo()
            }, 3000);

            ajaxinfo();

$(document).keydown(function(event){
    if(event.which=="17")
        cntrlIsPressed = true;
});

$(document).keyup(function(){
    cntrlIsPressed = false;
});

var cntrlIsPressed = false;


function pageDiv(n,t,u,x){
  if(cntrlIsPressed){
    window.open(u, '_blank');
    return false;
  }
        var obj = { Title: t, Url: u };
        if ( ("/"+obj.Url) != location.pathname) {
        	if (x != 1) {history.pushState(obj, obj.Title, obj.Url);}
        	else{history.replaceState(obj, obj.Title, obj.Url);}

    	}
      document.title = obj.Title;
    $("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show();
    $.ajax({
    type:       'GET',
    url:        'divPage'+n+'.html',
    success:    function(data)
    {
        $("#mainDiv").html(data).show();
        newTableObject = document.getElementById('table');
        sorttable.makeSortable(newTableObject);
        $(".sticky-header").floatThead({top:60});
        if(x==0){ajaxinfo();}
      }});
    if (typeof stopCheckBTC === 'function') { 
    var a = stopCheckBTC();
     }

}

$(window).on("popstate", function(e) {
        location.replace(document.location);

});


$(window).on('load', function() {
$('.dropdown').hover(function(){ $('.dropdown-toggle', this).trigger('click'); });
   pageDiv(7,'Premium/Dating/Shopping - JeruxShop','premium.html',1);
   var clipboard = new Clipboard('.copyit');
    clipboard.on('success', function(e) {
      setTooltip(e.trigger, 'Copied!');
      hideTooltip(e.trigger);
      e.clearSelection();
   });

});


function setTooltip(btn, message) {
  console.log("hide-1");
  $(btn).tooltip('hide')
    .attr('data-original-title', message)
    .tooltip('show');
     console.log("show");
}

function hideTooltip(btn) {
  setTimeout(function() {$(btn).tooltip('hide'); console.log("hide-2");}, 1000);
}
</script>
		<style>
            .navbar {
                background-color: #001f3f;
            }
        </style>
<body style="padding-top: 70px; padding-bottom: 70px;">

<nav class="navbar navbar-default navbar-fixed-top ">
  <div class="container-fluid">
    <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
    <div class="navbar-brand" onClick="location.href='index.html'" onMouseOver="this.style.cursor='pointer'"><b><span class="glyphicon glyphicon-fire"></span> Jerux SHOP <small><span class="glyphicon glyphicon-refresh"></span></small></b></div></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="topFixedNavbar1">
      <ul class="nav navbar-nav">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hosts <span class="glyphicon glyphicon-chevron-down" id="alhosts"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="rdp.html" onclick="pageDiv(1,'RDP - JeruxShop','rdp.html',0); return false;">RDPs <span class="label label-primary label-as-badge" id="rdp"></span></a></li>
            <li><a href="cPanel.html" onclick="pageDiv(2,'cPanel - JeruxShop','cPanel.html',0); return false;">cPanels <span class="label label-primary label-as-badge" id="cpanel"></span></a></li>
            <li><a href="shell.html" onclick="pageDiv(3,'Shell - JeruxShop','shell.html',0); return false;">Shells <span class="label label-primary label-as-badge" id="shell"></span></a></li>  
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Send <span class="glyphicon glyphicon-chevron-down" id="mail"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="mailer.html" onclick="pageDiv(4,'PHP Mailer - JeruxShop','mailer.html',0); return false;">Mailers <span class="label label-primary label-as-badge" id="mailer"></span></a></li>
            <li><a href="smtp.html" onclick="pageDiv(5,'SMTP - JeruxShop','smtp.html',0); return false;">SMTPs <span class="label label-primary label-as-badge" id="smtp"></span></a></li>  
          </ul>
        </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Leads <span class="glyphicon glyphicon-chevron-down" id="all_leads"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="leads.html" onclick="pageDiv(6,'Leads - JeruxShop','leads.html',0); return false;">Leads <span class="label label-primary label-as-badge" id="leads"></span></a></li>
          </ul>
        </li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Accounts <span class="glyphicon glyphicon-chevron-down" id="accounts"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="premium.html" onclick="pageDiv(7,'Premium/Dating/Shop - JeruxShop','premium.html',0); return false;">Premium/Dating/Shop <span class="label label-primary label-as-badge" id="premium"></span></a></li>
            <li><a href="banks.html" onclick="pageDiv(8,'Banks - JeruxShop','banks.html',0); return false;">Banks <span class="label label-primary label-as-badge" id="banks"></span></a></li>  
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Others <span class="glyphicon glyphicon-chevron-down" id="accounts"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="scampage.html" onclick="pageDiv(9,'Scampages - JeruxShop','scampage.html',0); return false;">Scampage <span class="label label-primary label-as-badge" id="scams"></span></a></li>
            <li><a href="tutorial.html" onclick="pageDiv(10,'Tutorials - JeruxShop','tutorial.html',0); return false;">Tutorial <span class="label label-primary label-as-badge" id="tutorials"></span></a></li>  
          </ul>
        </li>
                      
      </ul>
      <ul class="nav navbar-nav navbar-right">
                        <?php
$uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
$q = mysqli_query($dbcon, "SELECT resseller FROM users WHERE username='$uid'") or die(mysqli_error());
$r         = mysqli_fetch_assoc($q);
$reselerif = $r['resseller'];
if ($reselerif == "1") {
    $uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
    $q = mysqli_query($dbcon, "SELECT soldb FROM resseller WHERE username='$uid'") or die(mysqli_error());
    $r = mysqli_fetch_assoc($q);

    echo '<li><a href="https://jerux.to/seller/index.html"><span class="badge" title="Seller Panel"><span class="glyphicon glyphicon-cloud"></span><span id="seller"></span></span></a></li>';
} else {
} ?>      
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tickets <span id="alltickets">
<?php
$sze112  = mysqli_query($dbcon, "SELECT * FROM ticket WHERE uid='$uid' and seen='1'");
$r844941 = mysqli_num_rows($sze112);
if ($r844941 == "1") {
    echo '<span class="label label-danger">1</span>';
}
?>
</span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="tickets.html" onclick="pageDiv(11,'Tickets - JeruxShop','tickets.html',0); return false;">Tickets <span class="label label-info"><span id="tickets"></span></span>	<?php
$s1 = mysqli_query($dbcon, "SELECT * FROM ticket WHERE uid='$uid' and seen='1'");
$r1 = mysqli_num_rows($s1);
if ($r1 == "1") {
    echo '<span class="label label-success"> 1 New</span>';
}
?></span></a></li>
            <li><a href="reports.html" onclick="pageDiv(12,'Reports - JeruxShop','reports.html',0); return false;">Reports <span class="label label-info"><span id="reports"></span></span> <?php
$s1 = mysqli_query($dbcon, "SELECT * FROM reports WHERE uid='$uid' and seen='1'");
$r1 = mysqli_num_rows($s1);
if ($r1 == "1") {
    echo '<span class="label label-success"> 1 New</span>';
}
?></span> </a></li>

           </ul>
        </li>

        <li><a href="addBalance.html" onclick="pageDiv(13,'Add Balance - JeruxShop','addBalance.html',0); return false;"><span class="badge"><b><span id="balance"></span></b> <span class="glyphicon glyphicon-plus"></span><span> </a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account  <span class="glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="setting.html" onclick="pageDiv(14,'Setting - JeruxShop','setting.html',0); return false;">Setting <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
            <li><a href="orders.html" onclick="pageDiv(15,'Orders - JeruxShop','orders.html',0); return false;">My Orders <span class="glyphicon glyphicon-shopping-cart pull-right"></span></a></li>
            <li><a href="addBalance.html" onclick="pageDiv(13,'Add Balance - JeruxShop','addBalance.html',0); return false;">Add Balance <span class="glyphicon glyphicon-usd pull-right"></span></a></li>
            
            <li class="divider"></li>
            <li><a href="logout.html" >Logout <span class="glyphicon glyphicon-off pull-right"></span></a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>  <style>
.modal-dialog.modal-frame.modal-top.modal-notify.modal-danger .modal-body,.modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger .modal-body{
	    padding-top: 35px;
}
.modal-dialog.modal-frame.modal-top.modal-notify.modal-danger,.modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger {
    max-width: 500px !important;
    margin: 1.75rem auto !important;
    position: relative;
    width: auto !important;
    pointer-events: none;
}
a.closearb {
    position: absolute;
    top: 2.5px;
    right: 2.5px;
    display: block;
    width: 30px;
    height: 30px;
    text-indent: -9999px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAAA3hJREFUaAXlm8+K00Acx7MiCIJH/yw+gA9g25O49SL4AO3Bp1jw5NvktC+wF88qevK4BU97EmzxUBCEolK/n5gp3W6TTJPfpNPNF37MNsl85/vN/DaTmU6PknC4K+pniqeKJ3k8UnkvDxXJzzy+q/yaxxeVHxW/FNHjgRSeKt4rFoplzaAuHHDBGR2eS9G54reirsmienDCTRt7xwsp+KAoEmt9nLaGitZxrBbPFNaGfPloGw2t4JVamSt8xYW6Dg1oCYo3Yv+rCGViV160oMkcd8SYKnYV1Nb1aEOjCe6L5ZOiLfF120EjWhuBu3YIZt1NQmujnk5F4MgOpURzLfAwOBSTmzp3fpDxuI/pabxpqOoz2r2HLAb0GMbZKlNV5/Hg9XJypguryA7lPF5KMdTZQzHjqxNPhWhzIuAruOl1eNqKEx1tSh5rfbxdw7mOxCq4qS68ZTjKS1YVvilu559vWvFHhh4rZrdyZ69Vmpgdj8fJbDZLJpNJ0uv1cnr/gjrUhQMuI+ANjyuwftQ0bbL6Erp0mM/ny8Fg4M3LtdRxgMtKl3jwmIHVxYXChFy94/Rmpa/pTbNUhstKV+4Rr8lLQ9KlUvJKLyG8yvQ2s9SBy1Jb7jV5a0yapfF6apaZLjLLcWtd4sNrmJUMHyM+1xibTjH82Zh01TNlhsrOhdKTe00uAzZQmN6+KW+sDa/JD2PSVQ873m29yf+1Q9VDzfEYlHi1G5LKBBWZbtEsHbFwb1oYDwr1ZiF/2bnCSg1OBE/pfr9/bWx26UxJL3ONPISOLKUvQza0LZUxSKyjpdTGa/vDEr25rddbMM0Q3O6Lx3rqFvU+x6UrRKQY7tyrZecmD9FODy8uLizTmilwNj0kraNcAJhOp5aGVwsAGD5VmJBrWWbJSgWT9zrzWepQF47RaGSiKfeGx6Szi3gzmX/HHbihwBser4B9UJYpFBNX4R6vTn3VQnez0SymnrHQMsRYGTr1dSk34ljRqS/EMd2pLQ8YBp3a1PLfcqCpo8gtHkZFHKkTX6fs3MY0blKnth66rKCnU0VRGu37ONrQaA4eZDFtWAu2fXj9zjFkxTBOo8F7t926gTp/83Kyzzcy2kZD6xiqxTYnHLRFm3vHiRSwNSjkz3hoIzo8lCKWUlg/YtGs7tObunDAZfpDLbfEI15zsEIY3U/x/gHHc/G1zltnAgAAAABJRU5ErkJggg==);
}
</style></div><div id="mainDiv"> <div class="d-flex flex-row-reverse mt-0">
<div class="p-2">
<label id="switch" class="switch">
<input type="checkbox" onchange="toggleTheme()" id="slider">
<span class="slider round">
</span>
</label>
</div>
</div>
<div class="alert alert-info text-left" role="alert" style="margin: 15px;">
<ul>
<li>For Any problem for account after buy just open report and seller will fix it or replace.</li>
<li>There is <b> 0 </b> Accounts Available.</li>
</ul>
</div>
<input type=hidden id="cat" name="cat" value="6" />
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
<table id="account_data" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">
<thead>
<tr>
<th data-priority="1"></th>
<th class="all">ID</th>
<th data-priority="3">Website Name</th>
<th data-priority="4">Country</th>
<th data-priority="7">Details</th>
<th data-priority="8">Price</th>
<th data-priority="9">Seller</th>
<th data-priority="10">Source</th>
<th class="all">Proof</th>
<th data-priority="11">Date Created</th>
<th class="all">Buy</th>
</tr>
</thead>
</table>
</div>
</div>
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


</div>
</body>
</html>

