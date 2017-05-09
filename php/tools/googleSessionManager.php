<?php
session_start();
?>
<?php

include("../config.php");

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * from users WHERE email ='".$_POST['email']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION["email"] = $_POST["email"];
    echo 'success';
}else
{
     echo 'broken';
}
?>
