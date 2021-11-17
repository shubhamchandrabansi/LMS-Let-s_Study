<?php
include 'connection.php';

if(isset($_POST['email']))
{
    $email=$_POST['email'];
    $security=$_POST['security'];
    $password=$_POST['password'];

   echo $sql_check="select * from student_details_tbl where email = '$email' and security='$security'" ;
    $query=mysqli_query($connect,$sql_check);
    $count=mysqli_num_rows($query);

    if($count>0)
    {
        // $_SESSION['userlogin']=$email;
        $sql_update="update student_details_tbl set password='$password' where email= '$email' ";
        $run=mysqli_query($connect,$sql_update);

        echo '<script>alert("Password Changed!!!"); window.location.href="../index.php"</script>' ;


    }
    else
    {
        echo '<script>alert("Wrong Information!!!");window.location.href="../index.php"</script>' ;
        
    }

}


?>