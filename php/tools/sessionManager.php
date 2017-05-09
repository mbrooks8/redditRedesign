<?php
session_start();
?>
<?php
/*echo "Favorite color is " . $_SESSION["username"] . ".<br>";*/
$users = array("eperez58","mbrooks8","areyes43","nvaishampayan","dhalili");
if(in_array($_POST["username"],$users)){
    $_SESSION["username"] = $_POST["username"];
    echo $_SESSION["username"];
    header('Location: ../../');
}else
{
     header('Location: ./login.php');
}
?>
