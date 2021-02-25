   <?php
        
        include '../../BLL/UserManager.php';
        require_once '../../DTO/ProfileDTORequest3.php';
        
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
        
                $firstname=$_POST["First_Namee"];
                $lastname=$_POST["Last_Namee"];
                $gender=$_POST["genderr"];
                $email=$_POST["Emaill"];
                $telephone=$_POST["Telephonee"];
                $jobtitle=$_POST["jobtitlee"];
                $ministry=$_POST["Ministryy"];
                $profile=new ProfileDTORequest3();
                $profile->setFirstName($firstname);
                $profile->setLastName($lastname);
                $profile->setGender($gender);
                $profile->setEmail($email);
                $profile->setTelephone($telephone);
                $profile->setJobTitle($jobtitle);
                $profile->setMinistry($ministry);
    
            InsertEmployee($profile);
                
    
                
                
            }
            
        
   
        ?>