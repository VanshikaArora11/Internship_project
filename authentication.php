<?php
include('connection.php');
$username= $_POST['user'];
$password= $_POST['pass'];

$sql = "select *from login WHERE user = '$username' and password = '$password'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if ($count==1){
   echo ("<script LANGUAGE='JavaScript'>
    window.alert('Successfully login');
    window.location.href='http://localhost/Internship_project/admin1.php';
    </script>");
}else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('login failed');
    window.location.href='http://localhost/Internship_project/1.html';
    </script>");

}
?>