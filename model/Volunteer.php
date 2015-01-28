<?php

class Volunteer extends Person

{
    protected   $volunteerID,
                $personID,
                $languanges,
                $course,
                $about,
                $skills,
                $qualification,
                $experience,
                $facebook,
                $linkedIn;
    
    //Accessors
	public function getVolunteerID(){
        return $this->volunteerID;
    }
    
    public function getPersonID(){
        return $this->personID;
    }
    
    public function getLanguanges(){
        return $this->languanges;
    }
    
    public function getCourse(){
        return $this->course;
    }
    
    public function getAbout(){
        return $this->about;
    }
    
    public function getSkills(){
        return $this->skills;
    }
    
    public function getQualification(){
        return $this->qualification;
    }
    
    public function getExperience(){
        return $this->experience;
    }
    
    public function getFacebook(){
        return $this->facebook;
    }
    
    public function getLinkedIn(){
        return $this->linkedIn;
    }
    
 
    //Mutators
	
	public function setVolunteerID($e){
        $this->volunteerID = $e;
    }
    
    public function setPersonID($e){
        $this->personID = $e;
    }
    
    public function setLanguanges($e){
        $this->languanges = $e;
    }
    
    public function setCourse($e){
        $this->course = $e;
    }
    
    public function setAbout($e){
        $this->about = $e;
    }
    
    public function setSkills($e){
        $this->skills = $e;
    }
    
    public function setQualification($e){
        $this->qualification = $e;
    }
    
    public function setExperience($e){
        $this->experience = $e;
    }
    
    public function setFacebook($e){
        $this->facebook = $e;
    }
    
    public function setLinkedIn($e){
        $this->linkedIn = $e;
    }
}
?>