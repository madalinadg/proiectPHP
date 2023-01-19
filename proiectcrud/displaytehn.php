<?php
include 'connecttehn.php';
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
  <button class="btn btn-primary my-5"><a href="tehnicieni.php" class="text-light">Adauga tehnician</a>
    
  </button>
  <table class="table">
      <thead class="table-dark">
        <tr>
          <th scope="col">Nr. crt.</th>
          <th scope="col">Nume</th>
          <th scope="col">Email</th>
          <th scope="col">Nr. telefon</th>
          <th scope="col">Specializare</th>
          <th scope="col">Operație</th>
        </tr>
      </thead>

      <tbody>

      <?php

      $sql = "select * from `listatehnicieni`";
      $resulttehn = mysqli_query($contehn, $sql);
      if($resulttehn){
        while( $row = mysqli_fetch_assoc($resulttehn)){
          $idtehn = $row['idtehn'];
          $nametehn = $row['nametehn'];
          $emailtehn = $row['emailtehn'];
          $mobiletehn = $row['mobiletehn'];
          $specializare = $row['specializare'];
          echo '<tr>
          <th scope="row">'.$idtehn.'</th>
          <td>'.$nametehn.'</td>
          <td>'.$emailtehn.'</td>
          <td>'.$mobiletehn.'</td>
          <td>'.$specializare.'</td>
          <td>
          <button class="btn btn-primary"><a href="updatetehn.php?updateid='.$idtehn.'" class="text-light">Actualizeaza</a></button>
          <button class="btn btn-danger"><a href="deletetehn.php?deleteid='.$idtehn.'" class="text-light">Sterge</a></button>
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