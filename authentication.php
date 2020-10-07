<?php
require_once('db/functions.php');
if(isset($_REQUEST['login']))
{
	$email= $_REQUEST['email'];
	$password= $_REQUEST['password'];
	if (empty($email)==true || empty($password)==true)
	{

		header('location: index.php');
		//echo "unsuccessful";
	}
	else
	{
		$user = validate($email, $password);
		if(count($user) > 0)
		{
			if($user['usertype']=="Admin")
			{
				$employee = employee($user['email']);
				$employee = json_encode($employee);
				setcookie("user", $employee, time()+3600, "/");
				header('location: dashboard.php');
			}
			else
			{
				header('location: index.php');
			}
			

		}else{
				header('location: index.php');
			}
		
	}
}
else{header('location: index.php');}
?>