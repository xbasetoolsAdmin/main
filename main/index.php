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


          <thead>
                           <tr>
        <th data-priority="1">0<th>
        <th data-priority="1">2<th>
         <th data-priority="1">3<th>
        <th data-priority="1">4<th>
        <th data-priority="1">5<th>
        <th data-priority="1">6<th>
        <th data-priority="1">7<th>
         <th data-priority="1">8<th>
          <th data-priority="1">9<th>
         <th data-priority="1">10<th>
                            </tr>
                         <thody>
                    </table>
    
    
</div>
<script>
    pageDiv(2,'Add Balance - OdinShop','',1);
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
            

    .tooltip('show');
     //console.log("show");
</script>
</body>
</html>