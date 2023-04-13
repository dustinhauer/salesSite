<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{
            $username = htmlspecialchars($_SESSION["username"]);
            
            if ($username == "jend") {
                    header("location: files.php");
            exit;
            
            }elseif ($username == "shelleyb") {
                    header("location: files.php");
            exit;
            
            }
}
            ?>