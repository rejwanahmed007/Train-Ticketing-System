<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="validation/script.js"></script>
		<title>Passenger Registration</title>
	</head>
	<body>
		
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
		<div style="background-color: rgb(209, 240, 250); background-size: 100% 100%; width: 100%; height: 600px">
			<center>
			<form method="POST" style="height: 200px;width: 300px" action="">
				<fieldset>
					<legend><font size="5" color="DarkSlateGray "><b>Passenger Registration</b></font></legend>
					<table border="0">
						<tr>
							<td><input type="text" id="firstname" name="firstname" style="font-size: 15px" placeholder="First Name"></td>
							<td><input type="text" id="lastname" name="lastname" style="font-size: 15px" placeholder="Last Name"></td>
						</tr>
						<tr>
							<td colspan="2" ><input type="text" name="email" id="email" style="font-size: 15px; width: 99%" placeholder="Email: example@live.com"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="password" name="password" id="password" style="font-size: 15px; width: 99%" placeholder="Password: Minimum 8 Characters"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="password" id="confirmpassword" name="confirmpassword" style="font-size: 15px; width: 99%" placeholder="Confirm Password"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="text" name="mobile" id="mobile" style="font-size: 15px; width: 99%" placeholder="11 Digit Mobile Number; ex: 01711085769"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="text" name="address" id="address" style="font-size: 15px; width: 99%; height: 100px" placeholder="Address"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="text" name="card" id="card" style="font-size: 15px; width: 99%" placeholder="Debit/Credit Card Number"></td>
						</tr>
					</table>
					<hr>
					<table border="0">
                    <tr>
                        <td><input type="submit" name="register" value="Register" style="font-size: 25px;color: DarkSlateGray; width: 300px;height: 35px; background-color:rgb(51,153,153) "></td>
                        
                    </tr>
                </table>
				</fieldset>
			</form>
			</center>
		</div>
	</body>
</html>