<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link rel="stylesheet" href="testt.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">
    

    <title>Entertainment</title>
</head>
<body>
  <script type="text/javascript">
  
    
    const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
myInput.focus()
})
</script>

    <nav  style="width: 100%;">
      <a href=""><img src="images/insight guides_free-file (1).png" alt="logo" width="80%"></a>
      <div class="links">
        <ul >
        <li  > <a href="index.html">Home</a> </li>
        <li  > <a href="services.php">Services</a> </li>
        <li  > <a href="#about">About Us </a> </li>
        <li  > <a href="#contact">Contact Us</a> </li>
        </ul>
      </div>
      
    </nav> <br> <br> 



<div class="row" style="background-color:black; color: white; border-top:solid 2px white; " >
  <div class="col-sm-12" style="text-align:center ;">
  <h1 > Entertainment Places </h1>
  </div>
  </div>
  
  




<div class="row" style="background-color:red ; color: white;border-top:solid 2px white;">
  <div class="col-sm-12" style="text-align:center ;">
  <h1 >Enjoy 10% off by booking with Insight Guides </h1>
  </div>
  </div>
  <div class="row">
  <div  class="col-sm-3" id="loll"  >
  <figure> <img src="images/restaurant/mori.jpg" width="250px" height="250px" alt="" ></figure>
<figcaption> <h1>Mori Sushi</h1> Phone : 16885<br> Location : 24 Abd El Moniem Hafez St., Almaza, Heliopolis, Cairo. <br> <br> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Book Now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <form action="" method="post" id="book" >
          
       <div class="ip">
       
           <label for="">FullName</label><input type="text" name="tnm" placeholder="your name" class="namee" required> <br> <br>
           <label for="">Email</label><input type="email" name="tel" placeholder="your mail" class="namee" required> <br><br>
           <label for="">Phone</label><input type="number" name="tph" placeholder="your phone" class="namee" required> <br><br>
           <label for="">Reservation</label><input type="number" name="tgst" placeholder="no. of person" class="namee" required> <br><br>
           <label for="">Date</label><input type="date" name="tserv" placeholder="date" class="namee" required> <br><br>
  <label for="">From</label><input type="time" name="tof" placeholder="time" class="namee" required> <br> <br> 
  <label for="">To</label> <input type="time" name="tto" placeholder="time" class="namee" required> <br><br>
  <label for=""> Any requests</label><input type="text" name="tcomm" placeholder="your comment" class="namee" > <br><br> <hr>
  <label for="">Choose Restaurant</label> <select name="tchoice" id="">
    <option value="Gravity Code">Gravity Code</option>
    <option value="buffalo burger">buffaloburger</option>
    <option value="Buffalo Wings and Rings">Buffalo Wings and Rings</option>
    <option value="Chicken Fila">Chicken Fila</option>
    <option value="mori">Mori Sushi</option>
    <option value="mori">Mori Sushi</option>
    <option value="mori">Mori Sushi</option>
    <option value="mori">Mori Sushi</option>
  </select>  <br><br>
  <style>
    hr{
      color: white;
      width: 100%;
    }
  </style>
       </div> <div class="col-10">
       </div> <label for="" style="text-align: center;">Payment Method</label> <br>   
       <input type="radio" id="acco2" name="pay">
    <label for="acco2" style="cursor: pointer;"> Cash</label>
    <div class="content">
      <input type="radio" id="acco1" name="pay">
      <label for="acco1">Visa</label>
      <section class="acc1">
        <label for="">CARD NUMBER</label> <input type="password" placeholder="Valid Card Number" name="tcr1"> <br> <br>
        <label for="">Expiration Date</label> <input type="date" placeholder="MM/YY"  name="tcr2"> <label for="">CVV</label> <input type="password" placeholder="CVV"  name="tcr3"> <br> <br>
        <label for="">Holder Name</label> <input type="text" placeholder="Your Name"  name="tcr4">
        <style>
          .content input{
            border-radius: 6px;
            color: black;
            
            
          }
          .content section{
            height: 0;
            overflow: hidden;
          }
          .content input:checked ~ section.acc1{
            height: 250px;
            transition: all 0.8s ease 0.1s;
          }
          .content label{
            cursor: pointer;
          }
        </style>   
      </section>
    </div>            


       <button type="submit" name="log" class="btn btn-secondary"> Book Now</button>
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
   </form> 
   
      


      </div>

      </form>
</div>
</div>
</div>



</div>
<div  class="col-sm-3" id="loll"  >
<figure> <img src="images/restaurant/chicken fila.jpg" width="250px" height="250px" alt="" ></figure>
<figcaption> <h1>Chicken Fila</h1> Phone : 9803 <br> Location : 461 N Central Ave, 
  Hapeville, GA 30354 Cairo <br> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Book Now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <form action="" method="post" >
          
       <div class="ip">
       <label for="">FullName</label><input type="text" name="tnm" placeholder="your name" class="namee" required> <br> <br>
           <label for="">Email</label><input type="email" name="tel" placeholder="your mail" class="namee" required> <br><br>
           <label for="">Phone</label><input type="number" name="tph" placeholder="your phone" class="namee" required> <br><br>
           <label for="">Reservation</label><input type="number" name="tgst" placeholder="no. of person" class="namee" required> <br><br>
           <label for="">Date</label><input type="date" name="tserv" placeholder="date" class="namee" required> <br><br>
  <label for="">From</label><input type="time" name="tof" placeholder="time" class="namee" required> 
  <label for="">To</label> <input type="time" name="tto" placeholder="time" class="namee" required> <br><br>
  <label for=""> Any requests</label><input type="text" name="tcomm" placeholder="your comment" class="namee"> <br><br>
       </div>
       <button type="submit" name="log" > Book Now</button>
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
   </form> 
   
       


      </div>

      </form>
</div>
</div>
</div>


</div>
<div  class="col-sm-3" id="loll"  >
<figure> <img src="images/restaurant/buffalo.jpg" width="250px" height="250px" alt="" ></figure>
<figcaption> <h1>Buffalo Wings & Rings </h1> Phone :0c1206466668<br> Location :Americana Plaza, Sheikh Zayed<br> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Book Now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div style="width:100% ; height: 50px; background-color: blue;">

  </div>
  <div class="modal-dialog">
    <style>
      
      .modal-dialog{
        background-color: gray;
        box-shadow: 2px black;
      }
    </style>
    <div class="modal-content" style="height: 0%;">
      <style>
        .modal-content{
          background-color: rgb(194, 194, 194);
          box-shadow: 2px black;
          background-image:linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url(./images/red-paint-wall-background-texture.jpg);
          background-size: cover;
        }
      </style>
      
         
       <div class="ip">
         <style>
           .ip input{
          width: 270px;
             height: 38px;
             color: black;
             text-align: center;
           
             border-radius: 6px;
            font-size: 20px;
            justify-content: center;
            inline-size:40vh;
            margin-left: 30px;
           }
           label {
             color: whitesmoke;
             font-size: 20px;
             font-weight: bold;
           
           }
           
         </style>
          <label for="">FullName</label>
        <input type="text" name="tnm" placeholder="your name" class="namee"> <br> <br>
          <label for="">Email</label>         
          <input type="email" name="tel" placeholder="your mail" class="namee"> <br><br>
          <label for="">Phone</label>
           <input type="number" name="tph" placeholder="your phone" class="namee"> <br><br>
           <label for="">Reservation</label>
           <input type="number" name="tgst" placeholder="no. of person" class="namee"> <br><br>
           <label for="">Date</label>
           <input type="date" name="tserv" placeholder="date" class="namee"> <br><br>
  <label for="">From</label><input type="time" name="tof" placeholder="time" class="namee"> 
  <label for="">To</label> <input type="time" name="tto" placeholder="time" class="namee"> <br><br>
  <label for=""> Any requests</label><input type="text" name="tcomm" placeholder="your comment" class="namee"> <br><br>
       </div>
       <button type="submit" name="log" class="bttnn"  > Book Now</button>
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
   </form> 
   
   


      </div>

      </form> 
</div>
</div>
</div>


</div>


</div>  <!--  bta3 el row --> 
<!-- ////////////////tany row////////////////////////////////////////////// -->
<div class="row">
  <div  class="col-sm-3" id="loll"  >
  <figure> <img src="images/restaurant/buffaloburger.jpg" width="250px" height="250px" alt="" ></figure>
<figcaption> <h1>Buffalo Burger</h1> Phone : 19914<br> Location : Alzmalik.st Cairo <br> <br> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Book Now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <form action="" method="post" >
          
       <div class="ip">
        <label for="">FullName</label>
        <input type="text" name="tnm" placeholder="your name" class="namee"> <br> <br>
          <label for="">Email</label>         
          <input type="email" name="tel" placeholder="your mail" class="namee"> <br><br>
          <label for="">Phone</label>
           <input type="number" name="tph" placeholder="your phone" class="namee"> <br><br>
           <label for="">Reservation</label>
           <input type="number" name="tgst" placeholder="no. of person" class="namee"> <br><br>
           <label for="">Date</label>
           <input type="date" name="tserv" placeholder="date" class="namee"> <br><br>
  <label for="">From</label><input type="time" name="tof" placeholder="time" class="namee"> 
  <label for="">To</label> <input type="time" name="tto" placeholder="time" class="namee"> <br><br>
  <label for=""> Any requests</label><input type="text" name="tcomm" placeholder="your comment" class="namee"> <br><br>
       </div>
       <button type="submit" name="log" > Book Now</button>

       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
   </form> 
   


      </div>

      </form>
</div>
</div>
</div>



</div>
<div  class="col-sm-3" id="loll"  >
<figure> <img src="images/restaurant/Garnell.jpg" width="250px" height="250px" alt="" ></figure>
<figcaption> <h1>Garnell</h1> Phone : 15247<br> Location :Mostafa Kamel Square, Degla Maadi Degla Maadi, Maadi <br> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Book Now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <form action="" method="post" >
         
       <div class="ip">
        <label for="">FullName</label>
        <input type="text" name="tnm" placeholder="your name" class="namee"> <br> <br>
          <label for="">Email</label>         
          <input type="email" name="tel" placeholder="your mail" class="namee"> <br><br>
          <label for="">Phone</label>
           <input type="number" name="tph" placeholder="your phone" class="namee"> <br><br>
           <label for="">Reservation</label>
           <input type="number" name="tgst" placeholder="no. of person" class="namee"> <br><br>
           <label for="">Date</label>
           <input type="date" name="tserv" placeholder="date" class="namee"> <br><br>
  <label for="">From</label><input type="time" name="tof" placeholder="time" class="namee"> 
  <label for="">To</label> <input type="time" name="tto" placeholder="time" class="namee"> <br><br>
  <label for=""> Any requests</label><input type="text" name="tcomm" placeholder="your comment" class="namee"> <br><br>
       </div>
       <button type="submit" name="log" > Book Now</button>
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
   </form> 
   


      </div>

      </form>
</div>
</div>
</div>


</div>
<div  class="col-sm-3" id="loll"  >
<figure> <img src="images/restaurant/kansas.jpg" width="250px" height="250px" alt="" ></figure>
<figcaption> <h1>Kansas</h1> Phone : 16213<br> Location : 77 Saqr Qoraish Buildings, El Nasr St,Muhafazat al Qahirah · <br> <br> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Book Now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <form action="" method="post" >
          >
       <div class="ip">
        <label for="">FullName</label>
        <input type="text" name="tnm" placeholder="your name" class="namee"> <br> <br>
          <label for="">Email</label>         
          <input type="email" name="tel" placeholder="your mail" class="namee"> <br><br>
          <label for="">Phone</label>
           <input type="number" name="tph" placeholder="your phone" class="namee"> <br><br>
           <label for="">Reservation</label>
           <input type="number" name="tgst" placeholder="no. of person" class="namee"> <br><br>
           <label for="">Date</label>
           <input type="date" name="tserv" placeholder="date" class="namee"> <br><br>
  <label for="">From</label><input type="time" name="tof" placeholder="time" class="namee"> 
  <label for="">To</label> <input type="time" name="tto" placeholder="time" class="namee"> <br><br>
  <label for=""> Any requests</label><input type="text" name="tcomm" placeholder="your comment" class="namee"> <br><br>
   </div>
       <button type="submit" name="log" > Book Now</button>
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
   </form> 
   


      </div>

      </form>
</div>
</div>
</div>


</div>


</div>  <!--  bta3 el row -->



<!-- ////////////////talt row////////////////////////////////////////////// -->
<div class="row">
  <div  class="col-sm-3" id="loll"  >
  <figure> <img src="images/restaurant/meatmoot.jpg" width="250px" height="250px" alt="" ></figure>
<figcaption> <h1>Meat Moot</h1> Phone :1281305019<br> Location : Waslet Dahshur Rd, Fyves Mall Sheikh Zayed Giza <br> <br> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Book Now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <form action="" method="post" >
          
       <div class="ip">
        <label for="">FullName</label>
        <input type="text" name="tnm" placeholder="your name" class="namee"> <br> <br>
          <label for="">Email</label>         
          <input type="email" name="tel" placeholder="your mail" class="namee"> <br><br>
          <label for="">Phone</label>
           <input type="number" name="tph" placeholder="your phone" class="namee"> <br><br>
           <label for="">Reservation</label>
           <input type="number" name="tgst" placeholder="no. of person" class="namee"> <br><br>
           <label for="">Date</label>
           <input type="date" name="tserv" placeholder="date" class="namee"> <br><br>
  <label for="">From</label><input type="time" name="tof" placeholder="time" class="namee"> 
  <label for="">To</label> <input type="time" name="tto" placeholder="time" class="namee"> <br><br>
  <label for=""> Any requests</label><input type="text" name="tcomm" placeholder="your comment" class="namee"> <br><br>
       </div>
       <button type="submit" name="log" > Book Now</button>
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
   </form> 
   


      </div>

      </form>
</div>
</div>
</div>



</div>
<div  class="col-sm-3" id="loll"  >
<figure> <img src="images/restaurant/heartattack.png" width="250px" height="250px" alt="" ></figure>
<figcaption> <h1>Heart Attack </h1> Phone : 15428<br> Location : 83 tseaan.st maadi Cairo <br> <br> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Book Now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <form action="" method="post" >
         
       <div class="ip">
        <label for="">FullName</label>
        <input type="text" name="tnm" placeholder="your name" class="namee"> <br> <br>
          <label for="">Email</label>         
          <input type="email" name="tel" placeholder="your mail" class="namee"> <br><br>
          <label for="">Phone</label>
           <input type="number" name="tph" placeholder="your phone" class="namee"> <br><br>
           <label for="">Reservation</label>
           <input type="number" name="tgst" placeholder="no. of person" class="namee"> <br><br>
           <label for="">Date</label>
           <input type="date" name="tserv" placeholder="date" class="namee"> <br><br>
  <label for="">From</label><input type="time" name="tof" placeholder="time" class="namee"> 
  <label for="">To</label> <input type="time" name="tto" placeholder="time" class="namee"> <br><br>
  <label for=""> Any requests</label><input type="text" name="tcomm" placeholder="your comment" class="namee"> <br><br>
       </div>
       <button type="submit" name="log" > Book Now</button>
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
   </form> 
   


      </div>

      </form>
</div>
</div>
</div>


</div>
<div  class="col-sm-3" id="loll"  >
<figure> <img src="images/restaurant/Ama.jpg" width="250px" height="250px" alt="" ></figure>
<figcaption> <h1>AMA Sushi</h1> Phone : 01273839292<br> Location : Heliopolis (korba):
  40 St. Baghdad, Masr Elgdida<br> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Book Now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <form action="" method="post" >
         
       <div class="ip">
        <label for="">FullName</label>
        <input type="text" name="tnm" placeholder="your name" class="namee"> <br> <br>
          <label for="">Email</label>         
          <input type="email" name="tel" placeholder="your mail" class="namee"> <br><br>
          <label for="">Phone</label>
           <input type="number" name="tph" placeholder="your phone" class="namee"> <br><br>
           <label for="">Reservation</label>
           <input type="number" name="tgst" placeholder="no. of person" class="namee"> <br><br>
           <label for="">Date</label>
           <input type="date" name="tserv" placeholder="date" class="namee"> <br><br>
  <label for="">From</label><input type="time" name="tof" placeholder="time" class="namee"> 
  <label for="">To</label> <input type="time" name="tto" placeholder="time" class="namee"> <br><br>
  <label for=""> Any requests</label><input type="text" name="tcomm" placeholder="your comment" class="namee"> <br><br>
       </div>
       <button type="submit" name="log" > Book Now</button>
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
   </form> 
   


      </div>

      </form>
</div>
</div>
</div>


</div>


</div>  <!--  bta3 el row -->




<!-- ////////////////rab3 row////////////////////////////////////////////// -->


  <!--  bta3 el row --> <br>
<div class="row">
<div class="col-sm-12">










  <!-- Site footer -->
<footer class="site-footer" style="margin-bottom: 0;">
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



</div>

</div>

</div> <!-- bta3 el kbeer -->