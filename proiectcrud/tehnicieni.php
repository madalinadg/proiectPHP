<?php
include 'connecttehn.php';
if(isset($_POST['submittehn'])){
  $nametehn=$_POST['nametehn'];
  $emailtehn=$_POST['emailtehn'];
  $mobiletehn=$_POST['mobiletehn'];
  $specializare=$_POST['specializare'];

  $sql = "insert into `listatehnicieni` (nametehn,emailtehn,mobiletehn,specializare) values('$nametehn','$emailtehn','$mobiletehn','$specializare')";
  $resulttehn = mysqli_query($contehn, $sql);
  if($resulttehn){
    // echo "Data inserted successfully";
    header('location:displaytehn.php');
  }else{
    die(mysqli_error($contehn));
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
          Tehnicieni salon
      </h1>  
    </div>

    <div class="container my-5">
      <form method="post">

        <div class="mb-3">
          <label>Nume</label>
          <input type="text" class="form-control" placeholder="Introdu numele" name="nametehn" autocomplete="off">
        </div>
        
        
        <div class="mb-3">
          <label>Email</label>
          <input type="email" class="form-control" placeholder="Introdu emailul" name="emailtehn" autocomplete ="off">
        </div>
        
        
        <div class="mb-3">
          <label>Nr. telefon</label>
          <input type="text" class="form-control" placeholder="Introdu nr. de telefon" name="mobiletehn" autocomplete="off">
        </div>
        
        <div class="mb-3">
          <label>Specializare</label>
          <input type="text" class="form-control" placeholder="Introdu specializarea" name="specializare" autocomplete="off">
        </div>
        
        
        
        
        <button type="submit" class="btn btn-primary" name="submittehn">Submit</button>
      </form>
    </div>
    