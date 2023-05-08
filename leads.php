
<!doctype html>
<html>
<?php
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
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="alfacoins-site-verification" content="5ef8c2279aa605ef8c2279aa965ef8c2279aacb_ALFAcoins">
		<meta name="revisit-after" content="2 days">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script src="/cdn-cgi/apps/head/AGN3NmUziwZfMV-TNTe1kdyeR2Y.js"></script>
		<link rel="shortcut icon" href="../../favicon.ico">
		<title>RDP</title>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
		<script src="http://xbaseleets.xyz/layouts/js/jquery-3.4.1.min.js"></script>
		<script src="http://xbaseleets.xyz/layouts/js/clipboard.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer">
		<script src="http://xbaseleets.xyz/layouts/js/bootstrap.min.js"></script>
		<script src="http://xbaseleets.xyz/layouts/js/bootbox.min.js"></script>
		<link rel="stylesheet" type="text/css" href="http://xbaseleets.xyz/layouts/css/flags.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		<link href="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
		<script async="" src="//www.googletagmanager.com/gtag/js?id=UA-177092549-1"></script>
		<script>
        window.dataLayer = window.dataLayer || [];
 
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('set', {
            '$usrid': 'USER_ID'
        }); // Set the user ID using signed-in user_id.
        gtag('config', 'UA-177092549-1');
    
		
		</script>
		<link rel="stylesheet" href="http://xbaseleets.xyz/layouts/css/all.min.css">
		<link rel="stylesheet" href="http://xbaseleets.xyz/layouts/css/main.css?v=12.9">
		<link rel="stylesheet" href="http://xbaseleets.xyz/layouts/css/util.css">
		<style>
        body {
            padding-top: 80px
        }
    
		
		</style>
		<link rel="stylesheet" href="http://xbaseleets.xyz/layouts/fonts/iconic/css/material-design-iconic-font.min.css">
		<script src="http://xbaseleets.xyz/layouts/js/main.js"></script>
		<script type="text/javascript">
        // Notice how this gets configured before we load Font Awesome
        window.FontAwesomeConfig = {
            autoReplaceSvg: false
        }
    
		
		</script>
		<style>
        @import url(//fonts.googleapis.com/css?family=Roboto:400);
 
        .navbar-nav .dropdown-menu {
            margin: 0 !important
        }<link rel="stylesheet" href="" />
    
		
		</style>
		<style>
    .display td {
        background: var(--color-card);
        color: var(--font-color);
 
    }
 
    example.dataTables_paginate .paginate_button.disabled:active {
 
        color: var(--font-color);
 
    }
 
    .alert-info {
        color: var(--color-info);
        background-color: var(--color-backinfo);
        border-color: var(--color-borderinfo);
 
   
       #example_filter {
        color: var(--font-color);
    }
 
    #example_length {
        color: var(--font-color);
    }
 
    #example_paginate {
        color: var(--font-color);
    }
 
    #example_info {
        color: var(--font-color);
    }

     %example_tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }

		
		</style>
	</head>
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
		<script>
        function setTheme(themeName) {
            localStorage.setItem('theme', themeName);
            document.documentElement.className = themeName;
        }
 
        // function to toggle between light and dark theme
        function toggleTheme() {
            if (localStorage.getItem('theme') === 'theme-dark') {
                setTheme('theme-light');
            } else {
                setTheme('theme-dark');
            }
        }
 
        // Immediately invoked function to set the theme on initial load
        (function() {
            if (localStorage.getItem('theme') === 'theme-dark') {
                setTheme('theme-dark');
                document.getElementById('slider').checked = false;
            } else {
                setTheme('theme-light');
                document.getElementById('slider').checked = true;
            }
        })();
    
		
		</script>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>XbaseTools</title>
		<link rel="stylesheet" href="layouts/css/bootstrap.min.css">
		<script src="layouts/js/jquery-3.4.1.min.js"></script>
		<script src="layouts/js/clipboard.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="layouts/js/bootstrap.min.js"></script>
		<script src="layouts/js/bootbox.min.js"></script>
		<link rel="stylesheet" type="text/css" href="layouts/css/flags.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
		<script src="script"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
		<link rel="stylesheet" href="js/jquery.dataTables.min.css">
		<script src="js/jquery.dataTables.min.js"></script>
		<link href="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/css/mdb.min.css" rel="stylesheet">
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/js/mdb.min.js"></script>
		<script async="" src="//www.googletagmanager.com/gtag/js?id=UA-177092549-1"></script>
		<script>
        window.dataLayer = window.dataLayer || [];
 
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('set', {
            '$usrid': 'USER_ID'
        }); // Set the user ID using signed-in user_id.
        gtag('config', 'UA-177092549-1');
    
		
		</script>
		<link rel="stylesheet" href="layouts/css/all.min.css">
		<link rel="stylesheet" href="layouts/css/custom.css">
		<link rel="stylesheet" href="layouts/css/custom.min.css">
		<style>
        body {
            padding-top: 80px
        }
    
		
		</style>
		<link rel="stylesheet" href="layouts/fonts/iconic/css/material-design-iconic-font.min.css">
		<script src="layouts/js/main.js"></script>
		<script type="text/javascript">
        // Notice how this gets configured before we load Font Awesome
        window.FontAwesomeConfig = {
            autoReplaceSvg: false
        }
    
		
		</script>
		<style>
        @import url(//fonts.googleapis.com/css?family=Roboto:400);
 
        .navbar-nav .dropdown-menu {
            margin: 0 !important
        }
    
		
		</style>
		<style>



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
		<script>
        function setTheme(themeName) {
            localStorage.setItem('theme', themeName);
            document.documentElement.className = themeName;
        }
        // function to toggle between light and dark theme
        function toggleTheme() {
            if (localStorage.getItem('theme') === 'theme-dark') {
                setTheme('theme-light');
            } else {
                setTheme('theme-dark');
            }
        }
        // Immediately invoked function to set the theme on initial load
        (function() {
            if (localStorage.getItem('theme') === 'theme-dark') {
                setTheme('theme-dark');
                document.getElementById('slider').checked = false;
            } else {
                setTheme('theme-light');
                document.getElementById('slider').checked = true;
            }
        })();
    
		
		</script>
		<header>
			<nav class="navbar navbar-expand-xl navbar  navbar-light " style="
                                                          position:fixed;
                                                          background-color: var               
                                                          (--color-nav);
                                                          z-index:1;
                                                          top:0;
                                                          left:0;
                                                          right:0;
                                                          line-height: 1.5;
                                                          font-family: 'Lato',                   
                                                          sans-serif;
                                                          font-size: 15px;
                                                          padding-top: 0.5rem;
                                                          padding-right: 1rem;
                                                          padding-bottom: 0.5re;
                                                          padding-left: 1rem;
                                                        ">
				<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2 home_nav">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="main_site_name nav-item nav-link active" href="homepage">
								<i class="middle fab fa-2x fa-redhat pink-color"></i>
								<span class="middle site_name_span">XBASETOOLS</span>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownHosts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-server orange-color">
								</i>
								Hosts
							</a>
							<div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownHosts">
								<a class="dropdown-item " data-title="Cpanels" href="cpanels">
									Cpanels
									<span class="badge badge-info d-blue-background">
										<span id="cpanel"></span>
									</span>
								</a>
								<a class="dropdown-item " data-title="Shells" href="shells">
									Shells
									<span class="badge badge-info d-blue-background">
										<span id="shell"></span>
									</span>
								</a>
								<a class="dropdown-item " data-title="RDP" href="rdp">
									RDP
									<span class="badge badge-info d-blue-background" span="" id="rdp"></span>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownSend" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-paper-plane text-primary"></i>
								Send
							</a>
							<div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownSend">
								<a class="dropdown-item " data-title="SMTP" href="smtp">SMTP
									<span class="badge badge-info d-blue-background">
										<span id="smtp"></span>
									</span>
								</a>
								<a class="dropdown-item" data-title="Mailers" href="mailers">Mailers
									<span class="badge badge-info d-blue-background">
										<span id="mailer"></span>
									</span>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBanks" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-address-book pink-color"></i>
								Bank-Logs
							</a>
							<div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownBanks">
								<a class="dropdown-item" data-title="Leads 100% Checked Email list" href="Banks">
									<span class="fa fa-fire orange-color"></span>huntington bank logs(other infos)<span class="badge badge-info d-blue-background">
										<span id="banks"></span>
									</span>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBusiness" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-briefcase green-color"></i>
								cPanels Webmail
							</a>
							<div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownBusiness">
								<a class="dropdown-item" data-title="webmail" href="#">
									<span class="fa fa-fire orange-color"></span>cPanels Webmail<span class="badge badge-info d-blue-background">0</span>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLeads" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-address-book pink-color">
								</i>
								Leads
							</a>
							<div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownLeads">
								<a class="dropdown-item" data-title="Leads" href="leads">
									<span class="fa fa-fire orange-color"></span>100% Checked Email list
									<span class="badge badge-info d-blue-background">
										<span id="leads"></span>
									</span>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAccounts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-users salmon-color">
								</i>
								Accounts
							</a>
							<div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownAccounts">
								<a class="dropdown-item" data-title="premium" href="premium">
									<span class="fa fa-fire orange-color"></span>
									Dating accounts
									<span class="badge badge-info d-blue-background">
										<span id-"accounts"=""></span>
									</span>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" style="color: var(--font-color);" href="#" id="navbarDropdownTutorials" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-address-book pink-color">
								</i>
								Tutorials
							</a>
							<div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownTutorials">
								<a class="dropdown-item" data-title="Tutorials/Methods" href="tutorial ">
									<span class="fa fa-fire orange-color"></span>Tutorials/Methods
									<span class="badge badge-info d-blue-background">
										<span id="tutorial"></span>
									</span>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownScript" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-users salmon-color">
								</i>
								Scampage
							</a>
							<div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownScripts">
								<a class="dropdown-item" data-title="Scampage" href="scampage ">
									<span class="fa fa-fire orange-color"></span>
									Scampage
									<span class="badge badge-info d-blue-background">
										<span id="scampage"></span>
									</span>
								</a>
							</div>
						</li>
					</ul>
				</div>
				<div class="mx-auto order-0">
					<a class="navbar-brand mx-auto" href="#"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
						<span class="fa fa-bars"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse w-100 order-3 dual-collapse2 user_nav">
					<ul class="navbar-nav ml-auto">
						<div id="notifications_container" data-href="notifications/get">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownNotifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-bell red-color"></i>
									<div class="badge badge-info d-blue-background">
										0
									</div>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownNotifications">
									<a class="dropdown-item" href="javascript:;">
										No Notifications
									</a>
								</div>
							</li>
						</div>
						<li class="nav-item">
							<a class="nav-link" data-title="Add Balance" href="add-balance" style="color: var(--font-color);" role="button" aria-haspopup="true" aria-expanded="false">
								<div class="badge badge-danger">
									<span id="buy_bslance"></span>
									<span class="px-2">
										<i class="fa fa-plus"></i>
									</span>
								</div>
							</a>
						</li>
						<li class="nav-item dropdown">
							&gt;
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" style="color: var(--font-color);" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Report<span class="badge badge-success">
									<span id="tickets">
									</span>
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
								<a class="nav-link dropdown-toggle" style="color: var(--font-color);" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								</a>
								<a class="dropdown-item" data-title="My Tickets " href="tickets">My Tickets
								</a>
								<a class="dropdown-item" data-title="My Reports" href="reports">My Reports
								</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" style="color: var(--font-color);" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								XBASETOOL
								<i class="fa fa-user-secret"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right" style="color: var(--font-color);" aria-labelledby="navbarDropdownPortfolio">
								<a class="dropdown-item" data-title="Settings" href="settings">Settings
									<i class="fa fa-cog"></i>
								</a>
								<a class="dropdown-item" data-title="Orders" href="orders">Orders
									<span class="badge badge-success">
										<span id="orders"></span>
										<i class="fa fa-shopping-cart"></i>
									</span>
								</a>
								<a class="dropdown-item" data-title="Add Balance" href="add-balance">Add Balance
									<i class="fa fa-money-bill-alt"></i>
								</a>
								<a class="dropdown-item noAjax" href="logout" style="color: var(--font-color);">Logout
									<i class="fa fa-door-open"></i>
								</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<style>
        .modal-dialog.modal-frame.modal-top.modal-notify.modal-danger .modal-body,
        .modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger .modal-body {
            padding-top: 35px;
        }
 
        .modal-dialog.modal-frame.modal-top.modal-notify.modal-danger,
        .modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger {
            max-width: 500px !important;
            margin: 1.75rem auto !important;
            position: relative;
            width: auto !important;
            pointer-events: none;
        }
 
        a.closearb {
            position: absolute;
            top: 2.5px;
            right: 2.5px;
            display: block;
            width: 30px;
            height: 30px;
            text-indent: -9999px;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center center;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAAA3hJREFUaAXlm8+K00Acx7MiCIJH/yw+gA9g25O49SL4AO3Bp1jw5NvktC+wF88qevK4BU97EmzxUBCEolK/n5gp3W6TTJPfpNPNF37MNsl85/vN/DaTmU6PknC4K+pniqeKJ3k8UnkvDxXJzzy+q/yaxxeVHxW/FNHjgRSeKt4rFoplzaAuHHDBGR2eS9G54reirsmienDCTRt7xwsp+KAoEmt9nLaGitZxrBbPFNaGfPloGw2t4JVamSt8xYW6Dg1oCYo3Yv+rCGViV160oMkcd8SYKnYV1Nb1aEOjCe6L5ZOiLfF120EjWhuBu3YIZt1NQmujnk5F4MgOpURzLfAwOBSTmzp3fpDxuI/pabxpqOoz2r2HLAb0GMbZKlNV5/Hg9XJypguryA7lPF5KMdTZQzHjqxNPhWhzIuAruOl1eNqKEx1tSh5rfbxdw7mOxCq4qS68ZTjKS1YVvilu559vWvFHhh4rZrdyZ69Vmpgdj8fJbDZLJpNJ0uv1cnr/gjrUhQMuI+ANjyuwftQ0bbL6Erp0mM/ny8Fg4M3LtdRxgMtKl3jwmIHVxYXChFy94/Rmpa/pTbNUhstKV+4Rr8lLQ9KlUvJKLyG8yvQ2s9SBy1Jb7jV5a0yapfF6apaZLjLLcWtd4sNrmJUMHyM+1xibTjH82Zh01TNlhsrOhdKTe00uAzZQmN6+KW+sDa/JD2PSVQ873m29yf+1Q9VDzfEYlHi1G5LKBBWZbtEsHbFwb1oYDwr1ZiF/2bnCSg1OBE/pfr9/bWx26UxJL3ONPISOLKUvQza0LZUxSKyjpdTGa/vDEr25rddbMM0Q3O6Lx3rqFvU+x6UrRKQY7tyrZecmD9FODy8uLizTmilwNj0kraNcAJhOp5aGVwsAGD5VmJBrWWbJSgWT9zrzWepQF47RaGSiKfeGx6Szi3gzmX/HHbihwBser4B9UJYpFBNX4R6vTn3VQnez0SymnrHQMsRYGTr1dSk34ljRqS/EMd2pLQ8YBp3a1PLfcqCpo8gtHkZFHKkTX6fs3MY0blKnth66rKCnU0VRGu37ONrQaA4eZDFtWAu2fXj9zjFkxTBOo8F7t926gTp/83Kyzzcy2kZD6xiqxTYnHLRFm3vHiRSwNSjkz3hoIzo8lCKWUlg/YtGs7tObunDAZfpDLbfEI15zsEIY3U/x/gHHc/G1zltnAgAAAABJRU5ErkJggg==);
        }
    
			
			</style>
			<div class="d-flex flex-row-reverse mt-0">
				<div class="p-2">
					<label id="switch" class="switch">
						<input type="checkbox" onchange="toggleTheme()" id="slider">
						<span class="slider round"></span>
					</label>
				</div>
			</div>
			<div class="alert alert-info text-left" role="alert" style="margin: 15px;">
				<ul>
					<li>
						Click on check button before buy any RDP to know if it's work or not.</li>
					<li>There is
						<b>
							76
						</b>
						RDPs Available.</li>
				</ul>
			</div>
			<div id="example_wrapper" class="dataTables_wrapper">
				<div class="dataTables_length" id="example_length">
					<label>Show
						<select name="example_length" aria-controls="example" class="">
							<option value="10">10</option>
						</select>
					</label>
				</div>
				<div class="dataTables_length" id="example_length">
					<label>Show
						<select name="example_length" aria-controls="example" class="">
							<option value="10">10</option>
						</select>
					</label>
				</div>
				<option value="50">50</option>
				<option value="100">100</option>
				entries
			</div>
			<div id="example_filter" class="dataTables_filter">
				<label>Search:<input type="search" class="" placeholder="" aria-controls="example">
				</label>
			</div>
			<table id="example" class="display dataTable" style="width:100%" aria-describedby="example_info">
				<thead>
					<tr>
						<th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 39.140625px;">Name</th>
						<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 54.421875px;">Position</th>
						<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 39.484375px;">Office</th>
						<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Extn.: activate to sort column ascending" style="width: 33.71875px;">Extn.</th>
						<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 52.578125px;">Start date</th>
						<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 41.484375px;">Salary</th>
					</tr>
				</thead>
				<tbody>
					<tr class="odd">
						<td valign="top" colspan="6" class="dataTables_empty">Loading...</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th rowspan="1" colspan="1">Name</th>
						<th rowspan="1" colspan="1">Position</th>
						<th rowspan="1" colspan="1">Office</th>
						<th rowspan="1" colspan="1">Extn.</th>
						<th rowspan="1" colspan="1">Start date</th>
						<th rowspan="1" colspan="1">Salary</th>
					</tr>
				</tfoot>
			</table>
			<div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
			<div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
				<a class="paginate_button previous disabled" aria-controls="example" aria-disabled="true" aria-role="link" data-dt-idx="previous" tabindex="-1" id="example_previous">Previous</a>
				<span>
				</span>
				<a class="paginate_button next disabled" aria-controls="example" aria-disabled="true" aria-role="link" data-dt-idx="next" tabindex="-1" id="example_next">Next</a>
			</div>
			<script>
document.addEventListener('DOMContentLoaded',
 function () {
    let table = new DataTable('#example', {
        ajax: function (d, cb) {
            fetch('../ajax/data/objects.php')
                .then(response => response.json())
                .then(data => cb(data));
        },
        columns: [
            { data: 'name' },
            { data: 'position' },
            { data: 'office' },
            { data: 'extn' },
            { data: 'start_date' },
            { data: 'salary' }
        ]
    } );
} );

			
			</script>
		</header>
	</body>
</html>