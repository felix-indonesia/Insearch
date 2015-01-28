<?php


//GET THE CURRENT PAGE
function curPageURL() 
{
    $pageURL = 'http';
    
    if (array_key_exists('HTTPS', $_SERVER) && $_SERVER["HTTPS"] == "on") 
    {
        $pageURL .= "s";
    }
    
    $pageURL .= "://";
    
    if ($_SERVER["SERVER_PORT"] != "80") 
    {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } 
    
    else 
    {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    
    return $pageURL;
}


//RETURN THE MONTH AS A STRING
function monthToString($e)
{
    $month = '';
    switch($e)
    {
        case 1: $month = 'January';     break;
        case 2: $month = 'February';    break;
        case 3: $month = 'March';       break;
        case 4: $month = 'April';       break;
        case 5: $month = 'May';         break;
        case 6: $month = 'June';        break;
        case 7: $month = 'July';        break;
        case 8: $month = 'August';      break;
        case 9: $month = 'September';   break;
        case 10:$month = 'October';     break;
        case 11:$month = 'November';    break;
        default:$month = 'December';
    }
    return $month;
}

//ADD RANDOM NUMBER 1-99
function randNum($e)
{
    return $e += rand(13, 27);
}

//COMBINE DOB
function combineDOB($a, $b, $c)
{
    return $a."-".$b."-".$c;
}

//ENCRYPT PASSWORD
function encrypt($e)
{
    return sha1($e);
}

function validName($e){
    $ban = "/[\^<,\"@\/\{\}\(\)\*\$%\?=>:\|;#]+/i";
    return !preg_match($ban, $e);
}

function validEmail($e){
    return filter_var($e, FILTER_VALIDATE_EMAIL);
}

function personalEncrypt($e){
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $e, MCRYPT_MODE_CBC, md5( md5( $cryptKey ))));
    return( $qEncoded );
}

?>
