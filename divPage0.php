<?php
ob_start();
session_start();
error_reporting();
date_default_timezone_set('UTC');
include "includes/config.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: ../");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);

?>
<?php
 echo'
<div class="form-group col-lg-7 ">
<div class="well">
  Hello <a class="label label-primary">'.$usrid.'</a><br>
    If you have any <b>Question</b> ,<b>Problem</b>, <b>Suggestion</b> or <b>Request</b> Please feel free to <a class="label label-default " href="tickets.html"><span class="glyphicon glyphicon-pencil"></span> Open a Ticket</a><br>
    if you want to report an order , just go to <abbr title="Account - > My Orders or Click here" >My Orders  <span class="glyphicon glyphicon-shopping-cart"></span></abbr> 
    then click on <a class="label label-primary">Report #[Order Id]</a> button<br><br>
    Our Domains are <b>Felux.shop</b>- Please Save them!

</div>

    <div class="list-group" id="div2">
      	<h3>
        
        <i class="glyphicon glyphicon-info-sign">
        
        </i> News</h3>';?>
        
     <?php $qq = @mysqli_query($dbcon, "SELECT * FROM news ORDER by id desc LIMIT 10") or die("error here"); ?>






                <?php
while($r = mysqli_fetch_assoc($qq))

{echo'<a class="list-group-item"><h5 class="list-group-item-heading"><b>'.stripcslashes($r['content']).'</b></h5>';

echo'<h6 class="list-group-item-text">'.$r['date'].'</h6></a>'; }
echo '        '; ?>
	<div class="well well-sm">    



	<?php
	echo '
                 
      </div>
  </div>
  ';?>