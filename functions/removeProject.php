<?php
include("../connect.php");

$projectId = $_POST["projectId"];

$sql = "DELETE FROM project WHERE id='$projectId'";
if(mysqli_query($conn ,$sql))
{
  echo "Project removed!";
}
else
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
