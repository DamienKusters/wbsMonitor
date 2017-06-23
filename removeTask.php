<?php
include("connect.php");

$projectId = $_POST["taskId"];

$sql = "DELETE FROM project WHERE id='$taskId'";
if(mysqli_query($conn ,$sql))
{
  echo "task removed!";
}
else
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
