<html>
    <body>
        <table border="1">
            <?php
            include ('../../BLL/userManager.php');
           $val=$_GET['id'];
        
      
           if(DeleteProfile($val)==true)
            
            
           { 
               
               header("admin.php");
           }
            else 
                echo "error deleting";
            ?> 
        </table>
    </body>
</html>
            
     
