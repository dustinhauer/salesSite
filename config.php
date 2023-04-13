<?php
// Database credentials (mySQL)

define('DB_SERVER',);
define('DB_USERNAME',);
define('DB_PASSWORD',);
define('DB_NAME',);
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
