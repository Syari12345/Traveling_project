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
<head>
     <title>Destinations</title>
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
    <a class="navbar-brand px-3" href="home.php"> Journey Vista
</a>

       <div class="navbar-nav">
         <a href="home.php" class="nav-link px-3">Home</a>
    </div>



        <div class="navbar-nav">

        <a href="bookings.php" class="nav-link px-3">Bookings</a>
    </div>


    <div class="navbar-nav">
        <a href="logout.php" class="nav-link px-3">Logout</a>
    </div>

</header>
<div class="container py-5">

 <h1 class="h2 mb-4">Add Destination</h1>

    <form action="addDestination.php" method="post">
          <div class="form-floating">

        <input type="text" class="form-control floatingInput"
            placeholder="Destination Name" name="emri_destinacionit"
        id="emri_destinacionit" required>
            <label for="emri_destinacionit">Destination Name</label>
        </div>
         


         <div class="form-floating">
            <input type="text" class="form-control floatingInput"
            placeholder="Country" name="shteti" id="shteti" required>
            <label for="shteti">Country</label>
        </div>

   <div class="form-floating">
            <input type="number"
            class="form-control floatingInput"
            placeholder="Price" name="cmimi" id="cmimi" required>
            <label for="cmimi">Price</label>
        </div>

         <button type="submit" name="submit"
        class="btn btn-primary btn-lg w-100"> Add Destination </button>

        <form>



         <h2 class="mb-4">All Destinations</h2>

         
    <div class="table-responsive">
        <table class="table table-striped table-sm">
<thead>
    <tr>

        <th scope="col">ID</th>
        <th scope="col">Destination</th>
        <th scope="col">Country</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
    </tr>
</thead>

  <tbody>

  <?php foreach($destinations_data as $destination){ ?>

<tr>
      <td><?php echo $destination['id']; ?></td>
     <td><?php echo $destination['emri_destinacionit']; ?></td>
        <td><?php echo $destination['shteti']; ?></td>
    <td><?php echo $destination['cmimi']; ?></td>
    <td>
        <a href="deleteDestination.php?id=<?php echo $destination['id']; ?>"
      class="btn btn-sm btn-danger">
            Delete</a>
 </td>
   </tr>

             <?php } ?>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>
