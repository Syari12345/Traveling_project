<?php

include_once("config.php");

if(isset($_POST['submit'])){
    $destination_id=$_POST['destination_id'];
    $data=$_POST['data'];
    $nr_personave=$_POST['nr_personave'];
    $user_id=1;

    if(empty($nr_personave)||empty($data)){
        echo "Fill all fields!";
        header("refresh:2; url=details.php?destination_id=$destination_id");
    }else{
        $sql="INSERT INTO booking(data,destinationID,userID,statusi,nr_personave)
        VALUES ('$data',$destination_id,$user_id,'Pending',$nr_personave)";
        $insertBooking=$conn->prepare($sql);

        $insertBooking->execute();

        header("Location: home.php");
    }
}
?>