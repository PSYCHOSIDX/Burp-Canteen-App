<?php 

include 'includes/db.php';


//admin select snacks
$s = "select * from  menu  where id = (select id from admin where username = 'dbce_canteen') && best='true' order by type";

$best_result = mysqli_query($con, $s);

//admin select snacks
$s = "select * from  menu  where id = (select id from admin where username = 'dbce_canteen') && category='snacks' order by type";

$snack_result = mysqli_query($con, $s);

//admin select beverage
$s = "select * from menu  where id = (select id from admin where username = 'dbce_canteen') && category='beverage' order by type";

$beverage_result = mysqli_query($con, $s);

//admin select main course
$s = "select * from  menu  where id = (select id from admin where username = 'dbce_canteen') && category='maincourse' order by type";

$main_result = mysqli_query($con, $s);

// admin menu all
$all = "select * from admin where username ='dbce_canteen'";
$all_result = mysqli_query($con, $all);

//num
// $a_num = mysqli_num_rows($aresult);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/canteen-menu.css">
   
    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Rowdies" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Squada One" rel="stylesheet">

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
                <li><a href="index.php"> Home</a></li>
                <li><a href="#con"> Contact Us</a></li>
                
            </ul>
        </div>
    </nav>
    
<!-- College Name -->

<h2 class="yellow_text">DBCE-CANTEEN </h2>
<!--view different menus-->
          <!--view snacks menu-->

        <div class="hold">
            <div class="cardholder">
                <div class="class">
                    <div class="center">
                      <img class="snackslogo" src="images/snackslogo.png"  >
                      <div class="t_left">
                           <h2 class="snackstext" ><b>Snacks<b></h2>
                      </div>
    
                      <div class="b_right">
                          <a href="#snacks" class="viewsnacksbutton"><B >VIEW<B></a>
                      </div>
                     </div > 
                </div>
    
                <div class="class">
                    <div class="center">
                      <img class="snackslogo" src="images/beverageslogo.png"  >
                      <div class="t_left">
                           <h2 class="snackstext" ><b>Beverages<b></h2>
                      </div>
    
                      <div class="b_right">
                          <a href="#beverages" class="viewsnacksbutton"><B>VIEW<B></a>
                      </div>
                     </div > 
                </div>
                <div class="class">
                    <div class="center">
                      <img class="snackslogo" src="images/maincourselogo.png"  >
                      <div class="t_left">
                           <h2 class="snackstext" ><b>Main Course<b></h2>
                      </div>
    
                      <div class="b_right">
                          <a href="#maincourse" class="viewsnacksbutton"><B>VIEW<B></a>
                      </div>
                     </div > 
                </div>
    
                
            
    
    
            </div>
        </div>
         
    <!--Menu-->

    <h2 class="menu_head">Canteen Menu</h2>
      <!--BEST SELLER-->
    <h2 class="category"> Best Seller</h2>

<div class="holder">

   
<?php
while($row = mysqli_fetch_array($best_result))
{
?>
    <div class="card">
        <div class="c_left">
            <h2 class=" <?php if($row['type'] === 'VEG') {echo 'veg';} else echo 'nonveg';?> "><?php echo $row['type'];?></h2> <br>
            <b><h2><?php echo $row['item_name'];?> </h2><h4 class=' <?php if($row['available'] === 'available') {echo 'available';} else echo 'sold';?>'><?php echo $row['available'];?></h4> </b> <br>
            <p><?php echo $row['description'];?> </p><br>
            <h2 class="state <?php if($row['available'] === 'available') {echo 'available';} else echo 'sold';?> "> <?php if($row['available'] === 'available'){echo 'ITEM IS CURRENTLY AVAILABLE';} else echo 'ITEM IS SOLD OUT'?></h2>
        </div>
    
        <div class="c_right">
            <h1>RS:<?php echo $row['price'];?> </h1>
            <p>QTY:<?php echo $row['qty'];?></p> <p ><?php if($row['qty'] > 1){echo "plate";} else echo"single";?></p> <br> <br>
        </div>
           
    </div>

    <?php }
?>
    
    
</div>

    <!--Snacks-->
    <h2 class="category" id="snacks"> Snacks</h2>

<div class="holder">
  
<?php
while($row = mysqli_fetch_array($snack_result))
{
?>
    <div class="card">
        <div class="c_left">
            <h2 class=" <?php if($row['type'] === 'VEG') {echo 'veg';} else echo 'nonveg';?> "><?php echo $row['type'];?></h2> <br>
            <b><h2><?php echo $row['item_name'];?> </h2><h4 class=' <?php if($row['available'] === 'available') {echo 'available';} else echo 'sold';?>'><?php echo $row['available'];?></h4> </b> <br>
            <p><?php echo $row['description'];?> </p><br>
            <h2 class="state <?php if($row['available'] === 'available') {echo 'available';} else echo 'sold';?> "> <?php if($row['available'] === 'available'){echo 'ITEM IS CURRENTLY AVAILABLE';} else echo 'ITEM IS SOLD OUT'?></h2>
        </div>
    
        <div class="c_right">
            <h1>RS:<?php echo $row['price'];?> </h1>
            <p>QTY:<?php echo $row['qty'];?></p> <p ><?php if($row['qty'] > 1){echo "plate";} else echo"single";?></p> <br> <br>
        </div>
           
    </div>

    <?php }
?>
</div>


<!-- Beverages Course-->
<h2 class="category" id="beverages"> Beverage's</h2>
<div class="holder">
  
<?php
while($row = mysqli_fetch_array($beverage_result))
{
?>
    <div class="card">
        <div class="c_left">
            <h2 class=" <?php if($row['type'] === 'VEG') {echo 'veg';} else echo 'nonveg';?> "><?php echo $row['type'];?></h2> <br>
            <b><h2><?php echo $row['item_name'];?> </h2><h4 class=' <?php if($row['available'] === 'available') {echo 'available';} else echo 'sold';?>'><?php echo $row['available'];?></h4> </b> <br>
            <p><?php echo $row['description'];?> </p><br>
            <h2 class="state <?php if($row['available'] === 'available') {echo 'available';} else echo 'sold';?> "> <?php if($row['available'] === 'available'){echo 'ITEM IS CURRENTLY AVAILABLE';} else echo 'ITEM IS SOLD OUT'?></h2>
        </div>
    
        <div class="c_right">
            <h1>RS:<?php echo $row['price'];?> </h1>
            <p>QTY:<?php echo $row['qty'];?></p> <p ><?php if($row['qty'] > 1){echo "plate";} else echo"single";?></p> <br> <br>
        </div>
           
    </div>

    <?php }
?>
</div>


<!--Main Course-->
<h2 class="category" id="maincourse" > Main Course</h2>
<div class="holder">
  
<?php
while($row = mysqli_fetch_array($main_result))
{
?>
    <div class="card">
        <div class="c_left">
            <h2 class=" <?php if($row['type'] === 'VEG') {echo 'veg';} else echo 'nonveg';?> "><?php echo $row['type'];?></h2> <br>
            <b><h2><?php echo $row['item_name'];?> </h2><h4 class=' <?php if($row['available'] === 'available') {echo 'available';} else echo 'sold';?>'><?php echo $row['available'];?></h4> </b> <br>
            <p><?php echo $row['description'];?> </p><br>
            <h2 class="state <?php if($row['available'] === 'available') {echo 'available';} else echo 'sold';?> "> <?php if($row['available'] === 'available'){echo 'ITEM IS CURRENTLY AVAILABLE';} else echo 'ITEM IS SOLD OUT'?></h2>
        </div>
    
        <div class="c_right">
            <h1>RS:<?php echo $row['price'];?> </h1>
            <p>QTY:<?php echo $row['qty'];?></p> <p ><?php if($row['qty'] > 1){echo "plate";} else echo"single";?></p> <br> <br>
        </div>
           
    </div>

    <?php }
?>
    
</div>
<br> <br> <br>
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
    <h3><span>BURP INDIA</span></h3>
    <p>Goa , India <br>
        PH : 7028193277</p>
</div>
<p class="locationtext">Location:</p>
<div class="location">
    <!-- <h3>LOCATION</h3> -->
    <iframe frameborder="2" scrolling="no"src="https://maps.google.com/maps?width=10%25&amp;height=400&amp;hl=en&amp;q=Dbce+(Don%20Bosco%20College%20of%20Engineering)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
</div>
</div>
</body>
</html>