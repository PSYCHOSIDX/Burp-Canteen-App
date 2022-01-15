
<?php 

include 'includes/db.php';

// //admin select snacks
// $s = "select * from  menu  where id = (select id from admin where username = '$x') && category='snacks' order by type";

// $snack_result = mysqli_query($con, $s);

// //admin select beverage
// $s = "select * from menu  where id = (select id from admin where username = '$x') && category='beverage' order by type";

// $beverage_result = mysqli_query($con, $s);

// //admin select main course
// $s = "select * from  menu  where id = (select id from admin where username = '$x') && category='maincourse' order by type";

// $main_result = mysqli_query($con, $s);

// // admin menu all
// $all = "select * from admin where username ='$x'";
// $all_result = mysqli_query($con, $all);

// //num
// // $a_num = mysqli_num_rows($aresult);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/canteen.css">
    <link rel="stylesheet" href="styles/canteens.css">
    <link rel="stylesheet" href="styles/tables.css">
    <link rel="stylesheet" href="styles/style.css">
    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Rowdies" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton" rel="stylesheet">

    <title> BURP </title>
    <link rel = "icon" href ="images/logo_white.png" 
        type = "image/x-icon">

</head>


<body>

    <!--Navbar-->
    <nav>
        <div class="left">
                <img src="images/logo_white.png" alt="BURP !">
        </div>
        <div class="right">
            <ul>
            <li><a href="#can">Canteens </a></li>
            <li><a href="#con">Contact Us</a></li>
            <li><a href="#what">What We Do !</a></li>
                
            </ul>
        </div>
    </nav>
    
<!-- Page -->

<div class="sec1" >
    <div class="sec_left">
        <img src="images/burp_ball.png" alt="Burp" >
        
        <a class="exp" href="#can"> Explore</a>
    </div>

    <div class="sec_right">
        <p style="text-align:center; color:white;" class="ptex">Hungry ?</p>
        <br> <br> <br>
        <p  class="ptex" style="text-align:center; color:yellow;" >You’re in the </p>
        <br> <br> <br>
        <p  class="ptex" style="text-align:center; color: rgb(59, 59, 59);;" > right place !</p>
        <img src="https://media.giphy.com/media/dB77abUuizvIN90HQk/giphy.gif" alt="Burger">
    </div>
</div>

<br>

<!--Cards section-->
<div class="card_bg" id="can"> 

<h1 class="cantex">Canteens</h1>
    <div class="carddark">
    <h3>DBCE CANTEEN</h3>
    <img src="images/can.png" alt="">
    <br> <p style="padding: 1rem; color:white"> 
Clean and Hygenic Canteen with home style food ,
Affordable and quality food served at the canteen </p>

<h4 style="padding: 1rem;"> Average Price For Two : Rs-240</h4> 
<a href="canteen-menu.php" class="view_btn"> View</a>
    </div>
</div>


<div class="info" id="what">
    <div class="left_l">

    </div>
    <div class="right_r">
            <div class="block">
                <img src="images/logo_white.png" alt="logo">
                <h2 class="gg">At Burp ! We Bring You The Best COLLEGE Canteens And Mess In Your Locality <br>To Make Your Dining Experience  Great !    Hope You Enjoy Our Service ..... </h2>
            </div>
    </div>
</div>

<div class="info" id="what">
    <div class="left_l">

    </div>
    <div class="right_r">
            <div class="blockx">
                <h1 style="color:white; padding:1rem;font-family:Anton">Contact Us
            </h1> <br>
            <a class="mail"href="#"> Mail</a>  <a class="insta" href="#"> Instagram</a>  <a class="tw" href="#">Twitter</a>
        </div>
    </div>
</div>
<!--Footer-->

<div class="foot" id="con">
<img src="images/logo_white.png" alt="burp">
<div class="text">
    <h3>BURP INDIA</h3>
    <p>Goa , India <br>
        PH : 7028193277</p>
</div>
<div class="location">
    <!-- <h3>LOCATION</h3> -->
    <iframe frameborder="2" scrolling="no"src="https://maps.google.com/maps?width=10%25&amp;height=400&amp;hl=en&amp;q=Dbce+(Don%20Bosco%20College%20of%20Engineering)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
</div>
</div>
</body>
</html>