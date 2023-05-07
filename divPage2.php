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





<tr>
  <td id="cpanel_country"><span class="flag-icon flag-icon-us"></span>{country}</td>
  <td id="cpanel_tld">{tld}</td>
  <td id="cpanel_https"><i style="color: {color};"><i class="fas {lock} fa-fw"></i>{https}</i></td>
  <td id="cpanel_hosting">{detected_hosting}</td>
  <td id="cpanel_seller">{username}</td>
  <td><span id='check_1339048'><button type="button" class="btn btn-info btn-sm" onclick='check(1339048,"35d4ef9114031e1e01715756e21b6bcf",7);'>Check</button></span></td>
  <td>{price}</td>
  <td sorttable_customkey="20190713064815">{created_at}</td>

  <td><span id='buy_1339048'><button type="button" class="btn btn-primary btn" onclick='buyit(1339048,"d003182b4fa6c83c6180d53f5ec25f2f",7);'>Buy</button></span></td>      
</tr>


</div>
<div class="modal fade" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Olux Shop</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body" id="modelbody"></div>
      <div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div>
    </div>
  </div>
</div>

</body>
</html>
