<?php 
session_start();
$connect=mysqli_connect('localhost','root','','LMS');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        body{
            padding-top: 5rem;
        }
        #logout
        {
            font-size: 25px;
            color:#fff;
            cursor: pointer;
        }       
    </style>

</head>
<body>

    <div >
        <header>

            <div id="menu" class="fas fa-bars"></div>
        
            <a href="index.php" class="logo"><i class="fas fa-user-graduate"></i> Let's Study</a>
        
            <!-- <nav class="navbar">
                <ul>
                    <li><a class="active" href="#home">home</a></li>
                    <li><a href="index.php">about</a></li>
                    <li><a href="index.php">course</a></li>
                    <li><a href="index.php">teacher</a></li>
                    <li><a href="index.php">contact</a></li>
                </ul>
            </nav> -->
        
            <?php
        
            if(empty($_SESSION['userlogin']))
            {
        
            
        
            ?>
        
            <div id="login" class="fas fa-user-circle"></div>
            <?php
            } 
            else
            {
            ?>
            
            <a href="php/logout.php"  id="logout" class="fas fa-sign-out-alt"></a>
            <?php
            }?>
        
        
            
        </header>
    </div>
    <div >
        
            
            <h1 style="text-align: center;width: 100%;margin-top:50px;">Student Detail</h1>
            <table style="text-align: center;width: 90%;margin:30px; text-transform: none ; font-size:14px">
            <tr>
                <th> Name </th>
                <th> Email</th>
                <th> Course Purchase</th>
                <th> Amount Paid</th>
                <th> Payment Id</th>
                <th> Payment Date</th>
            </tr>
            <?php
            $sql_student ="select * from `student_details_tbl`";
            $query_student = mysqli_query($connect,$sql_student);
            while($result_student = mysqli_fetch_assoc($query_student)){

                $payment_date ='';
                $payid = '';
                $amount = '';

                $sql_payment = "select * from `payment_detail_tbl` where `userid`='".$result_student['email']."'";
                $query_payment = mysqli_query($connect,$sql_payment);
                $count_payment = mysqli_num_rows($query_payment);
                if($count_payment > 0)
                {
                    $result_payment = mysqli_fetch_assoc($query_payment);
                        $payment_date = $result_payment['created_at'];
                        $payid = $result_payment['payid'];
                        $amount = '500';
                }
            ?>
            <tr>
                <td><?= $result_student['name']?></td>
                <td><?= $result_student['email']?></td>
                <td>Front End Developement</td>
                <td><?= $amount ;?></td>
                <td><?= $payid?></td>
                <td><?= $payment_date;?></td>

            </tr>
            <?php }?>
        </table>

    </div>
    
</body>
</html>