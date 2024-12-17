<?php
include('connection2.php');
$userid= $_POST['id'];
$password= $_POST['pass'];

$sql = "select *from student WHERE id = '$userid' and password = '$password'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if ($count==1){
   echo ("<script LANGUAGE='JavaScript'>
    window.alert('Successfully logged in as $userid ');
    window.location.href='http://localhost/Internship_project/form1.php';
    </script>");
}else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('login failed');
    window.location.href='http://localhost/Internship_project/2.html';
    </script>");
}
?>
