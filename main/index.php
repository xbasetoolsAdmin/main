<?php ob_start(); session_start(); date_default">
 <style>

.scroll-area-lg {
    height: 400px;
    overflow-x: hidden;
}
.scrollbar-sidebar, .scrollbar-container {
    position: relative;
    height: 100%;
}
.ps {
    overflow: hidden !important;
    overflow-anchor: none;
    touch-action: auto;
}
.heading{
     font-size: 16px;
     font-weight: bold;
    }
 .fa-plus-circle {
      color: green;
    }
#tour {
    font-family: 'Raleway', sans-serif;
}

</style>
<body class="them loading">
<link rel="stylesheet" href="/layout/css/flexslider5.css" type="text/css">
<script src="/layout/js/jquery.flexslider-min.js"></script>
<style>
#tour {
    font-family: 'Raleway', sans-serif;
}

#tour .flexslider {
    margin: 0 0 60px;
    background: #fff;
    border: 0px solid #fff;
    position: relative;
    zoom: 0;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
    -webkit-box-shadow: '' 0 0px 0px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: '' 0 0px 0px rgba(0, 0, 0, 0.2);
    -o-box-shadow: '' 0 0px 0px rgba(0, 0, 0, 0.2);
    box-shadow: '' 0 0px 0px rgba(0, 0, 0, 0.2);
}



#tour .flex-control-paging li a {
    width: 11px;
    height: 11px;
    display: block;
    background: #fff!important;
    border: 1px solid #3c8dbc;
    background: rgba(0, 0, 0, 0.5);
    cursor: pointer;
    text-indent: -9999px;
    -webkit-box-shadow: inset 0 0 0px rgba(0, 0, 0, 0);
    -moz-box-shadow: inset 0 0 0px rgba(0, 0, 0, 0);
    -o-box-shadow: inset 0 0 0px rgba(0, 0, 0, 0);
    box-shadow: inset 0 0 0px rgba(0, 0, 0, 0);
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
}

#tour .flex-control-paging li a.flex-active {
    background: #3c8dbc!important;
}

#tour .modal-body {
    padding: 0px;
}

#tour .modal-footer {
    background: #fafafa;
    border:0px;
}

#tour .flex-caption {
    padding: 20px 100px 20px 100px;
    text-align: center;
}

#tour .flex-caption .heading{
    font-weight: 600;
    font-size: 20px;
    color: #505050;
    padding-bottom: 15px;
}

#tour .flex-caption .caption-content{
    font-size: 15px;
    color: #505050;
}

</style>

<div class="modal fade top" id="mod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
<div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">

<div class="modal-content">

<div class="modal-body">
<div id="bodyTicket" class="row d-flex justify-content-center align-items-center">
<span class="pt-3 mx-4" style="font-size: 14 px"><b>You have new replay ticket</span>
<a type="button" href="tickets" class="btn btn-success">Show tickets
</a>
</div>
</div>
</div>

</div>
</div>


<div class="modal fade top" id="modalrep" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
<div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">

<div class="modal-content">

<div class="modal-body">
<div id="bodyreport" class="row d-flex justify-content-center align-items-center">
<span class="pt-3 mx-4" style="font-size: 14 px"><b>You have new replay report</span>
<a type="button" href="reports" class="btn btn-danger">Show reports
</a>
</div>
</div>
</div>

</div>
</div>


<div class="modal fade top" id="modalreps" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
<div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">

<div class="modal-content">

<div class="modal-body">
<div id="bodyreport" class="row d-flex justify-content-center align-items-center">
<span class="pt-3 mx-4" style="font-size: 14 px"><b>You have new report</span>
<a type="button" href="./seller/reports" class="btn btn-danger">Show reports
</a>
</div>
</div>
</div>

</div>
</div>



<div class="modal fade top" id="modalrepss" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
<div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">

<div class="modal-content">

<div class="modal-body">
<div id="bodyreport" class="row d-flex justify-content-center align-items-center">
<span class="pt-3 mx-4" style="font-size: 14 px"><b>You have new replay report</span>
<a type="button" href="./seller/reports" class="btn btn-danger">Show reports
</a>
</div>
</div>
</div>

</div>
</div>

<div class="d-flex flex-row-reverse mt-0" style="z-index: 999999;position: absolute; right: 0; ">
<div class="p-2"><label id="switch" class="switch">
<input type="checkbox" onchange="toggleTheme()" id="slider">
<span class="slider round"></span>
</label></div>
</div>
<script defer src="/layout/js/jquery.flexslider.js"></script>
<div class="header">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-12" style="text-align:center;"><a href="shell"><img style="border: 3px solid;" src="layout/images/shells.gif"></a></div>
<div class="col-lg-3 col-md-6 col-sm-12" style="text-align:center;"><a href="smtp"><img style="border: 3px solid;" src="layout/images/smtps.gif"></a></div>
<div class="col-lg-3 col-md-6 col-sm-12" style="text-align:center;"><a href="accounts-7"><img style="border: 3px solid;" src="layout/images/accs.gif"></a></div>
</div><br>
<div class="header-body">

<div class="row">
<div class="col-md-3 col-sm-6">
<div class="card card-stats">
<div class="card-body">
<div class="row">
<div class="col-md-10">
<h5 class="card-title text-uppercase text-muted mb-0">Balance</h5>
<span class="h2 font-weight-bold mb-0">
0 </span>
</div>
<div class="col-md-2">
<div class="icon icon-shape bg-danger text-white rounded-circle shadow">
<i class="fa fa-money-bill-alt "></i>
</div>
</div>
</div>
<p class="mt-3 mb-0 text-muted text-sm">
<span class="text-nowrap"><a href="addBalance"> [Add Funds] </a></span>
</p>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="card card-stats">
<div class="card-body">
<div class="row">
<div class="col-md-10">
<h5 class="card-title text-uppercase text-muted mb-0">Orders</h5>
<span class="h2 font-weight-bold mb-0">0 </div>
<div class="col-md-2">
<div class="icon icon-shape bg-info text-white rounded-circle shadow">
<i class="fa fa-shopping-cart"></i>
</div>
</div>
</div>
<p class="mt-3 mb-0 text-muted text-sm">
<span class="text-nowrap"><a href="orders"> [ Show ] </a></span>
</p>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="card card-stats">
<div class="card-body">
<div class="row">
<div class="col-md-10">
<h5 class="card-title text-uppercase text-muted mb-0">Tickets</h5>
<span class="h2 font-weight-bold mb-0">0 </div>
<div class="col-md-2">
<div class="icon icon-shape bg-warning text-white rounded-circle shadow">
<i class="fa fa-cog"></i>
</div>
</div>
</div>
<p class="mt-3 mb-0 text-muted text-sm">
<span class="text-nowrap"><a href="tickets"> [ Show ]</a></span>
</p>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="card card-stats" style="background-color: #fb3!important;">
<div class="card-body">
<div class="row">
<div class="col-md-10">
<h5 class="card-title text-uppercase text-muted mb-0">Reports</h5>
<span class="h2 font-weight-bold mb-0">
0 <span>
</div>
<div class="col-md-2">
<div class="icon icon-shape bg-danger text-white rounded-circle shadow">
<i class="fas fa-receipt"></i>
</div>
</div>
</div>
<p class="mt-3 mb-0 text-muted text-sm">
<span class="text-nowrap"><a href="reports"> [ Show ]</a></span>
</p>
</div>
</div>
</div>
</div>
</div>


<div class="main-home mt-5 mb-5">
<div class="row">
<div class="col-md-8">
<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
<div class="card-header">
	

<?php echo'
<i class="fas fa-user-shield"></i>
Welcome <a class="badge badge-pill badge-success">'.$usrid.'</a>
';?>
	<br>
</div>
<div class="card-body" style="color: var(--font-color); background-color: var(--color-card);">
<br>
If you have any Question ,Problem, Suggestion or Request Please feel free to Open a
<a href="tickets" class="btn btn-success btn-sm"> New Ticket <i class="fa fa-paper-plane"></i></a>
<br>
if you want to report an order , just go to <a class="btn btn-success btn-sm" data-title="My Orders" href="orders"> My Orders <i class="fa fa-shopping-cart"></i></a> then click on Report #[Order Id] button.
<br>
Our Domains are <p><span style="color: #ff0000;"><strong>odinshop.io</strong> || <strong>odin.pw</strong> || <strong>odinshop.se</strong> || <strong>odin.pm</strong> ||</span><strong><span style="color: #ff0000;">Tor Mirror odinshoyi3y5clejn3klyggxrmq5sy5efdiremz353z6ucdujgdiccad.onion ||</span> </strong></p> - Please Save them!
<br>
<a href="https://odinshop.se/Tos.php" data-title="Terms Of Service " class="btn btn-primary btn-sm"> Terms Of Service <i class="fa fa-newspaper-o"></i></a>
<br>
</div>
</div>
<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
<div class="card-header">
<i class="fas fa-users"></i>
Invite Users<br>
</div>
<div class="card-body" style="color: var(--font-color); background-color: var(--color-card);">
<div class="row">
<div class="col-lg-5 col-md-6 col-sm-12">
<div class="input-group mb-3" style="align-items: center;">
<input type="text" class="form-control form-control-lg" id="code_user" value="https://odinshop.io/?referral=18229" disabled>
<div class="input-group-append">
<button class="btn btn-outline-secondary copydiv" data-clipboard-text="https://odinshop.io/?referral=18229" type="button">COPY</button>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 mb-3" style=" align-items: center; display: flex; ">
<p style=" color: #000; font-size: 18px; font-weight: bold; ">Total Bonus :- </p>
</div>
<div class="col-lg-3 col-md-6 col-sm-12 mb-3" style=" align-items: center; display: flex; ">
<p style=" color: #000; font-size: 18px; font-weight: bold; ">Total Referrals :- 0</p>
</div>
</div>
</div>
</div>
<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
<div class="card-header">
<i class="fas fa-newspaper"></i>
Our News
</div>
<div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
<ul>
<li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>News buyer</b></span><span><small><b>2022/08/24 06:56:08</small></span></b>
<br>We are currently working to improve the checkers in all sections ,, stay tuned good things are coming.
<br>
</li>
<li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>New section</b></span><span><small><b>2022/08/02 09:30:54</small></span></b>
<br>Bulk Offers Section has been activated ,, you can buy bulk tools with cheap prices 50% Off, Visit our new section and enjoy the sellers offers.
https://odinshop.io/offers
<br>
</li>
<li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Report time</b></span><span><small><b>2022/07/29 01:18:06</small></span></b>
<br>Dear Buyers
report/refund time increased to 12hours to give our buyers time to report their bad items, also please rate your purchases to help other buyers and help us to flag the bad sellers and remove them from our platform
we are here to serve you ,If you have any questions , please don't hesitate to contact us if you have any problem with one of our sellers message us.
<br>
</li>
<li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Seller apply</b></span><span><small><b>2022/02/03 07:07:04</small></span></b>
<br>now you can upgrade your account to seller status and start selling with us instantly without support tickets,,for more information visit https://odinshop.io/become-seller
<br>
</li>
<li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Requests</b></span><span><small><b>2021/11/20 08:39:24</small></span></b>
<br>Odin's offers you the peace of mind you need to make any purchase. We’ll not release the funds to the Seller until you have received the item and are satisfied with the transaction. We also make sure the Seller provides the required information for the transaction.
<br>
</li>
<li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Update</b></span><span><small><b>2021/11/06 08:43:23</small></span></b>
<br>Now you can rate \ review \ comment about the item you've purchased go to MyOrders or Report Items and choose Rate Seller and submit your comment / rate ,, rating will help other clients to easily find the good sellers you can also check the seller's profile by clicking on seller's number button in blue color inside of sections
<br>
</li>
<li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Update</b></span><span><small><b>2021/08/03 07:52:03</small></span></b>
<br>CMS / Technology detectors installed in cPanel & Shell sections to extract the platform [ Wordpress - Joomla - Drupal - WooCommerce - etc.. ] and extract back side technologies such as [ Laravel - Codeigniter - Yii - Zend - Vue JS - React Js - etc.. ] plus extract Server Technologies such as [ Apache - Nginx - MySQL - Tomcat - etc..] and more updates coming soon.
<br>
</li>
<li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Email</b></span><span><small><b>2020/10/14 04:57:06</small></span></b>
<br>Dear users please use a VALID email in your profile incase you lost your password so you can recover it.
<br>
</li>
<li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Warning</b></span><span><small><b>2020/04/06 06:18:01</small></span></b>
<br>Orders will be automatically refunded after 6hours of the report time if the seller didnt replay.
<br>
</li>
<li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Free bonus $</b></span><span><small><b>2020/03/17 06:14:10</small></span></b>
<br>every time your deposit starts from $50 you will receive a 5% bonus.
<br>
</li> </ul>
</div>
</div>
</div>
<div class="col-md-4">
<div class="mb-3 pb-1">
<ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link active" id="added-tab" data-toggle="tab" data-target="#added" type="button" role="tab" aria-controls="added" aria-selected="true">Latest Added Tools</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="sold-tab" data-toggle="tab" data-target="#sold" type="button" role="tab" aria-controls="sold" aria-selected="false">Latest Sold Tools</button>
</li>
</ul>
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade  show active" id="added" role="tabpanel" aria-labelledby="added-tab">
<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
<div class="card-header">
<i class="fas fa-table"></i>
Latest 10 Added Tools
</div>
<div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
<div id="roncaa" style="color: var(--font-color); background-color: var(--color-card);">
<div class="scroll-area-lg" style="color: var(--font-color); background-color: var(--color-card);">
<div class="scrollbar-container ps--active-y" style="color: var(--font-color); background-color: var(--color-card);">
<ul class="list-group list-group-flush" style="color: var(--font-color); background-color: var(--color-card);">
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>13</b></font> items in The <font color="green"><b>
<a class="text-success" href="business-1">
Cpanel Webmail </a></b></font> section.
By <b>Seller463</b>, 2023-02-22 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>23</b></font> items in The <font color="green"><b>
<a class="text-success" href="cPanel">
cpanel </a></b></font> section.
By <b>Seller393</b>, 2023-02-22 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>30</b></font> items in The <font color="green"><b>
<a class="text-success" href="business-2">
Godaddy Webmail </a></b></font> section.
By <b>Seller467</b>, 2023-02-22 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>40</b></font> items in The <font color="green"><b>
<a class="text-success" href="smtp">
smtp </a></b></font> section.
By <b>Seller463</b>, 2023-02-22 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>136</b></font> items in The <font color="green"><b>
<a class="text-success" href="cPanel">
cpanel </a></b></font> section.
By <b>Seller477</b>, 2023-02-22 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>57</b></font> items in The <font color="green"><b>
<a class="text-success" href="mailer">
mailer </a></b></font> section.
By <b>Seller471</b>, 2023-02-21 </li>
 <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>28</b></font> items in The <font color="green"><b>
<a class="text-success" href="business-2">
Godaddy Webmail </a></b></font> section.
By <b>Seller471</b>, 2023-02-21 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>38</b></font> items in The <font color="green"><b>
<a class="text-success" href="business-2">
Godaddy Webmail </a></b></font> section.
By <b>Seller467</b>, 2023-02-21 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>20</b></font> items in The <font color="green"><b>
<a class="text-success" href="cPanel">
cpanel </a></b></font> section.
By <b>Seller254</b>, 2023-02-21 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>4</b></font> items in The <font color="green"><b>
<a class="text-success" href="rdp">
rdp </a></b></font> section.
By <b>Seller306</b>, 2023-02-21 </li>
</ul>
</div> </div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="sold" role="tabpanel" aria-labelledby="sold-tab">
<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
<div class="card-header">
<i class="fas fa-table"></i>
Latest 10 Sold Tools
</div>
<div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
<div id="roncaa" style="color: var(--font-color); background-color: var(--color-card);">
<div class="scroll-area-lg" style="color: var(--font-color); background-color: var(--color-card);">
<div class="scrollbar-container ps--active-y" style="color: var(--font-color); background-color: var(--color-card);">
<ul class="list-group list-group-flush" style="color: var(--font-color); background-color: var(--color-card);">
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
<b>Seller341</b> Sold <font color="green"><b>
<a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer16293</b>, 2023-02-22 14:47:28 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
<b>Seller376</b> Sold <font color="green"><b>
<a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer16293</b>, 2023-02-22 14:43:20 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
<b>Seller460</b> Sold <font color="green"><b>
<a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer16293</b>, 2023-02-22 14:42:27 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
<b>Seller254</b> Sold <font color="green"><b>
<a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer16293</b>, 2023-02-22 14:36:58 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
<b>Seller376</b> Sold <font color="green"><b>
<a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer16293</b>, 2023-02-22 14:36:14 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
<b>Seller341</b> Sold <font color="green"><b>
<a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer17647</b>, 2023-02-22 14:24:57 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
<b>Seller376</b> Sold <font color="green"><b>
<a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer16293</b>, 2023-02-22 14:24:22 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
<b>Seller474</b> Sold <font color="green"><b>
<a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer18061</b>, 2023-02-22 14:16:13 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
<b>Seller353</b> Sold <font color="green"><b>
<a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer17647</b>, 2023-02-22 14:15:46 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
<b>Seller477</b> Sold <font color="green"><b>
<a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer18101</b>, 2023-02-22 14:10:51 </li>
</ul>
</div> </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="mb-3 pb-1">
<ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link active" id="offer-tab" data-toggle="tab" data-target="#offer" type="button" role="tab" aria-controls="offer" aria-selected="true">Latest Sellers Offers</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="request-tab" data-toggle="tab" data-target="#request" type="button" role="tab" aria-controls="request" aria-selected="false">Latest Buyers Requests</button>
</li>
</ul>
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade  show active" id="offer" role="tabpanel" aria-labelledby="offer-tab">
<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
<div class="card-header">
<i class="fas fa-table"></i>
Latest 10 Added Sellers Offers
</div>
<div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
<div id="roncaa" style="color: var(--font-color); background-color: var(--color-card);">
<div class="scroll-area-lg" style="color: var(--font-color); background-color: var(--color-card);">
<div class="scrollbar-container ps--active-y" style="color: var(--font-color); background-color: var(--color-card);">
<ul class="list-group list-group-flush" style="color: var(--font-color); background-color: var(--color-card);">
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>100 mixed shells</b></font> items in The <font color="green"><b>
<a class="text-success" href="offers">Offers</a></b></font> section.
By <b>Seller447</b>, 19/01/2023 05:15:10 pm </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>Fully Verified CashApp Account BTC Enable</b></font> items in The <font color="green"><b>
<a class="text-success" href="offers">Offers</a></b></font> section.
By <b>Seller466</b>, 02/01/2023 12:56:28 am </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>Fully Verified Wise Account [Business] [id+pass+email+documents]</b></font> items in The <font color="green"><b>
<a class="text-success" href="offers">Offers</a></b></font> section.
By <b>Seller466</b>, 02/01/2023 12:51:15 am </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>ETH, BSC, MATIC Drainer</b></font> items in The <font color="green"><b>
<a class="text-success" href="offers">Offers</a></b></font> section.
By <b>Seller455</b>, 03/11/2022 06:41:27 pm </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>Creation of PMTA and SMTP for turnkey distribution</b></font> items in The <font color="green"><b>
<a class="text-success" href="offers">Offers</a></b></font> section.
By <b>Seller455</b>, 03/11/2022 06:37:35 pm </li>
 <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>ETH Drainer</b></font> items in The <font color="green"><b>
<a class="text-success" href="offers">Offers</a></b></font> section.
By <b>Seller447</b>, 04/10/2022 08:05:59 pm </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>20 cpanels mixed country</b></font> items in The <font color="green"><b>
<a class="text-success" href="offers">Offers</a></b></font> section.
By <b>Seller447</b>, 26/09/2022 03:10:22 pm </li>
</ul>
</div> </div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="request" role="tabpanel" aria-labelledby="request-tab">
<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
<div class="card-header">
<i class="fas fa-table"></i>
Latest 10 Added Buyers Requests
</div>
<div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
<div id="roncaa" style="color: var(--font-color); background-color: var(--color-card);">
<div class="scroll-area-lg" style="color: var(--font-color); background-color: var(--color-card);">
<div class="scrollbar-container ps--active-y" style="color: var(--font-color); background-color: var(--color-card);">
<ul class="list-group list-group-flush" style="color: var(--font-color); background-color: var(--color-card);">
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>FreeBSD servers wanted</b></font> items in The <font color="green"><b>
<a class="text-success" href="requests">Requests</a></b></font> section.
By <b>Buyer9660</b>, 2023/02/20 02:53:20 am </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>MEDIA TEMPLE SHELLS</b></font> items in The <font color="green"><b>
<a class="text-success" href="requests">Requests</a></b></font> section.
By <b>Buyer9874</b>, 2023/02/01 11:28:22 am </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>domain smtp</b></font> items in The <font color="green"><b>
<a class="text-success" href="requests">Requests</a></b></font> section.
By <b>Buyer18151</b>, 2023/01/27 16:32:48 pm </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>Looking for medium.com hacked account</b></font> items in The <font color="green"><b>
<a class="text-success" href="requests">Requests</a></b></font> section.
By <b>Buyer17148</b>, 2023/01/07 16:32:18 pm </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>shell/cpanel - DA/PA 40+</b></font> items in The <font color="green"><b>
<a class="text-success" href="requests">Requests</a></b></font> section.
By <b>Buyer18140</b>, 2022/12/20 17:59:38 pm </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>Hostgator Cpanel </b></font> items in The <font color="green"><b>
<a class="text-success" href="requests">Requests</a></b></font> section.
By <b>Buyer9660</b>, 2022/12/15 00:06:40 am </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>bulk login/pass usa nelikvid</b></font> items in The <font color="green"><b>
<a class="text-success" href="requests">Requests</a></b></font> section.
By <b>Buyer18110</b>, 2022/12/14 15:11:47 pm </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>Bulk japan shells</b></font> items in The <font color="green"><b>
<a class="text-success" href="requests">Requests</a></b></font> section.
By <b>Buyer17300</b>, 2022/12/13 20:55:39 pm </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>Cpanel</b></font> items in The <font color="green"><b>
<a class="text-success" href="requests">Requests</a></b></font> section.
By <b>Buyer9660</b>, 2022/12/08 19:39:15 pm </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>GODADDY</b></font> items in The <font color="green"><b>
<a class="text-success" href="requests">Requests</a></b></font> section.
By <b>Buyer15241</b>, 2022/12/08 11:25:45 am </li>
</ul>
</div> </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="card mb-3 pb-1" style="color: var(--font-color); background-color: var(--color-card);">
<div class="card-header">
<i class="fab fa-btc"></i>
Become Seller
</div>
<div class="card-body payment_methods" style="color: var(--font-color); background-color: var(--color-card);">
Interested in becoming a <b>Seller <i class="fab fa-btc">
</i></b> at OdinShop ?
<a href="become-seller" class="btn btn-primary">
Become a Seller & Seller Rules<i class="fab fa-btc"></i>
</a>
<br><br>
Available Payment Methods
<br>
<a href="addBalance"><img src="layout/images/pmlogo2.png" height="48" width="49" title="PerfectMoney" /></a>
<a href="addBalance"><img src="layout/images/btclogo.png" height="48" width="49" title="Bitcoin" /></a>
<a href="addBalance"><img src="layout/images/ltclogo.png" height="48" width="49" title="Litecoin" /></a>
<a href="addBalance"><img src="layout/images/bnb.png" height="48" width="49" title="Binance Token" /></a>
<a href="addBalance"><img src="layout/images/ethereum.png" height="48" width="49" title="Etherum" /></a>
<a href="addBalance"><img src="layout/images/trc.png" height="48" width="49" title="Tether [USDT/TRC20]" /></a>
<a href="addBalance"><img src="layout/images/bch.png" height="48" width="49" title="Bitcoin Cash" /></a>
<a href="addBalance"><img src="layout/images/dgc.jpg" height="48" width="49" title="Dogecoin" /></a>
</div>
</div>
<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
<div class="card-header">
<i class="fas fa-chart-pie"></i>
Our Stuff
</div>
<div class="card-body" style="color: var(--font-color); background-color: var(--color-card);">
<div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
<div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
<div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
</div>
</div>
<div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
<div style="position:absolute;width:200%;height:200%;left:0; top:0">
</div>
</div>
</div>
<canvas id="myPieChart" width="278" height="278" style="display: block; width: 278px; height: 278px;" class="chartjs-render-monitor"></canvas>
</div>
<div class="card-footer small text-primary" style="color: var(--font-color); background-color: var(--color-card);">Page Loaded in 1.3091 Seconds</div>
</div>
</div>
</div>
</div>

<script type="text/javascript" src="layout/js/Chart.min.js"></script>
<script type="text/javascript">
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

$(document).keydown(function(event){
    if(event.which=="17")
        cntrlIsPressed = true;
});

$(document).keyup(function(){
    cntrlIsPressed = false;
});

var cntrlIsPressed = false;


function pageDiv(n,t,u,x){
  if(cntrlIsPressed){
    window.open(u, '_blank');
    return false;
  }
        var obj = { Title: t, Url: u };
        if ( ("/"+obj.Url) != location.pathname) {
        	if (x != 1) {history.pushState(obj, obj.Title, obj.Url);}
        	else{history.replaceState(obj, obj.Title, obj.Url);}

    	}
      document.title = obj.Title;
    $("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show();
    $.ajax({
    type:       'GET',
    url:        'divPage'+n+'.html',
    success:    function(data)
    {
        $("#mainDiv").html(data).show();
        newTableObject = document.getElementById('table');
        sorttable.makeSortable(newTableObject);
        $(".sticky-header").floatThead({top:60});
        if(x==0){ajaxinfo();}
      }});
    if (typeof stopCheckBTC === 'function') { 
    var a = stopCheckBTC();
     }

}

$(window).on("popstate", function(e) {
        location.replace(document.location);

});


$(window).on('load', function() {
$('.dropdown').hover(function(){ 
	$('.dropdown-toggle', this).trigger('click'); });
   pageDiv(0,'maiin - Xbaseleet','',0);
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
  setTimeout(function() {$(btn).tooltip('hide'); console.log("hide-2");}, 1000);
}
</script>

	        </script>
</div>
</div>
</body>
</html>
