<?php
require_once('../db/functions.php');
$user = json_decode($_COOKIE['user']);
$email = $user->email;
$password = $_POST['password'];
$employee = updatepassword($email,$password);
$employee = json_encode($employee);
setcookie("user", $employee, time()+3600, "/");
echo $employee;
?>