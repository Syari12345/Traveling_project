<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <main class="form-signin">

        <form action="loginLogic.php" method="post">

            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" placeholder="Username" name="username" id="username" required>

                <label for="username">Username</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" placeholder="Password" name="password"id="password" required>

                <label for="password">Password</label>
            </div>

            <div class="checkbox mb-3">
                   <label>
                       <input type="checkbox" name="remember"  value="remember-me">Remember Me
                </label>
            </div>

            <button class="btn btn-primary w-100 py-2"type="submit" name="submit">
                Sign in
            </button>

            <p class="mt-3 text-center"> Don't have an account?
                <a href="register.php">Register here</a>
            </p>

            <p class="text-center">
                <a href="index.php">Back to Home</a>
            </p>

        </form>

    </main>

    


</body>
</html>