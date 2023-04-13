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
		<title>Variances | MME LOGISTICS</title>
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
						<h2>Variances</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">

<header class="align-center">




								<div class="table-wrapper">
									<table class="alt">
										<thead>
										  

										</thead>
										<tbody>
										    <tr><a href="https://docs.google.com/spreadsheets/d/1J82-28GSlKMLmW6dsYwvWBqB2u8VEeDf9Yd1X725TO8/edit#gid=1937398205" target="_blank">Edit Variances</a></tr>
											<tr>
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vS9Gp1ffZom09LuHodlYa8EphN8Yb9uDwcK5zhxb81A-OeT6i0ieFS1SE-pCHrcWU4NiN3yZm9lJkah/pubhtml?widget=true&amp;headers=false" width="1500" height="800"></iframe>


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
