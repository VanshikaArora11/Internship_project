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

$sql = "INSERT INTO list(enrollment_no,name,email,mobile_no,address,program,branch,year_sem) values('$enrollment_no','$name','$email','$mobile_no','$address','$program','$branch','$year_sem');";

if (mysqli_query($connection,$sql)){
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Added');
    window.location.href='http://localhost/Internship_project/admin1.php';
    </script>");
}else{
     echo ("<script LANGUAGE='JavaScript'>
    window.alert('Error');
    window.location.href='http://localhost/Internship_project/admin1.php';
    </script>");
}
?>