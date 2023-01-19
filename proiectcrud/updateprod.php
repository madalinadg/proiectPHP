<?php
include 'connectprod.php';
$idprod=$_GET['updateid'];

$sql = "Select * from `produse` where idprod=$idprod";
$resultprod = mysqli_query($conprod, $sql);
$row = mysqli_fetch_assoc($resultprod);
$denumireprod=$row['denumireprod'];
$pretprod = $row['pretprod'];

if(isset($_POST['submitprod'])){
  $denumireprod=$_POST['denumireprod'];
  $pretprod=$_POST['pretprod'];

  $sql = "update `produse` set idprod=$idprod,denumireprod='$denumireprod',pretprod='$pretprod' where idprod=$idprod";
  $resultprod = mysqli_query($conprod, $sql);
  if($resultprod){
    // echo "Updated successfully";
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
          Produse laminare
      </h1>  
    </div>

    <div class="container my-5">
      <form method="post">

        <div class="mb-3">
          <label>Denumire produse</label>
          <input type="text" class="form-control" placeholder="Introdu denumirea" name="denumireprod" autocomplete="off" value=<?php echo $denumireprod;?>>
        </div>
        
        
        <div class="mb-3">
          <label>Pret produse</label>
          <input type="text" class="form-control" placeholder="Introdu pret" name="pretprod" autocomplete ="off" value=<?php echo $pretprod;?>>
        </div>
        
      
        
        
        <button type="submit" class="btn btn-primary" name="submitprod">Update</button>
      </form>
    </div>