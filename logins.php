<?php
// Initialize the session
session_start();
 
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
		<title>Carrier Logins | MME LOGISTICS</title>
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
						<h2>Carrier Logins</h2>
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

<b>Bison Transport</b>

<br>
Username: MIDWEST<br>
password: MME123<br>

<hr></hr><br>


<b>Roadrunner</b><br>

Username: kasaundra.jones<br>
password: Midwest1!<br>

<hr></hr><br>


<b>BROWN TRANSFER</b><br>

Username: MMELOG<br>
Temporary Password: Midwest1<br>

<hr></hr><br>


<b>Dohrn TRANSFER</b><br>

Username: MMELOG<br>
Temporary Password: Midwest1<br>

<hr></hr><br>


<b>Standard Forwarding</b><br>

Username: MMEL3P01<br>
Password: midwest1<br>

<hr></hr><br>


<b>UShip</b><br>

User: mmelogistix<br>
Pass: Midwest1<br>

<hr></hr><br>


<b>Central Transport</b><br>

Username: kasaundra.jones@mmeinc.com<br>
Password: Central1<br>

<hr></hr><br>


<b>PittOhio</b><br>

Username: tms.booking@mmeinc.com<br>
Password: Midwest1<br>

<hr></hr><br>


<b>Class-it</b><br>

Username: donna.macmaster@mmeinc.com<br>
Password: midwest 02<br>

<hr></hr><br>


<b>SEFL</b><br>

Username: MMELOGISTICS<br>
Password: MME618<br>

<hr></hr><br>


<b>Goodyear</b><br>

Username: dhauer<br>
Password: password1<br>

<hr></hr><br>


<b>DATS</b><br>

Username: dustinhauer<br>
Password: Mme12345<br>

<hr></hr><br>


<b>ABF GHY</b><br>

Username: 748399<br>
Password: T8P1RK<br>
Acct#748399<br>

<hr></hr><br>


<b>YRC</b><br>

Username: mme2479<br>
Password: midwest1<br>

<hr></hr><br>


<b>DHLexpress U</b><br>

Username: MMEGLOBAL acct# EXPORT: 848136594<br>
Password: tx34rr5kpg acct# IMPORT: 966836558<br>

<hr></hr><br>


<b>Pepsi Logistics Loadboard</b><br>

Username: 321206<br>
Password: 321206ND<br>

<hr></hr><br>


<b>EpayManager</b><br>

Username: mmelogistics<br>
Password: Wfargo135<br>

<hr></hr><br>


<b>WebsiteChat</b><br>

Username: 3plsales@mmeinc.com<br>
Password: Midwest1<br>
First Name: MME<br>
Last Name: Logistics<br>
Website: https://dashboard.zopim.com/?lang=en-us<br>

<hr></hr><br>


<b>Saia</b><br>

Username: mmeglobal acct# 0996798<br>
Password: midwest1<br>

<hr></hr><br>


<b>Best Overnite</b><br>

Username: MME1 acct# 571292<br>
Password: logistics<br>

<hr></hr><br>


<b>Reddaway</b><br>

Username: mmelogistics<br>
Password: Midwest1<br>

<hr></hr><br>


<b>Dayton Freight</b><br>

Username: kkjonesmme<br>
Password: Midwest1<br>

<hr></hr><br>


<b>USPS</b><br>

mmeglobal<br>
Midwest1<br>
fargo<br>
akira<br>

<hr></hr><br>


<b>FedEx</b><br>

Small pack account<br>
Account # 565732927<br><br>


<b>FedEx</b><br>

login: MMEGlobal<br>
Midwest14hz<br>
Password 9/28 314N27St!<br>
place of birth?<br>
Fargo<br>

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
