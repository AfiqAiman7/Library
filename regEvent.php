<?php
	session_start();

	$evID = $_POST['evID'];
	$evName = $_POST['evName'];
	$evVenue = $_POST['evVenue'];
	$evDate = $_POST['evDate'];

	$dbc=mysqli_connect("localhost","root","","library");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
	}

	$sql="insert into event(`Event_ID`, `Event_Name`, `Event_Venue`, `Event_Date`)values ('$evID','$evName','$evVenue','$evDate')";
	$result= mysqli_query($dbc,$sql);

	if ($result)
	{
		print '<script>alert("Record Had Been Added");</script>';
		print '<script>window.location.assign("eventregistrationform.php");</script>';
	}
	else
	{
		print '<script>alert("Record Had Not Been Added");</script>';
		print '<script>window.location.assign("eventregistrationform.php");</script>';
	}
		
?>