<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
 include "../../includes/config.php";

if(!isset($_SESSION['sname']) and !isset($_SESSION['spass'])){
   header("location: login.php");
   exit();
}

$uid = mysqli_real_escape_string($dbcon,$_SESSION['sname']);
$q = mysqli_query($dbcon, "SELECT * FROM users WHERE username='$uid'")or die();
$r = mysqli_fetch_assoc($q);

if($r['resseller'] != "1"){
  header("location: ../buyer");
  exit ();
}

$id = mysqli_real_escape_string($dbcon,$_GET['id']);
$resseller = mysqli_real_escape_string($dbcon,$_SESSION['sname']);

//echo $id."&nbsp;&nbsp;".$resseller;

$qu = mysqli_query($dbcon, "SELECT * FROM scampages WHERE id='$id' AND resseller='$resseller'")or die("error");
if(mysqli_num_rows($qu) == 0 ){
 header("location: ../seller");
  exit();
}

$ru = mysqli_fetch_assoc($qu);
$price = $ru['price'];
global $price ;

 function sqlquery($table,$pr){
 include "../../includes/config.php";
   $id = mysqli_real_escape_string($dbcon,$_GET['id']);
   $resseller = mysqli_real_escape_string($dbcon,$_SESSION['sname']);
   $query = mysqli_query($dbcon, "DELETE FROM scampages WHERE id='$id' AND resseller='$resseller'")or die();
   if($query){
     $b = ($pr * 70) / 100 ;
       //echo "problem";

     echo "removed";
     mysqli_query($dbcon, "UPDATE resseller SET unsoldb=(unsoldb - $b),iunsold=(iunsold - 1) WHERE username='$resseller' ")or die(mysql_error());

   }else{
     echo "<center>Not deleted pls contact support</center>";
   }
 }

  $q0 = mysqli_query($dbcon, "SELECT * FROM scampages WHERE id='$id' AND resseller='$resseller'")or die();
  if(mysqli_num_rows($q0) != 0 ){
    sqlquery('scampages',$price);
  }

?>