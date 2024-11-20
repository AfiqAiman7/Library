<!--
NIK SYAZWAN BIN NIK KAMAL BAHSHAH
2020613638
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
		$Name = $_POST['Name'];
		$Birth = $_POST['Birth'];
		$Email = $_POST['Email'];
		$Phone = $_POST['Phone'];
		$Address = $_POST['Address'];

		$ID = $_GET['ID'];
		$update = "update member set `Member_ID` = '$ID' , `Member_Name` = '$Name', `Member_Email` = '$Email', `Member_PhoneNum` = '$Phone', `Member_Address` = '$Address' where `Member_ID` = '$ID'";

		$chksql = mysqli_query($dbc,$update);
		if ($chksql)
		{
			Print '<script>alert("Record had been updated");</script>';
			Print '<script>window.location.assign("FormMemberList.php");</script>';
		}
		else
		{
			Print '<script>alert("Record feiled to be updated");</script>';
			Print '<script>window.location.assign("FormUpdateMember.php");</script>';
		}
	}
?>

<?php
    $ID = $_GET['ID'];

    $dbc = mysqli_connect ("localhost","root","","library");

    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: ".mysqli_connect_error();
    }

    $find = "select * from member where `Member_ID` = '$ID'";
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
				<h2>Member Library Database</h2>
			</div>
			<div class="box">
				<!-- Register Form -->
				<div class="contact form">
					<h3>Update <span class="typing"></span></h3>

					<form name="update_member" method="POST" action="#">
						<div class="formBox">
							<div class="row50">
								<div class="inputBox">
									<span>Member Name</span>
									<input type="text" name="Name" value="<?=$row['Member_Name'];?>" placeholder="Enter Member Name" autocomplete="off">
								</div>
								<div class="row25">
									<div class="inputBox">
										<span>Member ID</span>
										<input type="text" name="ID" value="<?=$row['Member_ID'];?>" disabled>
									</div>
									<div class="inputBox">
										<span>Member Birth</span>
										<input type="date" name="Birth" value="<?=$row['Member_Birth'];?>" id="start" min="1900-01-01" max="2022-07-02" placeholder="Choose Member Age" autocomplete="off">
									</div>
								</div>
							</div>

							<div class="row50">
								<div class="inputBox">
									<span>Member Email</span>
									<input type="email" name="Email" value="<?=$row['Member_Email'];?>" placeholder="Enter Member Email" autocomplete="off" title="@gmail.com">
								</div>
								<div class="inputBox">
									<span>Phone Number</span>
									<input type="tel" name="Phone" value="<?=$row['Member_PhoneNum'];?>" placeholder="Enter Phone Number" autocomplete="off" minlength="10" maxlength="12" title="Minimum 10 to 12 Number" pattern="[0-9]{10,12}">
								</div>
							</div>

							<div class="row100">
								<div class="inputBox">
									<span>Member Address</span>
									<textarea placeholder="Enter Member Address" name="Address" autocomplete="off"></textarea>
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
				strings: ["Name","Email","Birth","Phone Number","Address"],
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