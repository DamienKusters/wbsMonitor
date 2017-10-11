<?php
include("../connect.php");

$projectId = $_POST["projectId"];

$taskSql = "SELECT task.plan FROM task
INNER JOIN project_member ON project_member.id = task.projectMemberId
WHERE project_member.projectId = '$projectId'";

$rawResult = mysqli_query($conn ,$taskSql);

$fullResult = array();

if(mysqli_num_rows($rawResult) > 0)
{
  while ($row = mysqli_fetch_assoc($rawResult))
  {
      $fullResult += $row;
  }
}

header('Content-Type: application/json');
echo json_encode($fullResult);

mysqli_close($conn);
?>
