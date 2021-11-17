<?php
session_start();

include 'connection.php';

if(isset($_GET['payid']))
{
    $email = $_SESSION['userlogin'];
    $payid = $_GET['payid'];

    //sql query
       // insert data into payment detail

        $sql_ins ="INSERT INTO `payment_detail_tbl`(`userid`, `payid`) VALUES ('$email','$payid')";
        if(mysqli_query($connect,$sql_ins))
        {
            
            echo "<script> alert('Thank You For Payment'); window.location.href='../lecture.php';</script>";
        }
}
?>