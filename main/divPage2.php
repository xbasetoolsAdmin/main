

<div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
        <div class="col-sm-12 table-responsive">
       <?php include("cr.php");
$q = mysqli_query($dbcon, "SELECT * FROM cpanels WHERE sold='0' ORDER BY RAND()")or die(mysql_error());
	 
function      srl   ($item)
{
  
		$item0                        = $item;
		$item1                       = rtrim($item0);
		$item2 = ltrim($item1);
		return $item2;
	




} 

 while($row = mysqli_fetch_assoc($q)){
	 	 $countryfullname = $row['country'];
	  $code = array_search("$countryfullname", $countrycodes);
	 $countrycode = strtolower($code);

	 $url = $row['url'];
	 	$d = explode("|", $url);
		$urled = srl($d[0]);

	 	  $tld = end(explode(".", parse_url($urled, PHP_URL_HOST)));?>
     <table id="table" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">
                <thead>
                    <tr>
                        <th data-priority="1"></th>
                        <th class="all">ID</th>
                        <th data-priority="3">Country</th>
                        <th data-priority="6">Description</th>
                        <th data-priority="7">Email N</th>
                        <th data-priority="8">Seller</th>
                        <th data-priority="2">Proof</th>
                        <th data-priority="9">Price</th>
                        <th data-priority="10">Added on </th>
                        <th class="all">Buy</th>
                    </tr>
                </thead>
<tbody><?php
    $qer = mysqli_query($dbcon, "SELECT * FROM resseller WHERE username='".$row['resseller']."'")or die(mysql_error());
		   while($rpw = mysqli_fetch_assoc($qer))
			 $SellerNick = "seller".$rpw["id"]."processsing..";?>

    <?php  echo " <tr>    
    <td id='country'>
    
    <i class='flag-icon flag-icon-$countrycode'>
    </i>&nbsp;".($row['country'])."
    </td>
		   
<td id='tld'>

                .".$tld." 

</td>
<td id='hosting'> 
    
    ".($row['infos'])." 
    
    
</td>


    <td id='seller'> 
    
    
    ".($SellerNick)."
    
    
    </td>";
	 
	 
	 
	 
	 
echo '<td>

	 <span id="shop'.$row["id"].'" type="cpanel">
    <a onclick="javascript:check('.$row["id"].');"
      class="btn btn-info btn-xs"><font color=white>CHECK</font>
      </a>
      </span>
      <center>
  </td>';
	 
	 
echo " <td>

    
    ".($row['price'])."
    
    </td>
    
    
 <td>
	    ".($row['date'])."
	    
  </td>";

    echo ' <td>
    
	<span id="cpanel'.$row['id'].'"
	title="buy" type="cpanel">
	<a onclick="javascript:buythistool('.$row['id'].')" 
	class="btn btn-primary btn-xs">
	<font color=white>BUY NOW</font>
	</a></span>
	
	<center>
   
  </td>

    
            </tr>
     ';
	 
	 
	 
 }

 ?>
</tbody>
</thead>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-notify modal-success" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="heading" id="myModalHeader"></p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">×</span>
                    </button>
                </div>
                <div class="modal-body" id="modelbody">
                </div>
                <div class="modal-footer justify-content-center">
                    <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
 
    <div class="modal fade" id="modalConfirmBuy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm modal-notify modal-info" role="document">
 
            <div class="modal-content text-center">
 
                <div class="modal-header d-flex justify-content-center">
                    <p class="heading">Are you sure?</p>
                </div>
 
                <div class="modal-body">
                    <i class='fas fa-shopping-cart fa-4x animated rotateIn'></i>
                </div>
 
                <div class="modal-footer flex-center">
                    <a onClick='confirmbye()' class="btn btn-outline-info waves-effect" data-dismiss="modal">Yes</a>
                    <a type="button" class="btn btn-info" data-dismiss="modal">No</a>
                </div>
            </div>
 
        </div>
    </div>
 
 
    <div class="modal fade top" id="modalCoupon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">
 
            <div class="modal-content">
 
                <div class="modal-body">
                    <div class="row d-flex justify-content-center align-items-center">
                        <img src="layout/images/balance.png">
                        <span class="pt-3 mx-4" style="font-size: 14 px"><b>No enough balance !</b> Please refill your balance</span>
                        <a type="button" href="addBalance" onclick="window.open(this.href);return false;" class="btn btn-danger">Add Balance
                            <i class="fas fa-book ml-1 white-text"></i>
                        </a>
                        <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">No, thanks</a>
                    </div>
                </div>
            </div>
 
        </div>
    </div>
 

	
