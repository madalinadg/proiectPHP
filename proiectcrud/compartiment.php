<?php
include 'connectcomp.php';
if(isset($_POST['submitcomp'])){
  $denumirecopm=$_POST['denumirecopm'];
  $numetehn=$_POST['numetehn'];

  $sql = "insert into `compartimente` (denumirecopm,numetehn) values('$denumirecopm','$numetehn')";
  $resultcomp = mysqli_query($concomp, $sql);
  if($resultcomp){
    // echo "Data inserted successfully";
    header('location:displaycomp.php');
  }else{
    die(mysqli_error($concomp));
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
          compartimente salon
      </h1>  
    </div>

    <div class="container my-5">
      <form method="post">

        <div class="mb-3">
          <label>Denumire compartiment</label>
          <input type="text" class="form-control" placeholder="Introdu denumirea" name="denumirecopm" autocomplete="off">
        </div>
        
        
        <div class="mb-3">
          <label>Nume tehnician</label>
          <input type="text" class="form-control" placeholder="Introdu nume tehnician" name="numetehn" autocomplete ="off">
        </div>
        
        
        
        
        <button type="submit" class="btn btn-primary" name="submitcomp">Submit</button>
      </form>
    </div>
    