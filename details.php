<?php

include_once("config.php");

if(isset($_GET['destination_id'])){
    $destination_id=$_GET['destination_id'];

    $sql="SELECT * FROM destination WHERE id=:id";
    $selectedDestination=$conn->prepare($sql);

    $selectedDestination->execute(['id'=>$destination_id]);

    $destination=$selectedDestination->fetch();
 }else{
     header("Location: home.php");
     exit;
 }

?>

<html>
<head>
    <title>Destination Details</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

<header class="navbar navbar-dark sticky-top p-3 shadow">
    <a class="navbar-brand px-3" href="home.php">
        Traveling Project
    </a>

    <div class="navbar-nav">
        <a href="home.php" class="nav-link px-3">Home</a>
    </div>

    <div class="navbar-nav">
        <a href="bookings.php" class="nav-link px-3">My Bookings</a>
    </div>
</header>

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row row-cols-1 row-cols-md-2 g-3">

            <div class="col">
                <div class="card shadow-sm">

                    <div class="card-body">

                        <h4 class="card-text">
                            <?php echo $destination['emri_destinacionit']; ?>
                        </h4>

                        <p class="text-muted">
                            Country: <?php echo $destination['shteti']; ?>
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="home.php"
                                   class="btn btn-sm btn-outline-primary">
                                    Back
                                </a>
                            </div>

                            <small class="text-success">
                                Price: <?php echo $destination['cmimi']; ?> per person
                            </small>
                        </div>

                        <hr>

                        <h4 class="card-text">Book Your Trip</h4>

                        <form action="book.php" method="post">

                            <input type="hidden" name="destination_id"
                            value="<?php echo $destination['id']; ?>">

                            <div class="form-floating mb-3">
                                <input type="date" class="form-control"
                                id="data" name="data" required>
                                <label for="data">Travel Date</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="number" min="1" max="20"
                                class="form-control" id="nr_personave"
                                name="nr_personave" placeholder="Number of people"
                                required>
                                <label for="nr_personave">Number of People</label>
                            </div>

                            <button type="submit" name="submit"
                            class="btn btn-primary btn-lg w-100">
                                Book Trip
                            </button>

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>