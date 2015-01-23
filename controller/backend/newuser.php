<?php
include 'controller/backend/config.php';


if(isset($_POST['addAdmin']))
{
            $admin          =  new Person(array(
            'firstName'     => $_POST['firstName'],
            'lastName'      => $_POST['lastName'],
            'nickName'      => $_POST['nickName'],
            'dateOB'        => $_POST['dateOB'],
            'monthOB'       => $_POST['monthOB'],
            'yearOB'        => $_POST['yearOB'],
            'address'       => $_POST['address'],
            'email'         => $_POST['email'],
            'phone'         => $_POST['phone'],
            'gender'        => $_POST['gender'], 
            'password'      => encrypt(combineDOB($_POST['dateOB'],$_POST['monthOB'],$_POST['yearOB'] )), 
            'staffID'       => '12345',
            'facebook'      => $_POST['facebook'],
            'linkedIn'      => $_POST['linkedIn'],
            'status'        => $_POST['status'],
            'studyStatus'   => $_POST['studyStatus'],
            'userType'      => $_POST['userType'],
            'startDate'     => date ('Y-m-d')
            
    
    ));
    
    if($_POST['userType' == 1]){
        $mainPerson->addAdmin($admin);
    }
    
    $success = "SUCCESS ADD STAFF";
}








if(!isset($admin))
{
    header('location: /admin');
}
else
{
    include 'view/backend/newuser.php';
}

?>d
