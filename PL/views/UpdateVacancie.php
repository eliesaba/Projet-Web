<!DOCTYPE html>
<html lang="en">
  <head>
      
      
      <?php
        if($_GET['id']){
        require_once ('../../BLL/UserManager.php');
          
      $profile = GetProfile($_GET['id']);
      $title = $profile->getTitle();
      $ministry = $profile->getMinistry();
      

    }
 else {
     echo ("No Data is Found");
 }
 
      ?>
      
      
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
               
                    $("#Title").keyup(function(){
                        
                    if($("#Title").val().length>2){
                         $("#title").removeClass("error").addClass("error_hide");
                         
                     }
                    if($("#Title").val().length<2){
                         $("#title").removeClass("error_hide").addClass("error");
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
                    <h2 class="title">Update The Vacancie</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action='UpdateVacancieValidation.php?id=<?php echo $_GET["id"]?>'>
                        <div class="form-row">
                            <div class="name">New Title</div>
                            <div class="value">
                                <input class="input--style-6" type="text" id="Title" name="Titlee">
                                <span class="error" id="title">Title is required</span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">New Ministry</div>
                            <div class="value">
                                <input class="input--style-6" type="text" id="Ministry" name="Ministryy">
                                <span class="error" id="ministry">Ministry is required</span>
                            </div>             
                        </div>
                      
                <div class="card-footer">
                             <button class="btn btn--radius-2 btn--blue-2" value="submit" type="submit">Update</button>
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