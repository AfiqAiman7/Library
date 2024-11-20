<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Staff Registration</title>
</head>
<body>
<h2 align="center">Register Staff</h2>
    <form name="staff" method="post" action="registerstaff.php">
        <table align="center">
            <tr>
                <td>STAFF ID</td>
                <td><input type="text" name="fStaff_ID" size="35"></td>
            </tr>
            <tr>
                <td>STAFF NAME: </td>
                <td><input type="text" name="fStaff_Name" size="35"></td>
            </tr>
            <tr>
                <td>PHONE NUMBER: </td>
                <td><input type="text" name="fStaff_PhoneNum" size="35"></td>
            </tr>
            <tr>
                <td>BRANCH: </td>
                <td><input type="text" name="fBranch" size="35"></td>
            </tr>
            <tr>
                <td>STAFF PASS: </td>
                <td><input type="text" name="fStaff_Pass" size="35"></td>
            </tr>
            <tr>
                <td>HEAD DEPARTMENT ID: </td>
                <td><input type="text" name="fHD_ID" size="35"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2" height="50px"><center><input type="Submit" name="btnSubmit"></center></td>
            </tr>
        </table>
    </form>
</body>
</html>