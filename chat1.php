<?php
require('connection.php');
$name= $_POST['name'];
$msg= $_POST['msg'];

$sql = "INSERT INTO chat(name,msg) values('$name','$msg')";

if (mysqli_query($connection,$sql)){
    echo ("<script LANGUAGE='JavaScript'>
    window.location.href='http://localhost/Internship_project/company_details.php';
    </script>");
}else{
    echo ("<script LANGUAGE='JavaScript'>
    window.location.href='http://localhost/Internship_project/form1.php';
    </script>");
}
?>