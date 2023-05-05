<?php
ob_start();
session_start();
error_reporting();
date_default_timezone_set('UTC');

if(!isset($_SESSION['sname']) and !isset($_SESSION['spass'])){
   header("location: ../");
   exit();
}
  include "includes/config.php";
?>
<?php

  $date = date("Y-m-d H:i:s");
  $uid = mysqli_real_escape_string($dbcon, $_GET['id']);
  $tbl = mysqli_real_escape_string($dbcon, $_GET['t']);

  $qqs = @mysqli_query($dbcon, "SELECT * FROM $tbl WHERE id='$uid'") or die();
  $rows = mysqli_fetch_assoc($qqs);

  $price = mysqli_real_escape_string($dbcon, $rows['price']);
  $type  = mysqli_real_escape_string($dbcon, $rows['acctype']);
  $fb  = mysqli_real_escape_string($dbcon, $rows['country']);
  $infos  = mysqli_real_escape_string($dbcon, $rows['infos']);
  $url  = mysqli_real_escape_string($dbcon, $rows['url']);
  $login  = mysqli_real_escape_string($dbcon, $rows['login']); //
  $pa  = mysqli_real_escape_string($dbcon, $rows['pass']); // 
  $sid  = mysqli_real_escape_string($dbcon, $rows['id']);
  $resseller  = mysqli_real_escape_string($dbcon, $rows['resseller']); // qi

  $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
  $qqs2 = @mysqli_query($dbcon, "SELECT * FROM users WHERE username='$usrid'") or die();
  $rows2 = mysqli_fetch_assoc($qqs2);

  $balance =  $rows2['balance'];
  $ipur =   $rows2['ipurchassed'];

  if($balance >= $price){
    $newb = $balance - $price;
    $newb2 = mysqli_real_escape_string($dbcon, $newb);
    $re = mysqli_query($dbcon, "SELECT sold FROM $tbl WHERE id='$uid'");
    $ree = mysqli_fetch_assoc($re);
    if($ree['sold'] == '0'){
           $npur = $ipur + 1 ;
			mysqli_query($dbcon, "UPDATE $tbl SET sold='1', sto='$usrid', dateofsold='$date', resseller='$resseller' WHERE id='$uid'");
			mysqli_query($dbcon, "UPDATE users SET balance='$newb2' WHERE username='$usrid'");
			mysqli_query($dbcon, "UPDATE users SET ipurchassed='$npur' WHERE username='$usrid'");
			mysqli_query($dbcon, "INSERT INTO purchases
            (s_id,buyer,type,date,country,infos,url,login,pass,price,resseller,reported,reportid)
            VALUES
            ('$sid','$usrid','$type','$date','$fb','$infos','$url','$login','$pa','$price','$resseller','',null)
            ");
      
            $last_id = mysqli_insert_id($dbcon);
         $b = $price;
         mysqli_query($dbcon, "UPDATE resseller SET allsales=(allsales + $b),soldb=(soldb + $b) WHERE username='$resseller'");

	    echo '<button onclick="openitem('.$last_id.')" class="btn btn-primary btn-xs"> Order #'.$last_id.'</button>';
		
    }else{
      echo 'Already sold / Deleted.' ;
    }
  }else{
      echo 'Please top-up your balance to buy.' ;
       }
//(s_id,buyer,date,type,country,infos,url,login,pass,price,resseller,reported,reportid)
?>
<?php
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
$q = mysqli_query($dbcon, "SELECT * FROM accounts WHERE acctype='account' AND resseller='$uid' ORDER BY id DESC")or die(mysqli_error());


<table width="100%" id="dataTable" class="table table-striped table-bordered table-condensed sticky-header dataTable no-footer" role="grid" aria-describedby="dataTable_info" style="width: 100%;">        <thead>
  <thead>
  <tr>
  <th>ID</th>
  <th>Type</th>
  <th>Country</th>
  <th>Site Name</th>
  <th>Information</th>
  <th>Open</th>
  <th>Date added</th>
  <th>Price</th>
  <th>Action</th>
  </tr>
        </thead>
      <ttbody2>';>
  while($row = mysqli_fetch_assoc($q)){
	 
    echo "<tr class='accounts-tabel'>
    <td> ".htmlspecialchars($row['id'])." </td>
    <td> ".strtoupper(htmlspecialchars($row['acctype']))." </td>
    <td> ".htmlspecialchars($row['country'])." </td>
    <td> ".htmlspecialchars($row['sitename'])." </td>
    <td> ".htmlspecialchars($row['infos'])." </td>
	 <td> ".htmlspecialchars($row['date'])." </td>
    <td> ".htmlspecialchars($row['price'])."</td> ;?>
  

 </tbody>
 </table>
