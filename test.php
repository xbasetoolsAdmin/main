	  
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

<header>

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
    <!-----------------------------------------------------------start custom navbar meunu----------------------------------------------------------->
    <nav class="navbar navbar-expand-xl navbar  navbar-light " style="
                                                          position:fixed;
                                                          background-color: var(--color-nav);
                                                          z-index:1;
                                                          top:0;
                                                          left:0;
                                                          right:0;
                                                          line-height: 1.5;
                                                          font-family: 'Lato', sans-serif;
                                                          font-size: 15px;
                                                          padding-top: 0.5rem;
                                                          padding-right: 1rem;
                                                          padding-bottom: 0.5rem;
                                                          padding-left: 1rem;">
        <!-----------------------------------------------------------end custom navbar meunu----------------------------------------------------------->
 
        <a class="navbar-brand" href="main" style="color: var(--font-color);"><img width="40px" src="../assets/images/logo.png"> XBASELEET</a>
        
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="navbar-toggler-icon"></i>
        </button>
        <div class="collapse navbar-collapse order-1" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
 
                <!-----------------------------------------------------------start custom navbar meunu----------------------------------------------------------->
 
                <!-----------------------------------------------------------START ACCOUNTS NAVBAR MENU----------------------------------------------------------->
                
                
                
                <li class="nav-item dropdown mr-auto"><a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-friends fa-sm"></i> Accounts</a>
                    
                    
                    
                    
                    <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="accounts-1" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-comments-dollar"></i> Leads <span class="badge badge-primary"><span id="leads"></span></span></a>
                    </div>
                </li>
                <!-----------------------------------------------------------END ACCOUNTS NAVBAR MENU----------------------------------------------------------->
 
                <!-----------------------------------------------------------START OFFERS NAVBAR MENU----------------------------------------------------------->
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" role="button" style="color: var(--font-color);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-drupal text-primary fa-sm"></i> sellers</a>
                    
                    
                    
                    
                    
                    <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="requests" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-user-plus"></i> Buyers Requests <span class="badge badge-primary"></span></span></a></div>
                </li>
                <!-----------------------------------------------------------END OFFERS NAVBAR MENU----------------------------------------------------------->
 
 
                <!-----------------------------------------------------------start custom navbar meunu----------------------------------------------------------->
                <li class="nav-item dropdown">
                    <a class="nav-link" href="offers" style="color: var(--font-color);"><i class="fas fa-user-secret text-primary fa-sm"></i> Bulk Offers</a>
                </li>
            </ul>
            

            <ul class="navbar-nav profile">
                <!-----------------------------------------------------------start custom navbar meunu----------------------------------------------------------->
 
 
                <li class="nav-item">
                    <a class="nav-link" href="addBalance" style="color: var(--font-color);" role="button" aria-haspopup="true" aria-expanded="false"><span class="badge badge-danger">
                            <span class="px-2">
                                <spam id="balance">
                                    <i class="fa fa-plus">
 
                                    </i>
                            </span>
                        </span>
                    </a>
                </li>
                <!-----------------------------------------------------------start custom navbar meunu----------------------------------------------------------->
 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Ticket <span class="badge badge-success">0</span></a>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
                        <a class="dropdown-item" href="orders" style="color: var(--font-color);"><span class="px-2">Report Items</span></a>
                        <a class="dropdown-item" href="tickets" style="color: var(--font-color);"><span class="px-2">My Tickets <span class="badge badge-success"><span id="tickets"></span></span></span></a>
 
 
 
 
 
 
                        <a class="dropdown-item" href="reports" style="color: var(--font-color);"><span class="px-2">My Reports <span class="badge badge-success"><span id="reports"></span></span></a>
                        <a class="dropdown-item" href="OpenTicket" style="color: var(--font-color);"><span class="px-2">New Ticket</span></a>
                    </div>
                </li>
                <!-----------------------------------------------------------start custom navbar meunu----------------------------------------------------------->
 
 
 
                <!-----------------------------------------------------------start custom navbar meunu----------------------------------------------------------->



                <li class="nav-item dropdown">
            

    <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> XBASELEET <i class="fa fa-user-secret" style="color: var(--font-color);"></i></a>
                    </a>
                    

<li class="nav-item dropdown">
    
    
    
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
            
            
    <a class="dropdown-item" href="setting" style="color: var(--font-color);"><span class="px-2">Setting <i class="fa fa-cog"></i></span></a>
                   


     <!--<a class="dropdown-item" href="seller-profile" style="color: var(--font-color);"><span class="px-2">Profile <i class="fa fa-user"></i></span></a>--->
    
    
     <a class="dropdown-item" href="orders" style="color: var(--font-color);"><span class="px-2">My Orders <i class="fa fa-shopping-cart"></i></span></a>
    
        <a class="dropdown-item" href="addBalance" style="color: var(--font-color);"><span class="px-2">Add Balance <i class="fa fa-money-bill-alt"></i></span></a>
    
         <a class="dropdown-item" href="logout" style="color: var(--font-color);"><span class="px-2">Logout <i class="fa fa-door-open"></i></span></a>
                    </div>
            </ul>
            </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
<style>.modal-dialog.modal-frame.modal-top.modal-notify.modal-danger .modal-body,.modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger .modal-body{
	    padding-top: 35px;
}
.modal-dialog.modal-frame.modal-top.modal-notify.modal-danger,.modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger {
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

</style>
<script type=“text/javascript”>
    function ajaxinfo(){
      $.ajax({
      type:       ‘GET’,
      url:        ‘ajaxinfo.html’,
      timeout: 10000 ,

       success: function(data){
           if (data != ‘01’){
            
            var data = JSON.parse(data);
              for (var prop in data) {
            $(“#”+prop).html(data[prop] ).show();
                }
              }
              else {
                window.location = “logout.html”;
              }
           }
         });

  }
    setInterval(function(){ajaxinfo()}, 3000);

 ajaxinfo();
	</script>
<div class="d-flex flex-row-reverse mt-0">
<div class="p-2">
<label id="switch" class="switch">
<input type="checkbox" onchange="toggleTheme()" id="slider">
<span class="slider round">
</span>
</label>
</div>
</div>
  
				

<!doctype html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<title>DataTables Editor - accounts</title>

		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/moment-2.18.1/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/date-1.4.1/r-2.4.1/sl-1.6.2/datatables.min.css">
		<link rel="stylesheet" type="text/css" href="css/generator-base.css">
		<link rel="stylesheet" type="text/css" href="css/editor.dataTables.min.css">

		<script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/moment-2.18.1/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/date-1.4.1/r-2.4.1/sl-1.6.2/datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/dataTables.editor.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/table.accounts.js"></script>
	</head>
	<body class="dataTables">
		<div class="container">

			<h1>
				DataTables Editor <span>accounts</span>
			</h1>
			
			<table cellpadding="0" cellspacing="0" border="0" class="display" id="accounts" width="100%">
				<thead>
					<tr>
						<th>Website Name</th>
						<th>Website Name</th>
						<th>Website Name</th>
						<th>Website Name</th>
						<th>Website Name</th>
						<th>Website Name</th>
						<th>Website Name</th>
						<th>Website Name</th>
						<th>Website Name</th>
					</tr>
				</thead>
			</table>

		</div>
	</body>
</html>

<script type="text/javascript" language="javascript">
$(document).ready(function() { /// Wait till page is loaded
   $('#detailed').click(function(){
      $('#main').load('divPage0.php #main', function() {
           /// can add another function here
      });
   });
}); //// End of Wait till page is loaded
</script>

<style>
:root{--dt-row-selected: 13, 110, 253;--dt-row-selected-text: 255, 255, 255;--dt-row-selected-link: 9, 10, 11}table.dataTable td.dt-control{text-align:center;cursor:pointer}table.dataTable td.dt-control:before{height:1em;width:1em;margin-top:-9px;display:inline-block;color:white;border:.15em solid white;border-radius:1em;box-shadow:0 0 .2em #444;box-sizing:content-box;text-align:center;text-indent:0 !important;font-family:"Courier New",Courier,monospace;line-height:1em;content:"+";background-color:#31b131}table.dataTable tr.dt-hasChild td.dt-control:before{content:"-";background-color:#d33333}table.dataTable thead>tr>th.sorting,table.dataTable thead>tr>th.sorting_asc,table.dataTable thead>tr>th.sorting_desc,table.dataTable thead>tr>th.sorting_asc_disabled,table.dataTable thead>tr>th.sorting_desc_disabled,table.dataTable thead>tr>td.sorting,table.dataTable thead>tr>td.sorting_asc,table.dataTable thead>tr>td.sorting_desc,table.dataTable thead>tr>td.sorting_asc_disabled,table.dataTable thead>tr>td.sorting_desc_disabled{cursor:pointer;position:relative;padding-right:26px}table.dataTable thead>tr>th.sorting:before,table.dataTable thead>tr>th.sorting:after,table.dataTable thead>tr>th.sorting_asc:before,table.dataTable thead>tr>th.sorting_asc:after,table.dataTable thead>tr>th.sorting_desc:before,table.dataTable thead>tr>th.sorting_desc:after,table.dataTable thead>tr>th.sorting_asc_disabled:before,table.dataTable thead>tr>th.sorting_asc_disabled:after,table.dataTable thead>tr>th.sorting_desc_disabled:before,table.dataTable thead>tr>th.sorting_desc_disabled:after,table.dataTable thead>tr>td.sorting:before,table.dataTable thead>tr>td.sorting:after,table.dataTable thead>tr>td.sorting_asc:before,table.dataTable thead>tr>td.sorting_asc:after,table.dataTable thead>tr>td.sorting_desc:before,table.dataTable thead>tr>td.sorting_desc:after,table.dataTable thead>tr>td.sorting_asc_disabled:before,table.dataTable thead>tr>td.sorting_asc_disabled:after,table.dataTable thead>tr>td.sorting_desc_disabled:before,table.dataTable thead>tr>td.sorting_desc_disabled:after{position:absolute;display:block;opacity:.125;right:10px;line-height:9px;font-size:.8em}table.dataTable thead>tr>th.sorting:before,table.dataTable thead>tr>th.sorting_asc:before,table.dataTable thead>tr>th.sorting_desc:before,table.dataTable thead>tr>th.sorting_asc_disabled:before,table.dataTable thead>tr>th.sorting_desc_disabled:before,table.dataTable thead>tr>td.sorting:before,table.dataTable thead>tr>td.sorting_asc:before,table.dataTable thead>tr>td.sorting_desc:before,table.dataTable thead>tr>td.sorting_asc_disabled:before,table.dataTable thead>tr>td.sorting_desc_disabled:before{bottom:50%;content:"▲";content:"▲"/""}table.dataTable thead>tr>th.sorting:after,table.dataTable thead>tr>th.sorting_asc:after,table.dataTable thead>tr>th.sorting_desc:after,table.dataTable thead>tr>th.sorting_asc_disabled:after,table.dataTable thead>tr>th.sorting_desc_disabled:after,table.dataTable thead>tr>td.sorting:after,table.dataTable thead>tr>td.sorting_asc:after,table.dataTable thead>tr>td.sorting_desc:after,table.dataTable thead>tr>td.sorting_asc_disabled:after,table.dataTable thead>tr>td.sorting_desc_disabled:after{top:50%;content:"▼";content:"▼"/""}table.dataTable thead>tr>th.sorting_asc:before,table.dataTable thead>tr>th.sorting_desc:after,table.dataTable thead>tr>td.sorting_asc:before,table.dataTable thead>tr>td.sorting_desc:after{opacity:.6}table.dataTable thead>tr>th.sorting_desc_disabled:after,table.dataTable thead>tr>th.sorting_asc_disabled:before,table.dataTable thead>tr>td.sorting_desc_disabled:after,table.dataTable thead>tr>td.sorting_asc_disabled:before{display:none}table.dataTable thead>tr>th:active,table.dataTable thead>tr>td:active{outline:none}div.dataTables_scrollBody>table.dataTable>thead>tr>th:before,div.dataTables_scrollBody>table.dataTable>thead>tr>th:after,div.dataTables_scrollBody>table.dataTable>thead>tr>td:before,div.dataTables_scrollBody>table.dataTable>thead>tr>td:after{display:none}div.dataTables_processing{position:absolute;top:50%;left:50%;width:200px;margin-left:-100px;margin-top:-26px;text-align:center;padding:2px}div.dataTables_processing>div:last-child{position:relative;width:80px;height:15px;margin:1em auto}div.dataTables_processing>div:last-child>div{position:absolute;top:0;width:13px;height:13px;border-radius:50%;background:rgb(13, 110, 253);background:rgb(var(--dt-row-selected));animation-timing-function:cubic-bezier(0, 1, 1, 0)}div.dataTables_processing>div:last-child>div:nth-child(1){left:8px;animation:datatables-loader-1 .6s infinite}div.dataTables_processing>div:last-child>div:nth-child(2){left:8px;animation:datatables-loader-2 .6s infinite}div.dataTables_processing>div:last-child>div:nth-child(3){left:32px;animation:datatables-loader-2 .6s infinite}div.dataTables_processing>div:last-child>div:nth-child(4){left:56px;animation:datatables-loader-3 .6s infinite}@keyframes datatables-loader-1{0%{transform:scale(0)}100%{transform:scale(1)}}@keyframes datatables-loader-3{0%{transform:scale(1)}100%{transform:scale(0)}}@keyframes datatables-loader-2{0%{transform:translate(0, 0)}100%{transform:translate(24px, 0)}}table.dataTable.nowrap th,table.dataTable.nowrap td{white-space:nowrap}table.dataTable th.dt-left,table.dataTable td.dt-left{text-align:left}table.dataTable th.dt-center,table.dataTable td.dt-center,table.dataTable td.dataTables_empty{text-align:center}table.dataTable th.dt-right,table.dataTable td.dt-right{text-align:right}table.dataTable th.dt-justify,table.dataTable td.dt-justify{text-align:justify}table.dataTable th.dt-nowrap,table.dataTable td.dt-nowrap{white-space:nowrap}table.dataTable thead th,table.dataTable thead td,table.dataTable tfoot th,table.dataTable tfoot td{text-align:left}table.dataTable thead th.dt-head-left,table.dataTable thead td.dt-head-left,table.dataTable tfoot th.dt-head-left,table.dataTable tfoot td.dt-head-left{text-align:left}table.dataTable thead th.dt-head-center,table.dataTable thead td.dt-head-center,table.dataTable tfoot th.dt-head-center,table.dataTable tfoot td.dt-head-center{text-align:center}table.dataTable thead th.dt-head-right,table.dataTable thead td.dt-head-right,table.dataTable tfoot th.dt-head-right,table.dataTable tfoot td.dt-head-right{text-align:right}table.dataTable thead th.dt-head-justify,table.dataTable thead td.dt-head-justify,table.dataTable tfoot th.dt-head-justify,table.dataTable tfoot td.dt-head-justify{text-align:justify}table.dataTable thead th.dt-head-nowrap,table.dataTable thead td.dt-head-nowrap,table.dataTable tfoot th.dt-head-nowrap,table.dataTable tfoot td.dt-head-nowrap{white-space:nowrap}table.dataTable tbody th.dt-body-left,table.dataTable tbody td.dt-body-left{text-align:left}table.dataTable tbody th.dt-body-center,table.dataTable tbody td.dt-body-center{text-align:center}table.dataTable tbody th.dt-body-right,table.dataTable tbody td.dt-body-right{text-align:right}table.dataTable tbody th.dt-body-justify,table.dataTable tbody td.dt-body-justify{text-align:justify}table.dataTable tbody th.dt-body-nowrap,table.dataTable tbody td.dt-body-nowrap{white-space:nowrap}table.dataTable{width:100%;margin:0 auto;clear:both;border-collapse:separate;border-spacing:0}table.dataTable thead th,table.dataTable tfoot th{font-weight:bold}table.dataTable thead th,table.dataTable thead td{padding:10px;border-bottom:1px solid rgba(0, 0, 0, 0.3)}table.dataTable thead th:active,table.dataTable thead td:active{outline:none}table.dataTable tfoot th,table.dataTable tfoot td{padding:10px 10px 6px 10px;border-top:1px solid rgba(0, 0, 0, 0.3)}table.dataTable tbody tr{background-color:transparent}table.dataTable tbody tr.selected>*{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.9);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected), 0.9);color:rgb(255, 255, 255);color:rgb(var(--dt-row-selected-text))}table.dataTable tbody tr.selected a{color:rgb(9, 10, 11);color:rgb(var(--dt-row-selected-link))}table.dataTable tbody th,table.dataTable tbody td{padding:8px 10px}table.dataTable.row-border tbody th,table.dataTable.row-border tbody td,table.dataTable.display tbody th,table.dataTable.display tbody td{border-top:1px solid rgba(0, 0, 0, 0.15)}table.dataTable.row-border tbody tr:first-child th,table.dataTable.row-border tbody tr:first-child td,table.dataTable.display tbody tr:first-child th,table.dataTable.display tbody tr:first-child td{border-top:none}table.dataTable.cell-border tbody th,table.dataTable.cell-border tbody td{border-top:1px solid rgba(0, 0, 0, 0.15);border-right:1px solid rgba(0, 0, 0, 0.15)}table.dataTable.cell-border tbody tr th:first-child,table.dataTable.cell-border tbody tr td:first-child{border-left:1px solid rgba(0, 0, 0, 0.15)}table.dataTable.cell-border tbody tr:first-child th,table.dataTable.cell-border tbody tr:first-child td{border-top:none}table.dataTable.stripe>tbody>tr.odd>*,table.dataTable.display>tbody>tr.odd>*{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.023)}table.dataTable.stripe>tbody>tr.odd.selected>*,table.dataTable.display>tbody>tr.odd.selected>*{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.923);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 0.923))}table.dataTable.hover>tbody>tr:hover>*,table.dataTable.display>tbody>tr:hover>*{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.035)}table.dataTable.hover>tbody>tr.selected:hover>*,table.dataTable.display>tbody>tr.selected:hover>*{box-shadow:inset 0 0 0 9999px #0d6efd !important;box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 1)) !important}table.dataTable.order-column>tbody tr>.sorting_1,table.dataTable.order-column>tbody tr>.sorting_2,table.dataTable.order-column>tbody tr>.sorting_3,table.dataTable.display>tbody tr>.sorting_1,table.dataTable.display>tbody tr>.sorting_2,table.dataTable.display>tbody tr>.sorting_3{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.019)}table.dataTable.order-column>tbody tr.selected>.sorting_1,table.dataTable.order-column>tbody tr.selected>.sorting_2,table.dataTable.order-column>tbody tr.selected>.sorting_3,table.dataTable.display>tbody tr.selected>.sorting_1,table.dataTable.display>tbody tr.selected>.sorting_2,table.dataTable.display>tbody tr.selected>.sorting_3{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.919);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 0.919))}table.dataTable.display>tbody>tr.odd>.sorting_1,table.dataTable.order-column.stripe>tbody>tr.odd>.sorting_1{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.054)}table.dataTable.display>tbody>tr.odd>.sorting_2,table.dataTable.order-column.stripe>tbody>tr.odd>.sorting_2{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.047)}table.dataTable.display>tbody>tr.odd>.sorting_3,table.dataTable.order-column.stripe>tbody>tr.odd>.sorting_3{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.039)}table.dataTable.display>tbody>tr.odd.selected>.sorting_1,table.dataTable.order-column.stripe>tbody>tr.odd.selected>.sorting_1{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.954);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 0.954))}table.dataTable.display>tbody>tr.odd.selected>.sorting_2,table.dataTable.order-column.stripe>tbody>tr.odd.selected>.sorting_2{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.947);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 0.947))}table.dataTable.display>tbody>tr.odd.selected>.sorting_3,table.dataTable.order-column.stripe>tbody>tr.odd.selected>.sorting_3{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.939);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 0.939))}table.dataTable.display>tbody>tr.even>.sorting_1,table.dataTable.order-column.stripe>tbody>tr.even>.sorting_1{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.019)}table.dataTable.display>tbody>tr.even>.sorting_2,table.dataTable.order-column.stripe>tbody>tr.even>.sorting_2{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.011)}table.dataTable.display>tbody>tr.even>.sorting_3,table.dataTable.order-column.stripe>tbody>tr.even>.sorting_3{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.003)}table.dataTable.display>tbody>tr.even.selected>.sorting_1,table.dataTable.order-column.stripe>tbody>tr.even.selected>.sorting_1{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.919);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 0.919))}table.dataTable.display>tbody>tr.even.selected>.sorting_2,table.dataTable.order-column.stripe>tbody>tr.even.selected>.sorting_2{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.911);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 0.911))}table.dataTable.display>tbody>tr.even.selected>.sorting_3,table.dataTable.order-column.stripe>tbody>tr.even.selected>.sorting_3{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.903);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 0.903))}table.dataTable.display tbody tr:hover>.sorting_1,table.dataTable.order-column.hover tbody tr:hover>.sorting_1{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.082)}table.dataTable.display tbody tr:hover>.sorting_2,table.dataTable.order-column.hover tbody tr:hover>.sorting_2{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.074)}table.dataTable.display tbody tr:hover>.sorting_3,table.dataTable.order-column.hover tbody tr:hover>.sorting_3{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.062)}table.dataTable.display tbody tr:hover.selected>.sorting_1,table.dataTable.order-column.hover tbody tr:hover.selected>.sorting_1{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.982);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 0.982))}table.dataTable.display tbody tr:hover.selected>.sorting_2,table.dataTable.order-column.hover tbody tr:hover.selected>.sorting_2{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.974);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 0.974))}table.dataTable.display tbody tr:hover.selected>.sorting_3,table.dataTable.order-column.hover tbody tr:hover.selected>.sorting_3{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.962);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 0.962))}table.dataTable.no-footer{border-bottom:1px solid rgba(0, 0, 0, 0.3)}table.dataTable.compact thead th,table.dataTable.compact thead td,table.dataTable.compact tfoot th,table.dataTable.compact tfoot td,table.dataTable.compact tbody th,table.dataTable.compact tbody td{padding:4px}table.dataTable th,table.dataTable td{box-sizing:content-box}.dataTables_wrapper{position:relative;clear:both}.dataTables_wrapper .dataTables_length{float:left}.dataTables_wrapper .dataTables_length select{border:1px solid #aaa;border-radius:3px;padding:5px;background-color:transparent;padding:4px}.dataTables_wrapper .dataTables_filter{float:right;text-align:right}.dataTables_wrapper .dataTables_filter input{border:1px solid #aaa;border-radius:3px;padding:5px;background-color:transparent;margin-left:3px}.dataTables_wrapper .dataTables_info{clear:both;float:left;padding-top:.755em}.dataTables_wrapper .dataTables_paginate{float:right;text-align:right;padding-top:.25em}.dataTables_wrapper .dataTables_paginate .paginate_button{box-sizing:border-box;display:inline-block;min-width:1.5em;padding:.5em 1em;margin-left:2px;text-align:center;text-decoration:none !important;cursor:pointer;color:inherit !important;border:1px solid transparent;border-radius:2px;background:transparent}.dataTables_wrapper .dataTables_paginate .paginate_button.current,.dataTables_wrapper .dataTables_paginate .paginate_button.current:hover{color:inherit !important;border:1px solid rgba(0, 0, 0, 0.3);background-color:rgba(230, 230, 230, 0.1);background:-webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(230, 230, 230, 0.1)), color-stop(100%, rgba(0, 0, 0, 0.1)));background:-webkit-linear-gradient(top, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);background:-moz-linear-gradient(top, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);background:-ms-linear-gradient(top, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);background:-o-linear-gradient(top, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);background:linear-gradient(to bottom, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%)}.dataTables_wrapper .dataTables_paginate .paginate_button.disabled,.dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,.dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active{cursor:default;color:#666 !important;border:1px solid transparent;background:transparent;box-shadow:none}.dataTables_wrapper .dataTables_paginate .paginate_button:hover{color:white !important;border:1px solid #111;background-color:#585858;background:-webkit-gradient(linear, left top, left bottom, color-stop(0%, #585858), color-stop(100%, #111));background:-webkit-linear-gradient(top, #585858 0%, #111 100%);background:-moz-linear-gradient(top, #585858 0%, #111 100%);background:-ms-linear-gradient(top, #585858 0%, #111 100%);background:-o-linear-gradient(top, #585858 0%, #111 100%);background:linear-gradient(to bottom, #585858 0%, #111 100%)}.dataTables_wrapper .dataTables_paginate .paginate_button:active{outline:none;background-color:#2b2b2b;background:-webkit-gradient(linear, left top, left bottom, color-stop(0%, #2b2b2b), color-stop(100%, #0c0c0c));background:-webkit-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);background:-moz-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);background:-ms-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);background:-o-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);background:linear-gradient(to bottom, #2b2b2b 0%, #0c0c0c 100%);box-shadow:inset 0 0 3px #111}.dataTables_wrapper .dataTables_paginate .ellipsis{padding:0 1em}.dataTables_wrapper .dataTables_length,.dataTables_wrapper .dataTables_filter,.dataTables_wrapper .dataTables_info,.dataTables_wrapper .dataTables_processing,.dataTables_wrapper .dataTables_paginate{color:inherit}.dataTables_wrapper .dataTables_scroll{clear:both}.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody{-webkit-overflow-scrolling:touch}.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>thead>tr>th,.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>thead>tr>td,.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>tbody>tr>th,.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>tbody>tr>td{vertical-align:middle}.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>thead>tr>th>div.dataTables_sizing,.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>thead>tr>td>div.dataTables_sizing,.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>tbody>tr>th>div.dataTables_sizing,.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>tbody>tr>td>div.dataTables_sizing{height:0;overflow:hidden;margin:0 !important;padding:0 !important}.dataTables_wrapper.no-footer .dataTables_scrollBody{border-bottom:1px solid rgba(0, 0, 0, 0.3)}.dataTables_wrapper.no-footer div.dataTables_scrollHead table.dataTable,.dataTables_wrapper.no-footer div.dataTables_scrollBody>table{border-bottom:none}.dataTables_wrapper:after{visibility:hidden;display:block;content:"";clear:both;height:0}@media screen and (max-width: 767px){.dataTables_wrapper .dataTables_info,.dataTables_wrapper .dataTables_paginate{float:none;text-align:center}.dataTables_wrapper .dataTables_paginate{margin-top:.5em}}@media screen and (max-width: 640px){.dataTables_wrapper .dataTables_length,.dataTables_wrapper .dataTables_filter{float:none;text-align:center}.dataTables_wrapper .dataTables_filter{margin-top:.5em}}

</style>