<?php
session_start();
?><!DOCTYPE html>
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

    #logout
    {
    font-size: 25px;
    /* size: 25px; */
    color:#fff;
    cursor: pointer;
    }

</style>

</head>
<body>
    <div >
        <header>

            <div id="menu" class="fas fa-bars"></div>
        
            <a href="#" class="logo"><i class="fas fa-user-graduate"></i> Let's Study</a>
        
            <nav class="navbar">
                <ul>
                    <li><a class="active" href="#home">home</a></li>
                    <li><a href="index.php">about</a></li>
                    <li><a href="index.php">course</a></li>
                    <li><a href="index.php">teacher</a></li>
                    <li><a href="index.php">contact</a></li>
                </ul>
            </nav>
        
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
    <div style="width:100%; border-radius:10px; margin-top:50px;">
        <iframe width="100%" height="600" src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </iframe>

    </div>
    
</body>
</html>