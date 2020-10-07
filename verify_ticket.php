<!DOCTYPE html>
<html>
	<head>
		<title>Verify Ticket</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="validation/script.js"></script>
	</head>
	<body>
		
			
		<?php
		
		if(isset($_COOKIE['user'])){
		?>
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
					<td width="10%"><a href="logout.php"><h3>Logout</h3></td></a>
				</tr>
			</table>
			
		</div>
		<?php
		}else{
		?>
		<div style="background-color: rgb(51,153,153); background-size: 100% 100% ; width: 100%; height:100px;">
			<table  style="border-color: rgb(1,1,1); ">
				<tr>
					<td width="100%"><a href="index.php"><img src="images/tts.png" height="95px" width="300px"></a></td>
					<td width="10%"><a href="index.php"><h3>Home</h3></td></a>
					<td></td>
					<td width="10%"><a href="register.php"><h3>Register</h3></td></a>
					<td></td>
					<td width="300px%"><a href="verify_ticket.php"><h3>Verify&nbsp;Ticket</h3></td></a>
					<td></td>
                    <td width="10%"><a href="farequery.php"><h3>Fare&nbsp;Query</h3></td></a>
					<td></td>
					<td width="10%"><a href="contact.php"><h3>Contact&nbsp;Us</h3></td></a>
				</tr>
			</table>
			
		</div>
		<?php
		}
		?>
		<div style="background-color: rgb(209, 240, 250); background-size: 100% 100%; width: 100%; height: 600px">
			<center>
			<form method="POST" style="height: 200px;width: 500px" action="">
				<fieldset>
					<legend><font size="5" color="DarkSlateGray "><b>Verify Your Ticket</b></font></legend>
					<table border="0">
						<tr style="font-weight: bold">
							<td style="width: 200px"><b>Ticket</b></td>
							<td style="width: 300px">
								<select name="ticket" style="width: 99%">
									<option value="select">Select Any--</option>
									<option value="onlineprinted">Online Printed</option>
									<option value="counterprinted">Counter Printed</option>
								</select>
							</td>
						</tr>
						<tr style="font-weight: bold">
							<td style="width: 200px">Ticket Number</td>
							<td ><input type="text" name="ticketnumber" style="font-size: 15px;width: 300px" placeholder="Enter Your Ticket Number"></td>
						</tr>
						<tr style="font-weight: bold">
							<td style="width: 200px">Mobile Number</td>
							<td ><input type="text" name="mobile" style="font-size: 15px;width: 300px" placeholder="Ener 11 digit Mobile Number"></td>
						</tr>
					</table>
					<hr>
					<table border="0">
						<tr>
							<td><input type="submit" name="verify" value="Verify" style="font-size: 25px;color: DarkSlateGray; width: 500px;height: 35px; background-color:rgb(51,153,153) "></td>
							
						</tr></table>
					</fieldset>
				</form>
				</center>
				
			</div>
		</body>
	</html>