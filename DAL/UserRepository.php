<?php
include '../../DAL/Connection.php';
require_once '../../DTO/ProfileDTOResponse.php';
require_once '../../DTO/ProfileDTORequest1.php';
require_once '../../DTO/ProfileDTOResponse1.php';
require_once '../../DTO/ProfileDTOResponse2.php';
require_once '../../DTO/ProfileDTOResponse3.php';

function AllVacancies(){
    $conn= OpenConn();
    $sql="Select * from vacancie;";
    $result=$conn->query($sql);
    if(mysqli_num_rows($result)==false){
        CloseConn($conn);
        return null;
    }
    $i=0;
    while($row= mysqli_fetch_array($result)){
        $profile=new ProfileDTOResponse();
        $profile->setTitle($row["title"]);
        $profile->setMinistry($row["ministry"]);   
        $profile->setId($row["id"]);
        $profiles[$i]=$profile;
        $i++;
    }
    CloseConn($conn);
    return $profiles;
    
}


function InsertUser($profile)
{   
    try{
    $conn=OpenConn();
    $fname=$profile->getfname();
    $lname=$profile->getlname();
    $gender=$profile->getgender();
    $email=$profile->getemail();
    $password=$profile->getpassword();
    $cpassword=$profile->getcpassword();
    $message=$profile->getmessage();
    $file=$profile->getfile();
      
    $sql="insert into citizen(firstname,lastname,gender,email,password,cpassword,message,fileupload)values('".$fname."','".$lname."','".$gender."','".$email."','".$password."','".$cpassword."','".$message."','".$file."');";
    $result= mysqli_query($conn, $sql);
     header('Location:login.php');
    return true;
       
} catch (Exception $ex) {
  echo "User has not been added";
  return false;
}       
}


function getwhichuserr($profile)
{

     try{
         
        
        $conn= OpenConn();
        session_start();
        setcookie("email",'', time()-(3600));
        $email=$profile->getemail();
        $password=$profile->getpassword();   
        $remember=$profile->getRemember();
        $sql="select id,email from citizen where email='".$email."' and password='".$password."';";
        $result= mysqli_query($conn, $sql);
        $counter=0;
        
        if(mysqli_num_rows($result)>=1)
        {
            while($row= mysqli_fetch_array($result))
            {
//            
            $_SESSION["id"]=$row["id"];
            CloseConn($conn);
                if (!empty($remember))
                 {
                     
                     setcookie("email", $row["email"], time() + (86400 * 30));
                     $counter=$counter+1;
                     header('Location:index1.php');
                 }
        
                 else
                 {
                setcookie("email", "", time() - 3600);
                header('Location:index1.php');
                $counter=$counter+1;
                 }
            }   
        }
        
        else
        {
            $sql="select id from hremployee where email='".$email."' and password='".$password."';";
            $result= mysqli_query($conn, $sql);     
            
             if(mysqli_num_rows($result)>=1)
        {
           CloseConn($conn);      
           header('Location:admin.php');
           $counter=$counter+1;
        }        
        }
        
        if($counter==0){
           header("Location:index.php?error=1");
        }
        
     
   
    } catch (Exception $ex) {
        $ex->getMessage();
    }
       
}





function  Ministryy($name)
{
    $conn= OpenConn();
    $sql="Select name,location,minister,numberemp from ministry where name='".$name."';";
    $result=$conn->query($sql);
    if(mysqli_num_rows($result)==false){
        CloseConn($conn);
        return null;
    }
   
    while($row= mysqli_fetch_array($result)){
        $profile=new ProfileDTOResponse1();
        $profile->setname($row["name"]);
        $profile->setlocation($row["location"]);    
        $profile->setminister($row["minister"]);
        $profile->setnumberemp($row["numberemp"]);
        
       
    }
    CloseConn($conn);
    return $profile;
}


function InsertVacancieee($profile)
{
    try{
    $conn=OpenConn();
    $title=$profile->getTitle();
    $ministry=$profile->getMinistry();
      
    $sql="insert into vacancie(title,ministry)values('".$title."','".$ministry."');";
    $result= mysqli_query($conn, $sql);
    header('Location:admin.php');
    return true;
       
} catch (Exception $ex) {
  echo "User has not been added";
  return false;
}       
}



function UpdateVacancieee($profile)
{
      try{
    $conn=OpenConn();
    $id=$profile->getId();
    $title=$profile->getTitle();
    $ministry=$profile->getMinistry();
    
      
    $sql="update vacancie set title='".$title."',ministry='".$ministry."' where id='".$id."';"; 
    $result= mysqli_query($conn, $sql);
    header('Location:admin.php');
    return true;
       
} catch (Exception $ex) {
  echo "User has not been updated";
  return false;
} 
}




function GetProfileQuery($id)
{
    
    $conn= OpenConn();
    $sql="Select * From vacancie Where id=$id;";
     $result= mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)==false){
        CloseConn($conn);
        return null;
    }
   
    while($row= mysqli_fetch_array($result)){
        $profile=new ProfileDTOResponse();
        $profile->setId($row["id"]);
        $profile->setTitle($row["title"]);
        $profile->setMinistry($row["ministry"]);
        
    }
    CloseConn($conn);
    return $profile;

}




function DeleteProfileQuery($id)
{
    $conn= OpenConn();
   $stmt = $conn->prepare( "delete from vacancie where id=?");
   $stmt->bind_param("i",$id);

          if($stmt->execute())
          { 
              header('Location:admin.php');
              return true;
          }
       else  {echo "Error deleting record: " . $conn->error;
     
       return false;
       }
         
       $stmt->close();
         
           CloseConn($conn);

}

function myyprofilee(){
    $conn= OpenConn();
    $sql="Select * from citizen;";
    $result=$conn->query($sql);
    if(mysqli_num_rows($result)==false){
        CloseConn($conn);
        return null;
    }
    $i=0;
    while($row= mysqli_fetch_array($result)){
        $profile=new profileDTOresponse2();
        $profile->setId($row["id"]);
        $profile->setFirstName($row["firstname"]);
        $profile->setLastName($row["lastname"]);   
        $profile->setGender($row["gender"]); 
        $profile->setEmail($row["email"]); 
        $profile->setPassword($row["password"]); 
        $profile->setMessage($row["message"]); 

    }
    CloseConn($conn);
    return $profile;
    
}

function  GetMinistrynumber($name)
{
    $conn= OpenConn();
    $sql="SELECT count(*) as total from employee where ministry='".$name."';";
    $result=$conn->query($sql);
    while($row= mysqli_fetch_array($result)){
    $data=$row['total'];
    return $data;
        }
   
}

function AllEmployees()
{
       $conn= OpenConn();
       $sql="Select * from employee;";
        $result=$conn->query($sql);
    if(mysqli_num_rows($result)==false){
        CloseConn($conn);
        return null;
    }
    $i=0;
    while($row= mysqli_fetch_array($result)){
        $profile=new ProfileDTOResponse3();
        $profile->setId($row["id"]);
        $profile->setFirstName($row["firstname"]);
        $profile->setLastName($row["lastname"]);   
        $profile->setGender($row["gender"]); 
        $profile->setEmail($row["email"]); 
        $profile->setTelephone($row["telephone"]); 
        $profile->setJobTitle($row["jobTitle"]); 
        $profile->setMinistry($row["ministry"]); 
        
        $profiles[$i]=$profile;
        $i++;
    }
    CloseConn($conn);
    return $profiles;
}
    
    
   
function InsertEmployeee($profile){
 try{
    $conn=OpenConn();
    $firstname=$profile->getFirstName();
    $lastname=$profile->getLastName();
    $gender=$profile->getGender();
    $email=$profile->getEmail();
    $telephone=$profile->getTelephone();
    $jobtitle=$profile->getJobTitle();
    $ministry=$profile->getMinistry();
      
    $sql="insert into employee(firstname,lastname,gender,email,telephone,jobTitle,ministry)values('".$firstname."','".$lastname."','".$gender."','".$email."','".$telephone."','".$jobtitle."','".$ministry."');";
    $result= mysqli_query($conn, $sql);
    $sql="insert into vacancie(title,ministry)values('".$jobtitle."','".$ministry."');";
    $result= mysqli_query($conn, $sql);
    header('Location:admin.php');
    return true;
       
} catch (Exception $ex) {
  echo "User has not been added";
  return false;
}
    
  
}


function GetProfileQuery1($id)
{
    
    $conn= OpenConn();
    $sql="Select * From employee Where id=$id;";
     $result= mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)==false){
        CloseConn($conn);
        return null;
    }
   
    while($row= mysqli_fetch_array($result)){
        $profile=new ProfileDTOResponse3();
        $profile->setId($row["id"]);
        $profile->setFirstName($row["firstname"]);
        $profile->setLastName($row["lastname"]);
        $profile->setGender($row["gender"]);
        $profile->setEmail($row["email"]);
        $profile->setTelephone($row["telephone"]);
        $profile->setJobTitle($row["jobTitle"]);
        $profile->setMinistry($row["ministry"]);
              
    }
    CloseConn($conn);
    return $profile;

}



function UpdateEmployeee($profile)
{
      try{
    $conn=OpenConn();
    $id=$profile->getId();
    $firstname=$profile->getFirstName();
    $lastname=$profile->getLastName();
    $gender=$profile->getGender();
    $email=$profile->getEmail();
    $telephone=$profile->getTelephone();
    $jobtitle=$profile->getJobTitle();
    $ministry=$profile->getMinistry();
    
     
    $sql="update employee set firstname='".$firstname."',lastname='".$lastname."',gender='".$gender."',email='".$email."',telephone='".$telephone."',jobTitle='".$jobtitle."',ministry='".$ministry."' where id='".$id."';"; 
    $result= mysqli_query($conn, $sql);
    header('Location:admin.php');
    
    return true;
       
} catch (Exception $ex) {
  echo "User has not been updated";
  return false;
} 
}


function DeleteProfileQuery1($id)
{
    $conn= OpenConn();
   $stmt = $conn->prepare( "delete from employee where id=?");
   $stmt->bind_param("i",$id);

          if($stmt->execute())
          { 
              header('Location:admin.php');
              return true;
          }
       else  {echo "Error deleting record: " . $conn->error;
     
       return false;
       }
         
       $stmt->close();
         
           CloseConn($conn);

}

