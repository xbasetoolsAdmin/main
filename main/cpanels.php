
<?php 
   ob_start();
   session_start();
   date_default_timezone_set('UTC');
   include "includes/config.php";
   include"p_header.php";
   if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
       header("location: ../");
       exit();
   }
   $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
   ?>


<?php include"controllers/cpanel_table.php"?>
 <script type="application/json">



    $(window).on('load', function() {
		$('.dropdown').hover(function(){ $('.dropdown-toggle', this).trigger('click'); });
	   	pageDiv(2,'header - XBASEOOLS','',1);
	   var clipboard = new Clipboard('.copyit');
	    clipboard.on('success', function(e) {
	      setTooltip(e.trigger, 'Copied!');
	      hideTooltip(e.trigger);
	      e.clearSelection();
	   });

});


function setTooltip(btn, message) {
  //console.log("hide-1");
  $(btn).tooltip('hide')
    .attr('data-original-title', message)
    .tooltip('show');
     //console.log("show");
}

function hideTooltip(btn) {
  setTimeout(function() {$(btn).tooltip('hide'); /*console.log("hide-2");*/}, 1000);
}
</script>
</body>
</html>

function buythistool(id){
  bootbox.confirm("Are you sure?", function(result) {
        if(result ==true){
      $.ajax({
     method:"GET",
     url:"buytool.php?id="+id+"&t=cpanels",
     dataType:"text",
     success:function(data){
         if(data.match(/<button/)){
		 $("#cpanel"+id).html(data).show();
         }else{
            bootbox.alert('<center><img src="files/img/balance.png"><h2><b>No enough balance !</b></h2><h4>Please refill your balance <a class="btn btn-primary btn-xs"  href="addBalance.html" onclick="window.open(this.href);return false;" >Add Balance <span class="glyphicon glyphicon-plus"></span></a></h4></center>')
         }
     },
   });
       ;}
  });
}
g:xcheck=0;
function check(id){   
     if(xcheck > 1){
    bootbox.alert("<b>Wait</b> - Other checking operation is executed!");
  } else {
    xcheck++;
    var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('Checking...').show();
	$.ajax({
	type: 		'GET',
	url: 		'CheckCpanel'+id+'.html',
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
		xcheck--;
	}});
} }

function openitem(order){
  $("#myModalLabel").text('Order #'+order);
  $('#myModal').modal('show');
  $.ajax({
    type:       'GET',
    url:        'showOrder'+order+'.html',
    success:    function(data)
    {
        $("#modelbody").html(data).show();
    }});

}

 </script>





                








