


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
?><!doctype html>
<html>
<meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" />
<meta name="referrer" content="no-referrer" />
 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>JeruxShop</title>
    <link rel="shortcut icon" href="files/img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="layout/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="layout/css/mdb.min.css" />
    <link rel="stylesheet" type="text/css" href="files/css/flag.min.css" />
    <style>
        body {
            padding-top: 80px
        }
    </style>
    <link rel="stylesheet" href="layout/css/util.css" />
    <link rel="stylesheet" href="layout/css/main.css" />
    <!-- JQuery -->
    <script src="layout/js/jquery-3.4.1.min.js"></script>
  <!-- Main Navigation -->
     <div id=mainDiv" class="-Header">
	
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
																								<!-- Navbar -->
								<script>
									 // function to toggle between light and dark theme
        function toggleTheme() {
            if (localStorage.getItem('theme') === 'theme-dark') {
                setTheme('theme-light');
            } else {
                setTheme('theme-dark');
            }
        }
        // Immediately invoked function to set the theme on initial load
        (function () {
            if (localStorage.getItem('theme') === 'theme-dark') {
                setTheme('theme-dark');
                document.getElementById('slider').checked = false;
            } else {
                setTheme('theme-light');
              document.getElementById('slider').checked = true;
            }
        })();
								</script>

								 														
<a class="navbar-brand" href="main" style="color: var(--font-color);"><img width="40px" src="layout/images/logo.png"> Odin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="navbar-toggler-icon"></i>
        </button>
        <div class="collapse navbar-collapse order-1" id="navbarSupportedContent">

	 <span class="midele navbar-toggler-icon"></span> </button>
																											            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent-4">
																																								
																																								<ul class="navbar-nav">
                            <!--------------Host--------------->
                        <li class="nav-item dropdown mr-auto">
                            <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-warehouse fa-sm orange-text"></i>Hosts </a>
                            <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="rdp" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> RDPs <span class="badge badge-primary">75</span></span></a>
                                <a class="dropdown-item" href="cPanel" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> cPanels <span class="badge badge-primary">14119</span></span></a>
                                <a class="dropdown-item" href="shell" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> Shells <span class="badge badge-primary">1041</span></span></a>
                                <!---  <a class="dropdown-item" href="ssh" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> SSH/WHM <span class="badge badge-primary">143</span></span></a>--->
                            </div>
                        </li>
                            <!--------------Host--------------->
                            <li class="nav-item dropdown mr-auto">
                                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-leaf fa-fw fa-sm text-success"> </i> Send </a>
                                <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="smtp" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> <span class="badge badge-primary">549</span></span></a>
                                    <a class="dropdown-item" href="mailer" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Mailers <span class="badge badge-primary">343</span></span></a>
                                </div>
                            </li>
                            <!--------------Host--------------->
                                <li class="nav-item dropdown mr-auto">
                                    <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-google-play fa-sm text-success"></i> Banks </a>
                                    <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="smtp" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i> SMTPs <span class="badge badge-primary">2617</span></span></a>
                                    </div>
                                </li>
                            <!--------------Host--------------->
                                    <li class="nav-item dropdown mr-auto">
                                        <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-mail-bulk fa-sm pink-color"></i>Leads </a>
                                        <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdownAccounts">
                                            <a class="dropdown-item" href="leads" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> Premium / Marketing <span class="badge badge-primary">0</span></span></a>
                                            <a class="dropdown-item" href="leads-1" style="color: var(--font-color);"><span class="px-2"><i class="fa fa-fire orange-color"></i> Email Only <span class="badge badge-primary">163</span></span></a>
                                            <a class="dropdown-item" href="leads-2" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-passport"></i> Combo Email:Password <span class="badge badge-primary">24</span></span></a>
                                            <a class="dropdown-item" href="leads-3" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-battle-net"></i> Combo Username:Password <span class="badge badge-primary">1</span></span></a>
                                            <a class="dropdown-item" href="leads-4" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-at"></i> Email Access <span class="badge badge-primary">22</span></span></a>
                                            <a class="dropdown-item" href="leads-6" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-mobile-alt"></i> Phone Number Only <span class="badge badge-primary">31</span></span></a>
                                            <a class="dropdown-item" href="leads-7" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-phone-square"></i> Combo Phone:Password <span class="badge badge-primary">3</span></span></a>
                                            <a class="dropdown-item" href="leads-8" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-inbox"></i> Full Data <span class="badge badge-primary">0</span></span></a>
                                            <a class="dropdown-item" href="leads-9" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-facebook"></i> Social Media Data <span class="badge badge-primary">0</span></span></a>
                                        </div>
                                    </li>
                            <!--------------Host--------------->
                                        <li class="nav-item dropdown mr-auto">
                                            <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-friends fa-sm"></i> Accounts
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="accounts-1" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-comments-dollar"></i> Marketing <span class="badge badge-primary">100</span></span></a>
                                                <a class="dropdown-item" href="accounts-2" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-server"></i> Hosting / Domain <span class="badge badge-primary">11</span></span></a>
                                                <a class="dropdown-item" href="accounts-3" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-gamepad"></i> Games <span class="badge badge-primary">18</span></span></a>
                                                <a class="dropdown-item" href="accounts-4" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-cubes"></i> VPN/Socks Proxy>Email Access <span class="badge badge-primary">1191</span></span></a>
                                                <a class="dropdown-item" href="accounts-5" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-shopping-cart"></i> Shopping{Amazon, Ebay, ...} <span class="badge badge-primary">94</span></span></a>
                                                <a class="dropdown-item" href="accounts-6" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-ethernet"></i> Programs {Antivirus, Adobe, ...} <span class="badge badge-primary">0</span></span></a>
                                                <a class="dropdown-item" href="accounts-7" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-stream"></i> Stream {Netflix,HBO, ... } <span class="badge badge-primary">130</span></span></a>
                                                <a class="dropdown-item" href="accounts-8" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-user-plus"></i> Dating <span class="badge badge-primary">87</span></span></a>
                                                <a class="dropdown-item" href="accounts-9" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-graduation-cap"></i> Learning{ Udacity, Udemy, Lynda, ... } <span class="badge badge-primary">14</span></span></a>
                                                <a class="dropdown-item" href="accounts-10" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-window-restore"></i> Torrent / File Host <span class="badge badge-primary">3</span></span></a>
                                                <a class="dropdown-item" href="accounts-11" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-phone-volume"></i> Voip / Sip <span class="badge badge-primary">0</span></span></a>
                                                <a class="dropdown-item" href="accounts-12" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-network-wired"></i> Other <span class="badge badge-primary">3</span></span></a>
                                            </div>
                                        </li>
                            <!--------------Host--------------->
																																								
                            <!--------------Host--------------->
                            <!--------------navbar-nav  profile--------------->
                                                    <ul class="navbar-nav profile">
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell text-danger"></i> <span class="badge badge-success">0</span></a>
                                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
                                                                <a class="dropdown-item" href="#" style="color: var(--font-color);">There is no new notifications</a>
																																	
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Ticket <span class="badge badge-success" id="alltickets">
                                                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
                                                                        <!-----------------------------------Tickets section---------------------------------------->
                                                                        <a class="dropdown-item" href="orders" style="color: var(--font-color );"><span class="px-2">Report Items </span></a>
                                                                        <!-----------------------------------Tickets section---------------------------------------->
                                                                        <a class="dropdown-item" href="tickets" style="color: var(--font-color);"><span class="px-2"> My Tickets </span></a>
                                                                        <!-----------------------------------Tickets section---------------------------------------->
                                                                        <a class="dropdown-item" href="OpenTicket" style="color: var(--font-color);"><span class="px-2">My Reports</span></a>
                                                                        <!-----------------------------------Tickets section---------------------------------------->
                                                                        <a class="dropdown-item" href="tickets" style="color: var(--font-color);"><span class="px-2"> New Tickets </span></a>
                                                                    </div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="addBalance" style="color: var(--font-color);" role="button" aria-haspopup="true" aria-expanded="false"><span class="badge badge-danger">
                                                                    0
                                                                    <span class="px-2"><i class="fa fa-plus"></i></span></span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> hustlersfather <i class="fa fa-user-secret" style="color: var(--font-color);"></i></a>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
                                                                <a class="dropdown-item" href="setting" style="color: var(--font-color);"><span class="px-2">Setting <i class="fa fa-cog"></i></span></a>
                                                                <a class="dropdown-item" href="seller-profile" style="color: var(--font-color);"><span class="px-2">Profile <i class="fa fa-user"></i></span></a>
                                                                <a class="dropdown-item" href="orders" style="color: var(--font-color);"><span class="px-2">My Orders <i class="fa fa-shopping-cart"></i></span></a>
                                                                <a class="dropdown-item" href="addBalance" style="color: var(--font-color);"><span class="px-2">Add Balance <i class="fa fa-money-bill-alt"></i></span></a>
                                                                <a class="dropdown-item" href="logout" style="color: var(--font-color);"><span class="px-2">Logout <i class="fa fa-door-open"></i></span></a>
                                                            </div>
                                                        </li>
 
                                                    </ul>
 
            </div>
    </nav>
				  <!————-navbarDropdown————->

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
<script id="data" type="application/json">
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
	  </script>
	  
