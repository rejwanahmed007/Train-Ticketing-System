<?php
	
	if(isset($_COOKIE['user'])){
		require_once('db/functions.php');
	   //$sell = sellinfo($from,$to);
		
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
		<form action="" method="POST">
			</div>
		<center>
		<div style="background-color:	rgb(143, 215, 240); background-size: 100% 100% ; width: 100%; height:auto;">
			<fieldset>
				<legend><font size="5" color="DarkSlateGray "><b>Financial Assessment</b></font></legend>
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
				<table><td><input type="submit" name="submit" onclick="f1()" value="Show Assessment"></td>
					<td>Total Netbill :<p id="netbill"></p> </td>
					<td></td>
				</table>
				<table border="1" style="height: auto; width: auto;">
					
					<?php
					if(isset($_REQUEST['submit']))
					{
						$from = $_REQUEST['from'];
						$to = $_REQUEST['to'];
						if(empty($from) || empty($to)){}
							else
							{
								$sell = sellinfo($from,$to);
							
					?>
					<tr>
						<td>Ticket Number</td>
						<td>Passenger ID</td>
						<td>Sold By(Employee ID)</td>
						<td>Train ID</td>
						<td>Issued Date</td>
						<td>Class</td>
						<td>Amount of Ticket</td>
						<td>Bill</td>
						<td>Vat</td>
						<td>Net Bill</td>
						<td>Pay Type</td>
						<td>Card</td>
						<td>Card No</td>
						<td>Cash</td>
						<td>Change</td>
						<td>Couch No</td>
					</tr>
					<?php 
					  for($i=0;$i<count($sell);$i++)
					  {?>
					  	<tr>
					  	<td><?php echo $sell[$i]['soldticketid'] ?></td>
						<td><?php echo $sell[$i]['passengerid'] ?></td>
						<td><?php echo $sell[$i]['employeeid'] ?></td>
						<td><?php echo $sell[$i]['trainid'] ?></td>
						<td><?php echo $sell[$i]['issuedate'] ?></td>
						<td><?php echo $sell[$i]['class'] ?></td>
						<td><?php echo $sell[$i]['amountofticket'] ?></td>
						<td><?php echo $sell[$i]['bill'] ?></td>
						<td><?php echo $sell[$i]['vat'] ?></td>
						<td><?php echo $sell[$i]['netbill'] ?></td>
						<td><?php echo $sell[$i]['paytype'] ?></td>
						<td><?php echo $sell[$i]['card'] ?></td>
						<td><?php echo $sell[$i]['cardnumber'] ?></td>
						<td><?php echo $sell[$i]['cash'] ?></td>
						<td><?php echo $sell[$i]['remaining'] ?></td>
						<td><?php echo $sell[$i]['couchno'] ?></td>
					  	</tr>
					  <?php } }
					?>
					
				<?php } ?>
				</table>
			</fieldset>
			
		</div>
		</form>
		</center>
		<script type="text/javascript">
			function f1()
			{
				var from = document.getElementById('from').value.toString();
			   var to =document.getElementById('to').value.toString();
			   
				//alert(from);
				if(IsNullOrWhiteSpace(from) && IsNullOrWhiteSpace(to))
				{
					var xhttp = new XMLHttpRequest();
				    xhttp.open("POST", "datalist/netbill.php", true);
				    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				    xhttp.send('from='+from+'&to='+to);
				    xhttp.onreadystatechange = function()
				        {
					        if (this.readyState == 4 && this.status == 200) 
					        {
					        	var obj = JSON.parse(this.responseText);
					        	if (obj.netbill) 
					        	{
					        		alert("Net Bill "+obj.netbill);
					        		document.getElementById('netbill').innerHTML =obj.netbill;
					        	}
					        	//document.getElementById('netbill').innerHTML =obj.netbill;
					        }
				        };
				}
				else
				{
					alert("Select Date");
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