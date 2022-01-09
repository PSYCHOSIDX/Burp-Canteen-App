<?php

session_start();

include 'includes/db.php';
$x=$_SESSION['username'];



$itemno = $_POST['itemno'];


$q = " DELETE from menu WHERE itemno='$itemno' ";
$qy = mysqli_query($con,$q);

 header('location:modifyAB.php');



?>