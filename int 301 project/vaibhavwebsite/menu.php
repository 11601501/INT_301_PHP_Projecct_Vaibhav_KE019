
<div class="pb-5">
<nav class="navbar navbar-expand navbar-light  header-part pb-3">
  <a class="navbar-brand" href="#">TRANQUIL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sevices">Services</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="#aboutus">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#contectus">Contact</a>
      </li>

    </ul>

        <?php 
                  
                  if(isset($_SESSION['userlogin'])){
                   
                    ?>
                   <div class="header-right text-right">
                          <i class="far fa-envelope"></i>
                          <i class="far fa-bell"></i>
                          <img src="images/lg4.png">
                          <?php 
                  
                          if(strcasecmp($_SESSION['user_type'], 'admin')==0){
                   
                          ?>
                          
                          <a type="button" href="admin.php"><label class="mr-3"><?php echo $_SESSION['username']; ?> </label></a>

                        <?php
                          }else{
                          ?>

                          <a type="button" href="profile.php"><label class="mr-3"><?php echo $_SESSION['username']; ?> </label></a>
                          <?php
                          }
                          ?>
                          <a type = "button"class="btn btn-outline-success" href="profile.php?logout=true">Log-out</a>

                     </div>
                    <?php
                  }
                  ?>
                <?php  
                   if(!isset($_SESSION['userlogin'])){ ?>

                         <a  type = "button"class="btn btn-outline-success" href="login.php">login</a>
                                                    
                     <?php  
                            }
                         ?> 
      
        </div>
    </nav>
</div>