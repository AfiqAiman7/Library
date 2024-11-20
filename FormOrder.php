<?php
	session_start();
	$dbc=mysqli_connect("localhost","root","","library");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
	}

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(!empty($_POST['oID']) && !empty($_POST['bTitle'])  && !empty($_POST['oPub'])  && !empty($_POST['oQuan']))
		{
			$oID = $_POST['oID'];
			$bTitle = $_POST['bTitle'];
			$oPub = $_POST['oPub'];
			$oQuan = $_POST['oQuan'];

			$sql="INSERT INTO `Order`(`Order_ID`, `Book_Title`, `Publisher`, `Quantity`) values ('$oID','$bTitle','$oPub','$oQuan')";
			$result= mysqli_query($dbc,$sql);

			if ($result)
			{
				print '<script>alert("Record Had Been Added");</script>';
				print '<script>window.location.assign("FormOrder.php");</script>';
			}
			else
			{
				print '<script>alert("Record Not Been Added");</script>';
				print '<script>window.location.assign("FormOrder.php");</script>';
			}
		}
		else
		{
			print '<script>alert("Please Enter All Data");</script>';
			header("location:FormOrder.php");
		}
	}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="MyCss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Search</title>
</head>
<body>
	<style type="text/css">
		.container
		{
		}
	</style>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4 align="center">ORDER BOOK SYSTEM</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <table>
                                <td>
                                <tr><form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" autocomplete="off" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search Book Title">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                        
                                    </div>
                                </form></tr>
                                </td></table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                        <form action="" method="POST">
						<div class="formBox">
                        <div class="row100">
								<div class="inputBox">
									<span>Order ID</span>
									<input type="text" name="oID" required placeholder="Enter Order ID" autocomplete="off" >
								</div>
							</div>
							<div class="row100">
								<div class="inputBox">
									<span>Book Title</span>
									<input type="text" name="bTitle" required placeholder="Enter Book Title" autocomplete="off" >
								</div>
							</div>
							<div class="row100">
								<div class="inputBox">
									<span>Publisher</span>
									<input type="text" name="oPub" placeholder="Enter Publisher" autocomplete="off" required>
								</div>
							</div>
                            <div class="row100">
								<div class="inputBox">
									<span>Quantity</span>
									<input type="text" name="oQuan" required placeholder="Enter Quantity" autocomplete="off" >
								</div>
							</div>

							<div class="row100">
								<div class="inputBox">
									<input type="submit" value="Save">
								</div>
							</div>
						</div>
					</form>
                        </table>
                        <button><a href="#" class="form-control" onClick="window.print()">Print Orders</a></button>
                        <button><a href="HeadDepartmentPage.php" class="form-control">Search Book</a></button>
                        <button><a href="Login.php" class="form-control">Log Out</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>