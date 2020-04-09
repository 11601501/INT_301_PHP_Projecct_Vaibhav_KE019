<?php 
    session_start();
    if(isset($_SESSION['userlogin'])){
      header("location: profile.php");
    }

 ?>
<!DOCTYPE html>
<html>
<head>
  <title> Tranquil login Portal</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/fc4a188b65.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
</head>
<body>
         <?php include 'menu.php';?>
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="images/lg4.png" class="brand_logo" alt="Tranquil logo">
                </div>

             </div>

             <div class="d-flex justify-content-center form_container">
                    <form>
                          <div class="input-group mb-3">
                              <div class="input-group-append">
                                  <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                              </div>

                              <input type="text" name="username" id="username" class="form-control input_user" required>

                          </div>

                           <div class="input-group mb-2">
                              <div class="input-group-append">
                                  <span class="input-group-text"><i class="fas fa-key"></i></span>
                              </div>

                              <input type="password" name="password" id="password" class="form-control input_pass" required>

                          </div>

                          <div class="form-group">
                              <div class="custom-control custom-checkbox">
                                  <input type="checkbox" name="rememberme" class="custom-control-input" 
                                  id="customControlInline">
                                  <label class="custom-control-label" for="customControlInline" >Remember me</label>

                              </div>
                          </div>


                              <div class="d-flex justify-content-center mt-3 login_container">
                                     <button type="button" name="button" id="login" class="btn login_btn">Login</button>

                              </div>

                    </form>

             </div>

                 

                    <div class="mt-4">

                        <div class="d-flex justify-content-center links">
                          
                              Don't Have an Account ? <a href="register.php" class="ml-2">Register Now</a>
                        </div>

                        <div class="d-flex justify-content-center">
                            <a href="#">Forget Your Password ?</a>
                        </div>
                      
                    </div>

        </div>

    </div>  

</div>
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    $(function(){
        $('#login').click(function(e){
              var valid = this.form.checkValidity();
          if(valid){

                var username     =$('#username').val();
                var password    =$('#password').val();

              }

              e.preventDefault();

              $.ajax({
                            type: 'POST',
                            url: 'checklogin.php',
                            data: {username: username,password: password},
                            success: function(data){
                              
                              if($.trim(data)==="1"){
                                            let timerInterval
                                            Swal.fire({
                                              title: 'Welcome',
                                              html: 'You Successfuly Loged in as User',
                                              timer: 2000,
                                              timerProgressBar: true,
                                              onBeforeOpen: () => {
                                                Swal.showLoading()
                                                timerInterval = setInterval(() => {
                                                  const content = Swal.getContent()
                                                  if (content) {
                                                    const b = content.querySelector('b')
                                                    if (b) {
                                                      b.textContent = Swal.getTimerLeft()
                                                    }
                                                  }
                                                }, 100)
                                              },
                                              onClose: () => {
                                                clearInterval(timerInterval)
                                              }
                                            }).then((result) => {
                                              /* Read more about handling dismissals below */
                                              if (result.dismiss === Swal.DismissReason.timer) {
                                                console.log('I was closed by the timer')
                                              }
                                            })
                                setTimeout(' window.location.href = "profile.php"',2000);
                              }


                             if($.trim(data)==="2"){

                                let timerInterval
                                            Swal.fire({
                                              title: 'Welcome',
                                              html: 'You Successfuly Loged in as Admin',
                                              timer: 2000,
                                              timerProgressBar: true,
                                              onBeforeOpen: () => {
                                                Swal.showLoading()
                                                timerInterval = setInterval(() => {
                                                  const content = Swal.getContent()
                                                  if (content) {
                                                    const b = content.querySelector('b')
                                                    if (b) {
                                                      b.textContent = Swal.getTimerLeft()
                                                    }
                                                  }
                                                }, 100)
                                              },
                                              onClose: () => {
                                                clearInterval(timerInterval)
                                              }
                                            }).then((result) => {
                                              /* Read more about handling dismissals below */
                                              if (result.dismiss === Swal.DismissReason.timer) {
                                                console.log('I was closed by the timer')
                                              }
                                            })
                              
                                setTimeout(' window.location.href = "admin.php"',2000);
                              }
                            },  
                            error: function(data){
                             alert('error');
                            }
                    });

                });
         });
</script>

</body>
</html>