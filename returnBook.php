<!DOCTYPE html>
<html>
<head>
	<title>Return Book</title>
</head>
<body>
	<form name="rtnbook" method="post" action="rtnBook.php">
		<h2 align="center">
				<b>RETURN BOOK</b>
		</h2>
		<table align="center">
			<tr>
				<td>MEMBER NAME</td>
				<td><input type="text" name="Member_Name" disabled></td>
			</tr>
			<tr>
				<td>MEMBER ID</td>
				<td><input type="text" name="Member_ID" disabled></td>
			</tr>
			<tr>
				<td>BOOK TITLE</td>
				<td><input type="text" name="Book_Title" disabled></td>
			</tr>
			<tr>
				<td>BOOK ID</td>
				<td><input type="text" name="Book_ID"></td>
			</tr>
			<tr>
				<td>ISBN NO</td>
				<td><input type="text" name="ISBN"></td>
			</tr>
			<tr>
				<td>DATE RETURNED</td>
				<td><input type="text" name="Date_Returned"></td>
			</tr>
			<tr>
				<td colspan="2" align="center" height="50px"><input type="submit" value="RETURN"></td>
			</tr>

		</table>
	</form>
</body>
</html>