<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>sign up</title>
    <link rel="stylesheet" href="regg.css">
</head>
<body>
<header>
  <nav class="navbar-brand">
    <a href=""><img src="images/insight guides_free-file (1).png" alt="logo" width="80%"></a>
    <div class="links">
      <ul >
      <li  > <a href="index.html">Home </a> </li>
      <li  > <a href="#about">About Us </a> </li>
      <li  > <a href="#contact">Contact Us</a> </li>
      <li  > <a href="users(log).php">Log In</a> </li>
      </ul>
    </div>
    
  </nav>
  <div class="maintext">
    <p>Join Us</p>
  </div>
   
  
  </header>
    <form  method="post">
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
            <input type="text" name="un" placeholder="user name" class="namee"> <br>
            <input type="email" name="em" placeholder="email" class="namee"> <br>
            <input type="password" name="psw1" placeholder="password" class="namee"> <br>
            <input type="password" name="psw2" placeholder="confirm password" class="namee"> <br>
        </div>
        <button type="submit" name="register" class="btn">Register</button>
        <p class="member">already a member?<a href="users(log).php">log in</a></p>
        </form> <br> <br> <br> <br> <br>
        <!-- Site footer -->
<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <h6 id="about">About</h6>
        <p class="text-justify">Insight guides <i>FIND YOUR FAVORITE PLACES </i> is a website to recommend entertainment places for young people and provide them with appropriate places through deals with these places (restaurants and cafes, parks ,shopping malls, entertainment places???) and To be the first choice for people in suggestions entertainment places and facilitating the route between the users and places all over Egypt.</p>
      </div>

      <div class="col-xs-6 col-md-3">
        <h6>Categories</h6>
        <ul class="footer-links">
          <li><a href="http://scanfcode.com/category/c-language/">Restaurant</a></li>
        <li><a href="http://scanfcode.com/category/front-end-development/">Day-use</a></li>
        <li><a href="http://scanfcode.com/category/back-end-development/">Entertainment</a></li>
        <li><a href="http://scanfcode.com/category/java-programming-language/">Historical places</a></li>
        <li><a href="http://scanfcode.com/category/android/">Cinemas</a></li>
        <li><a href="http://scanfcode.com/category/templates/">Shopping</a></li>
        </ul>
      </div>

      <div class="col-xs-6 col-md-3">
      <h6 id="contact">Contact Us</h6>
        <ul class="footer-links">
          <li><a href="http://scanfcode.com/about/">Basmalla Ahmed : 01122269665</a></li>
          <li><a href="http://scanfcode.com/contact/">Bishoy wagih : 01211979352</a></li>
          <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Farida Hazem : 01127317438</a></li>
          <li><a href="http://scanfcode.com/privacy-policy/">Chirstina Khalil : 01283494290</a></li>
          <li><a href="http://scanfcode.com/sitemap/">Toqa Mostafa : 01144828861</a></li>
          <li><a href="http://scanfcode.com/sitemap/">Arwa Zakria :01024708303</a></li>
        </ul>
      </div>
    </div>
    <hr>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-6 col-xs-12">
        <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by 
          <a href="#">Insight guides</a>.
        </p>
      </div>

     
      </div>
    </div>
  </div>
</footer>
    </body>
    </html>
</body>
</html>