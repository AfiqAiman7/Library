<!--
AFIQ
M3CS1104C
-->
<?php
	$staff_id=$_GET['sid'];
	$dbc=mysqli_connect("localhost","root","","library");
		if(mysqli_connect_errno())
		{
			echo"Failed to connect to MYSQL: ".mysqli_connect_error();
		}

			$delete="delete from `staff` where `Staff_ID`='$staff_id'";
	$chksql=mysqli_query($dbc,$delete);
	if ($chksql) 
	{
		Print '<script>alert("Record had been Deleted");</script>';
		Print '<script>window.location.assign("StaffListForm(2).php");</script>';

	}
	else
	{
		Print '<script>alert("Record Failed to be Deleted");</script>';
		Print '<script>window.location.assign("StaffListForm(2).php");</script>';

	}
?>