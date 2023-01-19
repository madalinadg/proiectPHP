<?php
include 'connectprod.php';
if(isset($_POST['submitprod'])){
  $denumireprod=$_POST['denumireprod'];
  $pretprod=$_POST['pretprod'];

  $sql = "insert into `produse` (denumireprod,pretprod) values('$denumireprod','$pretprod')";
  $resultprod = mysqli_query($conprod, $sql);
  if($resultprod){
    // echo "Data inserted successfully";
    header('location:displayprod.php');
  }else{
    die(mysqli_error($conprod));
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
          Produse salon
      </h1>  
    </div>

    <div class="container my-5">
      <form method="post">

        <div class="mb-3">
          <label>Denumire produse</label>
          <input type="text" class="form-control" placeholder="Introdu denumirea" name="denumireprod" autocomplete="off">
        </div>
        
        
        <div class="mb-3">
          <label>Pret</label>
          <input type="text" class="form-control" placeholder="Introdu pretul" name="pretprod" autocomplete ="off">
        </div>
        
        
        
        
        
        
        <button type="submit" class="btn btn-primary" name="submitprod">Submit</button>
      </form>
    </div>
    