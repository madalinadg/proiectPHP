<?php
include 'connectcomp.php';
$idcomp=$_GET['updateid'];

$sql = "Select * from `compartimente` where idcomp=$idcomp";
$resultcomp = mysqli_query($concomp, $sql);
$row = mysqli_fetch_assoc($resultcomp);
$denumirecopm=$row['denumirecopm'];
$numetehn = $row['numetehn'];

if(isset($_POST['submitcomp'])){
  $denumirecopm=$_POST['denumirecopm'];
  $numetehn=$_POST['numetehn'];

  $sql = "update `compartimente` set idcomp=$idcomp,denumirecopm='$denumirecopm',numetehn='$numetehn' where idcomp=$idcomp";
  $resultcomp = mysqli_query($concomp, $sql);
  if($resultcomp){
    // echo "Updated successfully";
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
          Compartimente laminare
      </h1>  
    </div>

    <div class="container my-5">
      <form method="post">

        <div class="mb-3">
          <label>Denumire compartiment</label>
          <input type="text" class="form-control" placeholder="Introdu denumirea" name="denumirecopm" autocomplete="off" value=<?php echo $denumirecopm;?>>
        </div>
        
        
        <div class="mb-3">
          <label>Nume tehnician</label>
          <input type="text" class="form-control" placeholder="Introdu numele" name="numetehn" autocomplete ="off" value=<?php echo $numetehn;?>>
        </div>
        
      
        
        
        <button type="submit" class="btn btn-primary" name="submitcomp">Update</button>
      </form>
    </div>
    