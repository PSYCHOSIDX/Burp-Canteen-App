
<?php 
session_start();
include 'includes/db.php';
$x=$_SESSION['username'];

if(isset($x))
{}
else{ header('location:login.php');}

//admin select snacks
$s = "select * from  menu  where id = (select id from admin where username = '$x') && category='snacks' order by type";

$snack_result = mysqli_query($con, $s);

//admin select beverage
$s = "select * from menu  where id = (select id from admin where username = '$x') && category='beverage' order by type";

$beverage_result = mysqli_query($con, $s);

//admin select main course
$s = "select * from  menu  where id = (select id from admin where username = '$x') && category='maincourse' order by type";

$main_result = mysqli_query($con, $s);

// admin menu all
$all = "select * from admin where username ='$x'";
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
    <link rel="stylesheet" href="styles/canteen.css">
    <link rel="stylesheet" href="styles/canteens.css">
    <link rel="stylesheet" href="styles/tables.css">
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
            <li><a href="#con">Contact Us</a></li>
                <li><a href="logout.php"> <b class="log">LOGOUT</b></a></li>
               
                
            </ul>
        </div>
    </nav>
    
<!-- College Name -->
<?php
while($row = mysqli_fetch_array($all_result))
{
?>
<h2 class="yellow_text"> <?php echo $row['name']?> - ADMIN</h2>
<?php }
?>

<!--Menu Buttons-->
<div class="menu_cards">

    <div class="m_left">
        <a href="modifyMP.php">MODIFY MENU / PROFILE</a>
    </div>

    <div class="m_right">
        <a href="modifyAB.php">ADD / REMOVE ITEMS</a>
    </div>

</div>

<br/> <br/>

    <!--Menu-->

    <h2 class="menu_head">Your Digital Menu</h2>

        <!--Snacks-->
    <h2 class="category"> Snacks</h2>

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
            <a class="btn_sold" href="sold_update.php?itemno=<?php echo $row['itemno']?>">SOLD</a> <a class='btn_available' href="available_update.php?itemno=<?php echo $row['itemno']?>">AVAILABLE</a>
        </div>
           
    </div>

    <?php }
?>
    
</div>

<!--Beverages-->
<h2 class="category"> Beverages</h2>
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
            <a class="btn_sold" href="sold_update.php?itemno=<?php echo $row['itemno']?>">SOLD</a> <a class='btn_available' href="available_update.php?itemno=<?php echo $row['itemno']?>">AVAILABLE</a>
        </div>
           
    </div>

    <?php }
?>
    
</div>


<!--Main Course-->
<h2 class="category"> Main Course</h2>
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
            
            <a class="btn_sold" href="sold_update.php?itemno=<?php echo $row['itemno']?>">SOLD</a> <a class='btn_available' href="available_update.php?itemno=<?php echo $row['itemno']?>">AVAILABLE</a>
        </div>
           
    </div>

    <?php }
?>
    
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