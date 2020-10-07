<!DOCTYPE html>
<html>
	<head>
		<title>Forgot Password</title>
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
					<td width="300px%"><a href="verify_ticket.php"><h3>Verify_Ticket</h3></td></a>
					<td></td>
                    <td width="10%"><a href="farequery.php"><h3>Fare_Query</h3></td></a>
					<td></td>
					<td width="10%"><a href="contact.php"><h3>Contact_Us</h3></td></a>
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
					<legend><font size="5" color="DarkSlateGray "><b>Password Recovery</b></font></legend>
					<table border="0">
						
						<tr style="font-weight: bold">
							<td style="width: 200px">Email</td>
							<td ><input type="text" name="email" style="font-size: 15px;width: 300px" placeholder="example@live.com"></td>
						</tr>
						
					</table>
					<hr>
					<table border="0">
						<tr>
							<td><input type="submit" name="submit" value="Send Code" style="font-size: 25px;color: DarkSlateGray; width: 500px;height: 35px; background-color:rgb(51,153,153) "></td>
							
						</tr>
					</fieldset>
				</form>
				</center>
				<?php
				if(isset($_REQUEST['submit'])){
				 ?>
				
				<form method="POST" style="height: 200px;width: 500px" action="">
					<fieldset>
						<legend><font size="5" color="DarkSlateGray "><b>Enter Code</b></font></legend>
						<table border="0">
						
						<tr style="font-weight: bold">
							<td style="width: 200px">Enter Code</td>
							<td ><input type="text" name="code" style="font-size: 15px;width: 300px" placeholder="collect the code from email"></td>
						</tr>
						
					</table>
					<hr>
					<table border="0">
						<tr>
							<td><input type="submit" name="verify" value="Verify" style="font-size: 25px;color: DarkSlateGray; width: 500px;height: 35px; background-color:rgb(51,153,153) "></td>
							
						</tr>
					</table>
					</fieldset>
				</form>
				<?php } if(isset($_REQUEST['verify'])){ ?>
				<form method="POST" style="height: 200px;width: 500px" action="">
					<fieldset>
						<table border="0">
						<tr style="font-weight: bold">
							<td style="width: 200px">New Password</td>
							<td ><input type="passsword" name="newpassword" style="font-size: 15px;width: 300px" placeholder="Enter Your new passsword"></td>
						</tr>
						<tr style="font-weight: bold">
							<td style="width: 200px">Confirm Password</td>
							<td ><input type="password" name="confirmpassword" style="font-size: 15px;width: 300px" placeholder="Retype the new password"></td>
						</tr>
						</table>
						<hr>
						<table border="0">
						<tr>
							<td><input type="submit" name="changepassword" value="Change Password" style="font-size: 25px;color: DarkSlateGray; width: 500px;height: 35px; background-color:rgb(51,153,153) "></td>
							
						</tr>
					</table>
					</fieldset>
				</form>
				<?php } ?>
			</div>
		</body>
	</html>