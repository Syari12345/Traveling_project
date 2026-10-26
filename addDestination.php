<?php

include_once("config.php");

if(isset($_POST['submit'])){
    $emri_destinacionit=$_POST['emri_destinacionit'];
    $shteti=$_POST['shteti'];
    $cmimi=$_POST['cmimi'];

    if(empty($emri_destinacionit)||empty($shteti)||empty($cmimi)){
        echo "Fill all fields!";
        header("refresh:2; url=destinations.php");
    }else{
        $sql="INSERT INTO destination(emri_destinacionit,shteti,cmimi)
        VALUES ('$emri_destinacionit','$shteti','$cmimi')";

        $insertDestination=$conn->prepare($sql);

        $insertDestination->execute();

        header("Location: destinations.php");
    }
}

?>