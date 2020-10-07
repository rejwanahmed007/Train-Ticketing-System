<?php
	require_once('db.php');
	function validate($email, $password){
		$conn = getConnection();
		$sql = "select * from logininfo where email='{$email}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}
	function employee($email){
		$conn = getConnection();
		$sql = "SELECT * FROM employeeinfo,logininfo where logininfo.email=employeeinfo.email AND employeeinfo.email = 
		'{$email}'";
		$result = mysqli_query($conn, $sql);
		$employee = mysqli_fetch_assoc($result);
		return $employee;
	}
	function employeeupdate($email,$employeeid,$mobileno,$designation,$salary,$commission,$address){
		$conn = getConnection();
		$sql = "UPDATE employeeinfo SET mobileno = '$mobileno', designation = '$designation', salary = $salary, commission = $commission, address = '$address' where employeeid = $employeeid";
		$result = mysqli_query($conn, $sql);
		$employee=employee($email);
		return $employee;
		
	}
	function test_input($data)
	{
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    function updatepassword($email,$password)
    {
    	$conn = getConnection();
		$sql = "UPDATE employeeinfo SET password = '$password' where employeeinfo.email = '$email'";
		$result = mysqli_query($conn, $sql);
		$sql = "UPDATE logininfo SET password = '$password' where logininfo.email = '$email'";
		$result = mysqli_query($conn, $sql);
		$employee=employee($email);
		return $employee;
    }
    function addtrain($trainno,$name,$offday,$departurestation,$departuretime,$arrivalstation,$arrivaltime,$routetype,$capacity,$standard,$priceperstandard,$economy,$pricepereconomy,$firstclass,$priceperfirstclass)
    {
    	

    	$conn = getConnection();
		$sql = "INSERT INTO traininfo (trainid, trainno, name, offday, departurestation, departuretime, arrivalstation, arrivaltime, routetype, capacity, standard, priceperstandard, economy, pricepereconomy, firstclass, priceperfirstclass) VALUES (NULL, '$trainno','$name','$offday','$departurestation','$departuretime','$arrivalstation','$arrivaltime','$routetype',$capacity,$standard,$priceperstandard,$economy,$pricepereconomy,$firstclass,$priceperfirstclass)";
		$result = mysqli_query($conn, $sql);
		$traininfo = gettraininfo();
		return $traininfo;

    }
    function gettraininfo()
    {
    	$conn = getConnection();
    	$sql = "SELECT * FROM traininfo";
		$result = mysqli_query($conn, $sql);
		//$traininfo = mysqli_fetch_assoc($result);
		$traininfo = array();
		while ($row = mysqli_fetch_assoc($result))
		{
            $traininfo[] = $row;
        }
		return $traininfo;
    }
    function sellinfo($from,$to)
    {
    	$conn = getConnection();
    	$sql = "SELECT * FROM soldticketinfo WHERE soldticketinfo.issuedate BETWEEN '$from' AND '$to'";
		$result = mysqli_query($conn, $sql);
		$sell = array();
		while ($row = mysqli_fetch_assoc($result))
		{
            $sell[] = $row;
        }
		return $sell;
    }
    function netbill($from,$to)
    {
    	$conn = getConnection();
    	$sql = "SELECT SUM(netbill) AS netbill FROM soldticketinfo WHERE soldticketinfo.issuedate BETWEEN '$from' AND '$to'";
		$result = mysqli_query($conn, $sql);
		$netbill = mysqli_fetch_assoc($result);
		return $netbill;
    }
    function complain($from,$to)
    {
    	$conn = getConnection();
    	$sql = "SELECT * FROM complain WHERE issuedate BETWEEN '$from' AND '$to'";
		$result = mysqli_query($conn, $sql);
		$complain = array();
		while ($row = mysqli_fetch_assoc($result))
		{
            $complain[] = $row;
        }
		return $complain;
    }
    function allemployee()
    {
    	$conn = getConnection();
    	$sql = "SELECT * FROM employeeinfo";
		$result = mysqli_query($conn, $sql);
		$employeelist = array();
		while ($row = mysqli_fetch_assoc($result))
		{
            $employeelist[] = $row;
        }
		return $employeelist;
    }
    function addemployee($name,$email,$password,$mobileno,$designation,$salary,$commission,$address)
    {
    	$conn = getConnection();
    	$sql = "INSERT INTO employeeinfo (employeeid, name, mobileno, email, password, address, designation, salary, hiredate, commission) VALUES (NULL, '$name', '$mobileno', '$email', '$password', '$address', '$designation', '$salary', sysdate(), '$commission')";
		$result = mysqli_query($conn, $sql);
		$sql = "INSERT INTO logininfo (loginid,email,password,usertype) values (NULL,'$email','$password','Customoer Manager')";
		$result = mysqli_query($conn, $sql);
		$employeelist = allemployee();
		return $employeelist;
    }

	/*
	INSERT INTO `employeeinfo` (`employeeid`, `name`, `mobileno`, `email`, `password`, `address`, `designation`, `salary`, `hiredate`, `commission`) VALUES (NULL, 'Tanvir Azad', '01711085768', 'tanvir@live.com', 'azadi', 'Dhanmondi-15,Dhaka', 'Customere Manager', '35000', '2019-12-20', '5');
	SELECT * FROM `employeeinfo`
	SELECT * FROM `complain`
	SELECT * FROM `soldticketinfo` WHERE soldticketinfo.issuedate BETWEEN '2019-12-21' AND sysdate()
    SELECT SUM(netbill) AS Netbill FROM soldticketinfo
	$row = "";
	while($data = mysqli_fetch_assoc($result)){
		$row .= $data['name']."|";
	}
	echo $row;
	function validate($uname, $password){
		$conn = getConnection();
		$sql = "select * from users where username='{$uname}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		SELECT * FROM `traininfo`
		return count($user);
		UPDATE employeeinfo SET mobileno = '01711085768', designation = 'Admin', salary = 30000, commission = 3, address = 'Dhanmondi-15,Dhaka' where employeeid = 1
	}


	function register($uname, $password, $email){
		$conn = getConnection();
		$sql = "insert into users values('', '{$uname}','{$password}', '{$email}', 0)";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$data = array();
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($data, $row);
		}
		return $data;
	}

	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from users where id=".$id;
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}*/
?>