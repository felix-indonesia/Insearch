<?php
include 'controller/frontend/config.php';


if($group == 'volunter'){
    include 'view/frontend/eventmanager.php';
}
elseif($group = 'guests'){
    include 'view/frontend/eventmanager.php';   
}
else{
    header("location: $server_root");
}



?>
