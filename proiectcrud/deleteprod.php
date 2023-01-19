<?php
include 'connectprod.php';
if(isset($_GET['deleteid'])){
    $idprod = $_GET['deleteid'];

    $sql = "delete from `produse` where idprod=$idprod";
    $resultprod = mysqli_query($conprod,$sql);
    if($resultprod){
        // echo "Deleted successfull";
        header('location:displayprod.php');
    }else{
        die(mysqli_error($conprod));
    }
}
