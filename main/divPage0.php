



<?php ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {    header("location: login.html");    exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?> 




<div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
<div class="col-sm-12 table-responsive" id="mainDiv">
<table id="table" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">



</table>
<script>
$(document).ready(function() {
$("#table").DataTable( {
"lengthMenu": [[1, 2, 10, 50, -1], 
  
           [1, 2, 10, 50, "All"]],
				'iDisplayLength': 1000,
				"aaSorting": []
			} );
		} );
		</script>