
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


<?php include"category/cpanel_table.php"?>
 <script type="application/json">
function ajaxinfo() {
        $.ajax({
            type: 'GET',
            url: 'ajaxinfo.html',
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
    pageDiv(0, ' - ', '', 1);
    $(document).keydown(function(event) {
        if (event.which == "17")
            cntrlIsPressed = true;
    });
 
    $(document).keyup(function() {
        cntrlIsPressed = false;
    });
 
    var cntrlIsPressed = false;
 
 
    function pageDiv(n, t, u, x) {
        if (cntrlIsPressed) {
            window.open(u, '_blank');
            return false;
        }
        var obj = {
            Title: t,
            Url: u
        };
        if (("/" + obj.Url) != location.pathname) {
            if (x != 1) {
                history.pushState(obj, obj.Title, obj.Url);
            } else {
                history.replaceState(obj, obj.Title, obj.Url);
            }
 
        }
        document.title = obj.Title;
        $("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show();
        $.ajax({
            type: 'GET',
            url: 'divPage' + n + '.html',
            success: function(data) {
                $("#mainDiv").html(data).show();
                newTableObject = document.getElementById('table');
               // sorttable.makeSortable(newTableObject);
             //   $(".sticky-header").floatThead({
                    top: 60
                });
                if (x == 0) {
                    ajaxinfo();
                }
            }
        });
        if (typeof stopCheckBTC === 'function') {
            var a = stopCheckBTC();
        }
 
    }
 
    $(window).on("popstate", function(e) {
        location.replace(document.location);
 
    });
 
    $(window).on('load', function() {
        $('.dropdown').hover(function() {
            $('.dropdown-toggle', this).trigger('click');
        });
        pageDiv(0, 'Main - FeluxShop', 'index.html', 1);
        var clipboard = new Clipboard('.copyit');
        clipboard.on('success', function(e) {
            setTooltip(e.trigger, 'Copied!');
            hideTooltip(e.trigger);
            e.clearSelection();
        });
 
    });
 
 
    function setTooltip(btn, message) {
        console.log("hide-1");
        $(btn).tooltip('hide')
            .attr('data-original-title', message)
            .tooltip('show');
        console.log("show");
    }
 
    function hideTooltip(btn) {
        setTimeout(function() {
            $(btn).tooltip('hide');
            console.log("hide-2");
        }, 1000);
    }

$('#filterbutton').click(function () {$("#table tbody tr").each(function() {var ck1 = $.trim( $(this).find("#cpanel_country").text().toLowerCase() );var ck2 = $.trim( $(this).find("#cpanel_tld").text().toLowerCase() );var ck3 = $.trim( $(this).find("#cpanel_hosting").text().toLowerCase() );var ck4 = $.trim( $(this).find("#cpanel_seller").text().toLowerCase() ); var val1 = $.trim( $('select[name="cpanel_country"]').val().toLowerCase() );var val2 = $.trim( $('input[name="cpanel_tld"]').val().toLowerCase() );var val3 = $.trim( $('input[name="cpanel_hosting"]').val().toLowerCase() );var val4 = $.trim( $('select[name="cpanel_seller"]').val().toLowerCase() ); if((ck1 != val1 && val1 != '' ) || ck2.indexOf(val2)==-1 || ck3.indexOf(val3)==-1 || (ck4 != val4 && val4 != '' )){ $(this).hide();  }else{ $(this).show(); } });$('#filterbutton').prop('disabled', true);});$('.filterselect').change(function () {$('#filterbutton').prop('disabled', false);});$('.filterinput').keyup(function () {$('#filterbutton').prop('disabled', false);});


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





                








