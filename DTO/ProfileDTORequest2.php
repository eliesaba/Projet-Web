<?php

class profileDTOrequest2
{
    private $id;
    private $title;
    private $ministry; 
    
    public function getId(){
        return $this->id;
    }
    
    public function getTitle(){
        return $this->title;
    }
    
     public function getMinistry(){
        return $this->ministry;
    }
    
    
    
    
     public function setId ($id)
    {
        $this->id = $id;
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
