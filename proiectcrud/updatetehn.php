<?php
include 'connecttehn.php';
$idtehn=$_GET['updateid'];

$sql = "Select * from `listatehnicieni` where idtehn=$idtehn";
$resulttehn = mysqli_query($contehn, $sql);
$row = mysqli_fetch_assoc($resulttehn);
$nametehn=$row['nametehn'];
$emailtehn = $row['emailtehn'];
$mobiletehn = $row['mobiletehn'];
$specializare = $row['specializare'];

if(isset($_POST['submittehn'])){
  $nametehn=$_POST['nametehn'];
  $emailtehn=$_POST['emailtehn'];
  $mobiletehn=$_POST['mobiletehn'];
  $specializare=$_POST['specializare'];

  $sql = "update `listatehnicieni` set idtehn=$idtehn,nametehn='$nametehn',emailtehn='$emailtehn',mobiletehn='$mobiletehn',specializare='$specializare' where idtehn=$idtehn";
  $resulttehn = mysqli_query($contehn, $sql);
  if($resulttehn){
    // echo "Updated successfully";
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
          Tehnicieni laminare
      </h1>  
    </div>

    <div class="container my-5">
      <form method="post">

        <div class="mb-3">
          <label>Nume</label>
          <input type="text" class="form-control" placeholder="Introdu numele" name="nametehn" autocomplete="off" value=<?php echo $nametehn;?>>
        </div>
        
        
        <div class="mb-3">
          <label>Email</label>
          <input type="email" class="form-control" placeholder="Introdu emailul" name="emailtehn" autocomplete ="off" value=<?php echo $emailtehn;?>>
        </div>
        
        
        <div class="mb-3">
          <label>Nr. telefon</label>
          <input type="text" class="form-control" placeholder="Introdu nr. de telefon" name="mobiletehn" autocomplete="off" value=<?php echo $mobiletehn;?>>
        </div>
        
        <div class="mb-3">
          <label>Specializare</label>
          <input type="text" class="form-control" placeholder="Introdu specializarea" name="specializare" autocomplete="off" value=<?php echo $specializare;?>>
        </div>
        
        
        <button type="submit" class="btn btn-primary" name="submittehn">Update</button>
      </form>
    </div>
    