<?php
include("../connect.php");

$projectId = $_POST["projectId"];

$taskSql = "SELECT task.*, user.username FROM task 

INNER JOIN project_member ON project_member.id = task.projectMemberId
INNER JOIN user ON user.id = project_member.userId 
WHERE project_member.projectId = '$projectId'";



$taskResult = mysqli_query($conn ,$taskSql);

$taskResults = array();

if(mysqli_num_rows($taskResult) > 0)
{
  while ($taskRow = mysqli_fetch_assoc($taskResult))
  {
      $taskResults[] = $taskRow;
  }
}


$memberSql = "SELECT user.username FROM user
INNER JOIN project_member ON  project_member.userId = user.id
WHERE project_member.projectId =  $projectId";

$memberResult = mysqli_query($conn ,$memberSql);

$memberResults = array();

if(mysqli_num_rows($memberResult) > 0)
{
  while ($memberRow = mysqli_fetch_assoc($memberResult))
  {
		$memberResults[] = $memberRow["username"];
  }
}


$results = array("tasks" => $taskResults, "users" => $memberResults);



header('Content-Type: application/json');
echo json_encode($results);

mysqli_close($conn);
?>
