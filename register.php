<?php
include_once('config.php');

if(isset($_POST['submit'])){

    $emri=$_POST['emri'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

         if(empty($emri)||empty($username)||empty($email)||empty($password))
echo "Fill all fields!";
    }else{

      $sql="SELECT * FROM users WHERE username='$username' OR email='$email'";
          $tempSql=$conn->prepare($sql);
            $tempSql->execute();

            if($tempSql->rowCount()>0){
                echo "User with email/username already exists!";
            }else{
                $hashedpassword=password_hash($password,PASSWORD_BCRYPT);
                $query="INSERT INTO users(emri,username,email,password) VALUES ('$emri','$username','$email','$hashedpassword')";
                $insertSql=$conn->prepare($query);
                $insertSql->execute();
                echo "New user created successfully, in 2 seconds please login!";
                 header("refresh:2; url=login.php");
            }
            }


?>
