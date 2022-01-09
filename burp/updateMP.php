<?php

session_start();

include 'includes/db.php';
$x=$_SESSION['username'];

$name = $_POST['name'];
$college_name = $_POST['college_name'];
$location = $_POST['location'];
$timing = $_POST['timing'];
$off_days = $_POST['off_days'];
$contact = $_POST['contact'];
$minimum_pricing_for_two = $_POST['minimum_pricing_for_two'];


$q = "UPDATE canteens SET name='$name',college_name='$college_name',location='$location',timing='$timing',off_days='$off_days',contact='$contact',minimum_pricing_for_two='$minimum_pricing_for_two' WHERE id=(select id from admin where username = '$x') ";
$qy = mysqli_query($con,$q);

header('location:modifyMP.php');



?>