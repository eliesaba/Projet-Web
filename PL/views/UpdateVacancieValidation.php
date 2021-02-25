   <?php
        
        include '../../BLL/UserManager.php';
        require_once '../../DTO/ProfileDTORequest.php';
        require_once '../../DTO/ProfileDTORequest2.php';
        
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
        
                $title=$_POST["Titlee"];
                $ministry=$_POST["Ministryy"];
                $id = $_GET["id"];
                $profile=new ProfileDTORequest2();
                $profile->setId($id);
                $profile->setTitle($title);
                $profile->setMinistry($ministry);  
    
            UpdateVacancie($profile);
                
    
                
                
            }
            
        
   
        ?>