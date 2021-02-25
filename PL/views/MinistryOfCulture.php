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
    <link rel="stylesheet" href="css/w3.css">
    <script src="../script/js/jquery-min.js"></script>
    <script src="../script/js/ddtf.js"></script>
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
                  <a class="nav-link page-scroll" href="vacancies.php">Vacancies</a>
              </li> 
              <li class="nav-item">
                  <a class="nav-link page-scroll" href="Employee.php">Employees</a>
              </li> 
            </ul>              
          </div>
          
          <a class="btn-common2 btn-effect wow fadeInUp" data-wow-delay="0.5s" href="login.php">Login</a>
          
        </div>
      </nav> 


                
    <section class="call-action section">
    <div class="container">
    <div class="section-header" >        
          <h2 class="section-title">Ministry Of Culture</h2>
        </div>
      </div>
   </section>  
                
                
                

               <div class="container">
                
 <table id="mytable" class="w3-table-all">
     <?php
require_once '../../BLL/UserManager.php'; 


$profile=GetMinistry("MinistryOfCulture");
$numberemp=GetMinistrynumberemp("MinistryOfCulture");
$numberempp=strval($numberemp);   
$name=$profile->getname();
$location=$profile->getlocation();
$minister=$profile->getminister();
echo            

                    "<tr>"
                        ."<th>"."Name Of Ministry"."</th>"
                        ."<th>"."Location"."</th>"
                        ."<th>"."Minister"."</th>"
                        ."<th>"."Number of Employees"."</th>"
                    ."</tr>";
 
               echo
                                      
                        "<tr>"
                            ."<td>".$name."</td>"
                            ."<td>".$location."</td>"
                            ."<td>".$minister."</td>"
                            ."<td>".$numberempp."</td>"
                        ."</tr>";    
                

?>

    </table>
    </div> 
                
                
                
                                    
                    <img src="img/ministries/MOC.png"  alt="">                               
            </header>
           
    </body>
</html>