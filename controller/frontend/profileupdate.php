<?php
include 'controller/frontend/config.php';




if($module == 'personal'){
    include 'view/frontend/updatedetails.php';
}
elseif($module == 'about'){
    include 'view/frontend/updateDescription.php';
}
elseif($module == 'skills'){
    include 'view/frontend/updateSkills.php';
}
elseif($module == 'qualifications'){
    include 'view/frontend/updateQualifications.php';
}
elseif($module == 'experience'){
    include 'view/frontend/updateExperience.php';
}


?>
