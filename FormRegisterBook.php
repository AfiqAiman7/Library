<!--
MUHAMMAD AZIM BIN ZULKEFLEE
NIK SYAZWAN BIN NIK KAMAL BAHSHAH
M3CS1104C
FORM ADD BOOK
-->
<?php
	session_start();
	$dbc=mysqli_connect("localhost","root","","library");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
	}

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(!empty($_POST['bID']) && !empty($_POST['bTitle'])  && !empty($_POST['bNoPages'])  && !empty($_POST['bAuthorName'])  && !empty($_POST['bISBN']))
		{
			$bID = $_POST['bID'];
			$bTitle = $_POST['bTitle'];
			$bNoPages = $_POST['bNoPages'];
			$bAuthorName = $_POST['bAuthorName'];
			$bISBN = $_POST['bISBN'];

			$sql="INSERT INTO `book`(`Book_ID`, `Book_Title`, `No_Pages`, `Author_Name`, `ISBN`) values ('$bID','$bTitle','$bNoPages','$bAuthorName','$bISBN')";
			$result= mysqli_query($dbc,$sql);

			if ($result)
			{
				print '<script>alert("Record Had Been Added");</script>';
				print '<script>window.location.assign("FormBookList.php");</script>';
			}
			else
			{
				print '<script>alert("Record Not Been Added");</script>';
				print '<script>window.location.assign("FormRegisterBook.php");</script>';
			}
		}
		else
		{
			print '<script>alert("Please Enter All Data");</script>';
			header("location:FormRegisterBook.php");
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="form.css">
		<link rel="stylesheet" href="MyCss.css">
		<title></title>
	</head>
	<body>
		<style type="text/css">
			.contactUs
			{
				background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(menu.png);
				background-size: cover;
				background-position: center;
			}
			.box
			{
				left: 15%;
			}
		</style>
		<header>
			<!--Navigation//-->
			<a href="#" class="logo">LIBRARY SYSTEM</a>
			<div class="toggle" onclick="toggleMenu();"></div>
			<ul class="menu">
				<li><a href="FormMember.php" onclick="toggleMenu();">Add Member</a></li>
				<li><a href="FormMemberList.php" onclick="toggleMenu();">Member List</a></li>
				<li><a href="FormRegisterBook.php" onclick="toggleMenu();"><font color="cloudflare">Add Book</font></a></li>
				<li><a href="FormBookList.php" onclick="toggleMenu();">Book List</a></li>
				<li><a href="Login.php" onclick="toggleMenu();">Log Out</a></li>
			</ul>
		</header>

		<div class="contactUs">
			<div class="title">
				<h2>Book Library System</h2>
			</div>
			<div class="box">
				<!-- Register Form -->
				<div class="contact form">
					<h3>Register <span class="typing"></span></h3>
					<form action="" method="POST">
						<div class="formBox">
							<div class="row100">
								<div class="inputBox">
									<span>Book Title</span>
									<input type="text" name="bTitle" required placeholder="Enter Book Title" autocomplete="off" >
								</div>
							</div>
							<div class="row100">
								<div class="inputBox">
									<span>Author Name</span>
									<input type="text" name="bAuthorName" placeholder="Enter Author Name" autocomplete="off" required>
								</div>
							</div>

							<div class="row50">
								<div class="inputBox">
									<span>Book ID</span>
									<input type="text" name="bID" placeholder="Enter Book ID" autocomplete="off" required minlength="6" maxlength="10" title="Minimum 6 characters">
								</div>

								<div class="row25">
									<div class="inputBox">
										<span>ISBN</span>
										<input type="text" name="bISBN" placeholder="ISBN number" autocomplete="off" required minlength="6" maxlength="10" title="Minimum 6 characters">
									</div>
									<div class="inputBox">
										<span>No Pages</span>
										<input type="number" name="bNoPages" required>
									</div>
								</div>
							</div>

							<div class="row100">
								<div class="inputBox">
									<input type="submit" value="Save">
								</div>
							</div>
						</div>
					</form>


				<!-- Contact Form -->
				<div class="contact info">
					<h3>Library Info</h3>
					<div class="infoBox">
						<div>
							<p>Seremban, Negeri Sembilan <br>MALAYSIA</p><br>
						</div>
						
						<h3>How To Use?</h3>
						<a href="StoryBoard.pdf" class="label">Manual </a></label><p>
						<br><font color="white">GOURP ASSIGNMENT LIBRARY SYSTEM.</font>
					</div>
				</div>
			</div>
		</div>

		<script>
			/**Used For Navigation Animate**/
			window.addEventListener('scroll',function(){
				var header = document.querySelector('header');
				header.classList.toggle('sticky',window.scrollY > 0);
			});

			function toggleMenu(){
				/**Used For Responsive Website Phone**/
				var menuToggle = document.querySelector('.toggle');
				var menu = document.querySelector('.menu');
				menuToggle.classList.toggle('active');
				menu.classList.toggle('active');
			}

			var typed = new Typed(".typing", {
				/**Used For Auto Typing In Home Page**/
				strings: ["ID","Title","Number of Pages","Author Name","ISBN"],
				typeSpeed: 100,
				backSpeed: 60,
				loop: true
			});

		</script>
	</body>
</html>