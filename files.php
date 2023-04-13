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
		<title>Files | MME LOGISTICS</title>
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
						<h2>Forms / Files</h2>
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
											<tr>
												<th>Name</th>

												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="align-left">Welcome Packet</td>
												<td><a href="/files/Welcome_Packet.pdf" target="_blank">Download</a></td>
											</tr>
											<tr>
												<td class="align-left">Customer Insurance Request</td>
												<td><a href="/files/InsuranceFormFillable.pdf" target="_blank">Download</a></td>
											</tr>
											<tr>
												<td class="align-left">Operating Authority</td>
												<td><a href="/files/Operating_Authority.pdf" target="_blank">Download</a></td>
											</tr>
											<tr>
												<td class="align-left">Payment Options</td>
												<td><a href="/files/PaymentOptionsFillable.pdf" target="_blank">Download</a></td>
											</tr>
											<tr>
												<td class="align-left">Claims Form</td>
												<td><a href="/files/claims_questionaire_fillable.pdf" target="_blank">Download</a></td>
											</tr>
											<tr>
												<td class="align-left">Leave Request</td>
												<td><a href="/files/LeaveRequestForm2019May.pdf" target="_blank">Download</a></td>
											</tr>
											<tr>
												<td class="align-left">Business References</td>
												<td><a href="/files/MME_CreditReferences.pdf" target="_blank">Download</a></td>
											</tr>
											<tr>
												<td class="align-left">Carrier Packet (Setting up carrier)</td>
												<td><a href="/files/CarrierPacket.pdf" target="_blank">Download</a></td>
											</tr>
											<tr>
												<td class="align-left">MME Tariff</td>
												<td><a href="/files/midw100.pdf" target="_blank">Download</a></td>
											</tr>
											<tr>
												<td class="align-left">Insurance</td>
												<td><a href="/files/Insurance.pdf" target="_blank">Download</a></td>
											</tr>	
											<tr>
												<td class="align-left">W-9</td>
												<td><a href="/files/MIDW_W9.pdf" target="_blank">Download</a></td>
											</tr>
											<tr>
												<td class="align-left">Wire Information</td>
												<td><a href="/files/MME_Global_Wire_Info.pdf" target="_blank">Download</a></td>
											</tr>	
																						<tr>
												<td class="align-left">US Customs Fees</td>
												<td><a href="/files/US_Customs_Fees.pdf" target="_blank">Download</a></td>
											</tr>
												<tr>
												<td class="align-left">Warehouse Dock Door Map</td>
												<td><a href="/files/WarehouseMap.pdf" target="_blank">Download</a></td>
											</tr>
										
																						<tr>
												<td class="align-left">TMS Steps for setting up a shipment</td>
												<td><a href="/files/MMEstepsTMS.pdf" target="_blank">Download</a></td>
											</tr>
																						<tr>
												<td class="align-left">Standard Warehouse Pricing</td>
												<td><a href="/files/PRICING_WAREHOUSE.PDF" target="_blank">Download</a></td>
											</tr>
																						<tr>
												<td class="align-left">2019 Benefits Overview</td>
												<td><a href="/files/Benefits_Overview_2019.pdf" target="_blank">Download</a></td>
											</tr>
																						<tr>
												<td class="align-left">NAFTA Template</td>
												<td><a href="/files/NAFTA_template.pdf" target="_blank">Download</a></td>
											</tr>
																						<tr>
												<td class="align-left">Competitors MME Account Numbers</td>
												<td><a href="/files/CompAcctNumbers1.pdf" target="_blank">Download</a></td>
											</tr>
																																	<tr>
												<td class="align-left">Assigned MME Account Executives</td>
												<td><a href="/files/AE_Assign.pdf" target="_blank">Download</a></td>
											</tr>
																																	<tr>
												<td class="align-left">Commercial Invoice Template</td>
												<td><a href="/files/Commercial Invoice Form.ods" target="_blank">Download</a></td>
											</tr>
																																	<tr>
												<td class="align-left">Packing Slip Template</td>
												<td><a href="/files/Packing list form.ods" target="_blank">Download</a></td>
																								
												<tr>												
												<td class="align-left">Expense Report</td>
												<td><a href="/files/expense_report.pdf" target="_blank">Download</a></td>
												</tr>
												<tr>												
												<td class="align-left">Sales Standard Operating Procedure</td>
												<td><a href="/files/SalesSOP.pdf" target="_blank">Download</a></td>
												</tr>
												<tr>												
												<td class="align-left">Logistics Terms</td>
												<td><a href="/files/SalesTerms.pdf" target="_blank">Download</a></td>
												</tr>
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
