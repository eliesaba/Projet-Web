<?php


class ProfileDTORequest3 {
     private $id;
    private $firstname;
    private $lastname; 
    private $gender;
    private $email;
    private $telephone;
    private $jobTitle;
    private $ministry;
    
    
    
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
    
        public function getTelephone(){
        return $this->telephone;
    }
    
    public function getJobTitle(){
        return $this->jobTitle;
    }
    
       public function getMinistry(){
        return $this->ministry;
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
    
    public function setTelephone ($telephone)
    {
        $this->telephone = $telephone;
    }
    
    public function setJobTitle ($jobTitle)
    {
        $this->jobTitle = $jobTitle;
    }
    
    public function setMinistry ($ministry)
    {
        $this->ministry = $ministry;
    }
    

}
