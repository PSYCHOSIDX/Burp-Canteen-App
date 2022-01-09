<?php

session_start();
include 'includes/db.php';

$x=$_SESSION['username'];

$item_name = $_POST['item_name'];
$price = $_POST['price'];
$qty = $_POST['qty'];
$description = $_POST['description'];

$category = $_POST['category'];
$type = $_POST['type'];
$best = $_POST['best'];


$am= "select id from admin where username = '$x' ";
$am_result = mysqli_query($con, $am);
$id = mysqli_num_rows($am_result);



$qy ="INSERT INTO `menu`(`id`, `item_name`, `price`, `qty`, `description`, `category`, `type`, `available`, `best`) VALUES ('$id', '$item_name', '$price', '$qty', '$description', '$category', '$type', 'available', '$best');";
mysqli_query($con,$qy);

header('location:modifyAB.php');

?>