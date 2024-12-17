<?php
include('connection.php');
$username=$_POST['username'];
$sql='select * from user where username='$username'';
?>