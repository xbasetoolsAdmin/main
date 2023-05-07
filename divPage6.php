

<!doctype html>
<html>
<head>
	<script src="{SERVER_BASE_URL}/static/js/jquery-3.4.1.min.js" ></script>
  	<script src="{SERVER_BASE_URL}/static/js/popper.min.js"></script>
  		<link rel="stylesheet" href="{SERVER_BASE_URL}/static/css/bootstrap.min.css">
	<script src="{SERVER_BASE_URL}/static/js/bootstrap.min.js"></script>


	<link href="{SERVER_BASE_URL}/static/css/bootstrap-glyphicons.min.css?5" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{SERVER_BASE_URL}/static/css/flags.css" />


	<script type="text/javascript" src="{SERVER_BASE_URL}/static/js/sorttable.js?2"></script>
	<script type="text/javascript" src="{SERVER_BASE_URL}/static/js/table-head.js?2"></script>
	<script type="text/javascript" src="{SERVER_BASE_URL}/static/js/bootbox.min.js?2"></script>
	<script type="text/javascript" src="{SERVER_BASE_URL}/static/js/clipboard.min.js?4"></script>

	<link rel="shortcut icon" href="files/img/favicon.ico" />
	<link rel="icon" type="image/png" sizes="32x32" href="files/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="files/img/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="files/img/favicon-16x16.png">


	<meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" /> 
	<meta name="referrer" content="no-referrer" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">

	<title>OluxShop</title>
	<script type="text/javascript">
		function ajaxinfo() {
			$.ajax({
				type: 'GET',
				url: 'ajaxinfo.html?x=1364d4v2t2-' + Math.random(),
				timeout: 10000,

				success: function (data) {
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
		setInterval(function () {ajaxinfo()}, 60000);
		var cntrlIsPressed = false;	
		$(document).keydown(function(event){
		    if(event.which=="17")
		        cntrlIsPressed = true;
		    else 
		    	cntrlIsPressed = false;
		});

		$(document).keyup(function(){
		    cntrlIsPressed = false;
		});

	/*
		function pageDiv(n, t, u, x) {


			if (cntrlIsPressed) {
				var win = window.open(u, '_blank');
  				win.focus();
				return false;
			}
			if (x == 1) {
				ajaxinfo();
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
			$("#mainDiv").html('<div id="mydiv"><img src="{SERVER_BASE_URL}/static/img/load2.gif" class="ajax-loader"></div>').show();
			$.ajax({
				type: 'GET',
				url: 'divPage' + n + '.html?x=' + Math.random(),
				success: function (data) {
					$("#mainDiv").html(data).show();
					var newTableObject = document.getElementById('table');
					if (newTableObject){
						sorttable.makeSortable(newTableObject);
						$(".sticky-header").floatThead({
							top: 60
						});
					}
					if (x == 0) {
						ajaxinfo();
					}
				}
			});
			if (typeof stopCheckBTC === 'function') {
				var a = stopCheckBTC();
			}

		}
*/
		$(window).on("popstate", function (e) {
			//location.replace(document.location);

		});

		$(window).on('load', function () {
	
			//pageDiv(1,'RDP - OluxShop','rdp.html', 1);
			//new ClipboardJS('.copyit');
			var clipboard = new ClipboardJS('.copyit');
			clipboard.on('success', function (e) {
				setTooltip(e.trigger, 'Copied!');
				hideTooltip(e.trigger);
				e.clearSelection();
			});

		});

		function setTooltip(btn, message) {
			$(btn).tooltip('hide')
				.attr('data-original-title', message)
				.tooltip('show');
		}

		function hideTooltip(btn) {
			setTimeout(function () {
				$(btn).tooltip('hide');
			}, 1000);
		}
		function openitem(order,code){
		  $("#myModalLabel").text('Order #'+order);
		  $("#modelbody").html('');
		  $('#myModal').modal('show');
		  $.ajax({
		    type:       'GET',
		    url:        'showOrder'+order+'-'+code+'.html',
		    success:    function(data)
		    {
		        $("#modelbody").html(data);
		    }});

		}
	</script>
		<style type="text/css">
			.dropdown:hover>.dropdown-menu {
  				display: block;
  				margin:0rem;
			}
			.dropdown > .dropdown-toggle:active {
   				pointer-events: none;
			}
			#mydiv  {
				height: 600px;
				position: relative;
			}
			.ajax-loader {
				position: absolute;
				left: 0;
				top: 0;
				right: 0;
				bottom: 0;
				margin: auto; /* presto! */
			}
			body {
    			padding-top:75px;
			}
			table.floatThead-table {
			    border-top: none;
			    border-bottom: none;
			    background-color: #fff;
			    cursor: pointer;
			}
			table th:not(.sorttable_sorted):not(.sorttable_sorted_reverse):not(.sorttable_nosort):after { 
			    content: " \25BE" 
			}
		</style>
</head>
<body>
	<nav class="navbar navbar-expand navbar-dark bg-primary  fixed-top">
		<a class="navbar-brand d-none d-lg-block" href="/index" ><span class="glyphicon glyphicon-fire"></span> <span> Olux Shop</span></a>
		<a class="navbar-brand d-block d-lg-none" href="/index" ><span class="glyphicon glyphicon-fire"></span> <span></span></a>


		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
			 	<ul class="navbar-nav">
			 		<li class="nav-item dropdown">
			 			<a class="nav-link dropdown-toggle d-none d-md-block" data-toggle="dropdown" href="#" id="hosts" role="button"><i class="fas fa-server"></i> Hosts  <span class="caret"></span></a>
			 			<a class="nav-link dropdown-toggle d-block d-md-none" data-toggle="dropdown" href="#" id="hosts" role="button"><i class="fas fa-server"></i><span class="caret"></span></a>
			 				<div class="dropdown-menu" aria-labelledby="hosts">
			 					<a class="dropdown-item" href="/rdp" onclick="pageDiv(1,'RDP - OluxShop','rdp.html',0); return false;"><i class="fas fa-desktop fa-fw"></i> RDPs <span class="badge badge-light" id="rdp"></span></a>
			 					<a class="dropdown-item" href="/ssh" onclick="pageDiv(2,'Root SSH/WHM - OluxShop','ssh.html',0); return false;"><i class="fas fa-terminal fa-fw"></i> SSH(VPS) <span class="badge badge-light" id="ssh"></span></a>
			 					<a class="dropdown-item" href="/cPanel" onclick="pageDiv(3,'cPanel - OluxShop','cPanel.html',0); return false;"><i class="fas fa-tools fa-fw"></i> cPanels <span class="badge badge-light" id="cpanel"></span></a>
			 					<a class="dropdown-item" href="/shell" onclick="pageDiv(4,'Shell - OluxShop','shell.html',0); return false;"><i class="fas fa-file-code fa-fw"></i> Shells <span class="badge badge-light" id="shell"></span></a>
			 				</div>
			 		</li>
			 		<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle d-none d-md-block" data-toggle="dropdown" href="#" id="mail"><i class="fas fa-mail-bulk"></i> Send <span class="caret"></span></a>
						<a class="nav-link dropdown-toggle d-block d-md-none" data-toggle="dropdown" href="#" id="mail"><i class="fas fa-mail-bulk"></i><span class="caret"></span></a>

			 				<div class="dropdown-menu" aria-labelledby="send">
			 					<a class="dropdown-item" href="/mailer" onclick="pageDiv(5,'PHP Mailer - OluxShop','mailer.html',0); return false;"><i class="fas fa-leaf fa-fw"></i> PHP Mailers <span class="badge badge-light" id="mailer"></span></a>
			 					<a class="dropdown-item" href="/smtp" onclick="pageDiv(6,'SMTP - OluxShop','smtp.html',0); return false;"><i class="fas fa-envelope fa-fw"></i> SMTPs <span class="badge badge-light" id="smtp"></span></a>
			 				</div>						
					</li>
			 		<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle d-none d-md-block" data-toggle="dropdown" href="#" id="maillist"><i class="fas fa-address-book"></i></i> Leads <span class="caret"></span></a>
						<a class="nav-link dropdown-toggle d-block d-md-none" data-toggle="dropdown" href="#" id="maillist"><i class="fas fa-address-book"></i></i><span class="caret"></span></a>

			 				<div class="dropdown-menu" aria-labelledby="maillist">
			 					<a class="dropdown-item" href="/leads" onclick="pageDiv(7,'Leads - OluxShop','leads.html',0); return false;"><i class="fas fa-at fa-fw"></i> Leads <span class="badge badge-light" id="leads"></span></a>
			 				</div>						
					</li>
			 	</ul>
			 	<ul  class="navbar-nav ml-auto">
					<li class="nav-item" >
						<a href="seller" id="seller"></a>
					</li>
			 		<li class="nav-item dropdown">
			 			<a class="nav-link dropdown-toggle d-none d-md-block" data-toggle="dropdown" href="#" id="mytickets" role="button"><i class="fas fa-inbox"></i> Tickets <span id="alltickets"></span> <span class="caret"></span></a>
			 			<a class="nav-link dropdown-toggle d-block d-md-none" data-toggle="dropdown" href="#" id="mytickets" role="button"><i class="fas fa-inbox"></i><span id="alltickets"></span> <span class="caret"></span></a>
			 				<div class="dropdown-menu" aria-labelledby="mytickets">
			 					<a class="dropdown-item" href="/oluxclone/support/tickets" onclick="pageDiv(9,'Tickets - OluxShop','tickets.html',0); return false;"><i class="fas fa-comments fa-fw"></i> Tickets <span id="tickets"></span></a>
			 					<a class="dropdown-item" href="/oluxclone/support/reports" onclick="pageDiv(10,'Reports - OluxShop','reports.html',0); return false;"><i class="fas fa-flag fa-fw"></i> Reports <span  id="reports"></span></a>
			 				</div>

			 		</li>
					<li class="nav-item" >
													<a  class="btn btn-outline-info" href="addBalance.html" onclick="pageDiv(11,'Add Balance - OluxShop','addBalance.html',0); return false;"><span id="balance"></span> <i class="fas fa-plus-circle"></i></a>
											</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle d-none d-md-block" data-toggle="dropdown" href="#" id="account" role="button"><i class="fas fa-user"></i> My Account<span class="caret"></span></a>
						<a class="nav-link dropdown-toggle d-block d-md-none" data-toggle="dropdown" href="#" id="account" role="button"><i class="fas fa-user"></i><span class="caret"></span></a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="account">
								
								
								
								<a class="dropdown-item" href="setting.html" onclick="pageDiv(12,'Setting - OluxShop','setting.html',0); return false;"><i class="fas fa-user-cog fa-fw"></i> Setting</a>
								
								
								
								
								<a class="dropdown-item" href="/oluxclone/account/orders" onclick="pageDiv(13,'Orders - OluxShop','orders.html',0); return false;"><i class="fas fa-shopping-cart fa-fw"></i> My Orders</a>. 
								
								
								
								<a class="dropdown-item"  waves-effect waves-light href="addBalance.html" onclick="pageDiv(11,'Add Balance - OluxShop','addBalance.html',0); return false;" <i class="fas fa-dollar-sign fa-fw"></i> Add Balance</a>
								
								
								
								
								
								
								
								<a class="dropdown-item" href="logout.html" ><i class="fas fa-sign-out-alt fa-fw"></i> Logout</a>
							</div>
					</li>			 		
			 		
			 	</ul>
					

			 </div>

	</nav>
	<div class="container">

<ul class="nav nav-tabs">
    
    
  <li class="nav-item">
    
    
    
    <a class="nav-link active" data-toggle="tab" href="#filter"><i class="fas fa-filter"></i> Filter</a>
 
 </li>
</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade show active" id="filter">
    <table class="table table-borderless "><thead><tr><th class='sorttable_nosort'>Country</th>
<th class='sorttable_nosort'>Description</th>
<th class='sorttable_nosort'>Domains</th>
<th class='sorttable_nosort'>Seller</th>
<th class='sorttable_nosort'></th></tr></thead><tbody><tr><td><select class='filterselect form-control input-sm' name="leads_country"><option value="">ALL</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Belgium">Belgium</option><option value="Brazil">Brazil</option><option value="Bulgaria">Bulgaria</option><option value="Canada">Canada</option><option value="China">China</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Egypt">Egypt</option><option value="Finland">Finland</option><option value="France">France</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="India">India</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Korea, Republic of">Korea, Republic of</option><option value="Kuwait">Kuwait</option><option value="Liechtenstein">Liechtenstein</option><option value="Malaysia">Malaysia</option><option value="Mix">Mix</option><option value="Netherlands">Netherlands</option><option value="Norway">Norway</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Spain">Spain</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Taiwan, Province of China">Taiwan, Province of China</option><option value="Turkey">Turkey</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="Viet Nam">Viet Nam</option></select></td><td><input class='filterinput form-control input-sm' name="leads_about" size='3'></td><td><input class='filterinput form-control input-sm' name="leads_domains" size='3'></td><td><select class='filterselect form-control input-sm' name="leads_seller"><option value="">ALL</option><option value="seller18">seller18</option><option value="seller26">seller26</option><option value="seller34">seller34</option><option value="seller37">seller37</option><option value="seller41">seller41</option><option value="seller44">seller44</option><option value="seller49">seller49</option><option value="seller50">seller50</option><option value="seller51">seller51</option><option value="seller73">seller73</option><option value="seller82">seller82</option><option value="seller85">seller85</option><option value="seller102">seller102</option><option value="seller107">seller107</option><option value="seller111">seller111</option><option value="seller118">seller118</option><option value="seller119">seller119</option><option value="seller122">seller122</option><option value="seller126">seller126</option><option value="seller131">seller131</option><option value="seller132">seller132</option><option value="seller139">seller139</option><option value="seller142">seller142</option><option value="seller148">seller148</option><option value="seller151">seller151</option><option value="seller153">seller153</option><option value="seller158">seller158</option><option value="seller159">seller159</option><option value="seller161">seller161</option><option value="seller166">seller166</option><option value="seller169">seller169</option><option value="seller182">seller182</option><option value="seller185">seller185</option><option value="seller190">seller190</option><option value="seller191">seller191</option><option value="seller194">seller194</option><option value="seller201">seller201</option><option value="seller206">seller206</option></select></td><td><button id='filterbutton'class="btn btn-primary btn" disabled>Filter <span class="glyphicon glyphicon-filter"></span></button></td></tr></tbody></table>  </div>
</div>

<table width="100%"  class="table table-striped table-bordered table-condensed sticky-header" id="table">
<thead>
    <tr>
      <th scope="col" >ID</th>
      <th scope="col" style="width:12%">Country</th>
      <th scope="col">Source</th>
      <th scope="col">Emails Domains</th>
      <th scope="col">Email N</th>
      <th scope="col">Sample</th>      
      <th scope="col">Seller</th>
      <th scope="col">Price</th>
      <th scope="col">Added on </th>
      <th scope="col">Buy</th>
    </tr>
</thead>
  <tbody>
    {<tr>
  <td>{id}</td>
  <td id="leads_country"><span class="flag-icon flag-icon-ca"></span> {country}</td>
  <td id="leads_about" style="font-size: 13px">{source}</td>
  <td id="leads_domains" style="font-size: 13px"><span class='text-muted'>{emails_domain}</span></td>
  <td sorttable_customkey="50000"><span title='50000'>{email_number}</span></td>
  <td><button type='button' class='btn btn-info btn-sm' onclick='leadinfo(38873,"20a3655bf1929312293931381f075ca3")'>Sample</button></td>
  <td id="leads_seller">{username}</td>
  <td>{price}</td>
  <td sorttable_customkey="20190727091657">{created_at}</td>
  <td><span id='buy_38873'><button type="button" class="btn btn-primary btn-sm" onclick='buyit(38873,"82ff37e78ba717a807e877becaa9bf90",8);'>Buy</button></span></td>      
</tr>}
  </tbody>
</table>
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
<script type="text/javascript">
$('#filterbutton').click(function () {$("#table tbody tr").each(function() {var ck1 = $.trim( $(this).find("#leads_country").text().toLowerCase() );var ck2 = $.trim( $(this).find("#leads_about").text().toLowerCase() );var ck3 = $.trim( $(this).find("#leads_domains").text().toLowerCase() );var ck4 = $.trim( $(this).find("#leads_seller").text().toLowerCase() ); var val1 = $.trim( $('select[name="leads_country"]').val().toLowerCase() );var val2 = $.trim( $('input[name="leads_about"]').val().toLowerCase() );var val3 = $.trim( $('input[name="leads_domains"]').val().toLowerCase() );var val4 = $.trim( $('select[name="leads_seller"]').val().toLowerCase() ); if((ck1 != val1 && val1 != '' ) || ck2.indexOf(val2)==-1 || ck3.indexOf(val3)==-1 || (ck4 != val4 && val4 != '' )){ $(this).hide();  }else{ $(this).show(); } });$('#filterbutton').prop('disabled', true);});$('.filterselect').change(function () {$('#filterbutton').prop('disabled', false);});$('.filterinput').keyup(function () {$('#filterbutton').prop('disabled', false);});
function buyit(id,code,price){
  $('#myModal').modal('hide');
  bootbox.confirm("Are you sure?", function(result) {
        if(result ==true){

          balance = $('#balance').text();
          if (price <= balance){
              $("#buy_"+id).html('Purchasing...').show();
              $.ajax({
                type:       'GET',
                url:        'leadsbuy'+id+'-'+code+'.html',
                success:    function(data)
                {
                  $("#buy_"+id).html(data).show();
                  ajaxinfo();
                }});
          }
          else {
            bootbox.alert('<center><img src="files/img/balance.png"><h2><b>No enough balance !</b></h2><h4>Please refill your balance <a class="btn btn-primary btn-xs"  href="addBalance.html" onclick="window.open(this.href);return false;" >Add Balance <span class="glyphicon glyphicon-plus"></span></a></h4></center>', function() {});}}
  });
}
function leadinfo(id,code){
   $("#myModalLabel").text('Sample');
   $("#modelbody").html('');
   $('#myModal').modal('show');
      $.ajax({
        type:       'GET',
        url:        'leadsshow'+id+'-'+code+'.html',
        success:    function(data)
        {
            $("#modelbody").html(data);
        }});   

}


</script>

</body>
</html>
