<!DOCTYPE html>
<html>
<head>
	<title></title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200&display=swap" rel="stylesheet">  
  </head>


<body>


  <?php 
  session_start();
  include 'menu.php';
        
  ?>



<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/tp1.jpg" alt="achiever1" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Tranquil</h3>
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/tp2.jpg" alt="achiever2" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Achieve</h3>
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/tp3.jpg" alt="achiever3" width="1100" height="500">
      <div class="carousel-caption">
        <h3>It Here</h3>
        
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5" id="aboutus">
  <div class="py-5">
    <h2 class="text-center"> About Us</h2>

  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">

        <img src="images/cc3.jpg" class="img-fluid aboutimg">
      
    </div>

    <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-5">Student Organization TRANQUIL</h2> 
        <p class="py-3">
          WE ENSURE BETTER EDUCATION FOR A BETTER WORLD

          Focusing primarily in the field of Education, Society and Entertainment.
          WE ENSURE BETTER EDUCATION FOR A BETTER WORLD

          Focusing primarily in the field of Education, Society and Entertainment.
          WE ENSURE BETTER EDUCATION FOR A BETTER WORLD

          
        </p>            
        <a href="about.php" class="btn btn-outline-success">Check more</a>
    </div>
    
  </div>
  </div>
</section>


<section class="my-5"id="sevices">
  <div class="py-5">
    <h2 class="text-center" > Our Services</h2>
  </div>

  <div class="container-fluid">

    <div class="row">

      
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
  <img class="card-img-top" src="images/c1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Event Management</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See More</a>
  </div>
</div>


        
      </div>


      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
  <img class="card-img-top" src="images/c2.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Professional Enhancement</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See More</a>
  </div>
</div>


        
      </div>


      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
  <img class="card-img-top" src="images/c3.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Opertunity</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See More</a>
  </div>
</div>


        
      </div>
      
    </div>

    
  </div>
    


    </section>



<section class="my-5" >
  <div class="py-5">
    <h2 class="text-center"> Our Galary</h2>
  </div>

    <div class="container-fluid">
        <div class="row">

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/cc3.jpg" class="img-fluid pb-4">
            
          </div>
          
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/cc2.jpg" class="img-fluid pb-4">
            
          </div>
          
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/cc1.jpg" class="img-fluid pb-4">
            
          </div>
          
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/cc1.jpg" class="img-fluid pb-4">
            
          </div>
          
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/cc3.jpg" class="img-fluid pb-4">
            
          </div>
          
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/cc2.jpg" class="img-fluid pb-4">
            
          </div>
          

        </div>
      
    </div>
</section>


<section class="my-5" id="contectus">
  <div class="py-5">
    <h2 class="text-center"> Contact Us</h2>
  </div>

  <div class="w-50 m-auto ">
      <form action="userinfo.php" method="post">
        <div class="form-group">
              <label>Username</label>
              <input type="text" name="user" autocomplete="off" class="form-control">
          
        </div>

         <div class="form-group">
              <label>Email Id</label>
              <input type="text" name="email" autocomplete="off" class="form-control">
          
        </div>

         <div class="form-group">
              <label>Mobile Number</label>
              <input type="text" name="mobile" autocomplete="off" class="form-control">
          
        </div>
        
          <div class="form-group">
              <label>Comments</label>
             <textarea class="form-control" name="comments"></textarea>
          
        </div>


        <button type="submit" class="btn btn-success">Submit</button>

      </form>

  </div>


</section>


<?php include 'footer.php' ?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>