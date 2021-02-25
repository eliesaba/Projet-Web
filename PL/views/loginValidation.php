   <?php
        
        include '../../BLL/UserManager.php'; 
        
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
        
               
                $email=$_POST["Emaill"];
                $password=$_POST["Passwordd"];
                $remember=$_POST["remember"];
                $profile=new ProfileDTORequest1();
                $profile->setemail($email);        
                $profile->setpassword($password);   
                $profile->setRemember($remember);
                Getwhichuser($profile);
                
    
                
                
            }
            
        
   
        ?>