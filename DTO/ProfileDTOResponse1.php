<?php


class ProfileDTOResponse1 {
    private $name;
   private $location;
   private $minister;
   private $numberemp;
  
  
    
    public function getname(){
        return $this->name;
    }
    
     public function getlocation(){
        return $this->location;
    }
    
     public function getminister(){
        return $this->minister;
    }
    
     public function getnumberemp(){
        return $this->numberemp;
    }
    
   
    

      public function setname ($name)
    {
        $this->name = $name;
    }
    
    public function setlocation ($location)
    {
        $this->location = $location;
    }
    
    public function setminister ($minister)
    {
        $this->minister = $minister;
    }
    public function setnumberemp ($numberemp)
    {
        $this->numberemp = $numberemp;
    }
   
}
