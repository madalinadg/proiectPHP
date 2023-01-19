<?php
include 'connecttehn.php';
if(isset($_GET['deleteid'])){
    $idtehn = $_GET['deleteid'];

    $sql = "delete from `listatehnicieni` where idtehn=$idtehn";
    $resulttehn = mysqli_query($contehn,$sql);
    if($resulttehn){
        // echo "Deleted successfull";
        header('location:displaytehn.php');
    }else{
        die(mysqli_error($contehn));
    }
}
