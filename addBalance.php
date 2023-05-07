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
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="files/bootstrap/3/css/bootstrap.css?1" />
<link rel="stylesheet" type="text/css" href="files/css/flags.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
<script type="text/javascript" src="files/js/jquery.js?1"></script>
<script type="text/javascript" src="files/bootstrap/3/js/bootstrap.js?1"></script>
<script type="text/javascript" src="files/js/sorttable.js"></script>
<script type="text/javascript" src="files/js/table-head.js?3334"></script>
<script type="text/javascript" src="files/js/bootbox.min.js"></script>
<script type="text/javascript" src="files/js/clipboard.min.js"></script>

<link rel="shortcut icon" href="files/img/favicon.ico" />
<meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" /> 
 <meta name="referrer" content="no-referrer" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<title>JeruxShop</title>
</head>
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
      function o(){$.ajax({type:"POST",url:"ajaxinfo.html",timeout:1e4,success:function(o){if("01"!=o){o=JSON.parse(o);for(var t in o)$("#"+t).html(o[t]).show()}else window.location="logout.html"}})}setInterval((function(){o()}),3e3),o(),$(document).keydown((function(o){"17"==o.which&&(t=!0)})),$(document).keyup((function(){t=!1}));var t=!1;$(window).on("popstate",(function(o){location.replace(document.location)})),$(window).on("load",(function(){$(".dropdown").hover((function(){$(".dropdown-toggle",this).trigger("click")})),function(e,i,n,l){if(t)return window.open(n,"_blank"),!1;var a={Title:i,Url:n};"/"+a.Url!=location.pathname&&(1!=l?history.pushState(a,a.Title,a.Url):history.replaceState(a,a.Title,a.Url)),document.title=a.Title,$("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show(),$.ajax({type:"GET",url:"divPage"+e+".html",success:function(t){$("#mainDiv").html(t).show(),newTableObject=document.getElementById("table"),sorttable.makeSortable(newTableObject),$(".sticky-header").floatThead({top:60}),0==l&&o()}}),"function"==typeof stopCheckBTC&&stopCheckBTC()}(13,"Add Balance - JeruxShop","addBalance.html",1),new Clipboard(".copyit").on("success",(function(o){var t,e;t=o.trigger,e="Copied!",console.log("hide-1"),$(t).tooltip("hide").attr("data-original-title",e).tooltip("show"),console.log("show"),function(o){setTimeout((function(){$(o).tooltip("hide"),console.log("hide-2")}),1e3)}(o.trigger),o.clearSelection()}))}));
	</script>
	<script type="text/javascript">
      function o(){$.ajax({type:"POST",url:"ajaxinfo.html",timeout:1e4,success:function(o){if("01"!=o){o=JSON.parse(o);for(var t in o)$("#"+t).html(o[t]).show()}else window.location="logout.html"}})}setInterval((function(){o()}),3e3),o(),$(document).keydown((function(o){"17"==o.which&&(t=!0)})),$(document).keyup((function(){t=!1}));var t=!1;$(window).on("popstate",(function(o){location.replace(document.location)})),$(window).on("load",(function(){$(".dropdown").hover((function(){$(".dropdown-toggle",this).trigger("click")})),function(e,i,n,l){if(t)return window.open(n,"_blank"),!1;var a={Title:i,Url:n};"/"+a.Url!=location.pathname&&(1!=l?history.pushState(a,a.Title,a.Url):history.replaceState(a,a.Title,a.Url)),document.title=a.Title,$("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show(),$.ajax({type:"GET",url:"divPage"+e+".html",success:function(t){$("#mainDiv").html(t).show(),newTableObject=document.getElementById("table"),sorttable.makeSortable(newTableObject),$(".sticky-header").floatThead({top:60}),0==l&&o()}}),"function"==typeof stopCheckBTC&&stopCheckBTC()}(13,"Add Balance - JeruxShop","addBalance.html",1),new Clipboard(".copyit").on("success",(function(o){var t,e;t=o.trigger,e="Copied!",console.log("hide-1"),$(t).tooltip("hide").attr("data-original-title",e).tooltip("show"),console.log("show"),function(o){setTimeout((function(){$(o).tooltip("hide"),console.log("hide-2")}),1e3)}(o.trigger),o.clearSelection()}))}));
</script>
		<style>
            .navbar {
                background-color: #001f3f;
            }
        </style>
<body style="padding-top: 70px; padding-bottom: 70px;">

	
	
	
	
	
	</nav>
<div id="mainDiv">


</div>
</body>
</html>

