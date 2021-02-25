<?php

class profileDTOrequest
{
    private $title;
    private $ministry;
  
    
    public function getTitle(){
        return $this->title;
    }
    
     public function getMinistry(){
        return $this->ministry;
    }
    
   
    

      public function setTitle ($title)
    {
        $this->title = $title;
    }
    
    public function setMinistry ($ministry)
    {
        $this->ministry = $ministry;
    }
    

}
