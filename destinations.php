<?php

session_start();
include_once("config.php");

// if(empty($_SESSION['username'])){
//     header("Location: login.php");
// }

$sql="SELECT * FROM destination";
$selectDestinations=$conn->prepare($sql);
$selectDestinations->execute();

$destinations_data=$selectDestinations->fetchAll();
?>

<html>





</html>
