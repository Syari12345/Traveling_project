<?php

session_start();
include_once("config.php");

// if(empty($_SESSION['username'])){
//     header("Location: login.php");
// }

$sql="SELECT * FROM booking";
$selectBookings=$conn->prepare($sql);
$selectBookings->execute();

$bookings_data=$selectBookings->fetchAll();
$selectBookings=$conn->prepare($sql);
$selectBookings->execute();

$bookings_data=$selectBookings->fetchAll();

?>

<html>

<head>
    <title>My Bookings</title>
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/main.css" rel="stylesheet">
</head>

<body>

<header class="navbar navbar-dark sticky-top p-3 shadow">
    <a class="navbar-brand px-3" href="home.php">
        Traveling Project
    </a>

    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a href="home.php" class="nav-link px-3">Home</a>
        </div>
    </div>

    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a href="logout.php" class="nav-link px-3">Logout</a>
        </div>
    </div>
</header>

<div class="container py-5">

    <h1 class="h2 mb-4">My Bookings</h1>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Travel Date</th>
        <th scope="col">Destination ID</th>
        <th scope="col">User ID</th>
        <th scope="col">Status</th>
        <th scope="col">Number of People</th>
    </tr>
</thead>

<tbody>
    <?php foreach($bookings_data as $booking){ ?>
    <tr>
        <td><?php echo $booking['id']; ?></td>
        <td><?php echo $booking['data']; ?></td>
        <td><?php echo $booking['destinationID']; ?></td>
        <td><?php echo $booking['userID']; ?></td>
        <td><?php echo $booking['statusi']; ?></td>
        <td><?php echo $booking['nr_personave']; ?></td>
    </tr>
    <?php } ?>
</tbody>

        </table>
    </div>

    <a href="home.php" class="btn btn-primary">Back to Destinations</a>

</div>

</body>
</html>