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
                         $("#firstname").removeClass("error").addClass("error_hide");
                         
                     }
                     
                      if($("#First_Name").val().length<2){
                         $("#firstname").removeClass("error_hide").addClass("error");
                         event.preventDefault()
                     }
                   
                });
                
                $("#Last_Name").keyup(function(){
                   if($("#Last_Name").val().length>2){
                         $("#lastname").removeClass("error").addClass("error_hide");
                         
                     }
                     
                      if($("#Last_Name").val().length<2){
                         $("#lastname").removeClass("error_hide").addClass("error");
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
                     
    
                    
                $("#Telephone").keyup(function(){
                   if($("#Telephone").val()>0){
                         $("#telephone").removeClass("error").addClass("error_hide");
                         
                     }
                     
                      else{
                         $("#telephone").removeClass("error_hide").addClass("error");
                         event.preventDefault()
                     }
                               
                });
    
                  
                    $("#JobTitle").keyup(function(){
                        
                    if($("#JobTitle").val().length>2){
                         $("#jobtitle").removeClass("error").addClass("error_hide");
                         
                     }
                    if($("#JobTitle").val().length<2){
                         $("#jobtitle").removeClass("error_hide").addClass("error");
                         event.preventDefault();
                     }
                   
                          
                 });
                 
                 
                 $("#Ministry").keyup(function(){
                        
                    if($("#Ministry").val().length>2){
                         $("#ministry").removeClass("error").addClass("error_hide");
                         
                     }
                    if($("#Ministry").val().length<2){
                         $("#ministry").removeClass("error_hide").addClass("error");
                         event.preventDefault();
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
          <a class="navbar-brand" href="admin.php"><span class="lni-bulb"></span>Admin</a>
          
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="admin.php">back</a>
              </li>           
             
            </ul>              
          </div>
          
          <a class="btn-common2 btn-effect wow fadeInUp" data-wow-delay="0.5s" href="index.php">Sign out Admin</a>
          
          
          
        </div>
      </nav> 
    </header>
    
    
     <div class="page-wrapper bg-defult p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Fill New Employee</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="InsertEmployeeValidation.php">
                        <div class="form-row">
                            <div class="name">First Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" id="First_Name" name="First_Namee">
                                <span class="error" id="firstname">First Name is required</span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Last Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" id="Last_Name" name="Last_Namee">
                                <span class="error" id="lastname">Last Name is required</span>
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
                            <div class="name">Telephone</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" id="Telephone" name="Telephonee">
                                    <span class="error" id="telephone">Telephone is required</span>
                                </div>                           
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="name">Job Title</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" id="JobTitle" name="jobtitlee">
                                    <span class="error" id="jobtitle">Job Title is required</span>
                                </div>                           
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Ministry</div>
                            <div class="value">
                                <input class="input--style-6" type="text" id="Ministry" name="Ministryy">
                                <span class="error" id="ministry">Ministry is required</span>
                            </div>             
                        </div>
                        
                        
                        
                        
                        
                      
                <div class="card-footer">
                             <button class="btn btn--radius-2 btn--blue-2" value="submit" type="submit">Add</button>
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