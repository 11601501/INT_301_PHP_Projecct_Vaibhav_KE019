<?php 
    session_start();
    
    if(!isset($_SESSION['userlogin'])){
      header("Location: login.php");
    }

    if(isset($_GET['logout'])){
    	session_destroy();
    	unset($_SESSION);
    	header("location: login.php");
    }

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard Design</title>
				<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
				 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
			  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
			  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
				<link rel="stylesheet" type="text/css" href="style.css">
				<link rel="stylesheet" type="text/css" href="css/profilestyle.css">
</head>
<body>

  <?php include 'menu.php';
        
  ?>
	<div class="container-fluid">
		<div class="row">
			<div class="sidebar">
				<ul class="main-menu">
					<li class="active"><a href="profile.php"><i class="fas fa-tasks"></i> Profile Update</a></li>
						
				</ul>
			</div>
			<div class="col-lg-9 content-main">
				<div class="content ">
					<?php include 'update.php' ?>
					<form action="" method="POST" class="mx-5">
						<div class="form-group">
							<label for="remail">User-Name</label><input type="email" name="remail" 
							class="form-control" id="remail" value="<?php echo $_SESSION["username"]?>" readonly>
							
						</div>
						
						<div class="form-group">
							
							<label for="fname">FirstName</label><input type="text" name="fname" value="<?php echo $_SESSION["firstname"]?>" 
							class="form-control" id="fname">

							<label for="lname">LastName</label><input type="text" name="lname" value="<?php echo $_SESSION["lastname"]?>" 
							class="form-control" id="lname">

							<label for="mobile">Contact Number</label><input type="text" name="mobile" value="<?php echo $_SESSION["mobilenumber"]?>" 
							class="form-control" id="mobile">
							
						</div>

						<button type="submit" class="btn btn-danger" name="update" >Update</button>

						<?php if(isset($umsg)){
							echo $umsg;
						} ?>

					</form>

					
				</div>
			</div>
		</div>
	</div>
	<script >
		

		$(".main-sub-menu").on("click",function(){

				$(".sub-menu").css({"display":"none"});

				$('.main-sub-menu').find(".fa-angle-right").css({"transform":"rotate(0deg)"});
				
				$(this).find("ul").slideToggle();
				
				$(".main-menu .main-sub-menu").removeClass("active");
				
				$(this).addClass("active");
				
				$(this).find(".fa-angle-right").css({"transform":"rotate(90deg)"});

		});

		
	</script>
</body>
</html>

