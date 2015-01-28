<?php
include 'controller/frontend/config.php';



//STUDENT CREATES ACCOUNT
if(isset($_POST['signupStudent']))
{
    if(validName($_POST['firstname']) && validName($_POST['lastname']) && validName($_POST['nickname']))
    {
        if(validEmail($_POST['email']) && !$mainPerson->emailExists($_POST['email']))
        {
           if($_POST['password'] == $_POST['confirmPassword'])
           {
               $student = new Student(array(
                    'firstName' => $_POST['firstname'],
                    'lastName' => $_POST['lastname'],
                    'nickName' => $_POST['nickname'],
                    'dateOB' => $_POST['dob'],
                    'monthOB' => $_POST['mob'],
                    'yearOB' => $_POST['yob'],
                    'gender' => $_POST['gender'],
                    'address' => $_POST['address'],
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                    'studyStatus' => $_POST['study'],
                    'userType' => 1,
                    'status' => 0,
                    'staffID' => randNum($mainPerson->lastStaffID()),
                    'password' => personalEncrypt($_POST['password']),
                    'startDate' => date('Y-m-d')
                ));
               
                //Add in database
                $mainPerson->addStudent($student);
               
                //Send activation email
                $mainPerson->sendActivation($student->getEmail(), $student->getStaffID());
               
                //Display success message
                $message = "Your account has been created. An activation email has been sent to you. Please follow instructions to activate your account. If you don't see the email, please do check your spam folder.";
           }
            else
            {
                $error = 'Please, Check your passwords. Make sure they match';
            }
        }
        else
        {
            $error = "The email your entered is either invalid or already in use. Please try again.";
        }
            
    }
    else
    {
        $error = "Check your names spelling";
    }
}

if(isset($_POST['signupVolunteer']))
{
    if(validName($_POST['firstname']) && validName($_POST['lastname']) && validName($_POST['nickname']))
    {
        if(validEmail($_POST['email']) && !$mainPerson->emailExists($_POST['email']))
        {
           if($_POST['password'] == $_POST['confirmPassword'])
           {
               $volunteer = new Volunteer(array(
                    'firstName' => $_POST['firstname'],
                    'lastName' => $_POST['lastname'],
                    'nickName' => $_POST['nickname'],
                    'dateOB' => $_POST['dob'],
                    'monthOB' => $_POST['mob'],
                    'yearOB' => $_POST['yob'],
                    'gender' => $_POST['gender'],
                    'address' => $_POST['address'],
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                    'studyStatus' => $_POST['study'],
                    'facebook' => $_POST['facebook'],
                    'linkedIn' => $_POST['linkedIn'],
                    'languages' => $_POST['languages'],
                    'course' => $_POST['course'],
                    'about' => $_POST['about'],
                    'skills' => $_POST['skills'],
                    'qualification' => $_POST['qualification'],
                    'experience' => $_POST['experience'],
                    'userType' => 2,
                    'status' => 0,
                    'staffID' => randNum($mainPerson->lastStaffID()),
                    'password' => personalEncrypt($_POST['password']),
                    'startDate' => date('Y-m-d')
                ));
               
                //Add in database
                $mainPerson->addVolunteer($volunteer);
               
                //Send activation email
                //$mainPerson->sendActivation($student->getEmail(), $student->getStaffID());
               
                //Display success message
                $message = "Your account has been created. An activation email has been sent to you. Please follow instructions to activate your account. If you don't see the email, please do check your spam folder.";
           }
            else
            {
                $error = 'Please, Check your passwords. Make sure they match';
            }
        }
        else
        {
            $error = "The email your entered is either invalid or already in use. Please try again.";
        }
            
    }
    else
    {
        $error = "Check your names spelling";
    }
}


if($type == 'volunteer'){
    include 'view/frontend/signup.php';
}
else{
    include 'view/frontend/signup_student.php';
}
?>
