<?php
include("../connect.php");

$projectId = $_POST["projectId"];
$taskName = $_POST["taskName"];

$sql = "INSERT INTO `task` (`name`) VALUES ('$taskName')";
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
