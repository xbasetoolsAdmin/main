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

<?php

include"category/cpanel_table.php";

?>




    </div>
    

    
    
    <script>
            pageDiv(2, 'Add Balance - XBASETOOLS', '', 1);
</script>

    <script>
     function ajaxinfo() {
                $.ajax({
                    type: 'Post',
                    url: 'divPage2.html',
                    timeout: 10000,

                    success: function(data) {
                        if (data != '01') {
                            var data = JSON.parse(data);
                            for (var prop in data) {
                                $("#" + prop).html(data[prop]).show();
                            }
                        } else {
                            window.location = "logout.html";
                        }
                    }
                });

            }
            setInterval(function() {
                ajaxinfo()
            }, 3000);

            ajaxinfo();
            
    pageDiv(0,'Add Balance - OdinShop','',1);
    .tooltip('show');
     //console.log("show");
</script>
</body>
</html>