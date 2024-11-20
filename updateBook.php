<?php
    $sBook_ID=$_POST['Book_ID'];
    $sBook_Title=$_POST['Book_Title'];
    $sNo_Pages=$_POST['No_Pages'];
    $sISBN=$_POST['ISBN'];

    $dbc = mysqli_connect ("localhost","root","","library");
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: ".mysqli_connect_error();
    }

    // SQL statement to insert data from form into table Book
    $sql="INSERT INTO `book`(`Book_ID`,`Book_Title`,`No_Pages`,`ISBN`)values ('$sBook_ID','$sBook_Title','$sNo_Pages','$sISBN')";
    $results= mysqli_query($dbc,$sql);
    if ($results)
    {
        mysqli_commit($dbc);
        //display message box Record Been Added
        print '<script>alert("Record Had Been Added");</script>';
        //go to frmcustomer.php page
        print '<script>window.location.assign("frmRegisterBook.php");</script>';
    }
    else
    { 
        mysqli_rollback($dbc);
        //display error message box
        print '<script>alert("Data Is Invalid , No Record Been Added");</script>';
        //go to frmcustomer.php page
        print '<script>window.location.assign("frmRegisterBook.php");</script>';
    }
?>