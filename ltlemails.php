<?php
// Initialize the session
session_start();

include "check.php";
 
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>LTL Emails | MME LOGISTICS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
					<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/php/header2.php";
   include_once($path);
?>

		<!-- Nav -->
		<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/php/nav.php";
   include_once($path);
?>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>MME Logistics</p>
						<h2>LTL Emails</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
<header class="align-center">


</header>
<header class="align-left">

								<div class="table-wrapper">

											   

<font color="#555">
<b>LTL rates</b>

<br>
Central Transport - cs.ratequotes@centraltransport.com<br>
Dayton Freight - pricing@daytonfreight.com<br>
ABF - rates@arcb.com<br>
Midwest Motor Express - rates@mmeinc.com<br>
Dohrn Transfer - customerService@dohrn.com<br>
Southereastern Freight Lines - customer.service@sefl.com<br>
YRC - rate.quote@yrcfreight.com<br>
Beaver Express - traffic@beaverexpress.com<br>
Speedee - bol2@speedeedelivery.com<br>
Saia - rates@saia.com<br>
<hr></hr><br>

<b>Volume Rates</b>
<br>
Midwest Motor Express - volume.rates@mmeinc.com<br>
ABF - volume@arcb.com<br>
Central Transport - spotquotes@centraltransport.com<br>
Dayton Freight - pricing@daytonfreight.com<br>
Dohrn Transfer - customerService@dohrn.com<br>
Saia - rates@saia.com<br>
<hr></hr><br>

<b>Expedited</b>
<br>
Dayton Freight - DFXTeam@daytonfreight.com<br>
ABF - TimeCritical@arcb.com<br>
<hr></hr><br>

<b>Pickups</b>
 
<br>
Dohrn Transfer - pickups@dohrn.com<br>
YRC - FreightPickup@YRCFreight.com<br>
Central Transport - cs.pickup@centraltransport.com<br>
USF Holland - FreightPickup@hollandregional.com<br>
Southeastern Freight Lines - customer.service@sefl.com<br>
Saia - pickup@saia.com<br>
Beaver Express - pickup@beaverexpress.com<br>
<hr></hr><br> 

<b>Customer Service</b>
<br>
Dohrn Transfer - customerService@dohrn.com<br>
Best Overnite - customerservice@bestovernite.com<br>
Central Transport - cs@centraltransport.com<br>
YRC - customer.service@yrcfreight.com<br>
ABF - CUSTOMERCARE@Arcb.COM<br>
Midwest Motor Express - custservice@mmeinc.com<br>
Southeastern Freight Lines - customer.service@sefl.com<br>
USF Holland - customer.service@hollandregional.com<br>
Reddaway - customer.service@reddawayregional.com<br>
Beaver Express - cscc@beaverexpress.com<br>
Roadrunner - ltlcustomerservice@rrts.com<br>
Saia - customerservice@saia.com<br>
Speedee - cusserv-ltl@speedeedelivery.com<br>
<hr></hr><br> 

<b>Claims</b>
<br>
Midwest Motor Express - claims@mmeinc.com<br>
Saia - claims@saia.com<br>
<hr></hr><br> 

 

<b>Hawaii, Alaska, Puerto Rico</b><br>

HFS - KTanudra@hfsnet.com<br>
DHX - info.honolulu@dhx.com<br>
SpanAlaska - rate@spanalaska.com<br>
YRC - customer.service@yrcfreight.com<br>
Saia - rates@saia.com<br>
Royal Hawaiian Express - bc01004@rpmcsi.com<br>
Lynden Transport - information@lynden.com<br>
Seawide Express, Jim Wyant - jwyant@seawideexpress.com<br>
-Seawide Dock for Hawaii Shipments: La Habra, CA 90631<br>
-Seawide Dock for Alaska Shipments: Fife, WA 98424
<br>
<hr></hr><br> 

<b>Mexico</b><br>

mexicorates@cfidrive.com<br>
Dave.Sargent@cfidrive.com<br>
Dustin.Quesenberry@cfidrive.com<br>
Fernando.Palomares@cfidrive.com
<br>
<hr></hr><br> 

 

<b>Canada</b><br>
pricing@bisontransport.com<br>
ratequote@canadianfreightways.com
<br>
<hr></hr><br>
<b>Canadian LTL</b><br>
ltlpricing@bisontransport.com<br>
ratequote@canadianfreightways.com
<br>
<hr></hr><br>

</font>
						


</header>
						</div>
					</div>
				</div>
			</section>
								</div>
								</div>
								</div>
																</div>
																

		<!-- Footer -->
					<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/php/footer.php";
   include_once($path);
?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
