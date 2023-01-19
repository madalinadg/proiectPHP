<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $procedura=$_POST['procedura'];

  $sql = "insert into `crudop` (name,email,mobile,procedura) values('$name','$email','$mobile','$procedura')";
  $result = mysqli_query($con, $sql);
  if($result){
    // echo "Data inserted successfully";
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
          <input type="text" class="form-control" placeholder="Introdu numele" name="name" autocomplete="off">
        </div>
        
        
        <div class="mb-3">
          <label>Email</label>
          <input type="email" class="form-control" placeholder="Introdu emailul" name="email" autocomplete ="off">
        </div>
        
        
        <div class="mb-3">
          <label>Nr. telefon</label>
          <input type="text" class="form-control" placeholder="Introdu nr. de telefon" name="mobile" autocomplete="off">
        </div>
        
        <div class="mb-3">
          <label>Procedură</label>
          <input type="text" class="form-control" placeholder="Introdu procedura" name="procedura" autocomplete="off">
        </div>
        
        
        
        
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
    </div>
    