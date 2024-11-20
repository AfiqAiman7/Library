<!--
NIK SYAZWAN BIN NIK KAMAL BAHSHAH
2020613638
M3CS1104C
Head Department
-->
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
                        <h4 align="center">SEARCH BOOK SYSTEM</h4>
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
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Book Title</th>
                                    <th>Page Number</th>
                                    <th>Author Name</th>
                                    <th>ISBN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","library");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM book WHERE CONCAT(Book_Title,No_Pages,Author_Name,ISBN) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['Book_ID']; ?></td>
                                                    <td><?= $items['Book_Title']; ?></td>
                                                    <td><?= $items['No_Pages']; ?></td>
                                                    <td><?= $items['Author_Name']; ?></td>
                                                    <td><?= $items['ISBN']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="5">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                        <button><a href="#" class="form-control" onClick="window.print()">Print Search</a></button>
                        <button><a href="FormOrder.php" class="form-control">Order Book</a></button>
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