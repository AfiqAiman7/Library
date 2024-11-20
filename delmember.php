<?php
	$mid = $_GET['fid'];
	$dbc = mysqli_connect ("localhost","root","","library");

    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: ".mysqli_connect_error();
    }

	$update = "delete from `member` where `Member_ID` = '$mid'";
	$chksql = mysqli_query($dbc,$update);
	if ($chksql)
	{
		Print '<script>alert("Record had been deleted");</script>';
		Print '<script>window.location.assign("systemlist.php");</script>';
	}
	else
	{
		Print '<script>alert("Record feiled to be deleted");</script>';
		Print '<script>window.location.assign("systemlist.php");</script>';
	}
?>