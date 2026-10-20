<?php

include_once("config.php");

$selectedDestinations=$conn->prepare("SELECT * FROM destination");
$selectedDestinations->execute();

$destinations_data=$selectedDestinations->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journey Vista</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

<header class="navbar navbar-dark bg-dark p-3 shadow">

     <a class="navbar-brand" href="home.php">Journey Vista</a>

      <div class="navbar-nav">
        <a href="bookings.php" class="nav-link">My Bookings</a>
         <a href="logout.php" class="nav-link">Logout</a>
    </div>

</header>

<div class="album py-5 bg-light">
    <div class="container">
        <h1 class="mb-4">Explore Destinahions</h1>

    <?php foreach($destinations_data as $destination) ?>
     <div class="col">
        <div class="card shadow-sm h-100">
            
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrJPjVOBTNL8IF5uG9lpZ5xtjCQcVRvPq72cYCBNeFnOBTgUq68rYFgjgs&s=10" height="500" alt="pic">

   <div class="card-body">











