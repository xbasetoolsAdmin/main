<?php
require_once('p_header.php');

?>




<div class="alert alert-info text-left" role="alert" style="margin: 15px;">
<ul>
monthly pageviews, Alexa Ranks , unique visitors, site revenue (from advertising)<img style="width: 40px;" src="layout/images/new-icon.jpg"> </li>
<li> Click on Plus <i class="fas fa-plus-circle"></i> button to list full information </b> such as domain name and technologies <i class="fab fa-wordpress fa-1x"></i> <i class="fas fa-blog"></i> <i class="fab fa-drupal"></i> <i class="fab fa-php"></i> <i class="fab fa-vuejs"></i> <i class="fab fa-python"></i> <i class="fab fa-laravel"></i> <i class="fab fa-js"></i> <i class="fab fa-joomla"></i> <i class="fab fa-java"></i> <i class="fab fa-node"></i> </li>
<li> Click on check button <i class="fas fa-check-circle"></i> before buy any cPanel to know if it's work or not.</li>
<li> Click on Seo info <i class="fas fa-info"></i> button to check for available <b> SEO </b> info </li>
<li> Click on CHECK BLACKLIST <i class="fas fa-check-circle"></i> before buy any <b> cPanel </b> to check if the host reported as phishing or clean </li>
<li>There is <b> 17234 </b> cPanels Available.</li>
</ul>
</div>
<div class="row m-3 pt-1" style="color: var(--font-color);"><?php

	                                          require_once('main.php');
	
	
	
	?>


  $(document).keydown(function(event){
        if(event.which=="17")
            cntrlIsPressed = true;
    });

    $(document).keyup(function(){
        cntrlIsPressed = false;
    });

    var cntrlIsPressed = false;


    $(window).on("popstate", function(e) {
        location.replace(document.location);

    });


    $(window).on('load', function() {
		$('.dropdown').hover(function(){ $('.dropdown-toggle', this).trigger('click'); });
	   	pageDiv(0,'Add Balance - OdinShop','',1);
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





















<?php
require_once('p_footer.php');

?>
