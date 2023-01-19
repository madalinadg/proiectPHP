<?php
include 'connect.php';
$id=$_GET['updateid'];

$sql = "Select * from `crudop` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name=$row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$procedura = $row['procedura'];

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $procedura=$_POST['procedura'];

  $sql = "update `crudop` set id=$id,name='$name',email='$email',mobile='$mobile',procedura='$procedura' where id=$id";
  $result = mysqli_query($con, $sql);
  if($result){
    // echo "Updated successfully";
    header('location:display.php');
  }else{
    die(mysqli_error($con));
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
          Clienți laminare
      </h1>  
    </div>

    <div class="container my-5">
      <form method="post">

        <div class="mb-3">
          <label>Nume</label>
          <input type="text" class="form-control" placeholder="Introdu numele" name="name" autocomplete="off" value=<?php echo $name;?>>
        </div>
        
        
        <div class="mb-3">
          <label>Email</label>
          <input type="email" class="form-control" placeholder="Introdu emailul" name="email" autocomplete ="off" value=<?php echo $email;?>>
        </div>
        
        
        <div class="mb-3">
          <label>Nr. telefon</label>
          <input type="text" class="form-control" placeholder="Introdu nr. de telefon" name="mobile" autocomplete="off" value=<?php echo $mobile;?>>
        </div>
        
        <div class="mb-3">
          <label>Procedură</label>
          <input type="text" class="form-control" placeholder="Introdu procedura" name="procedura" autocomplete="off" value=<?php echo $procedura;?>>
        </div>
        
        
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
      </form>
    </div>
    