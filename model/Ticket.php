<?php

class Ticket extends Constructor

{
    protected   $ticketID,
                $personID,
                $eventID,
                $ticketNum,
                $purchasedDate,
                $firstName,
                $lastName,
                $dayOB,
                $monthOB,
                $yearOB,
                $status;
    
    
    
    
    
    
    
    
    //Accessors
	public function getTicketID(){
        return $this->ticketID;
    }
    
    public function getPersonID(){
        return $this->personID;
    }
    
    public function getEventID(){
        return $this->eventID;
    }
    
    public function getTicketNum(){
        return $this->ticketNum;
    }
    
    public function getPurchasedDate(){
        return $this->purchasedDate;
    }
    
    public function getFirstName(){
        return $this->firstName;
    }
    
    public function getLastName(){
        return $this->lastName;
    }
    
    public function getDayOB(){
        return $this->dayOB;
    }
    
    public function getMonthOB(){
        return $this->monthOB;
    }
    
    public function getYearOB(){
        return $this->yearOB;
    }    
    
    public function getStatus(){
        return $this->status;
    } 

    
    
 
    //Mutators
	
	public function setTicketID($e){
        $this->adminID = $e;
    }
    
    public function setEventID($e){
        $this->personID = $e;
    }
    
    public function setPersonID($e){
        $this->personID = $e;
    }
    
    public function setTicketNum($e){
        $this->ticketNum = $e;
    }
    
    public function setPurchasedDate($e){
        $this->purchasedDate = $e;
    }
    
    public function setFirstName($e){
        $this->firstName = $e;
    }
    
    public function setLastName($e){
        $this->lastName = $e;
    }
    
    public function setDayOB($e){
        $this->dayOB = $e;
    }
    
    public function setMonthOB($e){
        $this->monthOB = $e;
    }
    
    public function setYearOB($e){
        $this->yearOB = $e;
    }
    
    public function setStatus($e){
        $this->status = $e;
    }
    
   
    
}
?>