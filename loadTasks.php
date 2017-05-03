<?php
include("connect.php");

$projectId = $_POST["projectId"];

$sql = "SELECT * FROM task WHERE projectId = '$projectId'";

$result = mysqli_query($conn ,$sql);

$results = array();

if(mysqli_num_rows($result) > 0)
{
  while ($row = mysqli_fetch_assoc($result))
  {
		$results[] = $row;
	}
}

header('Content-Type: application/json');
echo json_encode($results);

mysqli_close($conn);
?>
