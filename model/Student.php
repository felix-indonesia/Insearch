<?php

class Student extends Person

{
    protected   $studentID,
                $personID;
    
    
    
    
    
    
    
    
    //Accessors
	public function getStudentID(){
        return $this->studentID;
    }
    
    public function getPersonID(){
        return $this->personID;
    }
    
    
 
    //Mutators
	
	public function setStudentID($e){
        $this->studentID = $e;
    }
    
    public function setAdminID($e){
        $this->adminID = $e;
    }
    
    
   
    
}
?>