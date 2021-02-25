   <?php
        
        include '../../BLL/UserManager.php';
      
        
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
        
                $fname=$_POST["First_Namee"];
                $lname=$_POST["Last_Namee"];
                $gender=$_POST["genderr"];
                $email=$_POST["Emaill"];
                $password=$_POST["Passwordd"];
                $cpassword=$_POST["CPasswordd"];
                $message=$_POST["Messagee"];
                
                 
                  $name       = $_FILES['file']['name'];  
                  $temp_name  = $_FILES['file']['tmp_name'];  
                if(isset($name))
                {
                     if(!empty($name))
                     {      
                     $location = '../../PL/views/img/tester'; 
                     move_uploaded_file($temp_name, $location.'/'.$name);
                     }       
                }
                
                else 
                {
                    echo 'You should select a file to upload !!';
                }
                
                
                if(!validateSignUp ($fname,$lname,$gender,$email,$password,$cpassword,$message))
                {
               echo "<script type='text/javascript'> 
                    alert('Wrong/Missing Values');
                    </script>";
                }
                else{
                $profile=new ProfileDTORequest1();
                $profile->setfname($fname);
                $profile->setlname($lname);
                $profile->setgender($gender);
                $profile->setemail($email);
                $profile->setpassword($password);
                $profile->setcpassword($cpassword);
                $profile->setmessage($message);
                $profile->setfile($name);
                
                GetUser($profile);     
                    }
                }
            
            
              function validateSignUp ($fname,$lname,$gender,$email,$password,$cpassword,$message)
            {        
                 if(empty($fname)|| empty($lname) || empty($gender) || empty($email) || empty($password) || empty($cpassword) || empty($message))
                 {
              
                     return false;
                 }
                 else
                  {
                     return true;
           
                  }     
             }
            
        
   
        ?>