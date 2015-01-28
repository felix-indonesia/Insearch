<?php

class MainEvent extends Constructor
{

            private $db;
           
            public function __construct($a)
            {
                $this->setDB($a);
            }
            
            public function setDB(PDO $a) 
            {
                $this->db = $a;
            }

            //add User
            public function addEvent($e)
            {
             
                $q = $this->db->prepare('INSERT INTO event SET 
                    status  = :status, 
                    age  = :age, 
                    audience  = :audience, 
                    regoStatus  = :regoStatus, 
                    fees  = :fees, 
                    volunteer  = :volunteer, 
                    nbVolunteer  = :nbVolunteer, 
                    name  = :name, 
                    location  = :location, 
                    meetingPoint  = :meetingPoint, 
                    meetingTime	 = :meetingTime, 
                    startHour  = :startHour, 
                    endHour  = :endHour, 
                    startDate  = :startDate, 
                    endDate  = :endDate, 
                    manager  = :manager, 
                    normalPrice  = :normalPrice, 
                    discPrice   = :discPrice, 
                    description   = :description, 
                    image   = :image, 
                    youtube   = :youtube, 
                    facebook   = :facebook, 
                    added   = :added, 
                    eventType 	 = :eventType, 
                    adminID   = :adminID, 
                    eventCode   = :eventCode'
                );
        
                $q->bindValue(':status', $e->getStatus());
                $q->bindValue(':age', $e->getAge());
                $q->bindValue(':audience', $e->getAudience());
                $q->bindValue(':regoStatus', $e->getRegoStatus());
                $q->bindValue(':fees', $e->getFees());
                $q->bindValue(':volunteer', $e->getVolunteer());
                $q->bindValue(':nbVolunteer', $e->getNbVolunteer());
                $q->bindValue(':name', $e->getName());
                $q->bindValue(':location', $e->getLocation());
                $q->bindValue(':meetingPoint', $e->getMeetingPoint());
                $q->bindValue(':meetingTime', $e->getMeetingTime());
                $q->bindValue(':startHour', $e->getStartHour());
                $q->bindValue(':endHour', $e->getEndHour());
                $q->bindValue(':startDate', $e->getStartDate());
                $q->bindValue(':endDate', $e->getEndDate());
                $q->bindValue(':manager', $e->getManager());
                $q->bindValue(':normalPrice', $e->getNormalPrice());
                $q->bindValue(':discPrice', $e->getDiscPrice());
                $q->bindValue(':description', $e->getDescription());
                $q->bindValue(':image', $e->getImage());
                $q->bindValue(':youtube', $e->getYoutube());
                $q->bindValue(':facebook', $e->getFacebook());
                $q->bindValue(':added', $e->getAdded());
                $q->bindValue(':eventType', $e->getEventType());
                $q->bindValue(':adminID', $e->getAdminID());
                $q->bindValue(':eventCode', $e->getEventCode());
                $q->execute();
        }
}
?>