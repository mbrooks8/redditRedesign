<?php
/******     Database connection setup     ******/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "druplicate";




/******     manage your users login credentials.     ******/

function isLogged(){
    session_start();
    if(/*Add check for login here*/ true == false)
    {
        return 1;
    }
    return 0;
}

?>
