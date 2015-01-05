<?php

        class MainPerson extends Constructor
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
            public function addAdmin(Person $e)
            {
             
                $q = $this->db->prepare('INSERT INTO person
    SET firstName = :firstName, lastName = :lastName, nickName = :nickName, dateOB = :dateOB, monthOB = :monthOB, yearOB = :yearOB, address = :address, gender = :gender, status = :status, email = :email, phone = :phone, linkedIn = :linkedIn , facebook = :facebook, startDate = :startDate, studyStatus = :studyStatus, userType = :userType');
        
                $q->bindValue(':phone', $e->getPhone());
                $q->bindValue(':address', $e->getAddress());
                $q->bindValue(':email', $e->getEmail());
                $q->bindValue(':dateOB', $e->getDateOB());
                $q->bindValue(':monthOB', $e->getMonthOB());
                $q->bindValue(':yearOB', $e->getYearOB());
                $q->bindValue(':startDate', $e->getStartDate());
                $q->bindValue(':firstName', $e->getFirstName());
                $q->bindValue(':nickName', $e->getNickName());
                $q->bindValue(':lastName', $e->getLastName());
                $q->bindValue(':linkedIn', $e->getLinkedIn());
                $q->bindValue(':facebook', $e->getFacebook());
                $q->bindValue(':gender', $e->getGender(), PDO::PARAM_INT);
                $q->bindValue(':userType', $e->getUserType(), PDO::PARAM_INT);
                $q->bindValue(':studyStatus', $e->getStudyStatus());
                $q->bindValue(':startDate', $e->getStartDate());
                $q->bindValue(':status', $e->getStatus());
                $q->execute();
                //end
                
                
                
            }
            
            
            
            
            
            
            //add Staff
            public function addEmployee(Employee $person)
            {
             
                $q = $this->db->prepare('INSERT INTO person
    SET firstName = :firstName, lastName = :lastName, DOB = :DOB, address = :address, email = :email, phone = :phone, gender = :gender, userType = :userType');
        
                $q->bindValue(':phone', $person->getPhone());
                $q->bindValue(':address', $person->getAddress());
                $q->bindValue(':email', $person->getEmail());
                $q->bindValue(':DOB', $person->getDOB());
                $q->bindValue(':firstName', $person->getFirstName());
                $q->bindValue(':lastName', $person->getLastName());
                $q->bindValue(':gender', $person->getGender(), PDO::PARAM_INT);
                $q->bindValue(':userType', $person->getUserType(), PDO::PARAM_INT);
                $q->execute();
                
                $personID = $this->db->query('SELECT personID FROM person ORDER BY personID DESC LIMIT 0, 1')->fetchColumn();
                
                
                $qq = 'INSERT INTO employee
                SET personID = :personID, password = :password, staffID = :staffID';
                $c = $this->db->prepare($qq);
                $c->bindvalue(':personID', $personID);
                $c->bindvalue(':password', $person->getPassword());
                $c->bindvalue(':staffID', $person->getStaffID());
                $c->execute();
            }
            
            
            
            
            public function idExists($id)
            {
                $sql = 'SELECT COUNT(*) FROM employee WHERE staffID = '. $id; //use fetch for 1 coloumn
                return (bool) $this->db->query($sql)->fetchColumn();    //casting the value to TRUE and FALSE (1,0)
            }
            
            public function checkUser($us)
            {
                $check = 'SELECT * FROM employee WHERE staffID = '. $us;
                
                $q = $this->db->query($check);
                $info = $q->fetch(PDO::FETCH_ASSOC); //retuning many coloumns fetch(PDO::FETCH_ASSOC);
                $user = new Employee($info);
                return $user;
            }
            
                
            
            
            public function checkPassword($password, $word)
            {
                return $password == $word;
            }
            
            
            
            
            
            
            
            
            
            
            
            
        }
?>