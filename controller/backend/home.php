 <?php
include 'controller/backend/config.php';


//LOGIN FUCNTION
if(isset($_POST['username']) && isset($_POST['password']))
{
    if($_POST['username'] == 'admin')
    {
        if($_POST['password'] == 'admin')
        {
            $admin = $_COOKIE['PHPSESSID'];
        }else{
            unset($admin);
            $error = 'Check your password';   
        }
    }
    else
    {
        $error = 'Check your username';
    }
}


if(!isset($admin))
{
    include 'view/backend/signin.php';
}
else
{
    include 'view/backend/index.php';
}

?>
