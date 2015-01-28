<?php
include 'controller/frontend/config.php';



if(isset($id))
{
    if($mainPerson->checkStaffID($id))
    {
        $mainPerson->activateAccount($id);
        $message = "Thank you for creating and activating your account. You may now be able to sign in.";
    }
    else
    {
        $error = "That account does not exists";
    }
}

include 'view/frontend/activate.php';


?>
