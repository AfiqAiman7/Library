<!--
AFIQ
M3CS1104C
-->
<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
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
        .option
        {
            padding: 12px;
            cursor: pointer;
            color: cornflowerblue;
        }
    </style>
<header>
        <!--Navigation//-->
        <a href="#" class="logo">LIBRARY SYSTEM</a>
        <div class="toggle" onclick="toggleMenu();"></div>
        <ul class="menu">
            <li><a href="#" onclick="toggleMenu();"><font color="black">Update Staff</font></a></li>
            <li><a href="stafflistform(2).php" onclick="toggleMenu();">Back To Previous Page</a></li>
        </ul>
</header>

<div class="contactUs">
    <div class="title">
        <h2>Staff Register Form</h2>
    </div>
    <div class="box">
                <!-- Register Form -->
                <div class="contact form">
                    <h3>Register <span class="typing"></span></h3>
                    <?php
                        $sid = $_GET['fStaff_ID'];
                        // Connection to the server and datbase
                        $dbc = mysqli_connect ("localhost","root","","library");
                        if (mysqli_connect_errno())
                        {
                            echo "Failed to connect to MySQL: ".mysqli_connect_error();
                        }
                        $sql = "select * from `staff` where `Staff_ID` = '$sid'";
                        $result = mysqli_query($dbc,$sql);
                        // to display the details error
                        if (false === $result)
                        {
                            echo mysqli_error();
                        }
                        $row = mysqli_fetch_assoc($result);
                    ?>
                    <form action="updstaff.php?sid=<?php echo $sid;?>" method="post">
                        <div class="formBox">

                            <div class="row100">
                                <div class="inputBox">
                                    <span>Staff Name</span>
                                    <input type="text" name="fStaff_Name" placeholder="Enter Staff Name" autocomplete="off" required value="<?=$row['Staff_Name'];?>">
                                </div>
                            </div>

                            <div class="row50">
                                <div class="inputBox">
                                    <span>Password </span>
                                        <input type="text" name="fStaff_Pass" placeholder="Enter Staff Password" autocomplete="off" required value="<?=$row['staff_pass'];?>">
                                </div>
                                <div class="inputBox">
                                    <span>Branch</span>
                                    <input type="text" name="fBranch" placeholder="Enter Staff Branch" autocomplete="off" value="<?=$row['Branch'];?>">
                                </div>
                            </div>

                            <div class="row50">
                                <div class="inputBox">
                                    <span>Phone Number</span>
                                    <input type="text" name="fStaff_PhoneNum" placeholder="Enter Phone Number" autocomplete="off" minlength="10" maxlength="12" required title="Minimum 10 to 12 Number" pattern="[0-9]{10,12}" value="<?=$row['Staff_PhoneNum'];?>">
                                </div>

                                <div class="row25">
                                    <div class="inputBox">
                                        <span>Staff ID</span>
                                        <input type="text" name="ID" placeholder="DISABLED" autocomplete="off" required minlength="4" maxlength="8" title="Minimum 4 to 8 Characters" value="<?=$row['Staff_ID'];?>"disabled>
                                    </div>

                                </div>
                            </div>
                            <div class="inputBox">
                                <span>Type</span>
                                <select name="fTypeUser" class="option" placeholder="Choose your user type" >
                                    <option name="fTypeUser" value="Staff">Staff 
                                    <option name="fTypeUser" value="Head Department">Head Department
                                </select>
                                </div>
                            <div class="row100">
                                <div class="inputBox">
                                    <input type="submit" value="Update" onClick="return confirm('Are You Sure?')">
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
        //JavaScript Navigation kalau page yang panjang//
            window.addEventListener('scroll',function(){
                var header = document.querySelector('header');
                header.classList.toggle('sticky',window.scrollY > 0);
            });

        //JavaScript Untuk Resolution//
            function toggleMenu(){
                /**Used For Responsive Website Phone**/
                var menuToggle = document.querySelector('.toggle');
                var menu = document.querySelector('.menu');
                menuToggle.classList.toggle('active');
                menu.classList.toggle('active');
            }

        //JavaScript Auto Typing bagi class bernama typing//
            var typed = new Typed(".typing", {
                /**Used For Auto Typing In Home Page**/
                strings: ["ID","Name","Phone Number","Branch",],
                typeSpeed: 100,
                backSpeed: 60,
                loop: true
            });


        //JavaScript Untuk Tukar Warna Background, Boleh Guna Untuk Font,Image Dan lain lain juga//
            var background = ["linear-gradient(90deg, #0e3959 0%, #0e3959 30%, #03a9f5 30%,#03a9f5 100%)","linear-gradient(90deg, #03a9f4 0%, #3a78b7 50%, #262626 50%, #607d8b 100%)","linear-gradient(90deg, #0e3959 0%, #f368e0 50%, black 50%, lightblue 100%)","#222f3e","#f368e0","#ee5253","#0abde3","#10ac84","#222f3e","#5f27cd","orange","grey"]; 
                /**Used To Change Font Colour**/
                var i = 0; 
                document.querySelector("button").addEventListener("click",function(){ 
                i = i < background.length ? ++i : 0; 
                document.querySelector("body").style.background = background[i] 
            }) 

    </script>

</body>
</html>