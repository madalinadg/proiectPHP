<?php
include 'connectpromo.php';
if(isset($_POST['submitpromo'])){
  $denumirepromo=$_POST['denumirepromo'];
  $lunapromo=$_POST['lunapromo'];

  $sql = "insert into `promotii` (denumirepromo,lunapromo) values('$denumirepromo','$lunapromo')";
  $resultpromo = mysqli_query($conpromo, $sql);
  if($resultpromo){
    // echo "Data inserted successfully";
    header('location:displaypromo.php');
  }else{
    die(mysqli_error($conpromo));
  }

}
?>








<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clienti laminare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container text-center">
      <h1 class="pt-4 bg-dark text-light rounded">
        <span>
          <img src="logo.svg" alt="">
        </span>
          Promotii salon
      </h1>  
    </div>

    <div class="container my-5">
      <form method="post">

        <div class="mb-3">
          <label>Denumire promotie</label>
          <input type="text" class="form-control" placeholder="Introdu denumirea" name="denumirepromo" autocomplete="off">
        </div>
        
        
        <div class="mb-3">
          <label>Luna promotie</label>
          <input type="text" class="form-control" placeholder="Introdu luna" name="lunapromo" autocomplete ="off">
        </div>
        
        
        
        
        <button type="submit" class="btn btn-primary" name="submitpromo">Submit</button>
      </form>
    </div>
    