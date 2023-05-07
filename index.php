<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: login.html");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    	   	<link rel='shortcut icon' type='image/x-icon' href='../img/favicon.ico' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Jerux Seller</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../buyer/assets/flags.css">
  <link rel="stylesheet" type="text/css" href="css/tickets.css">
	<script type="text/javascript" src="./assets/css/jquery-3.6.4.min.js"></script>
	<script type="text/javascript" src="./assets/css/bootstrap.js"></script>
	<script type="text/javascript" src="./assets/css/bootbox.min.js"></script>
	<script type="text/javascript" src="./assets/css/sorttable.js"></script>
    <link href="./assets/style.css" rel="stylesheet">

    <style>
.sort {
  .sortable
}
.sort th:not(.sorttable_sorted):not(.sorttable_sorted_reverse):not(.sorttable_nosort):after { 
    content: " \25BE" 
}
</style>
<style>
.content {
	display:none;
}

</style>
<script type="text/javascript">
    function ajaxinfo(){
      $.ajax({
      type:       'GET',
      url:        'ajaxinfo.html',
      timeout: 10000 ,

           success: function(data){
              if (data != '01'){
                var data = JSON.parse(data);
                  for (var prop in data) {
                  $("#"+prop).html(data[prop] ).show();
                }
              }
              else {
                window.location = "logout.html";
              }
           }
         });

  }
    setInterval(function(){ajaxinfo()}, 3000);

 ajaxinfo();
	</script>
</head>


<body>

    <div id="wrapper">
    <div id="sidebar-wrapper">
                     <ul class="sidebar-nav">

                <li class="sidebar-brand"><a href="./index"><div class="navbar-brand" onclick="location.href=&#39;index.html&#39;"><font color="white"><b><span class="glyphicon glyphicon-fire"></span> Seller Panel</b></font></div></a></li>
                <li><a href="https://jerux.to/buyer/index.html" onclick="window.open(this.href);return false;"><font color="white">Back to Jerux SHOP <span class="glyphicon glyphicon-share-alt"></span></font></a></li>

                <li><font color="white"><b>Seller Dashboard</b></font></li>
                    <li><a href="./index.html" style="cursor: pointer;">Main</a></li>
		                      <li><a href="./sales.html" style="cursor: pointer;">Sales <div id="sales" class="label label-info"></div></a></li>
                    <li><a href="./withdraw.html" style="cursor: pointer;">Withdraw</a></li>
                    <li><a href="./reports.html" style="cursor: pointer;">My Reports </a></li>			

                <li><font color="white"><b>Tools Management</b></font></li>
                    <li><a href="./rdp.html" style="cursor: pointer;">RDP <span id="rdp" class="label label-info"></span></a></li>
                    <li><a href="./shell.html" style="cursor: pointer;">Shell <span id="shell" class="label label-info"></span></a></li>
                    <li><a href="./cpanel.html" style="cursor: pointer;">cPanel <span id="cpanel" class="label label-info"></span></a></li>
				<li><a href="./mailer.html">PHP Mailer <span id="mailer" class="label label-info"></span></a></li>
	<li><a href="./smtp.html">SMTP <span id="smtp" class="label label-info"></span></a></li>
                    <li><a href="./leads.html">Leads <span id="leads" class="label label-info"></span></a></li>
                    <li><a href="./scampage.html">Scampage <span id="scams" class="label label-info"></span></a></li>
                    <li><a href="./tutorial.html">Tutorial/Method <span id="tutorials" class="label label-info"></span></a></li>
           <li><a href="./banks.html">Bank Accounts <span id="banks" class="label label-info"></span></a></li>
	      <li><a href="./premium.html">Premium/Shop/Dating <span id="premium" class="label label-info"></span></a></li>		
            </ul>




        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <b><span id="menu-toggle" onmouseover="this.style.cursor='pointer'"><span class="glyphicon glyphicon-indent-right"></span></span></b>
        <div id="page-content-wrapper">
            <div class="container-fluid">
            <div id="divPage">
 <script>
    var v_aa =0;
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        if (v_aa == 1) {
          $("#menu-toggle").html('<span class="glyphicon glyphicon-indent-right"></span>').show();
          v_aa =0;
        }
        else {
          $("#menu-toggle").html('<span class="glyphicon glyphicon-indent-left"></span>').show();
          v_aa =1;     
        }
        
    });

    </script>
<div class="row">
<script>
	$(function() {
		$(".preload").fadeOut(900, function() {
			$(".content").fadeIn(0);
		});
	});
	function TabDiv(n,u){
    $("#all").html('').show();
    $("#add").html('').show();
    $("#massadd").html('').show();
    $("#unsold").html('').show();

    $("#"+n).html('<div id="mydiv"><img  src="../img/loadTab.gif" class="ajax-loader"></div>').show();
    $.ajax({
    type:       'GET',
    url:        u,
    success:    function(data)
    {
    $("#"+n).html(data).show();
    newTableObject = document.getElementById('table');sorttable.makeSortable(newTableObject);
    }
});  
}
</script>  
     <div class="preload">
<div id="mydiv"><img src="img/wait.gif" class="ajax-loader"></div>  

  </div>
     <div class="content">



 <div>
  <!-- Nav tabs -->




      <div class="well well-sm">
Hello <span class="label label-primary"> XBASELEET</span><br>
If you have any <b> Question</b> , <b>Suggestion</b> or <b>Request Please</b> feel free to <a class="label label-default" href="../buyer/tickets.html"><span class="glyphicon glyphicon-pencil"></span> Open Ticket</a>
<br>

<h4>Your information <small>XBASELEET</small> </h4>
&nbsp;	&nbsp;	&bull;	Your selling nickname in this shop is <b>seller4</b> <br>
&nbsp;	&nbsp;	&bull;	You get paid any time you like using Withdraw section<br>
&nbsp;	&nbsp;	&bull;	You get <b>65%</b> of your sales<br>
&nbsp;	&nbsp;	&bull;	You can change your bitcoin address from withdrawal section<br>
&nbsp;	&nbsp;	&bull;	Your bitcoin address is <b>N/A</b><br><br>
</font>
</td>

</tr>
</table>
				 </div>
				 </div>

<h4>Top Sellers <small>From Sunday (05/07) to Monday (05/13)</small></h4>
	<table class="table table-striped table-bordered table-condensed">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Seller</th>
      <th scope="col">Sales</th>
    </tr>
</thead>
<tbody>

              <tr>
  <td>1.</td>
  <td>seller1</td>
  <td> 0$</td>
</tr>
	
              <tr>
  <td>2.</td>
  <td>seller2</td>
  <td> 0$</td>
</tr>
	
              <tr>
  <td>3.</td>
  <td>seller3</td>
  <td> 0$</td>
</tr>
	
		<tr>
  <td><b>4.</b></td>
  <td><b><span class="glyphicon glyphicon-user"></span> seller4</b></td>
  <td><b>0$</b></td>
</tr>
		
              <tr>
  <td>5.</td>
  <td>seller5</td>
  <td> 0$</td>
</tr>
	
	</tr>    
</tbody>
	</table>
	    <div class="list-group" id="div2">
      	<h3><i class="glyphicon glyphicon-info-sign"></i> News</h3>
		
                <a class="list-group-item"><h5 class="list-group-item-heading"><b>Bugs Fixed!</b></h5><h6 class="list-group-item-text">2020-03-23 22:29:26</h6></a><a class="list-group-item"><h5 class="list-group-item-heading"><b>New Accounts Addeded</b></h5><h6 class="list-group-item-text">2020-03-23 22:29:14</h6></a><a class="list-group-item"><h5 class="list-group-item-heading"><b>Bugs Updated</b></h5><h6 class="list-group-item-text">2020-03-23 22:28:56</h6></a>
				 </div>




</body></html>

        </article>
						
						</ul>            
		
 
  <?php
$uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
$q = mysqli_query($dbcon, "SELECT resseller FROM users WHERE username='$uid'") or die(mysqli_error());
$r         = mysqli_fetch_assoc($q);
$reselerif = $r['resseller'];
if ($reselerif == "1") {
    $uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
    $q = mysqli_query($dbcon, "SELECT soldb FROM resseller WHERE username='$uid'") or die(mysqli_error());
    $r = mysqli_fetch_assoc($q);

    echo '<li><a href="seller/index.html"><span class="badge" title="Seller Panel"><span class="glyphicon glyphicon-cloud"></span><span id="seller"></span></span></a></li>';
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
            <li><a href="tickets.html" onclick="pageDiv(11,'Tickets - FeluxShop','tickets.html',0); return false;">Tickets <span class="label label-info"><span id="tickets"></span></span><?php
$s1 = mysqli_query($dbcon, "SELECT * FROM ticket WHERE uid='$uid' and seen='1'");
$r1 = mysqli_num_rows($s1);
if ($r1 == "1") {
    echo '<span class="label label-success"> 1 New</span>';
}
?></span></a></li>
            <li><a href="reports.html" onclick="pageDiv(12,'Reports - FeluxShop','reports.html',0); return false;">Reports <span class="label label-info"><span id="reports"></span></span> <?php
$s1 = mysqli_query($dbcon, "SELECT * FROM reports WHERE uid='$uid' and seen='1'");
$r1 = mysqli_num_rows($s1);
if ($r1 == "1") {
    echo '<span class="label label-success"> 1 New</span>';
}
?></span> </a></li>

           </ul>
        </li>

        <li><a href="addBalance.html" onclick="pageDiv(13,'Add Balance - FeluxShop','addBalance.html',0); return false;"><span class="badge"><b><span id="balance"></span></b> <span class="glyphicon glyphicon-plus"></span><span> </a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account  <span class="glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="setting.html" onclick="pageDiv(14,'Setting - FeluxShop','setting.html',0); return false;">Setting <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
            <li><a href="orders.html" onclick="pageDiv(15,'Orders - FeluxShop','orders.html',0); return false;">My Orders <span class="glyphicon glyphicon-shopping-cart pull-right"></span></a></li>
            <li><a href="addBalance.html" onclick="pageDiv(13,'Add Balance - FeluxShop','addBalance.html',0); return false;">Add Balance <span class="glyphicon glyphicon-usd pull-right"></span></a></li>
            
            <li class="divider"></li>
            <li><a href="logout.html" >Logout <span class="glyphicon glyphicon-off pull-right"></span></a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
<div id="mainDiv">


</div>
<script type="text/javascript">
      function o(){$.ajax({type:"POST",url:"ajaxinfo.html",timeout:1e4,success:function(o){if("01"!=o){o=JSON.parse(o);for(var t in o)$("#"+t).html(o[t]).show()}else window.location="logout.html"}})}setInterval((function(){o()}),3e3),o(),$(document).keydown((function(o){"17"==o.which&&(t=!0)})),$(document).keyup((function(){t=!1}));var t=!1;$(window).on("popstate",(function(o){location.replace(document.location)})),$(window).on("load",(function(){$(".dropdown").hover((function(){$(".dropdown-toggle",this).trigger("click")})),function(e,i,n,l){if(t)return window.open(n,"_blank"),!1;var a={Title:i,Url:n};"/"+a.Url!=location.pathname&&(1!=l?history.pushState(a,a.Title,a.Url):history.replaceState(a,a.Title,a.Url)),document.title=a.Title,$("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show(),$.ajax({type:"GET",url:"divPage"+e+".html",success:function(t){$("#mainDiv").html(t).show(),newTableObject=document.getElementById("table"),sorttable.makeSortable(newTableObject),$(".sticky-header").floatThead({top:60}),0==l&&o()}}),"function"==typeof stopCheckBTC&&stopCheckBTC()}(0,"Add Balance - JeruxShop","home",1),new Clipboard(".copyit").on("success",(function(o){var t,e;t=o.trigger,e="Copied!",console.log("hide-1"),$(t).tooltip("hide").attr("data-original-title",e).tooltip("show"),console.log("show"),function(o){setTimeout((function(){$(o).tooltip("hide"),console.log("hide-2")}),1e3)}(o.trigger),o.clearSelection()}))}));
</script>
	<script type="text/javascript">
      function o(){$.ajax({type:"POST",url:"ajaxinfo.html",timeout:1e4,success:function(o){if("01"!=o){o=JSON.parse(o);for(var t in o)$("#"+t).html(o[t]).show()}else window.location="logout.html"}})}setInterval((function(){o()}),3e3),o(),$(document).keydown((function(o){"17"==o.which&&(t=!0)})),$(document).keyup((function(){t=!1}));var t=!1;$(window).on("popstate",(function(o){location.replace(document.location)})),$(window).on("load",(function(){$(".dropdown").hover((function(){$(".dropdown-toggle",this).trigger("click")})),function(e,i,n,l){if(t)return window.open(n,"_blank"),!1;var a={Title:i,Url:n};"/"+a.Url!=location.pathname&&(1!=l?history.pushState(a,a.Title,a.Url):history.replaceState(a,a.Title,a.Url)),document.title=a.Title,$("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show(),$.ajax({type:"GET",url:"divPage"+e+".html",success:function(t){$("#mainDiv").html(t).show(),newTableObject=document.getElementById("table"),sorttable.makeSortable(newTableObject),$(".sticky-header").floatThead({top:60}),0==l&&o()}}),"function"==typeof stopCheckBTC&&stopCheckBTC()}(1,"Add Balance - JeruxShop","rdp",1),new Clipboard(".copyit").on("success",(function(o){var t,e;t=o.trigger,e="Copied!",console.log("hide-1"),$(t).tooltip("hide").attr("data-original-title",e).tooltip("show"),console.log("show"),function(o){setTimeout((function(){$(o).tooltip("hide"),console.log("hide-2")}),1e3)}(o.trigger),o.clearSelection()}))}));
</script>
<script type="text/javascript">
      function o(){$.ajax({type:"POST",url:"ajaxinfo.html",timeout:1e4,success:function(o){if("01"!=o){o=JSON.parse(o);for(var t in o)$("#"+t).html(o[t]).show()}else window.location="logout.html"}})}setInterval((function(){o()}),3e3),o(),$(document).keydown((function(o){"17"==o.which&&(t=!0)})),$(document).keyup((function(){t=!1}));var t=!1;$(window).on("popstate",(function(o){location.replace(document.location)})),$(window).on("load",(function(){$(".dropdown").hover((function(){$(".dropdown-toggle",this).trigger("click")})),function(e,i,n,l){if(t)return window.open(n,"_blank"),!1;var a={Title:i,Url:n};"/"+a.Url!=location.pathname&&(1!=l?history.pushState(a,a.Title,a.Url):history.replaceState(a,a.Title,a.Url)),document.title=a.Title,$("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show(),$.ajax({type:"GET",url:"divPage"+e+".html",success:function(t){$("#mainDiv").html(t).show(),newTableObject=document.getElementById("table"),sorttable.makeSortable(newTableObject),$(".sticky-header").floatThead({top:60}),0==l&&o()}}),"function"==typeof stopCheckBTC&&stopCheckBTC()}(3,"Add Balance - JeruxShop","cpanels",1),new Clipboard(".copyit").on("success",(function(o){var t,e;t=o.trigger,e="Copied!",console.log("hide-1"),$(t).tooltip("hide").attr("data-original-title",e).tooltip("show"),console.log("show"),function(o){setTimeout((function(){$(o).tooltip("hide"),console.log("hide-2")}),1e3)}(o.trigger),o.clearSelection()}))}));
</script>
	<script type="text/javascript">
      function o(){$.ajax({type:"POST",url:"ajaxinfo.html",timeout:1e4,success:function(o){if("01"!=o){o=JSON.parse(o);for(var t in o)$("#"+t).html(o[t]).show()}else window.location="logout.html"}})}setInterval((function(){o()}),3e3),o(),$(document).keydown((function(o){"17"==o.which&&(t=!0)})),$(document).keyup((function(){t=!1}));var t=!1;$(window).on("popstate",(function(o){location.replace(document.location)})),$(window).on("load",(function(){$(".dropdown").hover((function(){$(".dropdown-toggle",this).trigger("click")})),function(e,i,n,l){if(t)return window.open(n,"_blank"),!1;var a={Title:i,Url:n};"/"+a.Url!=location.pathname&&(1!=l?history.pushState(a,a.Title,a.Url):history.replaceState(a,a.Title,a.Url)),document.title=a.Title,$("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show(),$.ajax({type:"GET",url:"divPage"+e+".html",success:function(t){$("#mainDiv").html(t).show(),newTableObject=document.getElementById("table"),sorttable.makeSortable(newTableObject),$(".sticky-header").floatThead({top:60}),0==l&&o()}}),"function"==typeof stopCheckBTC&&stopCheckBTC()}(4,"Add Balance - JeruxShop","shells",1),new Clipboard(".copyit").on("success",(function(o){var t,e;t=o.trigger,e="Copied!",console.log("hide-1"),$(t).tooltip("hide").attr("data-original-title",e).tooltip("show"),console.log("show"),function(o){setTimeout((function(){$(o).tooltip("hide"),console.log("hide-2")}),1e3)}(o.trigger),o.clearSelection()}))}));
</script>
<script type="text/javascript">
      function o(){$.ajax({type:"POST",url:"ajaxinfo.html",timeout:1e4,success:function(o){if("01"!=o){o=JSON.parse(o);for(var t in o)$("#"+t).html(o[t]).show()}else window.location="logout.html"}})}setInterval((function(){o()}),3e3),o(),$(document).keydown((function(o){"17"==o.which&&(t=!0)})),$(document).keyup((function(){t=!1}));var t=!1;$(window).on("popstate",(function(o){location.replace(document.location)})),$(window).on("load",(function(){$(".dropdown").hover((function(){$(".dropdown-toggle",this).trigger("click")})),function(e,i,n,l){if(t)return window.open(n,"_blank"),!1;var a={Title:i,Url:n};"/"+a.Url!=location.pathname&&(1!=l?history.pushState(a,a.Title,a.Url):history.replaceState(a,a.Title,a.Url)),document.title=a.Title,$("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show(),$.ajax({type:"GET",url:"divPage"+e+".html",success:function(t){$("#mainDiv").html(t).show(),newTableObject=document.getElementById("table"),sorttable.makeSortable(newTableObject),$(".sticky-header").floatThead({top:60}),0==l&&o()}}),"function"==typeof stopCheckBTC&&stopCheckBTC()}(5,"Add Balance - JeruxShop","mailer",1),new Clipboard(".copyit").on("success",(function(o){var t,e;t=o.trigger,e="Copied!",console.log("hide-1"),$(t).tooltip("hide").attr("data-original-title",e).tooltip("show"),console.log("show"),function(o){setTimeout((function(){$(o).tooltip("hide"),console.log("hide-2")}),1e3)}(o.trigger),o.clearSelection()}))}));
</script>
	<script type="text/javascript">
      function o(){$.ajax({type:"POST",url:"ajaxinfo.html",timeout:1e4,success:function(o){if("01"!=o){o=JSON.parse(o);for(var t in o)$("#"+t).html(o[t]).show()}else window.location="logout.html"}})}setInterval((function(){o()}),3e3),o(),$(document).keydown((function(o){"17"==o.which&&(t=!0)})),$(document).keyup((function(){t=!1}));var t=!1;$(window).on("popstate",(function(o){location.replace(document.location)})),$(window).on("load",(function(){$(".dropdown").hover((function(){$(".dropdown-toggle",this).trigger("click")})),function(e,i,n,l){if(t)return window.open(n,"_blank"),!1;var a={Title:i,Url:n};"/"+a.Url!=location.pathname&&(1!=l?history.pushState(a,a.Title,a.Url):history.replaceState(a,a.Title,a.Url)),document.title=a.Title,$("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show(),$.ajax({type:"GET",url:"divPage"+e+".html",success:function(t){$("#mainDiv").html(t).show(),newTableObject=document.getElementById("table"),sorttable.makeSortable(newTableObject),$(".sticky-header").floatThead({top:60}),0==l&&o()}}),"function"==typeof stopCheckBTC&&stopCheckBTC()}(6,"Add Balance - JeruxShop","smtp",1),new Clipboard(".copyit").on("success",(function(o){var t,e;t=o.trigger,e="Copied!",console.log("hide-1"),$(t).tooltip("hide").attr("data-original-title",e).tooltip("show"),console.log("show"),function(o){setTimeout((function(){$(o).tooltip("hide"),console.log("hide-2")}),1e3)}(o.trigger),o.clearSelection()}))}));
</script>
<script type="text/javascript">
      function o(){$.ajax({type:"POST",url:"ajaxinfo.html",timeout:1e4,success:function(o){if("01"!=o){o=JSON.parse(o);for(var t in o)$("#"+t).html(o[t]).show()}else window.location="logout.html"}})}setInterval((function(){o()}),3e3),o(),$(document).keydown((function(o){"17"==o.which&&(t=!0)})),$(document).keyup((function(){t=!1}));var t=!1;$(window).on("popstate",(function(o){location.replace(document.location)})),$(window).on("load",(function(){$(".dropdown").hover((function(){$(".dropdown-toggle",this).trigger("click")})),function(e,i,n,l){if(t)return window.open(n,"_blank"),!1;var a={Title:i,Url:n};"/"+a.Url!=location.pathname&&(1!=l?history.pushState(a,a.Title,a.Url):history.replaceState(a,a.Title,a.Url)),document.title=a.Title,$("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show(),$.ajax({type:"GET",url:"divPage"+e+".html",success:function(t){$("#mainDiv").html(t).show(),newTableObject=document.getElementById("table"),sorttable.makeSortable(newTableObject),$(".sticky-header").floatThead({top:60}),0==l&&o()}}),"function"==typeof stopCheckBTC&&stopCheckBTC()}(7,"Add Balance - JeruxShop","leads",1),new Clipboard(".copyit").on("success",(function(o){var t,e;t=o.trigger,e="Copied!",console.log("hide-1"),$(t).tooltip("hide").attr("data-original-title",e).tooltip("show"),console.log("show"),function(o){setTimeout((function(){$(o).tooltip("hide"),console.log("hide-2")}),1e3)}(o.trigger),o.clearSelection()}))}));
</script>
	<script type="text/javascript">
      function o(){$.ajax({type:"POST",url:"ajaxinfo.html",timeout:1e4,success:function(o){if("01"!=o){o=JSON.parse(o);for(var t in o)$("#"+t).html(o[t]).show()}else window.location="logout.html"}})}setInterval((function(){o()}),3e3),o(),$(document).keydown((function(o){"17"==o.which&&(t=!0)})),$(document).keyup((function(){t=!1}));var t=!1;$(window).on("popstate",(function(o){location.replace(document.location)})),$(window).on("load",(function(){$(".dropdown").hover((function(){$(".dropdown-toggle",this).trigger("click")})),function(e,i,n,l){if(t)return window.open(n,"_blank"),!1;var a={Title:i,Url:n};"/"+a.Url!=location.pathname&&(1!=l?history.pushState(a,a.Title,a.Url):history.replaceState(a,a.Title,a.Url)),document.title=a.Title,$("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show(),$.ajax({type:"GET",url:"divPage"+e+".html",success:function(t){$("#mainDiv").html(t).show(),newTableObject=document.getElementById("table"),sorttable.makeSortable(newTableObject),$(".sticky-header").floatThead({top:60}),0==l&&o()}}),"function"==typeof stopCheckBTC&&stopCheckBTC()}(8,"Add Balance - JeruxShop","premium",1),new Clipboard(".copyit").on("success",(function(o){var t,e;t=o.trigger,e="Copied!",console.log("hide-1"),$(t).tooltip("hide").attr("data-original-title",e).tooltip("show"),console.log("show"),function(o){setTimeout((function(){$(o).tooltip("hide"),console.log("hide-2")}),1e3)}(o.trigger),o.clearSelection()}))}));
</script>
<script type="text/javascript">
      function o(){$.ajax({type:"POST",url:"ajaxinfo.html",timeout:1e4,success:function(o){if("01"!=o){o=JSON.parse(o);for(var t in o)$("#"+t).html(o[t]).show()}else window.location="logout.html"}})}setInterval((function(){o()}),3e3),o(),$(document).keydown((function(o){"17"==o.which&&(t=!0)})),$(document).keyup((function(){t=!1}));var t=!1;$(window).on("popstate",(function(o){location.replace(document.location)})),$(window).on("load",(function(){$(".dropdown").hover((function(){$(".dropdown-toggle",this).trigger("click")})),function(e,i,n,l){if(t)return window.open(n,"_blank"),!1;var a={Title:i,Url:n};"/"+a.Url!=location.pathname&&(1!=l?history.pushState(a,a.Title,a.Url):history.replaceState(a,a.Title,a.Url)),document.title=a.Title,$("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show(),$.ajax({type:"GET",url:"divPage"+e+".html",success:function(t){$("#mainDiv").html(t).show(),newTableObject=document.getElementById("table"),sorttable.makeSortable(newTableObject),$(".sticky-header").floatThead({top:60}),0==l&&o()}}),"function"==typeof stopCheckBTC&&stopCheckBTC()}(9,"Add Balance - JeruxShop","banks",1),new Clipboard(".copyit").on("success",(function(o){var t,e;t=o.trigger,e="Copied!",console.log("hide-1"),$(t).tooltip("hide").attr("data-original-title",e).tooltip("show"),console.log("show"),function(o){setTimeout((function(){$(o).tooltip("hide"),console.log("hide-2")}),1e3)}(o.trigger),o.clearSelection()}))}));
</script>
	<script type="text/javascript">
      function o(){$.ajax({type:"POST",url:"ajaxinfo.html",timeout:1e4,success:function(o){if("01"!=o){o=JSON.parse(o);for(var t in o)$("#"+t).html(o[t]).show()}else window.location="logout.html"}})}setInterval((function(){o()}),3e3),o(),$(document).keydown((function(o){"17"==o.which&&(t=!0)})),$(document).keyup((function(){t=!1}));var t=!1;$(window).on("popstate",(function(o){location.replace(document.location)})),$(window).on("load",(function(){$(".dropdown").hover((function(){$(".dropdown-toggle",this).trigger("click")})),function(e,i,n,l){if(t)return window.open(n,"_blank"),!1;var a={Title:i,Url:n};"/"+a.Url!=location.pathname&&(1!=l?history.pushState(a,a.Title,a.Url):history.replaceState(a,a.Title,a.Url)),document.title=a.Title,$("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show(),$.ajax({type:"GET",url:"divPage"+e+".html",success:function(t){$("#mainDiv").html(t).show(),newTableObject=document.getElementById("table"),sorttable.makeSortable(newTableObject),$(".sticky-header").floatThead({top:60}),0==l&&o()}}),"function"==typeof stopCheckBTC&&stopCheckBTC()}(10,"Add Balance - JeruxShop","tutorial",1),new Clipboard(".copyit").on("success",(function(o){var t,e;t=o.trigger,e="Copied!",console.log("hide-1"),$(t).tooltip("hide").attr("data-original-title",e).tooltip("show"),console.log("show"),function(o){setTimeout((function(){$(o).tooltip("hide"),console.log("hide-2")}),1e3)}(o.trigger),o.clearSelection()}))}));
</script>
<script type="text/javascript">
      function o(){$.ajax({type:"POST",url:"ajaxinfo.html",timeout:1e4,success:function(o){if("01"!=o){o=JSON.parse(o);for(var t in o)$("#"+t).html(o[t]).show()}else window.location="logout.html"}})}setInterval((function(){o()}),3e3),o(),$(document).keydown((function(o){"17"==o.which&&(t=!0)})),$(document).keyup((function(){t=!1}));var t=!1;$(window).on("popstate",(function(o){location.replace(document.location)})),$(window).on("load",(function(){$(".dropdown").hover((function(){$(".dropdown-toggle",this).trigger("click")})),function(e,i,n,l){if(t)return window.open(n,"_blank"),!1;var a={Title:i,Url:n};"/"+a.Url!=location.pathname&&(1!=l?history.pushState(a,a.Title,a.Url):history.replaceState(a,a.Title,a.Url)),document.title=a.Title,$("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show(),$.ajax({type:"GET",url:"divPage"+e+".html",success:function(t){$("#mainDiv").html(t).show(),newTableObject=document.getElementById("table"),sorttable.makeSortable(newTableObject),$(".sticky-header").floatThead({top:60}),0==l&&o()}}),"function"==typeof stopCheckBTC&&stopCheckBTC()}(11,"Add Balance - JeruxShop","scampage",1),new Clipboard(".copyit").on("success",(function(o){var t,e;t=o.trigger,e="Copied!",console.log("hide-1"),$(t).tooltip("hide").attr("data-original-title",e).tooltip("show"),console.log("show"),function(o){setTimeout((function(){$(o).tooltip("hide"),console.log("hide-2")}),1e3)}(o.trigger),o.clearSelection()}))}));
</script>
	<script type="text/javascript">
      function o(){$.ajax({type:"POST",url:"ajaxinfo.html",timeout:1e4,success:function(o){if("01"!=o){o=JSON.parse(o);for(var t in o)$("#"+t).html(o[t]).show()}else window.location="logout.html"}})}setInterval((function(){o()}),3e3),o(),$(document).keydown((function(o){"17"==o.which&&(t=!0)})),$(document).keyup((function(){t=!1}));var t=!1;$(window).on("popstate",(function(o){location.replace(document.location)})),$(window).on("load",(function(){$(".dropdown").hover((function(){$(".dropdown-toggle",this).trigger("click")})),function(e,i,n,l){if(t)return window.open(n,"_blank"),!1;var a={Title:i,Url:n};"/"+a.Url!=location.pathname&&(1!=l?history.pushState(a,a.Title,a.Url):history.replaceState(a,a.Title,a.Url)),document.title=a.Title,$("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show(),$.ajax({type:"GET",url:"divPage"+e+".html",success:function(t){$("#mainDiv").html(t).show(),newTableObject=document.getElementById("table"),sorttable.makeSortable(newTableObject),$(".sticky-header").floatThead({top:60}),0==l&&o()}}),"function"==typeof stopCheckBTC&&stopCheckBTC()}(12,"Add Balance - JeruxShop","order",1),new Clipboard(".copyit").on("success",(function(o){var t,e;t=o.trigger,e="Copied!",console.log("hide-1"),$(t).tooltip("hide").attr("data-original-title",e).tooltip("show"),console.log("show"),function(o){setTimeout((function(){$(o).tooltip("hide"),console.log("hide-2")}),1e3)}(o.trigger),o.clearSelection()}))}));
</script>
<script type="text/javascript">
      function o(){$.ajax({type:"POST",url:"ajaxinfo.html",timeout:1e4,success:function(o){if("01"!=o){o=JSON.parse(o);for(var t in o)$("#"+t).html(o[t]).show()}else window.location="logout.html"}})}setInterval((function(){o()}),3e3),o(),$(document).keydown((function(o){"17"==o.which&&(t=!0)})),$(document).keyup((function(){t=!1}));var t=!1;$(window).on("popstate",(function(o){location.replace(document.location)})),$(window).on("load",(function(){$(".dropdown").hover((function(){$(".dropdown-toggle",this).trigger("click")})),function(e,i,n,l){if(t)return window.open(n,"_blank"),!1;var a={Title:i,Url:n};"/"+a.Url!=location.pathname&&(1!=l?history.pushState(a,a.Title,a.Url):history.replaceState(a,a.Title,a.Url)),document.title=a.Title,$("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show(),$.ajax({type:"GET",url:"divPage"+e+".html",success:function(t){$("#mainDiv").html(t).show(),newTableObject=document.getElementById("table"),sorttable.makeSortable(newTableObject),$(".sticky-header").floatThead({top:60}),0==l&&o()}}),"function"==typeof stopCheckBTC&&stopCheckBTC()}(13,"Add Balance - JeruxShop","tickets",1),new Clipboard(".copyit").on("success",(function(o){var t,e;t=o.trigger,e="Copied!",console.log("hide-1"),$(t).tooltip("hide").attr("data-original-title",e).tooltip("show"),console.log("show"),function(o){setTimeout((function(){$(o).tooltip("hide"),console.log("hide-2")}),1e3)}(o.trigger),o.clearSelection()}))}));
</script><script type="text/javascript">
      function o(){$.ajax({type:"POST",url:"ajaxinfo.html",timeout:1e4,success:function(o){if("01"!=o){o=JSON.parse(o);for(var t in o)$("#"+t).html(o[t]).show()}else window.location="logout.html"}})}setInterval((function(){o()}),3e3),o(),$(document).keydown((function(o){"17"==o.which&&(t=!0)})),$(document).keyup((function(){t=!1}));var t=!1;$(window).on("popstate",(function(o){location.replace(document.location)})),$(window).on("load",(function(){$(".dropdown").hover((function(){$(".dropdown-toggle",this).trigger("click")})),function(e,i,n,l){if(t)return window.open(n,"_blank"),!1;var a={Title:i,Url:n};"/"+a.Url!=location.pathname&&(1!=l?history.pushState(a,a.Title,a.Url):history.replaceState(a,a.Title,a.Url)),document.title=a.Title,$("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show(),$.ajax({type:"GET",url:"divPage"+e+".html",success:function(t){$("#mainDiv").html(t).show(),newTableObject=document.getElementById("table"),sorttable.makeSortable(newTableObject),$(".sticky-header").floatThead({top:60}),0==l&&o()}}),"function"==typeof stopCheckBTC&&stopCheckBTC()}(14,"Add Balance - JeruxShop","setting",1),new Clipboard(".copyit").on("success",(function(o){var t,e;t=o.trigger,e="Copied!",console.log("hide-1"),$(t).tooltip("hide").attr("data-original-title",e).tooltip("show"),console.log("show"),function(o){setTimeout((function(){$(o).tooltip("hide"),console.log("hide-2")}),1e3)}(o.trigger),o.clearSelection()}))}));
</script>
<script type="text/javascript">
      function o(){$.ajax({type:"POST",url:"ajaxinfo.html",timeout:1e4,success:function(o){if("01"!=o){o=JSON.parse(o);for(var t in o)$("#"+t).html(o[t]).show()}else window.location="logout.html"}})}setInterval((function(){o()}),3e3),o(),$(document).keydown((function(o){"17"==o.which&&(t=!0)})),$(document).keyup((function(){t=!1}));var t=!1;$(window).on("popstate",(function(o){location.replace(document.location)})),$(window).on("load",(function(){$(".dropdown").hover((function(){$(".dropdown-toggle",this).trigger("click")})),function(e,i,n,l){if(t)return window.open(n,"_blank"),!1;var a={Title:i,Url:n};"/"+a.Url!=location.pathname&&(1!=l?history.pushState(a,a.Title,a.Url):history.replaceState(a,a.Title,a.Url)),document.title=a.Title,$("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show(),$.ajax({type:"GET",url:"divPage"+e+".html",success:function(t){$("#mainDiv").html(t).show(),newTableObject=document.getElementById("table"),sorttable.makeSortable(newTableObject),$(".sticky-header").floatThead({top:60}),0==l&&o()}}),"function"==typeof stopCheckBTC&&stopCheckBTC()}(15,"Add Balance - JeruxShop","tickets",1),new Clipboard(".copyit").on("success",(function(o){var t,e;t=o.trigger,e="Copied!",console.log("hide-1"),$(t).tooltip("hide").attr("data-original-title",e).tooltip("show"),console.log("show"),function(o){setTimeout((function(){$(o).tooltip("hide"),console.log("hide-2")}),1e3)}(o.trigger),o.clearSelection()}))}));
</script>
</body>
</html>
