<?php
require('connection.php');
$enrollment_no= $_POST['enrollment_no'];
$sql = "SELECT * FROM `list` WHERE enrollment_no='$enrollment_no'";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Enrollment no : " . $row["enrollment_no"]." - Name :  " . $row["name"]. "<br>" . "Email : " . $row["email"] . " - Mobile no : " . $row["mobile_no"] . "<br>" . "Address :  " . $row["address"]. " - Program : " . $row["program"] . "<br>". "Branch : " . $row["branch"]. " - Year/Sem : " . $row["year_sem"];
  }
} else {
  echo "0 results";
}
$connection->close();
?>
