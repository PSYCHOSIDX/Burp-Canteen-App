<?php
session_start();
include 'includes/db.php';

$itemno=$_GET['itemno'];

if($con)
{
    echo" connection successful";
}else{
    echo"no connection";
}


$username = $_SESSION['username'];



$q = " UPDATE menu SET available = 'sold out' WHERE itemno = $itemno ";
$qy = mysqli_query($con,$q);


header('location:admin.php');