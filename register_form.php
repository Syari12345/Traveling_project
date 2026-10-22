<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
      <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>

<div class="container py-5">

    <div class="form-signin">

        <form action="register.php" method="post">

            <h1 class="h3 mb-3 fw-normal">Create Account</h1>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" placeholder="Full Name" name="emri" id="emri" required>
                <label for="emri">Full Name</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" placeholder="Username" name="username" id="username" required>
                <label for="username">Username</label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                <label for="email">Email</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                <label for="password">Password</label>
            </div>

            <button type="submit" name="submit" class="btn btn-primary btn-lg w-100">
                Register
            </button>

            <p class="mt-3 text-center">
                Already have an account
                <a href="login.php">Login here</a>
            </p>

            <p class="text-center">
                <a href="index.php">Back to Home</a>
            </p>

        </form>

    </div>

</div>


    
</body>
