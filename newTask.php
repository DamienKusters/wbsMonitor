<?php
include("connect.php");

$projectId = $_POST["projectId"];
$taskName = $_POST["taskname"];

$sql = "INSERT INTO `$database`.`project` (`id`, `name`, `added`) VALUES (NULL,'{$projectName}', CURRENT_TIMESTAMP)";
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
