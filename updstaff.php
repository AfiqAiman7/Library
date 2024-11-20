<!--
AFIQ
M3CS1104C
-->
<?php
	$cStaff_ID=$_GET['sid'];
	$cStaff_Name=$_POST['fStaff_Name'];
	$cStaff_PhoneNum=$_POST['fStaff_PhoneNum'];
	$cBranch=$_POST['fBranch'];
	$cStaff_Pass=$_POST['fStaff_Pass'];
	$cType=$_POST['fTypeUser'];
	$dbc=mysqli_connect("localhost","root","","library");
		if(mysqli_connect_errno())
		{
			echo"Failed to connect to MYSQL: ".mysqli_connect_error();
		}
	$update="update staff set `Staff_ID`='$cStaff_ID',`Staff_Name`='$cStaff_Name',`Staff_PhoneNum`='$cStaff_PhoneNum',
	`Branch`='$cBranch', `staff_pass`='$cStaff_Pass', `UserType`='$cType' where `Staff_ID`='$cStaff_ID'";
	$chksql=mysqli_query($dbc,$update);
	if ($chksql) 
	{
		Print '<script>alert("Record had been Updated");</script>';
		Print '<script>window.location.assign("StaffListForm(2).php");</script>';

	}
	else
	{
		Print '<script>alert("Record Failed to be Updated");</script>';
		Print '<script>window.location.assign("StaffListForm(2).php");</script>';

	}
?>