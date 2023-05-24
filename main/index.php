<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "../includes/config.php";
include "p_header.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: ../");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>
<!doctype html>


<script type="text/javascript" src="category/data01.js"></script>
</script>
</script>
<style>
    .navbar {
        background-color: #001f3f;
    }
</style>
 
    <div id="mainDiv">              
<span id="pageDiv(0, 'Main - FeluxShop', 'main', 1);"></span>
 </div>
<script type=‘text/javascript’>
(function($)
{
    $hidew(document).ready(function()
    {
        $hidew.ajaxSetup(
        {
            cache: false,
            beforeSend: function() {
                $(‘#mainDiv’).hide();
                $(‘#table’).show();
            },
            complete: function() {
                $(‘#table’).hide();
                $hidew(‘#mainDiv’).show();
            },
            success: function() {
                $(‘#table’).hide();
                $hidew(‘#mainDiv’).show();
            }
        });
        var $container = $(“#mainDiv”);
        $container.load(“divPage1.php”);

        var refreshId = setInterval(function()
        {
            $container.load(‘divPage1.php’);
			$hidew(“.tooltip”).hide();
        }, 50000);
    });
})(jQuery);
</script>
<script language=“JavaScript”>
  function selectText(textField)
  {
    textField.focus();
    textField.select();
  }
</script>
