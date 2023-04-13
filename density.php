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
		<title>Density / Cube Calc | MME LOGISTICS</title>
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
						<h2>Density / Cube</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">

<header class="align-left">


								<div class="table-wrapper">

<font></font><b>Density / Cube</b><br>
Pallet Count<input id="a8" type="text" />
Length<input id="a1" type="text" />
Width<input id="a2" type="text" />
Height<input id="a3" type="text" />
Total Weight<input id="a4" type="text" /><br>
<button onclick="calculate()">Calculate</button><br><br>
Cube<input id="a5" type="text" name="total_amt" />
Density<input id="a6" type="text" name="total_amt" />
Class / NMFC Sub<input id="advice" type="text" name="total_amt" />

<script>
calculate = function()
{
    var count = document.getElementById('a8').value;
    var length = document.getElementById('a1').value;
    var width = document.getElementById('a2').value;
    var height = document.getElementById('a3').value;
    var weight = document.getElementById('a4').value;
    
    document.getElementById('a5').value = parseInt(length)*parseInt(width)*parseInt(height)/1728*parseInt(count);

            

    document.getElementById('a6').value = parseInt(weight)/(parseInt(length)*parseInt(width)*parseInt(height)/1728*parseInt(count));
    
    var result = parseInt(weight)/(parseInt(length)*parseInt(width)*parseInt(height)/1728*parseInt(count));


   
   
    if (result < 1)

         {

            document.getElementById("advice").value="Class 400 | Sub 1";

            }

            else if (result >= 1 && result < 2)

         {

            document.getElementById("advice").value="Class 300 | Sub 2";

            }

            else if  (result >= 2 && result < 4)

         {

            document.getElementById("advice").value="Class 250 | Sub 3";

            }
            
            else if  (result >= 4 && result < 6)

         {

            document.getElementById("advice").value="Class 175 | Sub 4";

            }
            else if  (result >= 6 && result < 8)

         {

            document.getElementById("advice").value="Class 125 | Sub 5";

            }
            else if  (result >= 8 && result < 10)

         {

            document.getElementById("advice").value="Class 100 | Sub 6";

            }            
            else if  (result >= 10 && result < 12)

         {

            document.getElementById("advice").value="Class 92.5 | Sub 7";

            }            
            else if  (result >= 12 && result < 15)

         {

            document.getElementById("advice").value="Class 85 | Sub 8";

            }            
            else if  (result >= 15 && result < 22.5)

         {

            document.getElementById("advice").value="Class 70 | Sub 9";

            }            
            else if  (result >= 22.5 && result < 30)

         {

            document.getElementById("advice").value="Class 65 | Sub 10";

            }            
            else if  (result > 30)

         {

            document.getElementById("advice").value="Class 60 | Sub 11";

            }
    
}
    
</script>
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
