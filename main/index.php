<?php require_once('p_header.php'); 
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


 
    <div style="padding-left:20px; display:inline-block; margin-bottom:10px">
        <span><a href="addBalance.php?do=balance" class="btn btn-primary" style="color:#fff; font-size: 12 px">Add Balance</a></span>
        <span><a href="addBalance.php?do=details" class="btn btn-primary" style="color:#fff; font-size: 12 px">Balance Info</a></span>
    </div>
    <div id="mainDiv"></div>
    <script type="text/javascript">
        $(document).keydown(function(event) {
            if (event.which == "17")
                cntrlIsPressed = true;
        });
 
        $(document).keyup(function() {
            cntrlIsPressed = false;
        });
 
        var cntrlIsPressed = false;
 
 
        $(window).on("popstate", function(e) {
            location.replace(document.location);
 
        });
 
 
        $(window).on('load', function() {
            $('.dropdown').hover(function() {
                $('.dropdown-toggle', this).trigger('click');
            });
            pageDiv(2, 'Cpanels - XbaseTools', 'main', 1);
<?php 
      require"p_footer.php";

?>
