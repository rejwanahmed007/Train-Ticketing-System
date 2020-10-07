<?php
	
	if(isset($_COOKIE['user'])){
		require_once('db/functions.php');
		$employeelist=allemployee();
		
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="validation/script.js"></script>
	</head>
	<body>
		
		<div style="background-color: rgb(51,153,153); background-size: 100% 100% ; width: 100%; height:100px;">
			<table  style="border-color: rgb(1,1,1); ">
				<tr>
					<td width="100%"><a href="index.php"><img src="images/tts.png" height="95px" width="300px"></a></td>
					<td width="10%"><a href="dashboard.php"><h3>Dashboard</h3></td></a>
					<td></td>
					
					<td width="300px%"><a href="verify_ticket.php"><h3>Verify_Ticket</h3></td></a>
					<td></td>
					<td width="10%"><a href="farequery.php"><h3>Fare_Query</h3></td></a>
					<td></td>
					<td width="10%"><a href="contact.php"><h3>Contact_Us</h3></td></a>
					<td></td>
					
					<td width="10%"><a href="logout.php"><h3>Logout</h3></td></a>
				</tr>
			</table>
			
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
		<div>
			<form>
				<fieldset>
					<legend><font size="5" color="DarkSlateGray "><b>Employee Info</b></font></legend>
					
					<hr>
					<table border="1" style="height: auto; width: 100%">
						<tr>
							<td>Employee ID</td>
							<td>Employee Name</td>
							<td>Mobile Number</td>
							<td>Email</td>
							<td>Address</td>
							<td>Designation</td>
							<td>Salary</td>
							<td>Commission</td>
							<td>Hired Date</td>
						</tr>
						<?php
						for($i=0;$i<count($employeelist);$i++)
						{
							?>
							<tr>
							<td><?php echo $employeelist[$i]['employeeid'] ?></td>
							<td><?php echo $employeelist[$i]['name'] ?></td>
							<td><?php echo $employeelist[$i]['mobileno'] ?></td>
							<td><?php echo $employeelist[$i]['email'] ?></td>
							<td><?php echo $employeelist[$i]['address'] ?></td>
							<td><?php echo $employeelist[$i]['designation'] ?></td>
							<td><?php echo $employeelist[$i]['salary'] ?></td>
							<td><?php echo $employeelist[$i]['commission'] ?></td>
							<td><?php echo $employeelist[$i]['hiredate'] ?></td>
						</tr>
							<?PHP
						}
						?>
					</table>
					<table border="0">
						<tr>
							<td><input type="button" name="refresh" value="Refresh" onclick="location.reload(true)"></td>
						</tr>
					</table>
				</fieldset>
				<fieldset>
					<legend><font size="5" color="DarkSlateGray "><b>Recruit New Employee</b></font></legend>
					<hr>
					<table border="0" style="width: auto; height: auto;">
					
					<tr>
						<td >Employee Name  </td>
						<td><input type="text" name="name" id="name" placeholder="Enter Employee Name" ></td>
					</tr>
					
					<tr>
						<td  >Email ID  </td>
						<td><input type="text" name="email" id="email" placeholder="enter valid email" ></td>
					</tr>
					<tr>
						<td  >Mobile No. </td>
						<td><input type="text" name="mobile" id="mobileno" placeholder="only bangladeshi 11 digit moible no"></td>
					</tr>
					<tr>
						<td  >Designation </td>
						<td><input type="text" name="designation" id="designation" placeholder="Customer Manager/Admin"></td>
					</tr>
					
					<tr>
						<td  >Salary </td>
						<td><input type="text" name="salary" id="salary" placeholder="only numerical value"></td>
					</tr>
					<tr>
						<td  >Commission </td>
						<td><input type="text" name="commission" id="commission" placeholder="only numerical value"></td>
					</tr>
					<tr>
						<td  >Address </td>
						<td><input type="text" name="address" id="address" placeholder="ex: Mirpu, Dhaka"></td>
					</tr>
					<tr>
						<td >Password </td>
						<td><input type="text" name="password" id="password" placeholder="space is not allowed and more than 5 charecter"></td>
					</tr>

				</table>
				<hr>
				<table>
					<input type="submit" name="submit" id="submit" onclick="f1()" value="Add Employee">
				</table>
				</fieldset>
			</form>
		</div>
		
		<script type="text/javascript">
			function f1()
			{
				//alert("reg");
				//var employeeid = document.getElementById('employeeid').value;
				var name = document.getElementById('name').value.toString(); 
				var email = document.getElementById('email').value.toString();
				var mobileno = document.getElementById('mobileno').value.toString();
				var designation = document.getElementById('designation').value.toString();
				var salary = document.getElementById('salary').value.toString();
				var commission = document.getElementById('commission').value.toString();
				var address = document.getElementById('address').value.toString();
				var password = document.getElementById('password').value.toString();
				if(IsNullOrWhiteSpace(name) && IsNullOrWhiteSpace(designation) && IsNullOrWhiteSpace(address) && IsEmailValid(email) && HasSpace(password) && password.length>=5 && IsMobileNoValid(mobileno) && IsNumber(salary) && HasSpace(salary) && IsNumber(commission) && HasSpace(commission))
				{
					var xhttp = new XMLHttpRequest();
				    xhttp.open("POST", "datalist/addemployee.php", true);
				    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				    xhttp.send('password='+password+'&name='+name+'+&email='+email+'&mobileno='+mobileno+'&designation='+designation+'&salary='+salary+'&commission='+commission+'&address='+address);	
				    xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					
					 	var obj = JSON.parse(this.responseText);
					 	//alert(obj.mobileno);
					 	alert("Employee Added");
					 	//location.reload(true);
					}
				};
				}
				else
				{
					alert("Incorrect/Incomplet info");
					location.reload(true);
				}
			}
		</script>
		
	</body>
</html>
<?php
}else{ ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard</title>
	</head>
	<body>
		<style>
			
			a:link {
			color: green;
			background-color: transparent;
			text-decoration: none;
			}
			a:visited {
			color: black;
			background-color: transparent;
			text-decoration: none;
			}
			a:hover {
			color: grey;
			background-color: transparent;
			text-decoration: none;
			}
			a:active {
			color: yellow;
			background-color: transparent;
			text-decoration: none;
			}
		</style>
		<div style="background-color: rgb(51,153,153); background-size: 100% 100% ; width: 100%; height:100px;">
			<table  style="border-color: rgb(1,1,1); ">
				<tr>
					<td width="100%"><a href="index.php"><img src="images/tts.png" height="95px" width="300px"></a></td>
					<td width="10%"><a href="index.php"><h3>Home</h3></td></a>
					<td></td>
					<td width="10%"><a href="register.php"><h3>Register</h3></td></a>
					<td></td>
					<td width="300px%"><a href="verify_ticket.php"><h3>Verify_Ticket</h3></td></a>
					<td></td>
					<td width="10%"><a href="farequery.php"><h3>Fare_Query</h3></td></a>
					<td></td>
					<td width="10%"><a href="contact.php"><h3>Contact_Us</h3></td></a>
				</tr>
			</table>
			
		</div>
		<div>
			<form>
				<fieldset>
					<legend><font size="5" color="DarkSlateGray "><b>Fare Query</b></font></legend>
					<table border="0.5" style="width: 100%; background-color: rgb(143, 215, 240)">
						<tr>
							<td width="25%">Journey From</td>
							<td width="25%">
								<select name="from">
									<option value="">Select Any--</option>
									<option value="Dhaka">Dhaka</option>
									<option value="Chittagong">Chittagong</option>
									<option value="Rajshahi">Rajshahi</option>
								</td>
								<td width="25%">Journey To</td>
								<td width="25%">
									<select name="to">
										<option value="">Select Any--</option>
										<option value="Dhaka">Dhaka</option>
										<option value="Chittagong">Chittagong</option>
										<option value="Rajshahi">Rajshahi</option>
									</td>
									
								</tr>
								<tr>
									<td width="25%">Journey Date</td>
									<td width="25%"><input type="Date" name="journeydate"></td>
									<td width="25%">Journey Time</td>
									<td width="25%"><input type="Time" name="journeytime"></td>
								</tr>
								<tr>
									<td width="25%">Available Train</td>
									<td width="25%">
										<select name="train">
											<option value="">Select Any--</option>
											<option value="Turna Nishita">Turna Nishita</option>
											<option value="Chittagong Express">Chittagong Express</option>
											<option value="Rajshahi Express">Rajshahi Express</option>
										</td>
										<td width="25%">Train Route</td>
										<td width="25%">--</td>
									</tr>
									<tr>
										<td width="25%">Class</td>
										<td width="25%">
											<select name="class">
												<option value="">Select Any--</option>
												<option value="Standard (AC Couch)">Standard (AC Couch)</option>
												<option value="First Class (AC Cabin)">First Class (AC Cabin)</option>
												<option value="Economy (Couch)">Economy (Couch)</option>
											</td>
											<td width="25%">Available Seat</td>
											<td width="25%">--</td>
										</tr>
										<tr>
											<td width="25%">Number of Seat</td>
											<td width="25%">
												<select name="seat">
													<option value="">Select Any--</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</td>
												<td width="25%">Bill</td>
												<td width="25%">-- BDT</td>
											</tr>
											<tr>
												<td width="25%">Vat(%3)</td>
												<td width="25%">-- BDT</td>
												<td width="25%">Net Bill</td>
												<td width="25%">-- BDT</td>
											</tr>
										</table>
									</fieldset>
								</form>
							</div>
							
							
							
						</body>
					</html>
					
					<?php }
					?>