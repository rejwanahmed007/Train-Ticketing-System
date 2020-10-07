<?php
	
	if(isset($_COOKIE['user'])){
		
	 $user = json_decode($_COOKIE['user']);
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="validation/script.js"></script>
		<title>Dashboard</title>
	</head>
	<body>
		<div style="background-color: rgb(51,153,153); background-size: 100% 100% ; width: 100%; height:100px;">
			<table  style="border-color: rgb(1,1,1); ">
				<tr>
					<td width="100%"><a href="index.php"><img src="images/tts.png" height="95px" width="300px"></a></td>
					<td width="10%"><a href="dashboard.php"><h3>Dashboard</h3></td></a>
					<td></td>
					
					<td width="300px%"><a href="verify_ticket.php"><h3>Verify&nbsp;Ticket</h3></td></a>
					<td></td>
					<td width="10%"><a href="farequery.php"><h3>Fare&nbsp;Query</h3></td></a>
					<td></td>
					<td width="10%"><a href="contact.php"><h3>Contact&nbsp;Us</h3></td></a>
					<td></td>
					
					<td width="10%"><a href="logout.php"><h3>Logout</h3></td></a>
				</tr>
			</table>
			
		</div>
		<div>
			<img src="images/tts4.png" style="width: 100%">
		</div>
		<div>
			<table border="1.0" style="width: 100%; background-color: rgb(143, 215, 240)">
				<tr style="height: 30px">
					<td width="20%" ><a href="updateprofile.php" >Update Personal Info</a></td>
				    <td  width="15%"><a href="changepassword.php">Change Password</a></td>
				    <td width="15%"><a href="updatefair.php">Employee Info</a></td>
					<td width="15%"><a href="updatetrain.php">Update Train Info</a></td>
				    <td width="15%"><a href="financial.php">Financial Assessment</a></td>
				    <td width="20%"><a href="feedback.php">Passenger Feedback</a></td>
				</tr>
			</table>
		</div>
		
		<div style="background-color:	rgb(143, 215, 240); background-size: 100% 100% ; width: 100%; height:280px;">
			<fieldset>
				<legend><font size="5" color="DarkSlateGray "><b>Personal Information</b></font></legend>
				<table border="0">
					<tr>
						<td width="150px">Employee ID  </td>
						<td><input type="text" name="employeeid" id="employeeid" value="<?php echo $user->employeeid ?>" readonly></td>
					</tr>
					<tr>
						<td width="150px">Name  </td>
						<td><input type="text" name="name" id="name" value="<?php echo $user->name ?>" readonly></td>
					</tr>
					
					<tr>
						<td  width="150px">Email ID  </td>
						<td><input type="text" name="email" id="email" readonly value="<?php echo $user->email ?>"></td>
					</tr>
					<tr>
						<td  width="150px">Mobile No. </td>
						<td><input type="text" name="mobile" id="mobileno" value="<?php echo $user->mobileno ?>"></td>
					</tr>
					<tr>
						<td  width="150px">Designation </td>
						<td><input type="text" name="designation" id="designation" value="<?php echo $user->designation ?>"></td>
					</tr>
					
					<tr>
						<td  width="150px">Salary </td>
						<td><input type="text" name="salary" id="salary" value="<?php echo $user->salary ?>"></td>
					</tr>
					<tr>
						<td  width="150px">Commission </td>
						<td><input type="text" name="commission" id="commission" value="<?php echo $user->commission ?>"></td>
					</tr>
					<tr>
						<td  width="150px">Address </td>
						<td><input type="text" name="address" id="address" value="<?php echo $user->address ?>"></td>
					</tr>
				</table>
				<table border="0">
					<tr>
						<td><input type="submit" name="submit" value="Update Profile" onclick="f1()"></td>
						<td><input type="button" name="refresh" value="Refresh" onclick="location.reload(true)"></td>
					</tr>
				</table>
			</fieldset>
			
		</div>
		
		<script type="text/javascript">
			
			function f1()
			{
				
				//document.getElementById('name').value = "Ahmed";
				var employeeid = document.getElementById('employeeid').value;
				var name = document.getElementById('name').value;
				var email = document.getElementById('email').value;
				var mobileno = document.getElementById('mobileno').value;
				var designation = document.getElementById('designation').value;
				var salary = document.getElementById('salary').value;
				var commission = document.getElementById('commission').value;
				var address = document.getElementById('address').value;
				if(employeeid.length==0 || name.length==0 || email.length==0 || mobileno.length==0 || designation.length==0 || salary.length==0 || !IsNullOrWhiteSpace(mobileno) || !IsNullOrWhiteSpace(designation) || !IsNullOrWhiteSpace(salary) || !HasSpace(mobileno) || !IsNumber(salary) || !IsMobileNoValid(mobileno))
				{
					alert("Incomplete Info");

				}
				else
				{
					var xhttp = new XMLHttpRequest();
				    xhttp.open("POST", "employeeprofile.php", true);
				    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				    xhttp.send('employeeid='+employeeid+'&name='+name+'+&email='+email+'&mobileno='+mobileno+'&designation='+designation+'&salary='+salary+'&commission='+commission+'&address='+address);	
				    xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					
					 	var obj = JSON.parse(this.responseText);
					 	//alert(obj.mobileno);
					 	alert("Information Updated Successfully");
					}
				};
				}


			}

		</script>
	</body>
</html>
<?php
}else{
header('location: index.php');
}
?>