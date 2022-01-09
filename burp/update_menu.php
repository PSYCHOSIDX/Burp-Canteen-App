<?php

session_start();

include 'includes/db.php';
$x=$_SESSION['username'];


$item_name = $_POST['item_name'];
$itemno = $_POST['itemno'];
$price = $_POST['price'];
$qty = $_POST['qty'];
$description = $_POST['description'];

$category = $_POST['category'];
$type = $_POST['type'];
$best = $_POST['best'];


$q = "UPDATE menu SET item_name='$item_name',price='$price',qty='$qty',description='$description',category='$category',type='$type',best='$best' WHERE id=(select id from admin where username = '$x')&& itemno='$itemno' ";
$qy = mysqli_query($con,$q);

 header('location:modifyMP.php');



?>