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

    <h2 class="menu_head">ADD ITEMS TO MENU</h2>
    <br> <br>
    <div class="holderx" style="  background-image: linear-gradient(125deg, red , yellow);">
    <div class="card ">

    <form action="additem.php" method="POST" style="font-family: sans-serif ; margin:3rem;">
<p class="tex" > ENTER ITEM NAME</p>
   <input required name ="item_name" type="text" value="" placeholder="ENTER ITEM NAME">
   <p  class="tex"> ENTER PRICE </p>
 <input required name="price" type="text" value="" placeholder="ENTER PRICE">
 <p  class="tex"> ENTER QUANTITY </p>
 <input required name="qty" type="text" value="" placeholder="ENTER QUANTITY" >
 <p  class="tex"> ENTER DESCRIPTION </p>
 <input required name="description" type="text" value="" placeholder="ENTER DESCRIPTION">

 <p  class="tex"> SELECT CATEGORY</p>
         <select class="cat" name="category" value="<?php echo $category ?>" placeholder="<?php echo $category ?>">
                <option value="snacks">snack</option>
                <option value="maincourse">maincourse</option>
                <option value="beverage">beverage</option>
        </select>

  <p  class="tex"> SELECT VEG / NON VEG</p>
        <select class="cat" name="type" value="<?php echo $type ?>" placeholder="<?php echo $type ?>">
                <option value="VEG">VEG</option>
                <option value="NON VEG">NON VEG</option>
        </select>  

    <p  class="tex"> SET BESTSELLER</p>
        <select class="cat" name="best" value="<?php echo $best ?>" placeholder="<?php echo $best ?>">
                <option value="true">TRUE</option>
                <option value="false">FALSE</option>
        </select>   
<br> <br>
        <input style="text-align:center;width:100%" type="submit" VALUE="ADD ITEM" onclick=alert("Item_Added!") class="btn_loginx" > </td>
 
    </form>



  
    </div>
     <div class="rig">
         <img src="images/logo_white.png" alt="logo">
     </div>
    </div>


        <!--Snacks-->
    <h2 class="category"> MENU / DELETE ITEMS</h2>

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

<form action="delitem.php" method="POST">
  <tr>
      
      <td style="display:none;"> <input name ="itemno" style="color: #35353500; background-color:#35353500; border:none; width:0px;" class="item" input type="text" value="<?php echo $itemno ?>"  > </td>
      
    <td colspan=""> <input name ="item_name" type="text" value="<?php echo $item_name ?>" placeholder="<?php echo $item_name ?>"></td>

    <td> <input name="price" type="text" value="<?php echo $price ?>" placeholder="<?php echo $price ?>"></td>

    <td> <input name="qty" type="text" value="<?php echo $qty ?>" placeholder="<?php echo $qty ?>" ></td>

    <td> <input name="description" type="text" value="" placeholder="<?php echo $description?>"></td>


    <td>  <p class="drop"><?php echo $category?></p>
             
    </td>
    
    <td>  <p class="drop"><?php echo $row['type'] ?></p>  
           
    </td>

    <td> <p class="drop"><?php echo $row['best'] ?></p> 
           
     </td>

     <td>   <input style="text-align:center;" type="submit" value="DELETE" onclick=alert("Item_Deleted!") class="btn_loginx" > </td>
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
