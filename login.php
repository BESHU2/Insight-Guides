<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">
    <title>log in</title>
</head>
<body>
<header>
    <nav>
      <a href=""><img src="images/insight guides_free-file (1).png" alt="logo" width="80%"></a>
      <div class="links">
        <ul >
        <li  > <a href="index.html">Home </a> </li>
        <li  > <a href="#">About Us </a> </li>
        <li  > <a href="#">Contact Us</a> </li>
      
        <li  > <a href="register.php">Sign Up</a> </li>
        </ul>
      </div>
      
    </nav>
    <div class="maintext">
      <p>Log In</p>
    </div>
</header>
<form method="post" action="login.php">
    <?php if(count($error)>0):
    ?>
    <div class="error">
    <?php
    foreach($error as $error1){
        echo$error1;
        echo"<br>";
    }
    ?>
    </div>
    <?php endif ?>
    <div class="inp">
                <input type="text" name="un" placeholder="Enter Your User Name"></div>
                <div class="inp">
                    <input type="password" name="psw1" placeholder="Enter Your Password">
                    <div class="inp">
                    <button type="submit"name="login" class="btn">Log in</button>
                </div>
                <p class="member"> not yet a member?<a href="reg.php"> sign up</a>
                </p>
    </form>