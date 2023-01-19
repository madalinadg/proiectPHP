<?php
include 'connectcomp.php';
if(isset($_GET['deleteid'])){
    $idcomp = $_GET['deleteid'];

    $sql = "delete from `compartimente` where idcomp=$idcomp";
    $resultcomp = mysqli_query($concomp,$sql);
    if($resultcomp){
        // echo "Deleted successfull";
        header('location:displaycomp.php');
    }else{
        die(mysqli_error($concomp));
    }
}
