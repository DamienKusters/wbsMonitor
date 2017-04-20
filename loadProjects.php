<?php
include("connect.php");

$sql = "SELECT * FROM project";

$result = mysqli_query($conn ,$sql);
if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_assoc($result))
  {
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    echo "<td>{$row['name']}</td>";
    echo "<td>{$row['added']}</td>";
    echo "<td><input id='projectView{$row['id']}' class='btn btn-info' type='button' value='View' /></td>";
    echo "<td><input id='projectRem{$row['id']}' class='btn btn-danger' type='button' value='Remove' /></td>";
    echo "</tr>";
  }
}
mysqli_close($conn);
?>
