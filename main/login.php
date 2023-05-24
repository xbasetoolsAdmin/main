<?php  ob_start();  session_start();  include "authentication/database.php";  date_default_timezone_set('UTC'); if(isset($_SESSION['sname']) and isset($_SESSION['spass'])){   header("location: ../login.html");
 exit();
}
?>
