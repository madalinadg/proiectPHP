<?php
include 'connectpromo.php';
if(isset($_GET['deleteid'])){
    $idpromo = $_GET['deleteid'];

    $sql = "delete from `promotii` where idpromo=$idpromo";
    $resultpromo = mysqli_query($conpromo,$sql);
    if($resultpromo){
        // echo "Deleted successfull";
        header('location:displaypromo.php');
    }else{
        die(mysqli_error($conpromo));
    }
}
