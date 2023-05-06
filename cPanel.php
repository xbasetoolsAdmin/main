<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: login.html");
    exit(); }
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>
<head>
<?php 
include"header.php";
?>
	<body>
		<div id="demo_info" class="box">
		</div>
		<div id="cpanel_data_wrapper" class="dataTables_wrapper">
			<div class="dataTables_length" id="cpanel_data_length">
				
	<label>Show
					<select name="cpanel_data_length" aria-controls="cpanel_data" class="">
						
						<option value="10">10</option>
						
						<option value="25">25</option>
						
						<option value="50">50</option>
						
						
						<option value="100">100</option>
					
		</select>
					entries
	</label>
			</div>
			<div id="cpanel_data_filter" class="dataTables_filter">
				<label>Search:<input type="search" class="" placeholder="" aria-controls="cpanel_data">
				</label>
			</div>
			<div id="mainDiv">
				

			<script>
$(window).on('load', function() {
$('.dropdown').hover(function(){
$('.dropdown-toggle', this).trigger('click'); });
   pageDiv(7,'Main - FeluxShop','cPanel.html',1);
   var clipboard = new Clipboard('.copyit');
    clipboard.on('success', function(e) {
      setTooltip(e.trigger, 'Copied!');
      hideTooltip(e.trigger);
      e.clearSelection();  }); });
function setTooltip(btn, message) {  console.log("hide-1");
  $(btn).tooltip('hide')
    .attr('data-original-title', message)
    .tooltip('show');
     console.log("show");
}

function hideTooltip(btn) {
  setTimeout(function() {$(btn).tooltip('hide'); console.log("hide-2");}, 1000);
}

			</script>
		</div>
	</body>
</html>

