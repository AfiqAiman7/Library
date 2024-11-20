<!--
NIK SYAZWAN BIN NIK KAMAL BAHSHAH
2020613638
M3CS1104C
FORM MEMBER
-->
<!DOCTYPE html>
<html>
	<head>
		<title> Customer Update Form</title>
	</head>
	<body>
		
		<?php
		$ID=$_GET['ID'];
		$dbc=mysqli_connect("localhost","root","","library");
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: ".mysqli_connect_error();
		}
		$cari="select * from `member` where `Member_ID`='$ID'";
		$result=mysqli_query($dbc,$cari);
		$row = mysqli_fetch_assoc($result);
		?>

		<form>

			<table align="center" border="1">
				<tr>
					<td>Customer ID</td>
					<td><input type="text" name="ID" value="<?=$row['ID'];?>"disabled></td>
				</tr>
			</table>
			
		</form>
	</body>
</html>