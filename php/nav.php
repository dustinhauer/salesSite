<?php
include "logincheck.php";
            

                
echo "<nav id=menu>
				<ul class=links>
					<li><a href=index.php>Home</a></li>
					<li><a href=sales.php?sales=42021>Sales</a></li>
					<li><a href=allnumbers.php?sales=42021>All Shipments</a></li>
                    <li><a href=newcustomers.php>New Customers</a></li>
					<li><a href=files.php>Files</a></li>
					<li><a href=links.php>Links</a></li>
					<li><a href=variance.php>Variances</a></li>
					<li><a href=density.php>Density / Cube</a></li>
					<li><a href=emails.php>TL Emails</a></li>
					<li><a href=ltlemails.php>LTL Emails</a></li>";


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
?>
        <h1>Hi,
<?php
            
            $username = htmlspecialchars($_SESSION["username"]);
            
            if ($username == "dustinh") {
            echo "Dustin";
            }elseif ($username == "caseyg") {
            echo "Casey";  
            }elseif ($username == "alexw") {
            echo "Alex";  
            }elseif ($username == "kasaundrao") {
            echo "KaSaundra";  
            }elseif ($username == "ronm") {
            echo "Ron";  
            }elseif ($username == "miker") {
            echo "Mike";  
            }elseif ($username == "jslavik") {
            echo "John";  
            }elseif ($username == "randya") {
            echo "Randy";  
            }elseif ($username == "derekl") {
            echo "Derek";  
            }elseif ($username == "shelleyb") {
            echo "Shelley";  
            }
?>
! Not you? <a href="logout.php">Logout</a>.
<?php
} else {
    echo "Please log in first to see this page.";
}
?>

				</ul>
			</nav>