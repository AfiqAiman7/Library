<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Member Registration</title>
</head>
<body>
    <h2 align="center">Register Member</h2>
    <form name="member_register" method="post" action="registermember.php">
        <table align="center">
            <tr>
                <td>MEMBER ID</td>
                <td><input type="text" name="fmemid" size="35"></td>
            </tr>
            <tr>
                <td>MEMBER NAME: </td>
                <td><input type="text" name="fmemname" size="35"></td>
            </tr>
            <tr>
                <td>MEMBER AGE: </td>
                <td><input type="text" name="fmemage" size="35"></td>
            </tr>
            <tr>
                <td>EMAIL: </td>
                <td><input type="text" name="fmememail" size="35"></td>
            </tr>
            <tr>
                <td>PHONE NUMBER: </td>
                <td><input type="text" name="fmemphonenum" size="35"></td>
            </tr>
            <tr>
                <td>ADDRESS: </td>
                <td><input type="text" name="fmemaddress" size="35"></td>
            </tr>
            <tr>
                <td>POSTCODE: </td>
                <td><input type="text" name="fmempostcode" size="35"></td>
            </tr>
            <tr>
                <td>STATE: </td>
                <td><input type="text" name="fmemstate" size="35"></td>
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