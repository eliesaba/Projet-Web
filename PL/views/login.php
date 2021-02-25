<!DOCTYPE html>
<html lang="en">
        
   
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>HR</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/color-switcher.css">
    <link rel="stylesheet" href="css/menu_sideslide.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/signup.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    
<script>
             $(document).ready(function(){
                 
                         
                    $("#Email").keyup(function(){              
                 var numericExpression = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                  
                  if(!numericExpression.test($("#Email").val())){
                       $("#email").removeClass("error_hide").addClass("error");
                       event.preventDefault();
                  }
                
                    if(numericExpression.test($("#Email").val())){
                       $("#email").removeClass("error").addClass("error_hide");
                       
                  } 
                
                   
                });
                     
    
                    
                $("#Password").keyup(function(){
                   var pass=$("#Password").val();
                    if(pass.length<8 || /^[a-zA-Z0-9]*$/.test(pass)){
                        $("#password").removeClass("error_hide").addClass("error");
                        event.preventDefault();
                    }
                    
                    else{
                         $("#password").removeClass("error").addClass("error_hide");
                    }              
                });
    
                  
                    
                
                      
    
    
    });
                  
    
        </script>
    
    
    
    
   </head>
   
   <body>
         <header id="slider-area">  
      <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-white">
        <div class="container">          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                  <a class="nav-link page-scroll" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link page-scroll" href="ministries.php">Ministries</a>
              </li>  
              <li class="nav-item">
                  <a class="nav-link page-scroll" href="vacancies.php">Vacancies</a>
              </li>                           
            </ul>              
          </div>
          
          
        </div>
      </nav> 

      <!-- Main Carousel Section -->

              
        </header> 
       
       
       
        <div class="page-wrapper bg-defult p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Account Login(Citizen or HR Employee)</h2>
                    
                </div>
                <div class="card-body">
                    <form method="POST" action="loginValidation.php">
                      
                        <div class="form-row">
                            <div class="name">Email Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="email" id="Email" name="Emaill" placeholder="example@email.com">
                                    <span class="error" id="email">Email is required</span>
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <input class="input--style-6" type="password" id="Password" name="Passwordd">
                                <span class="error" id="password">Password is required</span>
                            </div>
                        </div>
                       
                          
                    
                      
                         <div class="card-footer">
                               <span class="name" style="color: #000; position: absolute">remember me</span>
                               <input type="checkbox" name="remember" id="remember">
                               
                               <br><br>
                            <button class="btn btn--radius-2 btn--blue-2" type="submit">Login</button>
                            <a class="btn btn--radius-2 btn--blue-2" href="register.php">Register</a>
                         </div>
                        
                        
                                 
                    </form>
                </div>
               
            </div>
        </div>
    </div>
       
       
       
       
       
       
       
       
       
       
       
       
       
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="../script/js/jquery-min.js"></script>
    <script src="../script/js/popper.min.js"></script>
    <script src="../script/js/bootstrap.min.js"></script>
    <script src="../script/js/classie.js"></script>
    <script src="../script/js/jquery.mixitup.js"></script>
    <script src="../script/js/nivo-lightbox.js"></script>
    <script src="../script/js/owl.carousel.js"></script>    
    <script src="../script/js/jquery.stellar.min.js"></script>    
    <script src="../script/js/jquery.nav.js"></script>    
    <script src="../script/js/scrolling-nav.js"></script>    
    <script src="../script/js/jquery.easing.min.js"></script>     
    <script src="../script/js/wow.js"></script> 
    <script src="../script/js/jquery.vide.js"></script>
    <script src="../script/js/jquery.counterup.min.js"></script>    
    <script src="../script/js/jquery.magnific-popup.min.js"></script>    
    <script src="../script/js/waypoints.min.js"></script>    
    <script src="../script/js/form-validator.min.js"></script>
    <script src="../script/js/contact-form-script.js"></script>   
    <script src="../script/js/main.js"></script>
    <script ssrc="../script/js/signup.js"></script>
   
    
    
    
  </body>
</html>   