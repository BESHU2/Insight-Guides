
<?php include('server.php') ?>
<html>
    <head>
        <link rel="stylesheet" href="testt.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">
       
    <body  style="background-color:whitesmoke" class="container-fluid">
      <header>
        <nav class="navbar-brand">
          <a href=""><img src="images/insight guides_free-file (1).png" alt="logo" width="80%"></a>
          <div class="links">
            <ul >
            <li  > <a href="index.html">Home </a> </li>
            <li  > <a href="#about">About Us </a> </li>
            <li  > <a href="#contact">Contact Us</a> </li>
            <li><a href="users(log).php?logout='1'">logout</a></li> 
            
            <section>
             <?php
             if (isset($_SESSION['username'])){
             echo $_SESSION['username']; 
             } 
             if (isset ($_SESSION['sucess'])){ 
                 echo $_SESSION['sucess'];  
                unset($_SESSION['sucess']);
                }
         ?>
         </section>
         <div>
            
         </div>
            </ul>
          </div>
          
        </nav>
        <div class="maintext">
          <p>Our Services</p>
        </div>
      </header>
   
         <div class="services">
             <div class="row">
<div  class="col-sm-3" id="lol" onclick="location.href='rest.php'" >
<figure> <img src="images/restaurant.jpg" width="250px" height="250px" alt="" ></figure>
<figcaption> <h1>Restaurant</h1> This category is to nominate the best favorite restaurants for you, through which you can choose the right place for you, and you can also book through us the restaurant you want to go to</figcaption>


</div>
<div class="col-sm-3"  id="lol" onclick="location.href='shopping.php'">
    <figure> <img src="images/shopping.jpg" width="250px" height="250px" alt=""></figure>
    <figcaption><h1>Shopping</h1> This category is to filter the best shopping places available within the scope of our service and to provide means of communication for these places and their sites</figcaption>
</div>
    <div class="col-sm-3"  id="lol" onclick="location.href='dayuse.php'">
        <figure> <img src="images/dayuse.jpg" width="250px" height="250px" alt=""></figure>
        <figcaption> <h1>Day use</h1> this category is to nominate the best hotels that makes day-use and you can book your trip through our website and choose your program </figcaption>
    </div>
    
             </div>
             <div class="row">
                <div  class="col-sm-3" id="lol" onclick="location.href='cinema.php'">
                <figure> <img src="images/cinemas.jpg" width="250px" height="250px" alt="" ></figure>
                <figcaption> <h1>Cinemas</h1> This category is to nominate the best cinemas. Through us, you can book the cinema you want to go to. We also recommend a wide range of places to give you a variety to choose from.</figcaption>
            </div>
                <div class="col-sm-3"  id="lol" onclick="location.href='historical.php'">
                    <figure> <img src="images/historical.jpg" width="250px" height="250px" alt=""></figure>
                    <figcaption><h1>Historical Places</h1> This category is to nominate historical places in order to activate internal tourism throughout Egypt. Through us, we can book trips to these places through the website</figcaption>
                </div>
                    <div class="col-sm-3"  id="lol" onclick="location.href='entertainment.php'">
                        <figure> <img src="images/entertainment.jpg" width="250px" height="250px" alt=""></figure>
                        <figcaption> <h1>Entertainment</h1> This category is to nominate entertainment venues and game venues, and through us, you can book the entertainment venue you want to go to</figcaption>
                    </div>
                             </div>
                             <br>
                             <br>
             
    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6 id="about">About</h6>
              <p class="text-justify">Insight guides <i>FIND YOUR FAVORITE PLACES </i> is a website to recommend entertainment places for young people and provide them with appropriate places through deals with these places (restaurants and cafes, parks ,shopping malls, entertainment places…) and To be the first choice for people in suggestions entertainment places and facilitating the route between the users and places all over Egypt.</p>
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
  
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="social-icons">
                 
              </ul>
            </div>
          </div>
        </div>
  </footer>
      </body>
</html>