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
     

    <title>cinema</title>
</head>
<body>
  
    

  <script type="text/javascript">
  
    
    const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
myInput.focus()
})
</script>
<div class="services">
  <div class="row">
  <div  class="col-sm-3" id="loll"  >
  <figure> <img src="images/restaurant.jpg" width="250px" height="250px" alt="" ></figure>
<figcaption> <h1>Restaurant</h1> phone : 01211979352<br> location : Al sabtiah.st Cairo <br> <br> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
book now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <form action="" method="post" id="book" >
       <div class="ip">
           <input type="text" name="cnm" placeholder="your name" class="namee"> <br> <br>
           <input type="email" name="cel" placeholder="your mail" class="namee"> <br><br>
           <input type="number" name="cph" placeholder="your phone" class="namee"> <br><br>
           <input type="number" name="cgst" placeholder="no. of person" class="namee"> <br><br>
           <input type="date" name="cserv" placeholder="date" class="namee"> <br><br>
  <label for="">From</label><input type="time" name="cof" placeholder="time" class="namee"> <label for="">To</label> <input type="time" name="cto" placeholder="time" class="namee"> <br><br>
           <input type="text" name="ccomm" placeholder="your comment" class="namee"> <br><br>
       </div>
       <button type="submit" name="book" > Book Now</button>
   </form> 
   
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


      </div>

      </form>
</div>
</div>
</div>



</div>
<div  class="col-sm-3" id="loll"  >
<figure> <img src="images/restaurant.jpg" width="250px" height="250px" alt="" ></figure>
<figcaption> <h1>Restaurant</h1> phone : 01211979352<br> location : Al sabtiah.st Cairo <br> <br> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
book now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <form action="" method="post" >
       <div class="ip">
           <input type="text" name="rnm" placeholder="your name" class="namee"> <br> <br>
           <input type="email" name="rel" placeholder="your mail" class="namee"> <br><br>
           <input type="number" name="rph" placeholder="your phone" class="namee"> <br><br>
           <input type="number" name="rgst" placeholder="no. of person" class="namee"> <br><br>
           <input type="date" name="rserv" placeholder="date" class="namee"> <br><br>
  <label for="">From</label><input type="time" name="rof" placeholder="time" class="namee"> <label for="">To</label> <input type="time" name="rto" placeholder="time" class="namee"> <br><br>
           <input type="text" name="rcomm" placeholder="your comment" class="namee"> <br><br>
       </div>
       <button type="submit" name="booknow" > Book Now</button>
   </form> 
   
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


      </div>

      </form>
</div>
</div>
</div>


</div>
<div  class="col-sm-3" id="loll"  >
<figure> <img src="images/restaurant.jpg" width="250px" height="250px" alt="" ></figure>
<figcaption> <h1>Restaurant</h1> phone : 01211979352<br> location : Al sabtiah.st Cairo <br> <br> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
book now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <style>
      .modal-dialog{
        background-color: gray;
      }
    </style>
    <div class="modal-content">
      <style>
        .modal-content{
          background-color: rgb(194, 194, 194);
        }
      </style>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">modal form</h5>
        <form action="" method="post" >
       <div class="ip">
         <style>
           .ip input{
             width: 270px;
             height: 38px;
             color: whitesmoke;
             text-align: center;
             background-color: transparent;
             border-radius: 6px;
            font-size: 20px;
            color: whitesmoke;
           }
         </style>
        <input type="text" name="rnm" placeholder="your name" class="namee"> <br> <br>
           <input type="email" name="rel" placeholder="your mail" class="namee"> <br><br>
           <input type="number" name="rph" placeholder="your phone" class="namee"> <br><br>
           <input type="number" name="rgst" placeholder="no. of person" class="namee"> <br><br>
           <input type="date" name="rserv" placeholder="date" class="namee"> <br><br>
  <br> <input type="time" name="rof" placeholder="time" class="namee"><input type="time" name="rto" placeholder="time" class="namee"> <br><br>
           <input type="text" name="rcomm" placeholder="your comment" class="namee"> <br><br>
       </div>
       <button type="submit" name="booknow" class="bttnn"  > Book Now</button>
   </form> 
   
   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


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
  <figure> <img src="images/restaurant.jpg" width="250px" height="250px" alt="" ></figure>
<figcaption> <h1>Restaurant</h1> phone : 01211979352<br> location : Al sabtiah.st Cairo <br> <br> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
book now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <form action="" method="post" >
       <div class="ip">
           <input type="text" name="rnm" placeholder="your name" class="namee"> <br> <br>
           <input type="email" name="rel" placeholder="your mail" class="namee"> <br><br>
           <input type="number" name="rph" placeholder="your phone" class="namee"> <br><br>
           <input type="number" name="rgst" placeholder="no. of person" class="namee"> <br><br>
           <input type="date" name="rserv" placeholder="date" class="namee"> <br><br>
  <label for="">From</label><input type="time" name="rof" placeholder="time" class="namee"> <label for="">To</label> <input type="time" name="rto" placeholder="time" class="namee"> <br><br>
           <input type="text" name="rcomm" placeholder="your comment" class="namee"> <br><br>
       </div>
       <button type="submit" name="booknow" > Book Now</button>
   </form> 
   
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


      </div>

      </form>
</div>
</div>
</div>



</div>
<div  class="col-sm-3" id="loll"  >
<figure> <img src="images/restaurant.jpg" width="250px" height="250px" alt="" ></figure>
<figcaption> <h1>Restaurant</h1> phone : 01211979352<br> location : Al sabtiah.st Cairo <br> <br> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
book now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <form action="" method="post" >
       <div class="ip">
           <input type="text" name="rnm" placeholder="your name" class="namee"> <br> <br>
           <input type="email" name="rel" placeholder="your mail" class="namee"> <br><br>
           <input type="number" name="rph" placeholder="your phone" class="namee"> <br><br>
           <input type="number" name="rgst" placeholder="no. of person" class="namee"> <br><br>
           <input type="date" name="rserv" placeholder="date" class="namee"> <br><br>
  <label for="">From</label><input type="time" name="rof" placeholder="time" class="namee"> <label for="">To</label> <input type="time" name="rto" placeholder="time" class="namee"> <br><br>
           <input type="text" name="rcomm" placeholder="your comment" class="namee"> <br><br>
       </div>
       <button type="submit" name="booknow" > Book Now</button>
   </form> 
   
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


      </div>

      </form>
</div>
</div>
</div>


</div>
<div  class="col-sm-3" id="loll"  >
<figure> <img src="images/restaurant.jpg" width="250px" height="250px" alt="" ></figure>
<figcaption> <h1>Restaurant</h1> phone : 01211979352<br> location : Al sabtiah.st Cairo <br> <br> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
book now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <form action="" method="post" >
       <div class="ip">
           <input type="text" name="rnm" placeholder="your name" class="namee"> <br> <br>
           <input type="email" name="rel" placeholder="your mail" class="namee"> <br><br>
           <input type="number" name="rph" placeholder="your phone" class="namee"> <br><br>
           <input type="number" name="rgst" placeholder="no. of person" class="namee"> <br><br>
           <input type="date" name="rserv" placeholder="date" class="namee"> <br><br>
  <label for="">From</label><input type="time" name="rof" placeholder="time" class="namee"> <label for="">To</label> <input type="time" name="rto" placeholder="time" class="namee"> <br><br>
           <input type="text" name="rcomm" placeholder="your comment" class="namee"> <br><br>
       </div>
       <button type="submit" name="booknow" > Book Now</button>
   </form> 
   
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


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
  <figure> <img src="images/restaurant.jpg" width="250px" height="250px" alt="" ></figure>
<figcaption> <h1>Restaurant</h1> phone : 01211979352<br> location : Al sabtiah.st Cairo <br> <br> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
book now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <form action="" method="post" >
       <div class="ip">
           <input type="text" name="rnm" placeholder="your name" class="namee"> <br> <br>
           <input type="email" name="rel" placeholder="your mail" class="namee"> <br><br>
           <input type="number" name="rph" placeholder="your phone" class="namee"> <br><br>
           <input type="number" name="rgst" placeholder="no. of person" class="namee"> <br><br>
           <input type="date" name="rserv" placeholder="date" class="namee"> <br><br>
  <label for="">From</label><input type="time" name="rof" placeholder="time" class="namee"> <label for="">To</label> <input type="time" name="rto" placeholder="time" class="namee"> <br><br>
           <input type="text" name="rcomm" placeholder="your comment" class="namee"> <br><br>
       </div>
       <button type="submit" name="booknow" > Book Now</button>
   </form> 
   
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


      </div>

      </form>
</div>
</div>
</div>



</div>
<div  class="col-sm-3" id="loll"  >
<figure> <img src="images/restaurant.jpg" width="250px" height="250px" alt="" ></figure>
<figcaption> <h1>Restaurant</h1> phone : 01211979352<br> location : Al sabtiah.st Cairo <br> <br> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
book now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <form action="" method="post" >
       <div class="ip">
           <input type="text" name="rnm" placeholder="your name" class="namee"> <br> <br>
           <input type="email" name="rel" placeholder="your mail" class="namee"> <br><br>
           <input type="number" name="rph" placeholder="your phone" class="namee"> <br><br>
           <input type="number" name="rgst" placeholder="no. of person" class="namee"> <br><br>
           <input type="date" name="rserv" placeholder="date" class="namee"> <br><br>
  <label for="">From</label><input type="time" name="rof" placeholder="time" class="namee"> <label for="">To</label> <input type="time" name="rto" placeholder="time" class="namee"> <br><br>
           <input type="text" name="rcomm" placeholder="your comment" class="namee"> <br><br>
       </div>
       <button type="submit" name="booknow" > Book Now</button>
   </form> 
   
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


      </div>

      </form>
</div>
</div>
</div>


</div>
<div  class="col-sm-3" id="loll"  >
<figure> <img src="images/restaurant.jpg" width="250px" height="250px" alt="" ></figure>
<figcaption> <h1>Restaurant</h1> phone : 01211979352<br> location : Al sabtiah.st Cairo <br> <br> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
book now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <form action="" method="post" >
       <div class="ip">
           <input type="text" name="rnm" placeholder="your name" class="namee"> <br> <br>
           <input type="email" name="rel" placeholder="your mail" class="namee"> <br><br>
           <input type="number" name="rph" placeholder="your phone" class="namee"> <br><br>
           <input type="number" name="rgst" placeholder="no. of person" class="namee"> <br><br>
           <input type="date" name="rserv" placeholder="date" class="namee"> <br><br>
  <label for="">From</label><input type="time" name="rof" placeholder="time" class="namee"> <label for="">To</label> <input type="time" name="rto" placeholder="time" class="namee"> <br><br>
           <input type="text" name="rcomm" placeholder="your comment" class="namee"> <br><br>
       </div>
       <button type="submit" name="booknow" > Book Now</button>
   </form> 
   
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


      </div>

      </form>
</div>
</div>
</div>


</div>


</div>  <!--  bta3 el row -->




<!-- ////////////////rab3 row////////////////////////////////////////////// -->
<div class="row">
  <div  class="col-sm-3" id="loll"  >
  <figure> <img src="images/restaurant.jpg" width="250px" height="250px" alt="" ></figure>
<figcaption> <h1>Restaurant</h1> phone : 01211979352<br> location : Al sabtiah.st Cairo <br> <br> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
book now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <form action="" method="post" >
       <div class="ip">
           <input type="text" name="rnm" placeholder="your name" class="namee"> <br> <br>
           <input type="email" name="rel" placeholder="your mail" class="namee"> <br><br>
           <input type="number" name="rph" placeholder="your phone" class="namee"> <br><br>
           <input type="number" name="rgst" placeholder="no. of person" class="namee"> <br><br>
           <input type="date" name="rserv" placeholder="date" class="namee"> <br><br>
  <label for="">From</label><input type="time" name="rof" placeholder="time" class="namee"> <label for="">To</label> <input type="time" name="rto" placeholder="time" class="namee"> <br><br>
           <input type="text" name="rcomm" placeholder="your comment" class="namee"> <br><br>
       </div>
       <button type="submit" name="booknow" > Book Now</button>
   </form> 
   
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


      </div>

      </form>
</div>
</div>
</div>



</div>
<div  class="col-sm-3" id="loll"  >
<figure> <img src="images/restaurant.jpg" width="250px" height="250px" alt="" ></figure>
<figcaption> <h1>Restaurant</h1> phone : 01211979352<br> location : Al sabtiah.st Cairo <br> <br> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
book now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <form action="" method="post" >
       <div class="ip">
           <input type="text" name="rnm" placeholder="your name" class="namee"> <br> <br>
           <input type="email" name="rel" placeholder="your mail" class="namee"> <br><br>
           <input type="number" name="rph" placeholder="your phone" class="namee"> <br><br>
           <input type="number" name="rgst" placeholder="no. of person" class="namee"> <br><br>
           <input type="date" name="rserv" placeholder="date" class="namee"> <br><br>
  <label for="">From</label><input type="time" name="rof" placeholder="time" class="namee"> <label for="">To</label> <input type="time" name="rto" placeholder="time" class="namee"> <br><br>
           <input type="text" name="rcomm" placeholder="your comment" class="namee"> <br><br>
       </div>
       <button type="submit" name="booknow" > Book Now</button>
   </form> 
   
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


      </div>

      </form>
</div>
</div>
</div>


</div>
<div  class="col-sm-3" id="loll"  >
<figure> <img src="images/restaurant.jpg" width="250px" height="250px" alt="" ></figure>
<figcaption> <h1>Restaurant</h1> phone : 01211979352<br> location : Al sabtiah.st Cairo <br> <br> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
book now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <form action="" method="post" >
       <div class="ip">
           <input type="text" name="rnm" placeholder="your name" class="namee"> <br> <br>
           <input type="email" name="rel" placeholder="your mail" class="namee"> <br><br>
           <input type="number" name="rph" placeholder="your phone" class="namee"> <br><br>
           <input type="number" name="rgst" placeholder="no. of person" class="namee"> <br><br>
           <input type="date" name="rserv" placeholder="date" class="namee"> <br><br>
  <label for="">From</label><input type="time" name="rof" placeholder="time" class="namee"> <label for="">To</label> <input type="time" name="rto" placeholder="time" class="namee"> <br><br>
           <input type="text" name="rcomm" placeholder="your comment" class="namee"> <br><br>
       </div>
       <button type="submit" name="booknow" > Book Now</button>
   </form> 
   
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


      </div>

      </form>
</div>
</div>
</div>


</div> 


</div>  <!--  bta3 el row --> <br>
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

