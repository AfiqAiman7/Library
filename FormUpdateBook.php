<!--
MUHAMMAD AZIM BIN ZULKEFLEE
NIK SYAZWAN BIN NIK KAMAL BAHSHAH
M3CS1104C
FORM UPDATE MEMBER
-->
<?php
	session_start();
	$dbc = mysqli_connect ("localhost","root","","library");

    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: ".mysqli_connect_error();
    }

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$bTitle = $_POST['bTitle'];
		$bNoPages = $_POST['bNoPages'];
		$bAuthorName = $_POST['bAuthorName'];
		$bISBN = $_POST['bISBN'];

		$bID = $_GET['ID'];
		$update = "update book set `Book_ID` = '$bID' , `Book_Title` = '$bTitle', `No_Pages` = '$bNoPages', `Author_Name` = '$bAuthorName', `ISBN` = '$bISBN' where `Book_ID` = '$bID'";

		$chksql = mysqli_query($dbc,$update);
		if ($chksql)
		{
			Print '<script>alert("Record had been updated");</script>';
			Print '<script>window.location.assign("FormBookList.php");</script>';
		}
		else
		{
			Print '<script>alert("Record feiled to be updated");</script>';
			Print '<script>window.location.assign("FormUpdateBook.php");</script>';
		}
	}
?>

<?php
    $bID = $_GET['ID'];

    $dbc = mysqli_connect ("localhost","root","","library");

    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: ".mysqli_connect_error();
    }

    $find = "select * from book where `Book_ID` = '$bID'";
    $result = mysqli_query($dbc,$find);
    $row = mysqli_fetch_assoc($result);
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
		<header>
			<!--Navigation//-->
			<a href="#" class="logo">LIBRARY SYSTEM</a>
			<div class="toggle" onclick="toggleMenu();"></div>
			<ul class="menu">
				<li><a href="#" onclick="toggleMenu();"><font color="black">Update Member</font></a></li>
				<li><a href="FormMemberList.php" onclick="toggleMenu();">Back To Previous Page</a></li>
			</ul>
		</header>

		<div class="contactUs">
			<div class="title">
				<h2>Book Library Database</h2>
			</div>
			<div class="box">
				<!-- Register Form -->
				<div class="contact form">
					<h3>Update <span class="typing"></span></h3>

					<form name="update_book" method="POST" action="#">
						<div class="formBox">
							<div class="row50">
								<div class="inputBox">
									<span>Book Title</span>
									<input type="text" name="bTitle" value="<?=$row['Book_Title'];?>" placeholder="Enter Book Title" autocomplete="off">
								</div>
								<div class="row25">
									<div class="inputBox">
										<span>Book ID</span>
										<input type="text" name="bID" value="<?=$row['Book_ID'];?>" disabled>
									</div>
									<div class="inputBox">
										<span>No Pages</span>
										<input type="text" name="bNoPages" value="<?=$row['No_Pages'];?>"placeholder="Enter No Pages" autocomplete="off">
									</div>
								</div>
							</div>

							<div class="row25">
								<div class="inputBox">
									<span>Author Name</span>
									<input type="text" name="bAuthorName" value="<?=$row['Author_Name'];?>" placeholder="Enter Author Name" autocomplete="off">
								</div>
								<div class="inputBox">
									<span>ISBN</span>
									<input type="text" name="bISBN" value="<?=$row['ISBN'];?>" placeholder="Enter Book ISBN number" autocomplete="off">
								</div>
							</div>

							<div class="row100">
								<div class="inputBox">
									<input type="submit" value="Save">
								</div>
							</div>
						</div>
					</form>

				</div>

				<!-- Contact Form -->
				<div class="contact info">
					<h3>Library Info</h3>
					<div class="infoBox">
						<div>
							<p>Seremban, Negeri Sembilan <br>MALAYSIA</p><br>
							<h3>Website Page</h3>
							<button>Change</button>
						</div>
						<label>How To Use? <a href="StoryBoard.pdf" class="label">Manual </a></label><p>
					</div>
				</div>

				<!-- Map Form -->
				<div class="contact map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255057.5484977672!2d102.07692291473451!3d2.734811741973624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31ce72a6901573dd%3A0xf562abd722811ae2!2sPerpustakaan%20Awam%20Negeri%20Sembilan!5e0!3m2!1sen!2smy!4v1656594143419!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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


			var background = ["linear-gradient(90deg, #0e3959 0%, #0e3959 30%, #03a9f5 30%,#03a9f5 100%)","linear-gradient(-30deg, #03a9f4 0%, #3a78b7 50%, #262626 50%, #607d8b 100%)","linear-gradient(30deg, #03a9f4 0%, #3a78b7 50%, #262626 50%, #607d8b 100%)","#222f3e","#f368e0","#ee5253","#0abde3","#10ac84","#222f3e","#5f27cd","orange","grey"]; 
		    	/**Used To Change Font Colour**/
		        var i = 0; 
		        document.querySelector("button").addEventListener("click",function(){ 
		        i = i < background.length ? ++i : 0; 
		        document.querySelector("body").style.background = background[i] 
	        }) 

		</script>
	</body>
</html>