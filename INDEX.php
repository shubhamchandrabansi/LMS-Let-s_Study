<?php 
session_start();
$connect= mysqli_connect('localhost','root','','LMS');

$count_chk = 0;
if(isset($_SESSION['userlogin']))
{
    $sql_chk ="select * from `payment_detail_tbl` where `userid`='".$_SESSION['userlogin']."'";
    $query_chk = mysqli_query($connect,$sql_chk);
    $count_chk = mysqli_num_rows($query_chk);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Study</title>

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
.login-form form .box1{
    width:100%;
    padding:1rem 0;
    margin:1rem 0;
    border-bottom: .2rem solid #666;
    font-size: 1.6rem;
    color:#333;
    text-transform: none;
}
</style>
</head>
<body>
   
<!-- header section starts  -->

<header>

    <div id="menu" class="fas fa-bars"></div>

    <a href="#" class="logo"><i class="fas fa-user-graduate"></i> Let's Study</a>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#course">course</a></li>
            <li><a href="#teacher">teacher</a></li>
            <li><a href="#contact">contact</a></li>
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

<!-- header section ends -->

<!-- login form  -->

<div class="login-form" id="login-form">


    <form action="php/login.php" method="POST" >
        <h3>login</h3>
        <input type="email" name="email" placeholder="email" class="box1">
        <input type="password" name="password" placeholder="password" class="box1">
        <p>forget password? <a href="for-pass.html">click here</a></p>
        <p>don't have an account? <a href="register.html" >register now</a></p>
        <input type="submit" class="btn" value="login">
        <i class="fas fa-times"></i>
    </form>


</div>








<!-- home section starts  -->

<section class="home" id="home">

    <h1>Let's Study</h1>
    <p> LEARN - What you want ! | GROW - Where you want ! | IMPLEMENT - Where you can !</p>
    <a href="#" class="login1"><button class="btn" >get started</button></a>

    <div class="shape"></div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <h3>why choose us?</h3>
        <p>Learning is the source of human progress.</p>
            
        <p>It has the power to transform our world
            from illness to health, 
            from poverty to prosperity,
            from conflict to peace.</p>    
            
        <p>It has the power to transform our lives
            for ourselves,
            for our families,
            for our communities.</p>
        <p>And that’s why Let's Study is here.
            We partner with the best institutions
            to bring the best learning
            to every corner of the world. <br>
            
            So that anyone, anywhere has the power to 
            transform their life through learning.</p>
        <a href="#"  id="login2"><button class="btn login1">learn more</button></a>
    </div>

</section>

<!-- about section ends -->

<!-- course section starts  -->

<section class="course" id="course">

<h1 class="heading">our popular courses</h1>    

<div class="box-container">

    <div class="box">
        <img src="images/course.jpg" alt="">
        <h3 class="price">&#x20B9;500</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="<?php if($count_chk > 0){?>lecture.php<?php } else {?>javascript:void(0);<?php }?>" class="title <?php if(isset($_SESSION['userlogin'])){}else{?> cpop<?php }?>"  <?php if($count_chk > 0){}else{ if(isset($_SESSION['userlogin'])) {?>onclick="rzpPay()"><?php } }?>>learn front end development</a>
            <p>Explore how to build amazing interactive and dynamic websites using HTML - CSS - JavaScript !!!</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 hours </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                <h3> <i class="fas fa-book"></i> 12 modules </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/course.jpg" alt="">
        <h3 class="price">&#x20B9;500</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="<?php if($count_chk > 0){?>lecture.php<?php } else {?>javascript:void(0);<?php }?>" class="title <?php if(isset($_SESSION['userlogin'])){}else{?> cpop<?php }?>"  <?php if($count_chk > 0){}else{ if(isset($_SESSION['userlogin'])) {?>onclick="rzpPay()"><?php } }?>>learn front end development</a>
            <p>Explore how to build amazing interactive and dynamic websites using HTML - CSS - JavaScript !!!</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 hours </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                <h3> <i class="fas fa-book"></i> 12 modules </h3>
            </div>
            
        </div>
        
    </div>

    <div class="box">
        <img src="images/course.jpg" alt="">
        <h3 class="price">&#x20B9;500</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="<?php if($count_chk > 0){?>lecture.php<?php } else {?>javascript:void(0);<?php }?>" class="title <?php if(isset($_SESSION['userlogin'])){}else{?> cpop<?php }?>"  <?php if($count_chk > 0){}else{ if(isset($_SESSION['userlogin'])) {?>onclick="rzpPay()"><?php } }?>>learn front end development</a>
            <p>Explore how to build amazing interactive and dynamic websites using HTML - CSS - JavaScript !!!</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 hours </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                <h3> <i class="fas fa-book"></i> 12 modules </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/course.jpg" alt="">
        <h3 class="price">&#x20B9;500</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="<?php if($count_chk > 0){?>lecture.php<?php } else {?>javascript:void(0);<?php }?>" class="title <?php if(isset($_SESSION['userlogin'])){}else{?> cpop<?php }?>"  <?php if($count_chk > 0){}else{ if(isset($_SESSION['userlogin'])) {?>onclick="rzpPay()"><?php } }?>>learn front end development</a>
            <p>Explore how to build amazing interactive and dynamic websites using HTML - CSS - JavaScript !!!</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 hours </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                <h3> <i class="fas fa-book"></i> 12 modules </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/course.jpg" alt="">
        <h3 class="price">&#x20B9;500</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="<?php if($count_chk > 0){?>lecture.php<?php } else {?>javascript:void(0);<?php }?>" class="title <?php if(isset($_SESSION['userlogin'])){}else{?> cpop<?php }?>"  <?php if($count_chk > 0){}else{ if(isset($_SESSION['userlogin'])) {?>onclick="rzpPay()"><?php } }?>>learn front end development</a>
            <p>Explore how to build amazing interactive and dynamic websites using HTML - CSS - JavaScript !!!</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 hours </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                <h3> <i class="fas fa-book"></i> 12 modules </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/course.jpg" alt="">
        <h3 class="price">&#x20B9;500</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="<?php if($count_chk > 0){?>lecture.php<?php } else {?>javascript:void(0);<?php }?>" class="title <?php if(isset($_SESSION['userlogin'])){}else{?> cpop<?php }?>"  <?php if($count_chk > 0){}else{ if(isset($_SESSION['userlogin'])) {?>onclick="rzpPay()"><?php } }?>>learn front end development</a>
            <p>Explore how to build amazing interactive and dynamic websites using HTML - CSS - JavaScript !!!</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 hours </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                <h3> <i class="fas fa-book"></i> 12 modules </h3>
            </div>
        </div>
    </div>

    <!-- Buy Now -->
    <div class="login-form coursedetail" >
        <form action="php/login.php" method="POST" >
            <h3>login</h3>
            <input type="email" name="email" placeholder="email" class="box1">
            <input type="password" name="password" placeholder="password" class="box1">
            <p>forget password? <a href="#">click here</a></p>
            <p>don't have an account? <a href="register.html" >register now</a></p>
            <input type="submit" class="btn" value="login">
            <i class="fas fa-times"></i>
        </form>
    </div>

</div>

</section>

<!-- course section ends -->

<!-- teacher section starts  -->

<section class="teacher" id="teacher">

<h1 class="heading">our expert teachers</h1>

<p>Let's Study offers online education courses covering a broad range of topics from educational policy and history to curriculum design and teaching techniques. Explore case studies in teaching and learn about how technology is increasing access to quality education on an unprecedented scale.</p>

<a href="#" class="login1" ><button class="btn">learn more</button></a>

</section>

<!-- teacher section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading">contact us</h1>

<div class="row">

    <form >
        <input type="text" placeholder="full name" class="box" >
        <input type="email" placeholder="your email" class="box" >
        <input type="number" placeholder="your number" class="box" >
        <input type="text" placeholder="query subject" class="box" >
        <textarea name="info" id="" cols="30" rows="10" class="box address" placeholder="Breif of your query !!!" ></textarea>
        <input type="button" class="btn" value="send now" onclick="submitForm()">
    </form>

    <div class="image">
        <img src="imgt1.png" alt="">
    </div>

</div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<div class="footer">

    <div class="box-container">

        <div class="box">
            <h3>branch locations</h3>
            <a href="#">India</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#course">course</a>
            <a href="#teacher">teachers</a>
            <a href="#contact">contact</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <p> <i class="fas fa-map-marker-alt"></i> Patna , India 801503 </p>
            <p> <i class="fas fa-envelope"></i> lets_study@gmail.com </p>
            <p> <i class="fas fa-phone"></i> +120-4567-7890 </p>
        </div>

    </div>

    <h1 class="credit">created by <a href="https://www.instagram.com/_call_me_developer/" target="_blank">Shubham Kumar Chandrabansi</a> , all rights reserved. </h1>

</div>

<!-- footer section ends -->

<!-- Javascript Start -->

<script>
    function submitForm()
    {
        alert('Thank You!!!');
    }
</script>


<!-- Javascript End -->





















<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>
<script>

$('.cpop').click(function(){
        $('.coursedetail').addClass('popup');
    });

    $('.coursedetail .fa-times').click(function(){
        $('.coursedetail').removeClass('popup');
    });

  //checkout
  function rzpPay()
  {
    var options = {
            "key": "rzp_test_UR2n4mK56o7jwQ",
            "amount": 500 * 100, //  = INR 1
            "name": "Learning Management System",
            "description": "Fill the form for payment",
            "image": "https://net4ever.com/img/icon.png",
            "handler": function (response){
                
                //alert(response.razorpay_payment_id);
                window.location.href="php/paynow.php?payid="+response.razorpay_payment_id;
            },
            "theme": {
                "color": "#a92019"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
        preventDefault();
  }
</script>
</body>
</html>