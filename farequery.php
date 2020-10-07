<?php
	
	if(isset($_COOKIE['username'])){
		
		//$employeeinfo=unserialize($_COOKIE['username']);
		$datas = simplexml_load_file('employee.xml');
		for ($j=0; $j < count($datas->employee); $j++)
		{
			if ($datas->employee[$j]->email == $_COOKIE['username'])
			{
				$GLOBALS['$employeeinfo'] = $datas->employee[$j];
			}
		}
?>
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
					<td width="15%"><a href="finance.php">Financial Assessment</a></td>
					<td width="20%"><a href="feedback.php">Passenger Feedback</a></td>
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