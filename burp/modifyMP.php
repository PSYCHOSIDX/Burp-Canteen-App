
<?php 
session_start();
include 'includes/db.php';
$x=$_SESSION['username'];


// admin menu all
$all = "select * from admin where username ='$x'";
$all_result = mysqli_query($con, $all);




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
            <li><a href="admin.php">Home</a></li>
            <li><a href="#con">Contact Us</a></li>

                <li><a href="logout.php"> <b class="log">LOGOUT</b></a></li>
               
                
            </ul>
        </div>
    </nav>
    
<!--  -->

<?php
// admin menu all

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
        <a href="modifyAB.php">ADD / REMOVE ITEMS </a>
    </div>

</div>

<br/> <br/>

    <!--Menu-->

    <h2 class="menu_head">Your Digital Profile</h2>
    <br> <br>
    <div class="holderx ">
    <div class="card">
<?php  
$call = "select * from canteens where id = (select id from admin where username = '$x')  ";
$call_result = mysqli_query($con, $call);

while($row = mysqli_fetch_array($call_result))
{
$name = $row['name']; //store value from array in var 
$college_name = $row['college_name'];
$location = $row['location'];
$timing = $row['timing'];
$off_days = $row['off_days'];
$contact = $row['contact'];
$minimum_pricing_for_two = $row['minimum_pricing_for_two'];

?>
    <form action="updateMP.php" method="POST" style="font-family: sans-serif ; margin:3rem;">
 
        <h3 style="margin:.5rem" class="head" >Name</h3>
        <input class="field" style="padding:1rem;height:3rem;font-size:1rem;width:25rem;border:none; border-radius:.6rem" type="text" name="name" value="<?php echo $name ?>"  placeholder="<?php echo $name ?>" > 
        <br>
        <h3  style="margin:.5rem" class="head">College Name</h3>
        <input class="field" style="padding:1rem;height:3rem;font-size:1rem;width:25rem;border:none; border-radius:.6rem" type="text" name="college_name" value="<?php echo $college_name ?>" placeholder="<?php echo $collegename ?>" > 
        <br>
        <h3  style="margin:.5rem" class="head">Location</h3>
        <input class="field" style="padding:1rem;height:3rem;font-size:1rem;width:25rem;border:none; border-radius:.6rem" type="text" name="location" value="<?php echo $location ?>"  placeholder="<?php echo $location ?>" > 
        <br>
        <h3  style="margin:.5rem" class="head">Timings</h3>
        <input class="field" style="padding:1rem;height:3rem;font-size:1rem;width:25rem;border:none; border-radius:.6rem" type="text" name="timing" value="<?php echo $timing ?>" placeholder="<?php echo $timing ?>" > 
        <br>
        <h3  style="margin:.5rem" class="head">Off Days</h3>
        <input class="field" style="padding:1rem;height:3rem;font-size:1rem;width:25rem;border:none; border-radius:.6rem" type="text" name="off_days" value="<?php echo $off_days ?>" placeholder="<?php echo $off ?>" > 
        <br>
        <h3  style="margin:.5rem" class="head">Contact Details</h3>
        <input class="field" style="padding:1rem;height:3rem;font-size:1rem;width:25rem; border:none; border-radius:.6rem" type="text" name="contact" value="<?php echo $contact ?>" placeholder="<?php echo $contact ?>" > 
        <br>
        <h3  style="margin:.5rem" class="head">Average Pricing For Two</h3>
        <input class="field" style="padding:1rem;height:3rem;font-size:1rem;width:25rem;border:none; border-radius:.6rem" type="text" name="minimum_pricing_for_two" value="<?php echo $minimum_pricing_for_two ?>" placeholder="<?php echo $min ?>" > 
        <br> <br>
        <input style="padding: .6rem 7rem" type="submit"  onclick=alert("Updates_are_saved")  class="btn_logins" > 
       
    </form>
       
 <?php }
?>

    </div>
     <div class="rig">
         <img src="images/logo_white.png" alt="logo">
     </div>
    </div>


        <!--Snacks-->
    <h2 class="category"> MENU UPDATE</h2>

<div class="holders">


    <div class="cards">
        <table class="table">
        <th>Item Name</th>
    <th style="text-align:center">Price</th>
    <th style="text-align:center">Quantity</th>
    <th style="text-align:center">Description</th>
    <th style="text-align:center">Category</th>
    <th style="text-align:center">VEG / NON VEG </th>
    <th style="text-align:center">  Best Seller</th>
    <th style="text-align:center"> ACTION</th>
  </tr>
  
  <?php
  $menu = "select * from menu where id = (select id from admin where username = '$x')  order BY category ,type ";
  $menu_result = mysqli_query($con, $menu);
while($row = mysqli_fetch_array($menu_result))
{
    $item_name = $row['item_name'];
    $itemno = $row['itemno'];
    $price = $row['price'];
    $qty = $row['qty'];
    $description = $row['description'];
   $category = $row['category'];
   $type = $row['type'];
    $best = $row['best'];

?>

<form action="update_menu.php" method="POST">
  <tr>
      
      <td style="display:none;"> <input name ="itemno" style="color: #35353500; background-color:#35353500; border:none; width:0px;" class="item" input type="text" value="<?php echo $itemno ?>"  > </td>
      
    <td colspan=""> <input name ="item_name" type="text" value="<?php echo $item_name ?>" placeholder="<?php echo $item_name ?>"></td>

    <td> <input name="price" type="text" value="<?php echo $price ?>" placeholder="<?php echo $price ?>"></td>

    <td> <input name="qty" type="text" value="<?php echo $qty ?>" placeholder="<?php echo $qty ?>" ></td>

    <td> <input name="description" type="text" value="<?php echo $description ?>" placeholder="<?php echo $description?>"></td>


    <td>  <p class="drop"><?php echo $category?></p>
             <select name="category" value="<?php echo $category ?>" placeholder="<?php echo $category ?>">
                    <option value="snacks">snack</option>
                    <option value="maincourse">maincourse</option>
                    <option value="beverage">beverage</option>
            </select>
    </td>
    
    <td>  <p class="drop"><?php echo $row['type'] ?></p>  
            <select name="type" value="<?php echo $type ?>" placeholder="<?php echo $type ?>">
                    <option value="VEG">VEG</option>
                    <option value="NON VEG">NON VEG</option>
            </select>  
    </td>

    <td> <p class="drop"><?php echo $row['best'] ?></p> 
            <select name="best" value="<?php echo $best ?>" placeholder="<?php echo $best ?>">
                    <option value="true">TRUE</option>
                    <option value="false">FALSE</option>
            </select>   
     </td>

     <td>   <input style="text-align:center;" type="submit"  onclick=alert("Updates_are_saved") class="btn_loginx" > </td>
  </tr>
  </form>


  <?php }
?>
  
        </table>
           
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