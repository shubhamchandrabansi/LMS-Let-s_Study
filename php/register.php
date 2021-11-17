<?php

include 'connection.php';

if(isset($_POST['name']))
{
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $security=$_POST['security'];
 
    $sql_ins="INSERT INTO `student_details_tbl`( `name`, `email`, `password`, `security`) VALUES ('$name','$email','$password','$security')";

    if(mysqli_query($connect,$sql_ins))
    {
        
        echo "<script> alert('Registered Successfully'); window.location.href='../index.php';</script>";
    }
    
}

?>