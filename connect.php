<?php
$servername = "localhost";
$username   = "root";
$password   = "usbw";
$database   = "wbs_monitor";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn)
{
   die("Connection failed: " . mysqli_connect_error());
}
else
{
  echo "Connected successfully";
}

$sql = "SELECT id, name FROM tbl_projects";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result))
    {
      echo "<br />";
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
} else
{
    echo "0 results";
}

mysqli_close($conn);
?>
