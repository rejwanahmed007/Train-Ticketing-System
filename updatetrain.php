<?php
	
	if(isset($_COOKIE['user'])){
	require_once('db/functions.php');
	$traininfo = gettraininfo();
	//echo $traininfo[0]['name'];
	//print_r($traininfo);
		
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="validation/script.js"></script>
	</head>
	<body onload="f2()">
		
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
		
		<div style="background-color:	rgb(143, 215, 240); background-size: 100% 100% ; width: 100%; height:480px;">
			<fieldset>
				<legend><font size="5" color="DarkSlateGray "><b>Add Train</b></font></legend>
				<table border="0">
					<tr>
						<td width="150px">Train Name  </td>
						<td><input type="text" name="name" id="name"></td>
					</tr>
					
					<tr>
						<td  width="150px">Train Number  </td>
						<td><input type="text" id="trainno" name="trainno"></td>
					</tr>
					<tr>
						<td  width="150px">Off Day </td>
						<td><input type="text" id="offday" name="offday"></td>
					</tr>
					<tr>
						<td  width="150px">Departur Station </td>
						<td><input type="text" id="departurestation" name="departurestation"></td>
					</tr>
					
					<tr>
						<td  width="150px">Departure Time </td>
						<td><input type="Time" id="departuretime" name="departuretime"></td>
					</tr>
					<tr>
						<td  width="150px">Arrival Station </td>
						<td><input type="text" id="arrivalstation" name="arrivalstation"></td>
					</tr>
					<tr>
						<td  width="150px">Arrival Time </td>
						<td><input type="Time" id="arrivaltime" name="arrivaltime"></td>
					</tr>
					<tr>
						<td  width="150px">Route Type </td>
						<td><input type="text" id="routetype" name="routetype"></td>
					</tr>
					<tr>
						<td  width="150px">Total Capacity </td>
						<td><input type="text" id="capacity" name="capacity"></td>
					</tr>
					<tr>
						<td  width="150px">Standard (AC Couch) </td>
						<td><input type="text" id="standard" name="standard"></td>
					</tr>
					<tr>
						<td  width="150px">Price of Standard </td>
						<td><input type="text" id="priceperstandard" name="priceperstandard"></td>
					</tr>
					<tr>
						<td  width="150px">Economical Couch </td>
						<td><input type="text" id="economy" name="economy"></td>
					</tr>
					<tr>
						<td  width="150px">Price of Economical </td>
						<td><input type="text" id="pricepereconomy" name="pricepereconomy"></td>
					</tr>
					<tr>
						<td  width="150px">First Class </td>
						<td><input type="text" id="firstclass" name="firsclass"></td>
					</tr>
					<tr>
						<td  width="150px">price of First class </td>
						<td><input type="text" id="priceperfirstclass" name="priceperfirstclass"></td>
					</tr>

				</table>
				<table border="0">
					<tr>
						<td><input type="submit" name="submit" value="Add Train" onclick="f1()"></td>
						<td><input type="button" name="refresh" value="Refresh" onclick="location.reload(true)"></td>
					</tr>
				</table>
			</fieldset>
			
		</div>
		<div style="background-color:	rgb(143, 215, 240); background-size: 100% 100% ; width: 100%; height: auto;">
			<fieldset>
				<legend><font size="5" color="DarkSlateGray "><b>Train Info</b></font></legend>
				<table border="1" style="height: auto; width: auto;">
					<tr>
						<td>Train ID</td>
						<td>Train Name</td>
						<td>Train Number</td>
						<td>Off Day</td>
						<td>Departure Station</td>
						<td>Departure Time</td>
						<td>Arrival Station</td>
						<td>Arrival Time</td>
						<td>Route Type</td>
						<td>Capacity</td>
						<td>Standard Seat</td>
						<td>Price/Seat</td>
						<td>Economical Seat</td>
						<td>Price/Seat</td>
						<td>First Class</td>
						<td>Price/Seat</td>
					</tr>
					
					<?php 
					  for($i=0;$i<count($traininfo);$i++)
					  {?>
					  	<tr>
					  	<td><?php echo $traininfo[$i]['trainid'] ?></td>
						<td><?php echo $traininfo[$i]['name'] ?></td>
						<td><?php echo $traininfo[$i]['trainno'] ?></td>
						<td><?php echo $traininfo[$i]['offday'] ?></td>
						<td><?php echo $traininfo[$i]['departurestation'] ?></td>
						<td><?php echo $traininfo[$i]['departuretime'] ?></td>
						<td><?php echo $traininfo[$i]['arrivalstation'] ?></td>
						<td><?php echo $traininfo[$i]['arrivaltime'] ?></td>
						<td><?php echo $traininfo[$i]['routetype'] ?></td>
						<td><?php echo $traininfo[$i]['capacity'] ?></td>
						<td><?php echo $traininfo[$i]['standard'] ?></td>
						<td><?php echo $traininfo[$i]['priceperstandard'] ?></td>
						<td><?php echo $traininfo[$i]['economy'] ?></td>
						<td><?php echo $traininfo[$i]['pricepereconomy'] ?></td>
						<td><?php echo $traininfo[$i]['firstclass'] ?></td>
						<td><?php echo $traininfo[$i]['priceperfirstclass'] ?></td>
					  	</tr>
					  <?php }
					?>

				</table>
				
			</fieldset>
			
		</div>

		
		<script type="text/javascript">
			function f1()
			{
				var trainno = document.getElementById('trainno').value.toString();
				var name = document.getElementById('name').value.toString();
				var offday = document.getElementById('offday').value.toString();
				var departurestation = document.getElementById('departurestation').value.toString();
				var departuretime = document.getElementById('departuretime').value.toString();
				var arrivalstation = document.getElementById('arrivalstation').value.toString();
				var arrivaltime = document.getElementById('arrivaltime').value.toString();
				var routetype = document.getElementById('routetype').value.toString();
				var capacity = document.getElementById('capacity').value.toString();
				var standard = document.getElementById('standard').value.toString();
				var priceperstandard = document.getElementById('priceperstandard').value.toString();
				var economy = document.getElementById('economy').value.toString();
				var pricepereconomy = document.getElementById('pricepereconomy').value.toString();
				var firstclass = document.getElementById('firstclass').value.toString();
				var priceperfirstclass = document.getElementById('priceperfirstclass').value.toString();
				if(IsNullOrWhiteSpace(name) && IsNullOrWhiteSpace(departurestation) && IsNullOrWhiteSpace(departuretime) && IsNullOrWhiteSpace(arrivalstation) && IsNullOrWhiteSpace(arrivaltime) && IsNullOrWhiteSpace(routetype) && IsNullOrWhiteSpace(capacity) && IsNullOrWhiteSpace(standard) && IsNullOrWhiteSpace(priceperstandard) && IsNullOrWhiteSpace(economy) && IsNullOrWhiteSpace(pricepereconomy) && IsNullOrWhiteSpace(firstclass) && IsNullOrWhiteSpace(priceperfirstclass))
				{
					var xhttp = new XMLHttpRequest();
				    xhttp.open("POST", "datalist/addtrain.php", true);
				    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				    xhttp.send('trainno='+trainno+'&name='+name+'&offday='+offday+'&departurestation='+departurestation+'&departuretime='+departuretime+'&arrivalstation='+arrivalstation+'&arrivaltime='+arrivaltime+'&routetype='+routetype+'&capacity='+capacity+'&standard='+standard+'&priceperstandard='+priceperstandard+'&economy='+economy+'&pricepereconomy='+pricepereconomy+'&firstclass='+firstclass+'&priceperfirstclass='+priceperfirstclass);
				    xhttp.onreadystatechange = function()
				        {
					        if (this.readyState == 4 && this.status == 200) 
					        {
					        	alert("Train is added successfully");
					        	location.reload(true);
					        }
				        };
				}
				else
				{
					alert("Incomplete or Invalid Info");

				}
				

			}
			function f2()
			{
				var xhttp = new XMLHttpRequest();
				xhttp.open("POST", "datalist/traininfo.php", true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send();
				xhttp.onreadystatechange = function()
				{
					if (this.readyState == 4 && this.status == 200) 
					{
						//alert(this.responseText);
					    var traininfo = JSON.parse(this.responseText);
					    //alert(traininfo[0].name);
					    for (var i = 0;i<traininfo.length;i++)
					    {
					    	//alert(traininfo[i].name);

					    }

					}
				};

			}
		</script>
	</body>
</html>
<?php
}else{
header('location: index.php');
}
?>