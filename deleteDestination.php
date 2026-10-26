<?php

include_once("config.php");

$id=$_GET['id'];

$sql="DELETE FROM destination WHERE id=$id";
$deleteDestination=$conn->prepare($sql);

$deleteDestination->execute();

header("Location: destinations.php");

?>