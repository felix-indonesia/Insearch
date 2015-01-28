<?php
date_default_timezone_set('Australia/Sydney');

//FOR LOCAL DEVELOPMENT
$server_root = '/insearch';
$sr = '/insearch';
//LIVE WEBSITE
//$server_root = '/';

function loadClass($classname)
{
    require 'model/'.$classname. '.php';
}
spl_autoload_register('loadClass');
session_start();

$db = new PDO('mysql:host=localhost;dbname=insearch','root','mysql');       
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$mainPerson = new MainPerson($db);


//SIGN OUT
if(isset($_GET['signout']))
{
    session_unset();
    session_destroy();
    header('location: '.$server_root);
    exit();
}

//In case there is already a session, keep using it.
if(isset($_SESSION['perso']))
{
    $perso = $_SESSION['perso'];
    
}



if(isset($_POST['signin']))
{
    $personEmail = $_POST['email'];
    $password = personalEncrypt($_POST['password']);
    
    if($mainPerson->idExists($staffID))
    {
        $user   = $mainPerson->checkUser($personEmail);
        $word   = $user->getPassword();
        
        if($mainPerson->checkPassword($password, $word))
        {
            if($user->isActive())
            {
                $perso = $user;
            }
            else
            {
                unset($user);
                $error = 'Something wrong with your account. Please contact us';
            }
        }
        else
        {
            unset($user);
            $error = 'Please, Double check your credentials.';
        }
    }
    
    else
    {
        $error = 'Sorry, '.$personEmail. ' is not registered with us';
    }
   
}


//CONNECTION ALREADY EXISTS
if(isset($perso))
{
    $_SESSION['perso'] = $perso;
    
}


//AJAX DATABASE
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'mysql');
define('DB_DATABASE', 'open');
$liveDB = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


//INCLUDE ALL THE FUCTIONS
include 'controller/functions.php';
?>
