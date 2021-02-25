   <?php
        
        include '../../BLL/UserManager.php';
        require_once '../../DTO/ProfileDTORequest.php';
        
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
        
                $title=$_POST["Titlee"];
                $ministry=$_POST["Ministryy"];
                $profile=new ProfileDTORequest();
                $profile->setTitle($title);
                $profile->setMinistry($ministry);  
    
            InsertVacancie($profile);
                
    
                
                
            }
            
        
   
        ?>