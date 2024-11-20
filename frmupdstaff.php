<html>
<head>
	<title>Staff Update Form</title>
</head>
<body>
    <?php
        $s_ID = $_GET['fStaff_ID'];
        // Connection to the server and datbase
        $dbc = mysqli_connect ("localhost","root","","library");
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: ".mysqli_connect_error();
        }
        $sql = "select * from `staff` where `Staff_ID` = '$s_ID'";
        $result = mysqli_query($dbc,$sql);
        // to display the details error
        if (false === $result)
        {
            echo mysqli_error();
        }
        $row = mysqli_fetch_assoc($result);
    ?>
    <form action="updstaff.php?fid=<?php echo $s_ID;?>" method="post">
        <h2 align="center">Update Staff Record</h2>
        <table align="center" border="1">
            <!-- Case sensitive on $row var! -->
            <tr>
                <h3><td>Staff ID</td>
                <td><input type="text" name="fStaff_ID" value='<?=$row['Staff_ID'];?>' disabled></td>
            </tr>
            <tr>
                <td>Staff Name</td>
                <td><input type="text" name="fStaff_Name" value='<?=$row['Staff_Name'];?>'></td>
            </tr>
            <tr>
                <td>Staff Phone No</td>
                <td><input type="text" name="fStaff_PhoneNum" value='<?=$row['custname'];?>'></td>
            </tr>
            <tr>
                <td>Branch</td>
                <td><input type="text" name="fBranch" value='<?=$row['custname'];?>'></td>
            </tr>
            <tr>
                <td>Staff Pass</td>
                <td><input type="text" name="fStaff_Pass" value='<?=$row['custname'];?>'></td>
            </tr>
            <tr>
                <td>Head Department ID</td>
                <td><input type="text" name="fHD_ID" value='<?=$row['custname'];?>'></td>
            </tr>
             <tr>
                <td colspan="2"><center><input type="submit" value="Update" onClick="return confirm('Are You Sure?')"></td>
                you sure?')"></center></td>
            </tr>
        </table>
    </form>
</body>
</html>