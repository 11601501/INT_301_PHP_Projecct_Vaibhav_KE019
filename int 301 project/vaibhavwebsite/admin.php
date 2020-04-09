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

    include_once('databaseconfig.php');

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard Design</title>
				<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
				 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
					<li class="active"><a href="#"><i class="fas fa-tasks"></i> Admin Panel</a></li>
					<li class="main-sub-menu"><a id="profile_home"><i class="fas fa-home"></i>Tables_Avaliable<i class="fas fa-angle-right"></i></a>
						<ul class="sub-menu">
							<?php
							$table_result=mysqli_query($con,"SHOW TABLES");
							while($rows=mysqli_fetch_row($table_result)) { ?>
							

							<li><a href= "<?php echo "#".$rows[0]; ?>" >

								<?php echo $rows[0]; ?>
									
								</a></li>
							<?php } ?>
						</ul>
					</li>
					
				</ul>
			</div>
			<div class="col-lg-9 content-main container-fluid">

			<div class="container-fluid">
				<div class="jumbotron">
				  <h3>Admin Database Management Syatem : TRANQUIL</h3>
				  <p> To Drop any Data Enter ID and Table Name Carefuly</p>
				  
					
				
				

				 <form action="admin.php" method="post" class="form-inline">
				 	
					  	<div class="row">
					  	<div class="form-group mb-2">
						  <label for="id" class="ml-4">Record ID</label>
						  <input type="text" id="id" name="id" class="form-control ml-5"><br><br>
						  </div>
						  <div class="form-group mb-2">
							<select id="name" name="name" class="form-control pl-5 ml-5">
						      <option value="userinfodata">userinfodata</option>
						      <option value="registerationdata">registerationdata</option>
						     
						    </select>
						  </div>
						  <div class="form-group mb-2 ml-5">
						  <button type="submit" name="drop" id="drop" class="btn btn-primary">Delete </button>
						  </div>
						 </div>
						 
						</form>

					</div>
					</div>

				<section class="my-4"id="userinfodata">
					<?php 
						$query="SELECT * FROM userinfodata";
						$result=mysqli_query($con, $query);
					 ?>
						  <div class="py-5">
						    <h2 class="text-center" >Contact_us Form Data</h2>
						    
						  </div>
								  <div>
								  	 <table align="center" border="1px" style="width:100%; line-height: 30px; ">
										  <tr>
										    <th>USERINFODATA</th>
										  </tr>
										  <tr>
										    <th>ID</th>
										    <th>USER</th>
										    <th>EMAIL</th>
										    <th>MOBILE</th>
										    <th>COMMENT</th>
										    
										  </tr>
									 <?php  
										  while($rows=mysqli_fetch_assoc($result)) { ?>
										  			<tr>
														    <th><?php echo $rows['id']; ?></th>
														    <th><?php echo $rows['user']; ?></th>
														    <th><?php echo $rows['email']; ?></th>
														    <th><?php echo $rows['mobile']; ?></th>
														    <th><?php echo $rows['comment']; ?></th>
														    
														    
										 			 </tr>

										  			
										  <?php		
												}

										  ?>
										  
										</table> 

								  </div>
				</section>


				<section class="my-4" id="registerationdata">
					<?php 
						$query="SELECT * FROM registerationdata";
						$result=mysqli_query($con, $query);
					 ?>
						  <div class="py-5">
						    <h2 class="text-center" >Registered User Data</h2>
						  </div>

						   <div>
								  	 <table align="center" border="1px" style="width:100%; line-height: 30px; ">
										  <tr>
										    <th>REGISTERATIONDATA</th>
										  </tr>
										  <tr>
										    <th>ID</th>
										    <th>First Name</th>
										    <th>Last Name</th>
										    <th>Email</th>
										    <th>Mobile Number</th>
										    
										  </tr>
									 <?php  
										  while($rows=mysqli_fetch_assoc($result)) { ?>
										  			<tr>
														    <th><?php echo $rows['id']; ?></th>
														    <th><?php echo $rows['firstname']; ?></th>
														    <th><?php echo $rows['lastname']; ?></th>
														    <th><?php echo $rows['email']; ?></th>
														    <th><?php echo $rows['mobilenumber']; ?></th>
														    
														    
										 			 </tr>

										  			
										  <?php		
												}

										  ?>
										  
										</table> 

								  </div>
				</section>


				
					
				</div>
			</div>
		</div>
	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
		
	$(function(){
		$(".main-sub-menu").on("click",function(){

				$(".sub-menu").css({"display":"none"});

				$('.main-sub-menu').find(".fa-angle-right").css({"transform":"rotate(0deg)"});
				
				$(this).find("ul").slideToggle();
				
				$(".main-menu .main-sub-menu").removeClass("active");
				
				$(this).addClass("active");
				
				$(this).find(".fa-angle-right").css({"transform":"rotate(90deg)"});

		});
			$('#drop').click(function(e){

				e.preventDefault();
				var id = $('#id').val();
				var name = $('#name').val();
				$.ajax({
					type:'POST',
					url: 'dropprocess.php',
					data:{id:id,name:name},
					success:function(data){

							Swal.fire({
									  title: 'Are you sure?',
									  text: "You won't be able to revert this!",
									  icon: 'warning',
									  showCancelButton: true,
									  confirmButtonColor: '#3085d6',
									  cancelButtonColor: '#d33',
									  confirmButtonText: 'Yes, delete it!'
									}).then((result) => {
									  if (result.value) {
									    Swal.fire(
									      'Deleted!',
									      'Your Data has been deleted.',
									      'success'
									    )
									    if($.trim(data)==="1"){
				                                setTimeout(' window.location.href = "admin.php"',2000);
				                              }

									  }
									})
							
					},
					error:function(data){

						Swal.fire({
								  icon: 'error',
								  title: 'Oops...',
								  text: 'Something went wrong!',
								  footer: 'Please Try Again Later'
								})

					},
				});

						

			});

			
							
	});


		
	</script>

</body>
</html>