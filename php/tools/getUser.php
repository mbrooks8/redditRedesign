<?php
include('../config.php');
if(isLogged())
{
    echo 1;
}else{
    echo 0;
}
?>
