<?php
include 'connection.php';

$getStudentData=mysqli_query($conn,"SELECT * FROM `student_info`");
while($rowStudentData=mysqli_fetch_array($getStudentData)) {
  //$sl=$rowStudentData['sl'];
  echo "<pre>";
  print_r($rowStudentData);
  echo "</pre>";
}

?>