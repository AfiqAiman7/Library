<?php
	$bID = $_GET['ID'];
	$dbc = mysqli_connect ("localhost","root","","library");

    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: ".mysqli_connect_error();
    }

	$update = "delete from `book` where `Book_ID` = '$bID'";
	$chksql = mysqli_query($dbc,$update);
	if ($chksql)
	{
		Print '<script>alert("Record had been deleted");</script>';
		Print '<script>window.location.assign("FormBookList.php");</script>';
	}
	else
	{
		Print '<script>alert("Record feiled to be deleted");</script>';
		Print '<script>window.location.assign("FormBookList.php");</script>';
	}
?>