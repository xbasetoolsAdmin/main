<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: login.html");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>

<style>
            .navbar {
                background-color: #910606;
            }
        </style>
<body style="padding-top: 70px; padding-bottom: 70px;">

nav class="style-0" position:fixed;="" background-color:="" var(--color-nav);="" z-index:1;="" top:0;="" left:0;="" right:0;="" line-height:="" 1.5;="" font-family:="" sans-serif;="" font-size:="" 15px;="" padding-top:="" 0.5rem;="" padding-right:="" 1rem;="" padding-bottom:="" padding-left:="">
    <a class="style-1" href="main"><img width="40px" src="layout/images/logo.png" class="style-2" /> Odin</a> <button class="style-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="style-4"></i> </button>
    <div class="style-5">
        <ul class="style-6">

            <li class="style-7">
                <a class="style-8" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="style-9"></i>
                    Hosts
                </a>
                <div class="style-10" aria-labelledby="navbarDropdown">
                    <a class="style-11" href="rdp"><span class="style-12"><i class="style-13"></i> RDPs <span class="style-14">76</span></span></a> <a class="style-15" href="cPanel"><span class="style-16"><i class="style-17"></i> cPanels <span class="style-18">15217</span></span></a> <a class="style-19" href="shell"><span class="style-20"><i class="style-21"></i> Shells <span class="style-22">1266</span></span></a> <a class="style-23" href="ssh"><span class="style-24"><i class="style-25"></i> SSH/WHM <span class="style-26">135</span></span></a>
                </div>
            </li>
            <li class="style-27">
                <a class="style-28" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="style-29"></i>Premium</a>
                <div class="style-30" aria-labelledby="navbarDropdown">
                    <a class="style-31" href="premium_shell"><span class="style-32"><i class="style-33"></i> Premium Shells <span class="style-34">837</span></span></a> <a class="style-35" href="premium_cPanel"><span class="style-36"><i class="style-37"></i> Premium cPanels <span class="style-38">5793</span></span></a> <a class="style-39" href="premium_downloads"><span class="style-40"><i class="style-41"></i> Premium Downloads <span class="style-42">8</span></span></a>
                </div>
            </li>
            <li class="style-43">
                <a class="style-44" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="style-45"></i>
                    Send
                </a>
                <div class="style-46" aria-labelledby="navbarDropdown">
                    <a class="style-47" href="mailer"><span class="style-48"><i class="style-49"></i> Mailers <span class="style-50">435</span></span></a> <a class="style-51" href="smtp"><span class="style-52"><i class="style-53"></i> SMTPs <span class="style-54">2331</span></span></a>
                </div>
            </li>
            <li class="style-55">
                <a class="style-56" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="style-57"></i> Leads
                </a>
                <div class="style-58" aria-labelledby="navbarDropdown">
                    <a class="style-59" href="leads-5"><span class="style-60"><i class="style-61"></i> 100% Validated Leads <span class="style-62">0</span></span></a> <a class="style-63" href="leads-1"><span class="style-64"><i class="style-65"></i> Email Only <span class="style-66">163</span></span></a> <a class="style-67" href="leads-2"><span class="style-68"><i class="style-69"></i> Combo Email:Password <span class="style-70">24</span></span></a> <a class="style-71" href="leads-3"><span class="style-72"><i class="style-73"></i> Combo Username:Password <span class="style-74">1</span></span></a> <a class="style-75" href="leads-4"><span class="style-76"><i class="style-77"></i> Email Access <span class="style-78">22</span></span></a> <a class="style-79" href="leads-6"><span class="style-80"><i class="style-81"></i> Phone Number Only <span class="style-82">31</span></span></a> <a class="style-83" href="leads-7"><span class="style-84"><i class="style-85"></i> Combo Phone:Password <span class="style-86">3</span></span></a> <a class="style-87" href="leads-8"><span class="style-88"><i class="style-89"></i> Full Data <span class="style-90">0</span></span></a> <a class="style-91" href="leads-9"><span class="style-92"><i class="style-93"></i> Social Media Data <span class="style-94">0</span></span></a>
                </div>
            </li>
            <li class="style-95">
                <a class="style-96" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="style-97"></i> Business
                </a>
                <div class="style-98" aria-labelledby="navbarDropdown">
                    <a class="style-99" href="business-1"><span class="style-100"><i class="style-101"></i> cPanel Webmail <span class="style-102">6216</span></span></a> <a class="style-103" href="business-2"><span class="style-104"><i class="style-105"></i> Godaddy Webmail <span class="style-106">2247</span></span></a> <a class="style-107" href="business-3"><span class="style-108"><i class="style-109"></i> Office365 Webmail <span class="style-110">10021</span></span></a> <a class="style-111" href="business-4"><span class="style-112"><i class="style-113"></i> Rackspace Webmail <span class="style-114">1823</span></span></a>
                </div>
            </li>
            <li class="style-115">
                <a class="style-116" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="style-117"></i> Accounts
                </a>
                <div class="style-118" aria-labelledby="navbarDropdown">
                    <a class="style-119" href="accounts-1"><span class="style-120"><i class="style-121"></i> Marketing <span class="style-122">99</span></span></a> <a class="style-123" href="accounts-2"><span class="style-124"><i class="style-125"></i> Hosting / Domain <span class="style-126">6</span></span></a> <a class="style-127" href="accounts-3"><span class="style-128"><i class="style-129"></i> Games <span class="style-130">18</span></span></a> <a class="style-131" href="accounts-4"><span class="style-132"><i class="style-133"></i> VPN/Socks Proxy&gt;Email Access <span class="style-134">1190</span></span></a> <a class="style-135" href="accounts-5"><span class="style-136"><i class="style-137"></i> Shopping{Amazon, Ebay, ...} <span class="style-138">94</span></span></a> <a class="style-139" href="accounts-6"><span class="style-140"><i class="style-141"></i> Programs {Antivirus, Adobe, ...} <span class="style-142">0</span></span></a> <a class="style-143" href="accounts-7"><span class="style-144"><i class="style-145"></i> Stream {Netflix,HBO, ... } <span class="style-146">124</span></span></a> <a class="style-147" href="accounts-8"><span class="style-148"><i class="style-149"></i> Dating <span class="style-150">87</span></span></a> <a class="style-151" href="accounts-9"><span class="style-152"><i class="style-153"></i> Learning{ Udacity, Udemy, Lynda, ... } <span class="style-154">14</span></span></a> <a class="style-155" href="accounts-10"><span class="style-156"><i class="style-157"></i> Torrent / File Host <span class="style-158">3</span></span></a> <a class="style-159" href="accounts-11"><span class="style-160"><i class="style-161"></i> Voip / Sip <span class="style-162">0</span></span></a> <a class="style-163" href="accounts-12"><span class="style-164"><i class="style-165"></i> Other <span class="style-166">3</span></span></a>
                </div>
            </li>
            <li class="style-167">
                <a class="style-168" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="style-169"></i> Requests
                </a>
                <div class="style-170" aria-labelledby="navbarDropdown">
                    <a class="style-171" href="requests"><span class="style-172"><i class="style-173"></i> Buyers Requests <span class="style-174"> 83</span></span></a>
                </div>
            </li> 
	<li class="style-175">
                <a class="style-176" href="offers"><i class="style-177"></i> Bulk Offers</a>
            </li>
        </ul>
        <ul class="style-178">

                        <?php
$uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
$q = mysqli_query($dbcon, "SELECT resseller FROM users WHERE username='$uid'") or die(mysqli_error());
$r         = mysqli_fetch_assoc($q);
$reselerif = $r['resseller'];
if ($reselerif == "1") {
    $uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
    $q = mysqli_query($dbcon, "SELECT soldb FROM resseller WHERE username='$uid'") or die(mysqli_error());
    $r = mysqli_fetch_assoc($q);

    echo '<li><a href="seller/index.html"><span class="badge" title="Seller Panel"><span class="glyphicon glyphicon-cloud"></span><span id="seller"></span></span></a></li>';
} else {
} ?>      
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tickets <span id="alltickets">
<?php
$sze112  = mysqli_query($dbcon, "SELECT * FROM ticket WHERE uid='$uid' and seen='1'");
$r844941 = mysqli_num_rows($sze112);
if ($r844941 == "1") {
    echo '<span class="label label-danger">1</span>';
}
?>
</span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="tickets.html" onclick="pageDiv(11,'Tickets - FeluxShop','tickets.html',0); return false;">Tickets <span class="label label-info"><span id="tickets"></span></span><?php
$s1 = mysqli_query($dbcon, "SELECT * FROM ticket WHERE uid='$uid' and seen='1'");
$r1 = mysqli_num_rows($s1);
if ($r1 == "1") {
    echo '<span class="label label-success"> 1 New</span>';
}
?></span></a></li>
            <li><a href="reports.html" onclick="pageDiv(12,'Reports - FeluxShop','reports.html',0); return false;">Reports <span class="label label-info"><span id="reports"></span></span> <?php
$s1 = mysqli_query($dbcon, "SELECT * FROM reports WHERE uid='$uid' and seen='1'");
$r1 = mysqli_num_rows($s1);
if ($r1 == "1") {
    echo '<span class="label label-success"> 1 New</span>';
}
?></span> </a>
	    </li>
            <li class="style-185">
                <a class="style-186" href="addBalance" role="button" aria-haspopup="true" aria-expanded="false"><span class="style-187">
                        0
                        <span class="style-188"><i class="style-189"></i></span></span> </a>
                    </li>
            <li class="style-190">
                <a class="style-191" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Ticket <span class="style-192">0</span></a>
                <div class="style-193" aria-labelledby="navbarDropdown">
                    <a class="style-194" href="orders"><span class="style-195">Report Items</span></a> <a class="style-196" href="tickets"><span class="style-197">My Tickets <span class="style-198">0</span></span></a> <a class="style-199" href="reports"><span class="style-200">My Reports <span class="style-201">0</span></span></a> <a class="style-202" href="OpenTicket"><span class="style-203">New Ticket</span></a>
                </div>
            </li>
            <li class="style-204">
                <a class="style-205" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> hustlersfather <i class="style-206"></i></a>
                <div class="style-207" aria-labelledby="navbarDropdown">
                    <a class="style-208" href="setting"><span class="style-209">Setting <i class="style-210"></i></span></a> <a class="style-211" href="seller-profile"><span class="style-212">Profile <i class="style-213"></i></span></a> <a class="style-214" href="orders"><span class="style-215">My Orders <i class="style-216"></i></span></a> <a class="style-217" href="addBalance"><span class="style-218">Add Balance <i class="style-219"></i></span></a> <a class="style-220" href="logout"><span class="style-221">Logout <i class="style-222"></i></span></a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div id="mainDiv">




 
