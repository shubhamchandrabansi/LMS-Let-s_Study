<?php
session_start();

include 'connection.php';

if(isset($_POST['email']))
{

    $email=$_POST['email'];
    $password=$_POST['password'];

    if($email == 'admin@gmail.com' && $password == 'admin123')
    {
        $_SESSION['userlogin']=$email;
        echo '<script>window.location.href="../admin.php"</script>' ;
    }
    else
    {
        $sql_check="select * from student_details_tbl where email = '$email' and password='$password'" ;
        $query=mysqli_query($connect,$sql_check);
        $count=mysqli_num_rows($query);

        if($count>0)
        {
            $_SESSION['userlogin']=$email;
            echo '<script>window.location.href="../index.php"</script>' ;
        }
        else
        {
            echo '<script>alert("Wrong password");window.location.href="../index.php"</script>' ;
            
        }
    }
    

}

?>
