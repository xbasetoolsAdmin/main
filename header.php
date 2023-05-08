<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";
if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: login");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>
	  
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Main - Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/all.min.css">
	<link href="assets/css/style.min.css" rel="stylesheet">	
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="files/css/flags.css">
	<link rel="stylesheet" href="assets/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
	<style>body{padding-top:80px}</style>
	<font face="Arial">
<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/bootbox.min.js"></script>
<script type="text/javascript" src="assets/js/bootbox.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
<script src="assets/main.js"></script>
<script type="text/javascript">
            // Notice how this gets configured before we load Font Awesome
            window.FontAwesomeConfig = { autoReplaceSvg: false }
</script>
<style>
            @import url(//fonts.googleapis.com/css?family=Roboto:400);
            .navbar-nav .dropdown-menu
            {
            margin:0 !important
            }
			</style>		
            </head>
<style>

</style>

<body class="them">
 <style>
        .navbar-nav .dropdown-menu {
            margin: 0 !important
        }
 
        .theme-light {
            --color-primary: #0060df;
            --color-secondary: #ffffff;
            --color-secondary2: #ecf0f1;
            --color-accent: #fd6f53;
            --font-color: #000000;
            --color-nav: #ffffff;
            --color-dropdown: #ffffff;
            --color-card: #ffffff;
            --color-card2: #d1ecf1;
            --color-info: #0c5460;
            --color-backinfo: #d1ecf1;
            --color-borderinfo: #bee5eb;
 
        }
 
        .theme-dark {
            --color-primary: #17ed90;
            --color-secondary: #353B50;
            --color-secondary2: #353B50;
            --color-accent: #12cdea;
            --font-color: #ffffff;
            --color-nav: #363947;
            --color-dropdown: rgba(171, 205, 239, 0.3);
            --color-card: #262A37;
            --color-card2: #262A37;
            --color-info: #4DD0E1;
            --color-backinfo: #262A37;
            --color-borderinfo: #262A37;
        }
 
        .them {
 
            background: var(--color-secondary);
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
 
        .them h1 {
            color: var(--font-color);
            font-family: sans-serif;
        }
 
        .card-body {
            color: var(--font-color);
        }
 
        .them button {
            color: var(--font-color);
            background-color: #ffffff;
            padding: 10px 20px;
            border: 0;
            border-radius: 5px;
        }
 
        .navbar.navbar-light .navbar-toggler {
            color: var(--font-color);
        }
 
        /* The switch - the box around the slider */
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }
 
        /* Hide default HTML checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        } 
 
        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: 0.4s;
            transition: 0.4s;
        }
 
        .slider:before {
            position: absolute;
            content: "";
            height: 40px;
            width: 40px;
            left: 0px;
            bottom: 4px;
            top: 0;
            bottom: 0;
            margin: auto 0;
            -webkit-transition: 0.4s;
            transition: 0.4s;
            box-shadow: 0 0px 15px #2020203d;
            background: white url('https://i.ibb.co/FxzBYR9/night.png');
            background-repeat: no-repeat;
            background-position: center;
        }
 
        input:checked+.slider {
            background-color: #2196f3;
        }
 
        input:focus+.slider {
            box-shadow: 0 0 1px #2196f3;
        }
 
        input:checked+.slider:before {
            -webkit-transform: translateX(24px);
            -ms-transform: translateX(24px);
            transform: translateX(24px);
            background: white url('https://i.ibb.co/7JfqXxB/sunny.png');
            background-repeat: no-repeat;
            background-position: center;
        }
 
        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }
 
        .slider.round:before {
            border-radius: 50%;
        }
	
</style>

<style>
    .display td {
        background: var(--color-card);
        color: var(--font-color);
 
    }
 
    .dataTables_wrapper .dataTables_paginate .paginate_button {
 
        color: var(--font-color);
 
    }
 
    .dataTable_paginate .paginate_button {
        color: var(--font-color);
 
    }
 
    .alert-info {
        color: var(--color-info);
        background-color: var(--color-backinfo);
        border-color: var(--color-borderinfo);
 
    }
 
    .dataTable_filter {
        color: var(--font-color);
		
    }
 
    .dataTable_length {
        color: var(--font-color);
    }
 
    .dataTable_paginate {
        color: var(--font-color);
    }
 
    .dataTable_info {
        color: var(--font-color);
    }
</style>

 <style>
 
 
</style>


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
								<a class="dropdown-item" href="/oluxclone/account/orders" onclick="pageDiv(13,'Orders - OluxShop','orders.html',0); return false;"><i class="fas fa-shopping-cart fa-fw"></i> My Orders</a>
								<a class="dropdown-item"  href="addBalance.html" onclick="pageDiv(11,'Add Balance - OluxShop','addBalance.html',0); return false;"><i class="fas fa-dollar-sign fa-fw"></i> Add Balance</a>
								<a class="dropdown-item" href="logout.html" ><i class="fas fa-sign-out-alt fa-fw"></i> Logout</a>
							</div>
					</li>			 		
			 		
			 	</ul>
					

			 </div>

	</nav>
	<div class="container">