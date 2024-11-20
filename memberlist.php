<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="StaffPage.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="image/staff.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Staff</span>
                    <span class="profession">Library System</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="StaffPage.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Registration</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">System List</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Member Update</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Add Book</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Book Update</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="Login.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text" onclick="return confirm('Are You Sure Want To Log Out?')">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">Member List Details
            <form>
        <h3 align="center"><font color="#0000FF">Staffs' Details</font></h3>
        <table align="center" border="1">
            <tr>
                <th>Staff ID</th>
                <td>Staff Name</td>
                <td>Staff Phone No</td>
                <td>Branch</td>
                <td>Staff Pass</td>
                <td>Head Department ID</td>
                <th colspan="2"><font color="#0000FF">Action</font></th>
            </tr>
            
            <?php
                // Connection to the server and datbase
                $dbc = mysqli_connect ("localhost","root","","library");
                if (mysqli_connect_errno()){
                    echo "Failed to connect to MySQL: ".mysqli_connect_error();
                }
                
                $sql = "select * from staff";
                $result = mysqli_query($dbc, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    //Case sensitive on $row var!
                    Print 
                    '<tr>
                        <td>'.$row['Staff_ID'].'</font> </td>
                        <td>'.$row['Staff_Name'].'</font> </td>
                        <td>'.$row['Staff_Phone_Num'].'</font> </td>
                        <td>'.$row['Branch'].'</font> </td>
                        <td>'.$row['HD_ID'].'</font> </td>
                        <td>'.$row['Event_ID'].'</font> </td>
                        <td> <a href="frmupdstaff.php?fStaff_ID='.$row['Staff_ID'].'" class="btn btn-warning" role="button">Update</a> </td>
                        <td> <a href="frmupdstaff.php?fStaff_ID='.$row['Staff_ID'].'" class="btn btn-warning" role="button">Update</a> </td>
                        <td> <a href="frmupdstaff.php?fStaff_ID='.$row['Staff_ID'].'" class="btn btn-warning" role="button">Update</a> </td>
                        <td> <a href="frmupdstaff.php?fStaff_ID='.$row['Staff_ID'].'" class="btn btn-warning" role="button">Update</a> </td>
                        <td> <a href="frmupdstaff.php?fStaff_ID='.$row['Staff_ID'].'" class="btn btn-warning" role="button">Update</a> </td>
                        <td> <a href="frmupdstaff.php?fStaff_ID='.$row['Staff_ID'].'" class="btn btn-warning" role="button">Update</a> </td>
                    </tr>';
                }
            ?>
        </table>
        </form>
        </div>
    </section>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>

</body>
</html>