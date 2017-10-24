<?php
$servername = "localhost";
$username   = "root";
$password   = "root";
$database   = "wbs";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn)
{
    print "<h1>Check if you have entered the correct connection credentials in 'connect.php'</h1>";
    die("Connection failed: " . mysqli_connect_error());
}
?>
