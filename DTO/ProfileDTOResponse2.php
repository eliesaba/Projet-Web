<?php

class profileDTOresponse2
{
    private $id;
    private $firstname;
    private $lastname; 
    private $gender;
    private $email;
    private $password;
    private $message;
    
    
    
    public function getId(){
        return $this->id;
    }
    
    public function getFirstName(){
        return $this->firstname;
    }
    
     public function getLastName(){
        return $this->lastname;
    }
    
    public function getGender(){
        return $this->gender;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getPassword(){
        return $this->password;
    }
    
    public function getMessage(){
        return $this->message;
    }
    
    
    
     public function setId ($id)
    {
        $this->id = $id;
    }
    
    public function setFirstName ($firstname)
    {
        $this->firstname = $firstname;
    }
    
    public function setLastName ($lastname)
    {
        $this->lastname = $lastname;
    }
    
    public function setGender ($gender)
    {
        $this->gender = $gender;
    }
    
    public function setEmail ($email)
    {
        $this->email = $email;
    }
    
    public function setPassword ($password)
    {
        $this->password = $password;
    }
    
    public function setMessage ($message)
    {
        $this->message = $message;
    }

}
