<?php

     $u="root";
     $pass="";
     $server="localhost";
     $dbname="traveling_project";

     try{
        $conn=new PDO("mysql:host=$server;dbname=$dbname",$u,$pass);
        // echo "<strong>Connected successfully!</strong>";

     } catch (Exception $e) {
        echo "Error:". $e->getMessage();
     }
$u="root";
$pass="";
$server="localhost";
$dbname="movie_project";

try{
    $conn=new PDO("mysql:host=$server;dbname=$dbname",$u,$pass);
    echo "<strong>connected successfully!</strong>";

} catch (Exception $e) {
    echo "Error:". $e->getMessage();
}