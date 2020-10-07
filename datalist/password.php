<?php
//require_once('../db/functions.php');
$user = json_decode($_COOKIE['user']);
//$password = ['password'=>"rejwan"];
echo json_encode($user);
?>