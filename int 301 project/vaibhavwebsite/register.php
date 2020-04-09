
<!DOCTYPE html>
<html>
<head>
	<title>Register As Oranization Member</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
</head>
<body>
	<div class="container h-100">


		<div class="d-flex justify-content-center h-100">
        <div class="register_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="images/lg4.png" class="brand_logo" alt="Tranquil logo">
                </div>

             </div>

             <div class="d-flex justify-content-center form_container">

                   <form action="register.php" method="post">
					
						

							<div class="input-group mb-3 col-sm-12">
								<h2>Join Us</h2>
								<p>Enter the correct values into the given form :)</p>
								<hr class="mb-2">
							 <div class="input-group mb-2">
							 	<div class="input-group-append">
                                  <span class="input-group-text"><label for="firstname"><b>First Name</b></label></span>
                              </div>
							
							<input class="form-control input_user" id="firstname" type="text" name="firstname" required>
							</div>

							 <div class="input-group mb-2">
							<div class="input-group-append">
                                  <span class="input-group-text"><label for="firstname"><b>Last Name</b></label></span>
                              </div>
							<input class="form-control input_user" id="lastname" type="text" name="lastname" required>
							</div>

							 <div class="input-group mb-2">
							<div class="input-group-append">
                                  <span class="input-group-text"><label for="firstname"><b>E-Mail</b></label></span>
                              </div>
							<input class="form-control input_user " id="email" type="email" name="email" required>
							</div>

							 <div class="input-group mb-2">
							<div class="input-group-append">
                                  <span class="input-group-text"><label for="firstname"><b>Mobile No.</b></label></span>
                              </div>
							<input class="form-control input_user" id="mobile" type="text" name="mobile" required>
							</div>

							 <div class="input-group mb-2">
							<div class="input-group-append">
                                  <span class="input-group-text"><label for="firstname"><b>Password</b></label></span>
                              </div>
							<input class="form-control input_user" id="password" type="password" name="password" required>
							 </div>
							
								<div class="d-flex justify-content-center input-group login_container">
                                    
                                  
                                   <button type="button" name="create" id="register" class="btn login_btn">Sign Up</button>

                              	</div>
							 
						</div>
				
			

		</form>

             </div>

                 

        </div>

    </div>  

		

	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script type="text/javascript">
		$(function() {
			$('#register').click(function(e){

				var valid = this.form.checkValidity();
				if(valid){



				var firstname 		=$('#firstname').val();
				var lastname 		=$('#lastname').val();
				var email 			=$('#email').val();
				var mobile 			=$('#mobile').val();
				var password 		=$('#password').val();
				


					e.preventDefault();

					$.ajax({
						type: 'POST',
						url: 'process.php',
						data: {firstname: firstname,lastname: lastname,email: email,mobile: mobile,
							password: password},
						success: function(data){

							Swal.fire(
								'Successful',
				  				'Saved Successfully',
				  				'success'
								)
							if($.trim(data)==="1"){
                                setTimeout(' window.location.href = "login.php"',2000);
                              }

							

						},	
						error: function(data){
							Swal.fire({
								  icon: 'error',
								  title: 'Oops...',
								  text: 'Something went wrong!',
								  footer: 'Please Try Again Later'
								})
							
						}
					});
					
				}
				else{
					
				}


				

				});

			

			
			});
		
	</script>
</body>
</html>