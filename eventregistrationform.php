<!--
M3CS1104C
FORM REGISTER EVENT
-->


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
				<li><a href="#" onclick="toggleMenu();"><font color="black">Register Event</font></a></li>
				<li><a href="eventList.php" onclick="toggleMenu();">Event List</a></li>
				<li><a href="eventregistrationform.php" onclick="toggleMenu();">Register Event</a></li>
				<li><a href="#" onclick="toggleMenu();">Book List</a></li>
				<li><a href="Login.php" onclick="toggleMenu();">Log Out</a></li>
			</ul>
		</header>

		<div class="contactUs">
			<div class="title">
				<h2>Event Library System</h2>
			</div>
			<div class="box">
				<!-- Register Form -->
				<div class="contact form">
					<h3>Register <span class="typing"></span></h3>
					<form  action="registerEvent.php?freg=<?php echo $id;?>" method="POST">
						<div class="formBox">
							<div class="row25">
								<div class="inputBox">
									<span>Event ID</span>
									<input type="text" name="evID" placeholder="Enter Event ID" autocomplete="off" required minlength="6" maxlength="6" title=" max 6">
								</div>
							</div>
							<div class="row50">
									<div class="inputBox">
									<span>Event Venue</span>
									<select type="text" name="evVenue" required>
										<option value="Hall A">Hall A</option>
										<option value="Hall B">Hall B</option>
									</select>
									</div>
								</div>
							<div class="row50">
								<div class="inputBox">
									<span>Event Name</span>
									<input type="text" name="evName" placeholder="Enter Event Name" autocomplete="off" required>
								</div>
							</div>
						

							<div class="row50">
								<div class="inputBox">
									<span>Event Date</span>
									<input type="date" name="evDate" placeholder="Enter Date" autocomplete="off"  value="2022-07-06" min="2022-07-06" max="2023-01-01"required>
								</div>
							</div>

							<div class="row25">
								<div class="inputBox">
									<span>SPONSOR ID</span>
									<input type="text" name="spID" placeholder="Enter Sponsor ID" autocomplete="off" required minlength="6" maxlength="6" title=" must enter 6 characters">
								</div>
								<div class="inputBox">
									<span>Staff ID</span>
									<input type="text" name="stID" placeholder="Enter Staff ID" autocomplete="off" required minlength="6" maxlength="6" title=" must enter 10 characters">
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
							<h3>Website Page</h3>
							<button>Change</button>
						</div>
						<label>How To Use? <a href="StoryBoard.pdf" class="label">Manual </a></label><p>
					</div>
				</div>

				<!-- Map Form -->
				<div class="contact map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255057.5484977672!2d102.07692291473451!3d2.734811741973624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31ce72a6901573dd%3A0xf562abd722811ae2!2sPerpustakaan%20Awam%20Negeri%20Sembilan!5e0!3m2!1sen!2smy!4v1656594143419!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"referrerpolicy="no-referrer-when-downgrade"></iframe>
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
				strings: ["ID","Venue","Name","Date"],
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