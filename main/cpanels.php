
<!----script--/->
<script type="application/json">pageDiv(0, ' - ', '', 1);</script>
<!----script--/->
<?php 
   ob_start();
   session_start();
   date_default_timezone_set('UTC');
   include "includes/config.php";
   include"p_header.php";
   if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
       header("location: ../");
       exit();
   }
   $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
   ?>









<div class="row m-2 pt-3" style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
<div class="col-sm-12 Id="mainDiv" table-responsive">
 <table id="table" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">
                








