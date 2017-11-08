<?php
$dbServername = "localhost";
$dbUsername   = "root";
$dbPassword   = "test";
$dbDatabase   = "wbs_monitor";

// Create connection
$conn = mysqli_connect($dbServername, $dbUsername , $dbPassword, $dbDatabase );

// Check connection
if (!$conn)
{
    print "<h1>Check if you have entered the correct connection credentials in 'connect.php'</h1>";
    die("Connection failed: " . mysqli_connect_error());
}
?>
