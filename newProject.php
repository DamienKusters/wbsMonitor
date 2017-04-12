<?php
include("connect.php");

$sql = "INSERT INTO project (id, name, added)
        VALUES ('', '$_POST["projectnaam"]', 'date("Y/m/d")'); ";

$query = mysqli_query($con, $getHighscores);
?>
