
<?php

include_once("config.php");

if(isset($_POST['submit'])){

    $id=$_POST['id'];
    $emri_destinacionit=$_POST['emri_destinacionit'];
    $shteti=$_POST['shteti'];
    $cmimi=$_POST['cmimi'];

    if(empty($emri_destinacionit)||empty($shteti)||empty($cmimi)){
        echo "Fill all fields!";
        header("refresh:2; url=destinations.php");
    }else{

        $sql="UPDATE destination
        SET emri_destinacionit=:emri_destinacionit,
        shteti=:shteti,
        cmimi=:cmimi
        WHERE id=:id";

        $updateDestination=$conn->prepare($sql);

        $updateDestination->execute([
            'emri_destinacionit'=>$emri_destinacionit,
            'shteti'=>$shteti,
            'cmimi'=>$cmimi,
            'id'=>$id
        ]);

        header("Location: destinations.php");
        exit;
    }
}

?>