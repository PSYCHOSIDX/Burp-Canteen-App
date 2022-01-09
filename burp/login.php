<?php
//connection
session_start();
include 'includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--FONTS-->
      <link href="https://fonts.googleapis.com/css2?family=Rowdies" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton" rel="stylesheet">

    <link rel="stylesheet" href="styles/login.css">

    <title>Burp!</title>
    <link rel = "icon" href ="images/logo_white.png" 
        type = "image/x-icon">
</head>

<div class="form">
  <div class="round">  <img src="images/r1.png" ></div>
<img class="logo" src="images/logo.png" class="logo" >
       <!-- <img src="ellipse1.png" class="ellipse1" >
       <img src="ellipse2.png" class="ellipse2" >
       <img src="ellipse3.png" class="ellipse3" >
       <img src="ellipse4.png" class="ellipse4" > -->
         <h1 class="title">ADMIN LOGIN</h1>
          <form action="validation.php" method="POST">
            <p class="name">USERNAME</p>
              <INPUT class="input" TYPE="text" name="username"  placeholder="Enter Username" maxlength="45" >
                <p class="name">PASSWORD</p>
                  <INPUT class="input" type="password" name="password"  placeholder="Enter Password" maxlength="45"> 
                  <br>
                  <INPUT class="btn_login" type="submit" name="submit"  value="LOGIN">    
              </form>    
</div>
            
<body>
    
</body>
</html>