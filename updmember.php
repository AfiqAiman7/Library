<?php
	$mname = $_POST['fmemname'];
	$memail = $_POST['fmememail'];
	$mponenum = $_POST['fmemphonenum'];
	$maddress = $_POST['fmemaddress'];
	$mpostcode = $_POST['fmempostcode'];
	$mstate = $_POST['fmemstate'];

	$dbc = mysqli_connect ("localhost","root","","library");

    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: ".mysqli_connect_error();
    }

	$mid = $_GET['fid'];
	$update = "update member set `Member_ID` = '$mid' , `Member_Name` = '$mname', `Member_Email` = '$memail', `Member_PhoneNum` = '$mphonenum', `Member_Address` = '$maddress', `Member_Postcode` = '$mpostcode', `Member_State` = '$mstate' where `Member_ID` = '$mid'";

	$chksql = mysqli_query($dbc,$update);
	if ($chksql)
	{
		Print '<script>alert("Record had been updated");</script>';
		Print '<script>window.location.assign("systemlist.php");</script>';
	}
	else
	{
		Print '<script>alert("Record feiled to be updated");</script>';
		Print '<script>window.location.assign("systemlist.php");</script>';
	}
?>