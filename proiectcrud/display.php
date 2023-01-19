<?php
include 'connect.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud operation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a>
    
  </button>
  <table class="table">
      <thead class="table-dark">
        <tr>
          <th scope="col">Nr. crt.</th>
          <th scope="col">Nume</th>
          <th scope="col">Email</th>
          <th scope="col">Nr. telefon</th>
          <th scope="col">Procedură</th>
          <th scope="col">Operație</th>
        </tr>
      </thead>

      <tbody>

      <?php

      $sql = "select * from `crudop`";
      $result = mysqli_query($con, $sql);
      if($result){
        while( $row = mysqli_fetch_assoc($result)){
          $id = $row['id'];
          $name = $row['name'];
          $email = $row['email'];
          $mobile = $row['mobile'];
          $procedura = $row['procedura'];
          echo '<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$name.'</td>
          <td>'.$email.'</td>
          <td>'.$mobile.'</td>
          <td>'.$procedura.'</td>
          <td>
          <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Actualizeaza</a></button>
          <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Sterge</a></button>
          </td>
        </tr>';
        }
      }


      ?>

        

      </tbody>
  </table>
</div>
    
  <div class="container text-center btn-int my-5">
    <button class="btn btn-primary btn-int my-5"><a href="interfata.php" class="text-light">Pagina principala</a></button>
  </div>
</body>
</html>