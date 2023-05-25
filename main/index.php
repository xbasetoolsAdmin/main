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


<div Id="mainDiv"></div>

<script>
$(function(){'use strict';$('.navbar-nav li.dropdown').hover(function(){$(this).find('.dropdown-menu').stop(true,true).delay(100).fadeIn(300);},function(){$(this).find('.dropdown-menu').stop(true,true).delay(100).fadeOut(300);});});var cntrlIsPressed=false;function pageDiv(n,t,u,x){if(cntrlIsPressed){window.open(u,'_blank');return false;}

 function ajaxinfo() {
$(function(){'use strict';$('.navbar-nav li.dropdown').hover(function(){$(this).find('.dropdown-menu').stop(true,true).delay(100).fadeIn(300);},function(){$(this).find('.dropdown-menu').stop(true,true).delay(100).fadeOut(300);});});var cntrlIsPressed=false;function pageDiv(n,t,u,x){if(cntrlIsPressed){window.open(u,'_blank');return false;}
var obj={Title:t,Url:u};if(("/"+obj.Url)!=location.pathname){if(x!=1){history.pushState(obj,obj.Title,obj.Url);}
else{history.replaceState(obj,obj.Title,obj.Url);}}
document.title=obj.Title;$("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show();$.ajax({type:'GET',url:'divPage'+n+'.html',success:function(data)
{$("#mainDiv").html(data).show();}});if(typeof stopCheckBTC==='function'){var a=stopCheckBTC();}}
function openitem(order){$("#myModalLabel").text('Order #'+order);$('#myModal').modal('show');$.ajax({type:'GET',url:'showOrder'+order,success:function(data){$("#modelbody").html(data).show();}});}
function sendt(id){var sub=$("#subject"+id).val();var msg=$("#msg"+id).val();var pr=$("#proi"+id).val();$.ajax({method:"GET",url:"CreateReport?id="+id+"&m="+btoa(msg),dataType:"text",success:function(data){$("#resulta"+id).html(data).show();},});}
function sendReview(id){var rating=$("#rating-"+id+" input[type='radio']:checked").val();var review=$("#review-"+id).val();if(rating==undefined)
{rating='';}
$.ajax({type:"POST",url:"addReviewToSeller",dataType:"json",data:{orderid:id,rating:rating,review:review},success:function(response){if(response.success!=1){$("#ratingModal"+id+" .modal-body p").show();$("#ratingModal"+id+" .modal-body p span").html(response.message);}else{$("div#rating-and-review-"+id).html(response.message);$("#ratingModal"+id).hide();$(".modal-backdrop").remove();alert('Your rating has saved.');}}});}



    
    <script type="text/javascript">
        $(document).keydown(function(event) {
            if (event.which == "17")
                cntrlIsPressed = true;
        });
 
        $(document).keyup(function() {
            cntrlIsPressed = false;
        });
 
        var cntrlIsPressed = false;
 
 
        $(window).on("popstate", function(e) {
            location.replace(document.location);
 
        });
 
 
        $(window).on('load', function() {
            $('.dropdown').hover(function() {
                $('.dropdown-toggle', this).trigger('click');
            });
            pageDiv(2, 'Add Balance - XBASETOOLS', '', 1);
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
            setTimeout(function() {
                $(btn).tooltip('hide'); /*console.log("hide-2");*/
            }, 1000);
        }
    </script>
</script>

</body>
</html>