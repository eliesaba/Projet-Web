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
                 
                     $("#First_Name").keyup(function(){
                   if($("#First_Name").val().length>2){
                         $("#fname").removeClass("error").addClass("error_hide");
                         
                     }
                     
                      if($("#First_Name").val().length<2){
                         $("#fname").removeClass("error_hide").addClass("error");
                         event.preventDefault()
                     }
                   
                });
                
                $("#Last_Name").keyup(function(){
                   if($("#Last_Name").val().length>2){
                         $("#lname").removeClass("error").addClass("error_hide");
                         
                     }
                     
                      if($("#Last_Name").val().length<2){
                         $("#lname").removeClass("error_hide").addClass("error");
                         event.preventDefault()
                     }
                   
                });
                
                $("input[name='genderr']"). click(function(){
                
                     if ($("input[name='genderr']:checked").val()){
                         $("#gender").removeClass("error").addClass("error_hide");
                     } 
          
                     if (!$("input[name='genderr']:checked").val()){
                         $("#gender").removeClass("error_hide").addClass("error");
                         event.preventDefault()
                     }  
                    
                });
                         
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
    
                  
                     $("#CPassword").keyup(function(){
                         var pass=$("#Password").val();
                         if(pass!=($("#CPassword").val())){
                        $("#cpassword").removeClass("error_hide").addClass("error");
                        event.preventDefault();
                        }
                        
                        else{
                             $("#cpassword").removeClass("error").addClass("error_hide");
                             
                        }
            
                });
                
                       $("#Message").keyup(function(){
                   if($("#Message").val().length>2){
                         $("#message").removeClass("error").addClass("error_hide");
                         
                     }
                     
                      if($("#Message").val().length<2){
                         $("#message").removeClass("error_hide").addClass("error");
                         event.preventDefault()
                     }
                   
                });
    
    
    });
                  
    
        </script>
    
    

        
        
        
        
    
    
    
    
    
  </head>
  
  <body>
    <!-- Header Section Start -->
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
                    <h2 class="title">Fill The Application(For Citizen)</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="registerValidation.php" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="name">First Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" id="First_Name" name="First_Namee">
                                <span class="error" id="fname">First Name is required</span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Last Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" id="Last_Name" name="Last_Namee">
                                <span class="error" id="lname">Last Name is required</span>
                            </div>
                            
                        </div>
                         <div class="form-row">
                            <div class="name">Gender</div>
                            <div class="value">
                                <span style="margin-left: 50px">Male</span><input type="radio" name="genderr" id="GENDER" value="male" style="width: 15px;margin-left: 60px" >
                                <span style="margin-left: 100px">Female</span><input type="radio" name="genderr" id ="GENDER" value="female" style="width: 15px;margin-left: 60px" >    
                                <span class="error" id="gender">Gender is required</span>
                            </div>
                            
                        </div>
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
                        <div class="form-row">
                            <div class="name">Confirm Password</div>
                            <div class="value">
                                <input class="input--style-6" type="password" id="CPassword" name="CPasswordd">
                                <span class="error" id="cpassword">Password not match</span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Message</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" id="Message" name="Messagee" placeholder="Message sent to the employer"></textarea>
                                    <span class="error" id="message">Please fill the message</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload CV</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input type="file" name="file" id="filee"/>
                                    <label class="label--file" for="filee">Choose file</label>
                                    
                                </div>
                                <div class="label--desc">Upload your CV/Resume or any other relevant file. Max file size 50 MB</div>
                            </div>
                        </div>
                        
                        
                        
                         <div class="card-footer">
                             <button class="btn btn--radius-2 btn--blue-2" value="submit" type="submit">Send Application</button>
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
    <script src="../script/js/signup.js"></script>
   
    
    
    
  </body>
</html>