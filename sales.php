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
		<title>Sales | MME LOGISTICS</title>
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
						<h2>Sales</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">

<header class="align-center">


<b>2019</b><br>
<a href="/sales.php?sales=12019">Jan</a> | 
<a href="/sales.php?sales=22019">Feb</a> | 
<a href="/sales.php?sales=32019">Mar</a> | 
<a href="/sales.php?sales=42019">Apr</a> | 
<a href="/sales.php?sales=52019">May</a> | 
<a href="/sales.php?sales=62019">Jun</a> | 
<a href="/sales.php?sales=72019">Jul</a> | 
<a href="/sales.php?sales=82019">Aug</a> | 
<a href="/sales.php?sales=92019">Sept</a> | 
<a href="/sales.php?sales=102019">Oct</a> | 
<a href="/sales.php?sales=112019">Nov</a> | 
<a href="/sales.php?sales=122019">Dec</a><hr>
<b>2020</b><br>
<a href="/sales.php?sales=12020">Jan</a> | 
<a href="/sales.php?sales=22020">Feb</a> | 
<a href="/sales.php?sales=32020">Mar</a> |
<a href="/sales.php?sales=42020">Apr</a> | 
<a href="/sales.php?sales=52020">May</a> | 
<a href="/sales.php?sales=62020">June</a> | 
<a href="/sales.php?sales=72020">July</a> | 
<a href="/sales.php?sales=82020">Aug</a> | 
<a href="/sales.php?sales=92020">Sept</a> | 
<a href="/sales.php?sales=102020">Oct</a> | 
<a href="/sales.php?sales=112020">Nov</a> | 
<a href="/sales.php?sales=122020">Dec</a><hr>
<b>2021</b><br>
<a href="/sales.php?sales=12021">Jan</a> | 
<a href="/sales.php?sales=22021">Feb</a> | 
<a href="/sales.php?sales=32021">Mar</a> | 
<a href="/sales.php?sales=42021">Apr</a> | 
<a href="/sales.php?sales=52021">May</a>
<hr>



								<div class="table-wrapper">
									<table class="alt">
										<thead>
										  

										</thead>
										<tbody>
											<tr>
<?php
if(isset($_GET['sales']) && !empty($_GET['sales']))
{
    if($_GET['sales'] == "12019") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRWrpUxMwI6qU92Cjxnd4zjcdO03J1pHT0gakiliJ15jU4SM5hwSic0C1kHUV6ao-jFv2WdBBV_DEDE/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "22019") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRWrpUxMwI6qU92Cjxnd4zjcdO03J1pHT0gakiliJ15jU4SM5hwSic0C1kHUV6ao-jFv2WdBBV_DEDE/pubhtml?gid=223774010&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "32019") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRWrpUxMwI6qU92Cjxnd4zjcdO03J1pHT0gakiliJ15jU4SM5hwSic0C1kHUV6ao-jFv2WdBBV_DEDE/pubhtml?gid=969177995&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "42019") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRWrpUxMwI6qU92Cjxnd4zjcdO03J1pHT0gakiliJ15jU4SM5hwSic0C1kHUV6ao-jFv2WdBBV_DEDE/pubhtml?gid=1532109999&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "52019") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRWrpUxMwI6qU92Cjxnd4zjcdO03J1pHT0gakiliJ15jU4SM5hwSic0C1kHUV6ao-jFv2WdBBV_DEDE/pubhtml?gid=226529468&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "62019") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRWrpUxMwI6qU92Cjxnd4zjcdO03J1pHT0gakiliJ15jU4SM5hwSic0C1kHUV6ao-jFv2WdBBV_DEDE/pubhtml?gid=384539691&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "72019") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRWrpUxMwI6qU92Cjxnd4zjcdO03J1pHT0gakiliJ15jU4SM5hwSic0C1kHUV6ao-jFv2WdBBV_DEDE/pubhtml?gid=1789486699&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php

}elseif ($_GET['sales'] == "82019") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRWrpUxMwI6qU92Cjxnd4zjcdO03J1pHT0gakiliJ15jU4SM5hwSic0C1kHUV6ao-jFv2WdBBV_DEDE/pubhtml?gid=198650004&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "92019") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRWrpUxMwI6qU92Cjxnd4zjcdO03J1pHT0gakiliJ15jU4SM5hwSic0C1kHUV6ao-jFv2WdBBV_DEDE/pubhtml?gid=72553867&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "102019") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRWrpUxMwI6qU92Cjxnd4zjcdO03J1pHT0gakiliJ15jU4SM5hwSic0C1kHUV6ao-jFv2WdBBV_DEDE/pubhtml?gid=1176976565&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "112019") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRWrpUxMwI6qU92Cjxnd4zjcdO03J1pHT0gakiliJ15jU4SM5hwSic0C1kHUV6ao-jFv2WdBBV_DEDE/pubhtml?gid=1063377542&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "122019") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRWrpUxMwI6qU92Cjxnd4zjcdO03J1pHT0gakiliJ15jU4SM5hwSic0C1kHUV6ao-jFv2WdBBV_DEDE/pubhtml?gid=1322795917&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "12020") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ2_zz6Lb1KNfsk9Rpq-f_AKekBekcRv63viceTNn-yRopr5vW018w8Q-zHS_NoSKeHZ5XA0AjRSs2n/pubhtml?gid=1738927419&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "22020") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ2_zz6Lb1KNfsk9Rpq-f_AKekBekcRv63viceTNn-yRopr5vW018w8Q-zHS_NoSKeHZ5XA0AjRSs2n/pubhtml?gid=431894000&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "32020") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ2_zz6Lb1KNfsk9Rpq-f_AKekBekcRv63viceTNn-yRopr5vW018w8Q-zHS_NoSKeHZ5XA0AjRSs2n/pubhtml?gid=1138043019&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "42020") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ2_zz6Lb1KNfsk9Rpq-f_AKekBekcRv63viceTNn-yRopr5vW018w8Q-zHS_NoSKeHZ5XA0AjRSs2n/pubhtml?gid=1351275546&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "52020") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ2_zz6Lb1KNfsk9Rpq-f_AKekBekcRv63viceTNn-yRopr5vW018w8Q-zHS_NoSKeHZ5XA0AjRSs2n/pubhtml?gid=908751091&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "62020") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ2_zz6Lb1KNfsk9Rpq-f_AKekBekcRv63viceTNn-yRopr5vW018w8Q-zHS_NoSKeHZ5XA0AjRSs2n/pubhtml?gid=1789482963&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "72020") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ2_zz6Lb1KNfsk9Rpq-f_AKekBekcRv63viceTNn-yRopr5vW018w8Q-zHS_NoSKeHZ5XA0AjRSs2n/pubhtml?gid=1801789731&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "82020") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ2_zz6Lb1KNfsk9Rpq-f_AKekBekcRv63viceTNn-yRopr5vW018w8Q-zHS_NoSKeHZ5XA0AjRSs2n/pubhtml?gid=1993154075&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "92020") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ2_zz6Lb1KNfsk9Rpq-f_AKekBekcRv63viceTNn-yRopr5vW018w8Q-zHS_NoSKeHZ5XA0AjRSs2n/pubhtml?gid=2066022377&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "102020") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ2_zz6Lb1KNfsk9Rpq-f_AKekBekcRv63viceTNn-yRopr5vW018w8Q-zHS_NoSKeHZ5XA0AjRSs2n/pubhtml?gid=714165810&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "112020") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ2_zz6Lb1KNfsk9Rpq-f_AKekBekcRv63viceTNn-yRopr5vW018w8Q-zHS_NoSKeHZ5XA0AjRSs2n/pubhtml?gid=1315063489&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "122020") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ2_zz6Lb1KNfsk9Rpq-f_AKekBekcRv63viceTNn-yRopr5vW018w8Q-zHS_NoSKeHZ5XA0AjRSs2n/pubhtml?gid=1017779352&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "12021") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQm_Fk9WmKz6HGDiCpd_ufxoPtY9rTZYTykX4J80a1C-X4Pa5s3ADmS5ufYR46_ut2owe1GpA8IyjJL/pubhtml?gid=1017779352&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "22021") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQm_Fk9WmKz6HGDiCpd_ufxoPtY9rTZYTykX4J80a1C-X4Pa5s3ADmS5ufYR46_ut2owe1GpA8IyjJL/pubhtml?gid=1980517969&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "32021") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQm_Fk9WmKz6HGDiCpd_ufxoPtY9rTZYTykX4J80a1C-X4Pa5s3ADmS5ufYR46_ut2owe1GpA8IyjJL/pubhtml?gid=1152559648&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "42021") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQm_Fk9WmKz6HGDiCpd_ufxoPtY9rTZYTykX4J80a1C-X4Pa5s3ADmS5ufYR46_ut2owe1GpA8IyjJL/pubhtml?gid=2057529964&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}elseif ($_GET['sales'] == "52021") {
?>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQm_Fk9WmKz6HGDiCpd_ufxoPtY9rTZYTykX4J80a1C-X4Pa5s3ADmS5ufYR46_ut2owe1GpA8IyjJL/pubhtml?gid=239154006&amp;single=true&amp;widget=true&amp;headers=false" width="1050" height="1500"></iframe>
<?php
}
}
?>


											</tr>											
										</tbody>
									</table>

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
