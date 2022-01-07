<?php

session_start();

include 'includes/db.php';

if($con)
{
     echo" connection successful";
}
else{
    echo"no connection";
}


$_SESSION['username']= $_POST['username'];


$username = $_POST['username'];
$val = $_POST['password'];
$pass = hash('sha256',$val);
 
$A = " select * from admin where username='$username' && password='$pass' ";

$A_res = mysqli_query($con, $A);

$A_num = mysqli_num_rows($A_res);


    if($A_num >0 )
    {
        header('location:admin.php');
    }
else{
  header('location:login.php');
}

?>