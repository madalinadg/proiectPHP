<?php
include 'connectpromo.php';
$idpromo=$_GET['updateid'];

$sql = "Select * from `promotii` where idpromo=$idpromo";
$resultpromo = mysqli_query($conpromo, $sql);
$row = mysqli_fetch_assoc($resultpromo);
$denumirepromo=$row['denumirepromo'];
$lunapromo = $row['lunapromo'];

if(isset($_POST['submitpromo'])){
  $denumirepromo=$_POST['denumirepromo'];
  $lunapromo=$_POST['lunapromo'];

  $sql = "update `promotii` set idpromo=$idpromo,denumirepromo='$denumirepromo',lunapromo='$lunapromo' where idpromo=$idpromo";
  $resultpromo = mysqli_query($conpromo, $sql);
  if($resultpromo){
    // echo "Updated successfully";
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
          Promotii laminare
      </h1>  
    </div>

    <div class="container my-5">
      <form method="post">

        <div class="mb-3">
          <label>Denumire promotii</label>
          <input type="text" class="form-control" placeholder="Introdu denumirea" name="denumirepromo" autocomplete="off" value=<?php echo $denumirepromo;?>>
        </div>
        
        
        <div class="mb-3">
          <label>Luna promotii</label>
          <input type="text" class="form-control" placeholder="Introdu luna" name="lunapromo" autocomplete ="off" value=<?php echo $lunapromo;?>>
        </div>
        
      
        
        
        <button type="submit" class="btn btn-primary" name="submitpromo">Update</button>
      </form>
    </div>