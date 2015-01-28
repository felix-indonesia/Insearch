<?php

class Person extends Constructor

{
    protected   $personID,
                $firstName,
                $lastName,
                $nickName,
                $dateOB,
                $monthOB,
                $yearOB,
                $gender,
                $address,
                $email,
                $password,
                $status,
                $phone,
                $startDate,
                $userType,
                $staffID,
                $studyStatus;
 
    //is admin
    public function isAdmin()
    {
        return $this->getUserType() == 3;
    }
    
    
    
    
    
    
    //Accessors
	public function getPersonID(){
        return $this->personID;
    }
    
    public function getFirstName(){
        return $this->firstName;
    }
    
    public function getLastName(){
        return $this->lastName;
    }
    
    public function getNickName(){
        return $this->nickName;
    }
    
    public function getStaffID(){
        return $this->staffID;
    }
    
    public function getDateOB(){
        return $this->dateOB;
    }
    
    public function getMonthOB(){
        return $this->monthOB;
    }
    
    public function getYearOB(){
        return $this->yearOB;
    }
    
    public function getGender(){
        return $this->gender;
    }
    
    public function getAddress(){
        return $this->address;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getPassword(){
        return $this->password;
    }
    
    public function getStatus(){
        return $this->status;
    }
    
    public function getPhone(){
        return $this->phone;
    }
    
    public function getStartDate(){
        return $this->startDate;
    }
    
    public function getUserType(){
        return $this->userType;
    }
    
    public function getFacebook(){
        return $this->facebook;
    }
    
    public function getLinkedIn(){
        return $this->linkedIn;
    }
    
    
    public function getStudyStatus(){
        return $this->studyStatus;
    }
    
    
    //Mutators
	
	public function setPersonID($e){
        $this->personID = $e;
    }
    
    public function setStaffID($e){
        $this->staffID = $e;
    }
    
    public function setFirstName($e){
        $this->firstName = $e;
    }
    
    public function setLastName($e){
        $this->lastName = $e;
    }
    
    public function setNickName($e){
        $this->nickName = $e;
    }
    
    public function setDateOB($e){
        $this->dateOB = $e;
    }
    
    public function setMonthOB($e){
        $this->monthOB = $e;
    }

    public function setYearOB($e){
        $this->yearOB = $e;
    }
    
    public function setGender($e){
        $this->gender = $e;
    }
    
    public function setAddress($e){
        $this->address = $e;
    }
    
    public function setEmail($e){
        $this->email = $e;
    }
    
    public function setPassword($e){
        $this->password = $e;
    }
    
    public function setStatus($e){
        $this->status = $e;
    }
    
    public function setPhone($e){
        $this->phone = $e;
    }
    
    public function setFacebook($e){
        $this->facebook = $e;
    }
    
    public function setLinkedIn($e){
        $this->linkedIn = $e;
    }
    
    public function setStartDate($e){
        $this->startDate = $e;
    }
    
    public function setUserType($e){
        $this->userType = $e;
    }
    
    public function setStudyStatus($e){
        $this->studyStatus = $e;
    }
    
}
?>