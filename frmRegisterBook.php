<!DOCTYPE html>
<html>
<head>
	<title>Register Book</title>
</head>
<body>
	<form name="frmRegisterBook" method="post" action="RegisterBook.php">
		<h2 align="center">
				<b>REGISTER BOOK</b>
		</h2>
		<table align="center" border="0">
			<tr>
				<td>STAFF ID </td>
				<td><input type="text" name="Staff_ID"></td>
			</tr>
			<tr>
				<td>BOOK ID </td>
				<td><input type="text" name="Book_ID"></td>
			</tr>
			<tr>
				<td>BOOK TITLE </td>
				<td><input type="text" name="Book_Title"></td>
			</tr>
			<tr>
				<td>TOTAL PAGES </td>
				<td><input type="text" name="No_Pages"><br></td>
			</tr>
			<tr>
				<td>ISBN NO </td>
				<td> <input type="text" name="ISBN"></td>
			</tr>
			<tr>
				<td>AUTHOR NAME </td>
				<td> <input type="text" name="Author_Name"></td>
			</tr>
			<tr>
				<td>PUBLISHER NAME </td>
				<td> <input type="text" name="Publisher_Name"></td>
			</tr>
			<tr>
				<td colspan="2" align="center" height="50px"><input type="submit" value="SUBMIT"></td>
			</tr>
		</table>
	</form>
</body>
</html>