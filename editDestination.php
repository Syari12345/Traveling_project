<?php

include_once("config.php");

$id=$_GET['id'];

$sql="SELECT * FROM destination WHERE id=$id";
$selectDestination=$conn->prepare($sql);
$selectDestination->execute();

$destination=$selectDestination->fetch();

?>

<html>

<head>
    <title>Edit Destination</title>
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/main.css" rel="stylesheet">

    <style>
        .floatingInput{
            margin: 20px 0px;
        }
    </style>
</head>

<body>

<header class="navbar navbar-dark sticky-top p-3 shadow">
    <a class="navbar-brand px-3" href="home.php"> Journy Vista
    </a>

    <div class="navbar-nav">
        <a href="destinations.php" class="nav-link px-3">Destinations</a>
    </div>
</header>

<div class="container py-5">

    <h1 class="h2 mb-4">Edit Destination</h1>

    <form action="updateDestination.php" method="post">

        <input type="hidden" name="id"
        value="<?php echo $destination['id']; ?>">

        <div class="form-floating">
            <input type="text" class="form-control floatingInput" name="emri_destinacionit" id="emri_destinacionit" value="<?php echo $destination['emri_destinacionit']; ?>"
             required>
            <label for="emri_destinacionit">Destination Name</label>

        </div>

        <div class="form-floating">
            <input type="text" class="form-control floatingInput" name="shteti" id="shteti" value="<?php echo $destination['shteti']; ?>"
            required>
            <label for="shteti">Country</label>
        </div>


        <div class="form-floating">
            <input type="number" min="0" step="0.01" class="form-control floatingInput" name="cmimi" id="cmimi" value="<?php echo $destination['cmimi']; ?>"
            required>
            <label for="cmimi">Price</label>
        </div>

        <button type="submit" name="submit"
        class="btn btn-primary btn-lg w-100">
            Update Destination
        </button>

    </form>

</div>

</body>
</html>