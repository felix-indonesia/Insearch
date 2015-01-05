
<?php

class Event extends Constructor
{
    
    protected   $eventID,
                $adminID,
                $eventCode,
                $status,
                $age,
                $audience,
                $regoStatus,
                $fees,
                $volunteer,
                $nbVolunteer,
                $name,
                $location,
                $meetingPoint,
                $meetingTime,
                $startHour,
                $endHour,
                $startDate,
                $endDate,
                $manager,
                $normalPrice,
                $discPrice,
                $description,
                $image,
                $youtube,
                $facebook,
                $added,
                $eventType,
                $eventID,
                $adminID;
    
    
    
    //Return formatted start time
    public function startTime()
    {
        return $this->getStartHour().':'.$this->getStartMin().' '.$this->getStartPeriod();
    }
    
    //Past event
    public function isPast()
    {
        return strtotime($this->getEndDate()) < strtotime(date('Y-m-d'));
    }
    
    //Full event dates
    public function fullDate()
    {
        if($this->getStartDate() == $this->getEndDate()){
            $fullDate = date('l d F Y', strtotime($this->getStartDate()));
        }else{
            $fullDate = date('l d', strtotime($this->getStartDate())).' - '.date('l d F Y', strtotime($this->getEndDate()));
        }
        return $fullDate;
    }
    
	
	//Accessors
	public function getEventID(){
        return $this->eventID;
    }
    
    public function getAdminID(){
        return $this->adminID;
    }
    
    public function getEventCode(){
        return $this->eventCode;
    }
    
    public function getStatus(){
        return $this->status;
    }
    
    public function getAge(){
        return $this->age;
    }
    
    public function getAudience(){
        return $this->audience;
    }
    
    public function getRegoStatus(){
        return $this->regoStatus;
    }
    
    public function getFees(){
        return $this->fees;
    }
    
    public function getVolunteer(){
        return $this->volunteer;
    }
    
    public function getNbVolunteer(){
        return $this->volunteer;
    }
	
	public function getName(){
        return $this->name;
    }
	
	public function getLocation(){
        return $this->location;
    }
	
	public function getMeetingPoint(){
        return $this->meetingPoint;
    }
	
	public function getMeetingTime(){
        return $this->meetingTime;
    }
	
	public function getStartHour(){
        return $this->startHour;
    }
    
    public function getEndHour(){
        return $this->endHour;
    }
    
    public function getStartDate(){
        return $this->startDate;
    }
    
    public function geEndDate(){
        return $this->endDate;
    }
	
	public function getManager(){
        return $this->manager;
    }
    
    public function getNormalPrice(){
        return $this->normalPrice;
    }
    
    public function getDiscPrice(){
        return $this->discPrice;
    }
    
    public function getDescription(){
        return $this->description;
    }
    
    public function getImage(){
        return $this->image;
    }
    
    public function getYoutube(){
        return $this->youtube;
    }
    
    public function getAdded(){
        return $this->added;
    }
    
    public function getEventType(){
        return $this->eventType;
    }

    
    
	
	//Mutators
	
	public function setEventID($e){
        $this->eventID = $e;
    }
    
    public function setAdminID($e){
        $this->adminID = $e;
    }
    
    public function setEventCode($e){
        $this->eventCode = $e;
    }
    
    public function setStatus($e){
        $this->status = $e;
    }
    
    public function setAge($e){
        $this->age = $e;
    }
    
    public function setAudience($e){
        $this->audience = $e;
    }
    
    public function setRegoStatus($e){
        $this->regoStatus = $e;
    }
    
    public function setFees($e){
        $this->fees = $e;
    }
    
    public function setVolunteer($e){
        $this->volunteer = $e;
    }
    
    public function setNbVolunteer($e){
        $this->volunteer = $e;
    }
	
	public function setName($e){
        $this->name = $e;
    }
	
	public function setLocation($e){
        $this->location = $e;
    }
	
	public function setMeetingPoint($e){
        $this->meetingPoint = $e;
    }
	
	public function setMeetingTime($e){
        $this->meetingTime = $e;
    }
	
	public function setStartHour($e){
        $this->startHour = $e;
    }
    
    public function setEndHour($e){
        $this->endHour = $e;
    }
    
    public function setStartDate($e){
        $this->startDate = $e;
    }
    
    public function seEndDate($e){
        $this->endDate = $e;
    }
	
	public function setManager($e){
        $this->manager = $e;
    }
    
    public function setNormalPrice($e){
        $this->normalPrice = $e;
    }
    
    public function setDiscPrice($e){
        $this->discPrice = $e;
    }
    
    public function setDescription($e){
        $this->description = $e;
    }
    
    public function setImage($e){
        $this->image = $e;
    }
    
    public function setYoutube($e){
        $this->youtube = $e;
    }
    
    public function setAdded($e){
        $this->added = $e;
    }
    
    public function setEventType($e){
        $this->eventType = $e;
    }

}

?>