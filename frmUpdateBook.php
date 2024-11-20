<!DOCTYPE html>
<html>
<head>
	<title>Update Book</title>
</head>
<body>
	<form name="frmUpdateBook" method="post" action="UpdateBook.php">
		<h2 align="center">
				<b>UPDATE BOOK</b>
		</h2>
		<table align="center">
			<tr>
				<td>STAFF ID</td>
				<td><input type="text" name="Staff_ID" disabled></td>
			</tr>
			<tr>
				<td>BOOK ID</td>
				<td><input type="text" name="Book_ID" disabled></td>
			</tr>
			<tr>
				<td>BOOK TITLE</td>
				<td><input type="text" name="Book_Title"></td>
			</tr>
			<tr>
				<td>TOTAL PAGES</td>
				<td><input type="text" name="No_Pages"></td>
			</tr>
			<tr>
				<td>ISBN NO</td>
				<td><input type="text" name="ISBN"></td>
			</tr>
			<tr>
				<td>AUTHOR NAME</td>
				<td><input type="text" name="Author_Name"></td>
			</tr>
			<tr>
				<td>PUBLISHER NAME </td>
				<td> <input type="text" name="Publisher_Name"></td>
			</tr>
			<tr>
				<td colspan="2" align="center" height="50px"><input type="submit" value="UPDATE"></td>
			</tr>

		</table>
	</form>
</body>
</html>