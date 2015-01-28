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

    //START SMALL FUNCTION
    //take last staffID
    public function lastStaffID()
    {
            return $this->db->query('SELECT staffID FROM person ORDER BY personID DESC LIMIT 0, 1')->fetchColumn();

    }

     //take last personID
    public function lastPersonID()
    {
            return $this->db->query('SELECT personID FROM person ORDER BY personID DESC LIMIT 0, 1')->fetchColumn();

    }

    //check if ID exist
    public function idExists($id)
    {
        $sql = 'SELECT COUNT(*) FROM person WHERE staffID = '. $id; //use fetch for 1 coloumn
        return (bool) $this->db->query($sql)->fetchColumn();    //casting the value to TRUE and FALSE (1,0)
    }

    //check user
    public function checkUser($us)
    {
        $check = 'SELECT * FROM person WHERE staffID = '. $us;

        $q = $this->db->query($check);
        $info = $q->fetch(PDO::FETCH_ASSOC); //retuning many coloumns fetch(PDO::FETCH_ASSOC);
        $user = new Person($info);
        return $user;
    }

    //check password
    public function checkPassword($password, $word)
    {
        return $password == $word;
    }
    //END SMALL FUNCTION


    //add User
    private function addPerson($e)
    {

        $q = $this->db->prepare('INSERT INTO person
SET firstName = :firstName, lastName = :lastName, nickName = :nickName, staffID = :staffID, dateOB = :dateOB, monthOB = :monthOB, yearOB = :yearOB, address = :address, gender = :gender, status = :status, email = :email, phone = :phone, startDate = :startDate, studyStatus = :studyStatus, userType = :userType, password = :password');

        $q->bindValue(':phone', $e->getPhone());
        $q->bindValue(':address', $e->getAddress());
        $q->bindValue(':email', $e->getEmail());
        $q->bindValue(':dateOB', $e->getDateOB());
        $q->bindValue(':monthOB', $e->getMonthOB());
        $q->bindValue(':yearOB', $e->getYearOB());
        $q->bindValue(':staffID', $e->getStaffID());
        $q->bindValue(':startDate', $e->getStartDate());
        $q->bindValue(':firstName', $e->getFirstName());
        $q->bindValue(':nickName', $e->getNickName());
        $q->bindValue(':lastName', $e->getLastName());
        $q->bindValue(':gender', $e->getGender(), PDO::PARAM_INT);
        $q->bindValue(':userType', $e->getUserType(), PDO::PARAM_INT);
        $q->bindValue(':studyStatus', $e->getStudyStatus());
        $q->bindValue(':startDate', $e->getStartDate());
        $q->bindValue(':status', $e->getStatus());
        $q->bindValue(':password', $e->getPassword());
        $q->execute();
    }


    //add Admin
    public function addAdmin(Person $e)
    {
        $this->addPerson($e);
    }

    //add Volunteer
    public function addVolunteer(Volunteer $e)
    {
        $this->addPerson($e);

        $eID = $this->lastPersonID();

        $c = $this->db->prepare('INSERT INTO volunteer
        SET personID = :personID, languanges = :languanges, course = :course, about = :about, skills = :skills, qualification = :qualification, experience = :experience, facebook = :facebook, linkedIn = :linkedIn');

        $c->bindValue(':personID', $eID);
        $c->bindValue(':languanges', $e->getLanguanges());
        $c->bindValue(':course', $e->getCourse());
        $c->bindValue(':about', $e->getAbout());
        $c->bindValue(':skills', $e->getSkills());
        $c->bindValue(':qualification', $e->getQualification());
        $c->bindValue(':experience', $e->getExperience());
        $c->bindValue(':facebook', $e->getFacebook());
        $c->bindValue(':linkedIn', $e->getLinkedIn());
        $c->execute();
    }

    //add Student
    public function addStudent(Student $e)
    {
        $this->addPerson($e);

        $eID = $this->lastPersonID();

        $c = $this->db->prepare('INSERT INTO student
        SET personID = :personID');

        $c->bindValue(':personID', $eID);
        $c->execute();
    }   
    
    
    //Check if an email exists
    //Takes 2 paramaters: email + staffid (optional)
    public function emailExists($e, $id = -1)
    {
        $sql = 'SELECT COUNT(*) FROM person WHERE email = :email';
        if($id != -1)
        {
            $sql .= ' AND staffid <> '.$id;
        }
        $q = $this->db->prepare($sql);
        $q->execute(array(':email' => $e));
        return (bool) $q->fetchColumn();
    }
    
    //Check if an ID existes
    public function checkStaffID($e)
    {
        $sql = 'SELECT COUNT(*) FROM person WHERE staffid = :staffid';
        $q = $this->db->prepare($sql);
        $q->execute(array(':staffid' => $e));
        return (bool) $q->fetchColumn();
    }
    
    
    //Activate an account
    public function activateAccount($e)
    {
        $q = $this->db->prepare('UPDATE person SET status = 1 WHERE staffID = :staffID');
        $q->bindValue(':staffID', $e, PDO::PARAM_INT);
        $q->execute();
    }
    
    
    //Deactivate an account
    public function deactivateAccount($e)
    {
        $q = $this->db->prepare('UPDATE person SET status = 0 WHERE staffID = :staffID');
        $q->bindValue(':staffID', $e, PDO::PARAM_INT);
        $q->execute();
    }
    
    
    //Send activation email
    //2 parameters: email + staffid
    public function sendActivation($email, $staffid)
    {
        $subject = 'Welcome to UTS|INSEARCH Students Activities Club';
        $headers = 'From: Bounthanh.Chanhdara@insearch.edu.au' . "\r\n" .
                    'MIME-Version: 1.0'. "\r\n" .
                    'Content-type: text/html; charset=iso-8859-1'. "\r\n";
        $message = "<html><head><title>Welcome to UTS|INSEARCH Students Activities Club</title></head>
            <body>
            Please click on the following link to activate your account.</br>
            http://localhost/insearch/activate/user/".$staffid."<br/>
            Kind regards, <br/><br>
            <strong>Bounthanh Chanhdara</strong><br>
            Student Activities and Events Coordinator<br>
            Level 8, 187 Thomas Street, Sydney, NSW 2000 Australia<br>
            +61 2 9218 8634  +61 (0)416 497 534<br>
            </body>
            </html>";
        mail($email, $subject, $message, $headers);
    }
}
?>