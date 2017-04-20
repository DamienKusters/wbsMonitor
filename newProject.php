<?php
include("connect.php");

$projectName = $_POST["projectnaam"];

$sql = "INSERT INTO project (name) VALUES ('{$projectName}')";

if(mysqli_query($conn ,$sql))
{
  echo "new project added!";
}
else
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
