<?php
session_start();
unset($_SESSION['email']);
$connection=mysqli_connect('localhost','root','','sweet home');
$sql = "delete from cart";
$result = $connection->query($sql);
header('location:http://localhost/cse 3100 final/home.php');
?>