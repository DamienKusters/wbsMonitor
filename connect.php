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
  $sql = "SELECT * FROM tbl_projects";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0)
  {
      // output data of each row
      while($row = mysqli_fetch_assoc($result))
      {?>
        <br />
        <a>"id: " . $row["id"]. " - Name: " . $row["name"]. "</a>

 <?php}
  }
  else
  {
      echo "0 results";
  }

  mysqli_close($conn);
}
?>
