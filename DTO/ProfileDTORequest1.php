<?php

class ProfileDTORequest1 {
   private $fname;
   private $lname;
   private $gender;
   private $email;
   private $password;
   private $cpassword;
   private $message;
   private $file;
   private $remember; 
   
    public function getfname(){
        return $this->fname;
    }
    
     public function getlname(){
        return $this->lname;
    }
    
    public function getgender(){
        return $this->gender;
    }
    
    
     public function getemail(){
        return $this->email;
    }
    
     public function getpassword(){
        return $this->password;
    }
     public function getcpassword(){
        return $this->cpassword;
    }
    
     public function getmessage(){
        return $this->message;
    }
    
    public function getfile(){
        return $this->file;
    }
    
    public function getRemember(){
        return $this->remember;
    }


    
    

      public function setfname ($fname)
    {
        $this->fname = $fname;
    }
    
    public function setlname ($lname)
    {
        $this->lname = $lname;
    }
    
    public function setgender ($gender)
    {
        $this->gender = $gender;
    }
    
    public function setemail ($email)
    {
        $this->email = $email;
    }
    public function setpassword ($password)
    {
        $this->password = $password;
    }
    public function setcpassword ($cpassword)
    {
        $this->cpassword = $cpassword;
    }
    public function setmessage ($message)
    {
        $this->message = $message;
    }
    public function setfile ($file)
    {
        $this->file = $file;
    }
    public function setRemember ($remember)
    {
        $this->remember = $remember;
    }
    
    
}
