<!--
NIK SYAZWAN BIN NIK KAMAL BAHSHAH
2020613638
M3CS1104C
FORM MEMBER
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
		if(!empty($_POST['ID']) && !empty($_POST['Name'])  && !empty($_POST['Birth'])  && !empty($_POST['Email'])  && !empty($_POST['Phone'])  && !empty($_POST['Address']))
		{
			$ID = $_POST['ID'];
			$Name = $_POST['Name'];
			$Birth = $_POST['Birth'];
			$Email = $_POST['Email'];
			$Phone = $_POST['Phone'];
			$Address = $_POST['Address'];

			$sql="INSERT INTO `member`(`Member_ID`, `Member_Name`, `Member_Birth`, `Member_Email`, `Member_PhoneNum`, `Member_Address`)values ('$ID','$Name','$Birth','$Email','$Phone','$Address')";
			$result= mysqli_query($dbc,$sql);

			if ($result)
			{
				print '<script>alert("Record Had Been Added");</script>';
				$ID = $_POST['ID'];
				print '<script>window.location.assign("FormMemberList.php");</script>';
			}
			else
			{
				print '<script>alert("Record Had Not Been Added");</script>';
				print '<script>window.location.assign("FormMember.php");</script>';
			}
		}
		else
		{
			print '<script>alert("Please Enter All Data");</script>';
			header("location:FormMember.php");
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

			.next
			{
				background: cornflowerblue;
				color: white;
				border: none;
				font-size: 1.1em;
				max-width: 120px;
				font-weight: 500;
				cursor: pointer;
				padding: 14px 30px;
			}
			.clear
			{
				background: #1759B8;
				color: white;
				border: none;
				font-size: 1.1em;
				max-width: 120px;
				font-weight: 500;
				cursor: pointer;
				padding: 14px 30px;
			}
		</style>
		<header>
			<!--Navigation//-->
			<a href="#" class="logo">LIBRARY SYSTEM</a>
			<div class="toggle" onclick="toggleMenu();"></div>
			<ul class="menu">
				<li><a href="#" onclick="toggleMenu();"><font color="cloudflare">Add Member</font></a></li>
				<li><a href="FormMemberList.php" onclick="toggleMenu();">Member List</a></li>
				<li><a href="FormRegisterBook.php" onclick="toggleMenu();">Add Book</a></li>
				<li><a href="FormBookList.php" onclick="toggleMenu();">Book List</a></li>
				<li><a href="Login.php" onclick="toggleMenu();">Log Out</a></li>
			</ul>
		</header>

		<div class="contactUs">
			<div class="title">
				<h2>Member Library System</h2>
			</div>
			<div class="box">
				<!-- Register Form -->
				<div class="contact form">
					<h3>Register <span class="typing"></span></h3>
					<form action="#" method="POST">
						<div class="formBox">
							<div class="row50">
								<div class="inputBox">
									<span>Member Name</span>
									<input type="text" name="Name" placeholder="Enter Member Name" autocomplete="off" required>
								</div>
								<div class="row25">
									<div class="inputBox">
										<span>Member ID</span>
										<input type="text" name="ID" placeholder="Enter Email ID" autocomplete="off" required minlength="4" maxlength="8" title="Minimum 4 to 8 Characters">
									</div>
									<div class="inputBox">
										<span>Member Birth</span>
										<input type="date" name="Birth" id="bday" value="MM/DD/YYY" min="1900-01-01" max="2022-07-02" required>
									</div>
								</div>
							</div>

							<div class="row50">
								<div class="inputBox">
									<span>Member Email</span>
									<input type="email" name="Email" placeholder="Enter Member Email" autocomplete="off" required title="@gmail.com">
								</div>
								<div class="inputBox">
									<span>Phone Number</span>
									<input type="text" name="Phone" placeholder="Enter Phone Number" autocomplete="off" minlength="10" maxlength="12" required title="Minimum 10 to 12 Number" pattern="[0-9]{10,12}">
								</div>
							</div>

							<div class="row100">
								<div class="inputBox">
									<span>Member Address</span>
									<textarea placeholder="Enter Member Address" name="Address" autocomplete="off" required></textarea>
								</div>
							</div>

							<div class="row100">
								<input type="reset" class="clear" value="Reset" title="Reset Form">
								<input type="submit" class="next" value="Save" title="Proceed Borrow Book">
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
						</div>
						
						<h3>How To Use?</h3>
						<a href="StoryBoard.pdf" class="label">Manual </a></label><p>
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
				strings: ["Name","Email","Birth","Phone Number","Address"],
				typeSpeed: 100,
				backSpeed: 60,
				loop: true
			});


			var color = ["#222f3e","#f368e0","#ee5253","#0abde3","#10ac84","#222f3e","#5f27cd","orange","grey"]; 
		    	/**Used To Change Font Colour**/
		        var i = 0; 
		        document.querySelector("button").addEventListener("click",function(){ 
		        i = i < color.length ? ++i : 0; 
		        document.querySelector("h2").style.color = color[i] 
	        }) 

		</script>
	</body>
</html>