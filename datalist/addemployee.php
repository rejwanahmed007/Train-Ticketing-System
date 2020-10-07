<?php

require_once('../db/functions.php');
//$user = json_decode($_COOKIE['user']);
$password = $_POST['password'];
//$employeeid = $_POST['employeeid'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];
$designation = $_POST['designation'];
$salary = $_POST['salary'];
$commission = $_POST['commission'];
$address = $_POST['address'];

$employeelist = addemployee($name,$email,$password,$mobileno,$designation,$salary,$commission,$address);


//$json = ['employeeid'=>$employeeid,'name'=>$name, 'email'=>$email, 'mobileno'=>$mobileno, 'designation'=>$designation, 'salary'=>$salary, 'commission'=>$commission, 'address'=>$address];

$employeelist = json_encode($employeelist);
//setcookie("user", $employee, time()+3600, "/");
echo $employeelist;

?>