<?php
// create the database connection using constants previously created.

// Create constants

define("HOSTNAME", "Localhost");
define("HOSTUSER","root");
define("HOSTPASS","");
define("DBNAME","db_connect2024.php");


// Inserting constants content
require_once "constants.php";

// create the database connection
$dbConn = new mysqli(HOSTNAME, HOSTUSER,HOSTPASS, DBNAME);

// Verify the connection
if($dbConn->connect_error) {
    die("connection failed:" . $dbConn->connect_error);
}else{
   print "The connection was successful!!! :-)"; 
}
http://localhost/db_connect2024/config/dbConnect.php

?>