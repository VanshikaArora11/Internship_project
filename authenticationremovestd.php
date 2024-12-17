<?php
require('connection.php');
$enrollment_no= $_POST['enrollment_no'];
$name= $_POST['name'];
$email= $_POST['email'];
$mobile_no= $_POST['mobile_no'];
$address= $_POST['address'];
$program= $_POST['program'];
$branch= $_POST['branch'];
$year_sem= $_POST['year_sem'];

$sql = "DELETE FROM list WHERE enrollment_no = '$enrollment_no'";

if (mysqli_query($connection,$sql)){
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Successfully Removed');
    window.location.href='http://localhost/Internship_project/admin1.php';
    </script>");
}else{
    echo "<script>
    window.alert('ERROR')
    window.location.href='http://localhost/Internship_project/admin1.php' </script>";
}
?>