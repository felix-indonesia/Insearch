<?php

        date_default_timezone_set('Australia/Sydney');

        //FOR LOCAL DEVELOPMENT
        $server_root = '/insearch/';

        //Autoload classes
        function loadClass($classname)
        {
            require 'model/'.$classname.'.php';
        }
        spl_autoload_register('loadClass');
        session_start();


        //SIGN OUT
        if(isset($_GET['signout']))
        {
            session_unset();
            session_destroy();
            header('location: '.$server_root.'admin');
            exit();
        }

        //In case there is already a session, keep using it.
        if(isset($_SESSION['admin']))
        {
            $admin = $_SESSION['admin'];

        }



        //CONNECTION ALREADY EXISTS
        if(isset($admin))
        {
            $_SESSION['admin'] = $admin;

        }




        //initial database
        $db = new PDO('mysql:host=localhost;dbname=insearch','root','mysql');

        //if there is error in login
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $mainPerson     = new MainPerson($db);


//INCLUDE ALL THE FUCTIONS
include 'controller/functions.php';
?>
