<?php
include 'controller/backend/config.php';

if(!isset($admin))
{
    header('location:'.$server_root.'/admin');
}
else
{
    include 'view/backend/ticket.php';
}

?>
