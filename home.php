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
    <title>Journy Vista</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

<header class="navbar navbar-dark bg-dark p-3 shadow">
    <a class="navbar-brand" href="home.php">Journy Vistat</a>

    <div class="navbar-nav">
        <a href="bookings.php" class="nav-link">My Bookings</a>
        <a href="logout.php" class="nav-link">Logout</a>
    </div>
</header>

<div class="album py-5 bg-light">
    <div class="container">

        <h1 class="mb-4">Explore Destinations</h1>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


<?php foreach($destinations_data as $destination){ ?>
    <div class="col">
        <div class="card shadow-sm h-100">

            <div class="card-body">
                <h4 class="card-text">
                    <?php echo $destination['emri_destinacionit']; ?>
                </h4>

                <p class="text-muted">
                    Country: <?php echo $destination['shteti']; ?>
                </p>

                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="details.php?destination_id=<?php echo $destination['id']; ?>"
                           class="btn btn-sm btn-outline-primary"> Details
                        </a>

                        <a href="details.php?destination_id=<?php echo $destination['id']; ?>"
                           class="btn btn-sm btn-primary">
                            Book Trip
                        </a>
                    </div>

                    <small class="text-success">
                        <?php echo $destination['cmimi']; ?>
                    </small>
                </div>
            </div>

        </div>
    </div>
<?php } ?>

        </div>
    </div>
</div>

</body>
</html>


