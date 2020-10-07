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
		<center>
		<div style="background-color:	rgb(143, 215, 240); background-size: 100% 100% ; width: 100%; height:250px;">
			<fieldset>
				<legend><font size="5" color="DarkSlateGray "><b>Change Password</b></font></legend>
				<table border="0">
					<tr>
						<td width="150px">Old Password </td>
						<td width="150px"><input type="Password" name="oldpassword" id="oldpassword"></td>
					</tr>
					<tr>
						<td width="150px">New Password </td>
						<td width="150px"><input type="Password" name="newpassword" id="newpassword"></td>
					</tr>
					<tr>
						<td width="150px">Confirm Password </td>
						<td width="150px"><input type="Password" name="confirmpassword" id="confirmpassword"></td>
					</tr>
					
				</table>
				<hr>
				<table border="0">
					<tr>
						<td><input type="submit" name="submit" value="Change Password" onclick="f1()"></td>
						<td><input type="button" name="refresh" value="Refresh" onclick="location.reload(true)"></td>
					</tr>
				</table>
			</fieldset>
			
		</div>
		</center>
		<script type="text/javascript">
			function f1()
			{
				//var password = "";
				var xhttp = new XMLHttpRequest();
				xhttp.open("POST", "datalist/password.php", true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send();
				xhttp.onreadystatechange = function()
				{
					if (this.readyState == 4 && this.status == 200) 
					{
						var obj = JSON.parse(this.responseText);
						password = obj.password;
						//alert(password);

					}
				};
				//alert(password);
				var newpassword = document.getElementById('newpassword').value.toString();
				var oldpassword = document.getElementById('oldpassword').value.toString();
				var confirmpassword = document.getElementById('confirmpassword').value.toString();
				if(oldpassword==password)
				{
					//alert("Old Password valid");
					if(newpassword==confirmpassword && HasSpace(newpassword) && newpassword.length>=5)
					{
						xhttp.open("POST", "datalist/updatepassword.php", true);
				        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				        xhttp.send('password='+newpassword);
				        xhttp.onreadystatechange = function()
				        {
					        if (this.readyState == 4 && this.status == 200) 
					        {
					        	//var obj = JSON.parse(this.responseText);
					        	alert("password updated successfully");

					        }
				        };
					}
					else
					{
						alert("Password should be greater than or equal 5 characters and both new and confirm should be same and space is not allowed");
					}

				}
				else
				{
					alert("Old Password Invalid");
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