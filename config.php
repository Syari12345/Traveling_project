
<?php

     $u="root";
     $pass="";
     $server="localhost";
     $dbname="traveling_project";

     try{
        $conn=new PDO("mysql:host=$server;dbname=$dbname",$u,$pass);

     } catch (Exception $e) {
        echo "Error:". $e->getMessage();
     }
     ?>