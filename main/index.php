<!DOCTYPE html>
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








<div id="mainDiv" table width="100%"  class="table table-striped table-bordered table-condensed sticky-header" id="table">
 <!doctype html>
<script type="application/json">
pageDiv(0, ' - ', '', 1);
</script>
</html>
