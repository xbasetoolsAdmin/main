<!DOCTYPE html>
<?php
   ob_start();
   session_start();
   date_default_timezone_set('UTC');
   include "includes/config.php";
   include "p_header.php";
   if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
       header("location: ../");
       exit();
   }
   $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
   ?>
<script src="category/data02.js"></script>








<script type="application/json">
pageDiv(0, ' - ', '', 1);
</script>
</html>
