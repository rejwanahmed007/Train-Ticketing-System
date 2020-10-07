
<?php
	
	if(isset($_COOKIE['user'])){
		require_once('db/functions.php');
		
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
			<form action="" method="POST">
				<div style="background-color:	rgb(143, 215, 240); background-size: 100% 100% ; width: 100%; height:auto;">
			<fieldset>
				<legend><font size="5" color="DarkSlateGray "><b>Passengers' Feedback</b></font></legend>
				<table border="0">
					<tr>
						<td width="150px">From </td>
						<td width="150px"><input type="Date" id="from" name="from"></td>
					</tr>
					<tr>
						<td width="150px">To </td>
						<td width="150px"><input type="Date" id="to" name="to"></td>
					</tr>
					
					
				</table>
				<hr>
				<table>
					<tr>
						<td>
							<input type="submit" name="submit" onclick="f1()" value=" Show Feedbacks">
						</td>
					</tr>
				</table>
				<table border="1" style="width: 100%; height: auto;">
					<tr>
						<td>Complain ID</td>
						<td>Passenger ID</td>
						<td>Issue Date</td>
						<td>Complain Details</td>
					</tr>
					<?php
					if(isset($_REQUEST['submit']))
					{
						$from = $_REQUEST['from'];
						$to = $_REQUEST['to'];
						if(empty($from) || empty($to)){}
							else
							{
								$complain = complain($from,$to);
								for($i=0;$i<count($complain);$i++)
								{
							?>
							<tr>
								<td><?php echo $complain[$i]['complainid'] ?></td>
						       <td><?php echo $complain[$i]['passengerid'] ?></td>
						      <td><?php echo $complain[$i]['issuedate'] ?></td>
						      <td><?php echo $complain[$i]['details'] ?></td>
							</tr>
							
							<?php
						        }  
							}
					}
					?>
					
				</table>
				
				<hr>
				
			</fieldset>
			
			
		</div>
		
			</form>
		</center>
		<script type="text/javascript">
			function f1()
			{
				var from = document.getElementById('from').value.toString();
			   var to =document.getElementById('to').value.toString();
			   if(!IsNullOrWhiteSpace(from) || !IsNullOrWhiteSpace(to))
			   {
			   	alert("Please select the date");
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