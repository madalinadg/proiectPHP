<?php
include 'connectprod.php';
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
  <button class="btn btn-primary my-5"><a href="produse.php" class="text-light">Adauga produse</a>
    
  </button>
  <table class="table">
      <thead class="table-dark">
        <tr>
          <th scope="col">Nr. crt.</th>
          <th scope="col">Denumire produse</th>
          <th scope="col">Pret</th>
          <th scope="col">Operație</th>
        </tr>
      </thead>

      <tbody>

      <?php

      $sql = "select * from `produse`";
      $resultprod = mysqli_query($conprod, $sql);
      if($resultprod){
        while( $row = mysqli_fetch_assoc($resultprod)){
          $idprod = $row['idprod'];
          $denumireprod = $row['denumireprod'];
          $pretprod = $row['pretprod'];
          echo '<tr>
          <th scope="row">'.$idprod.'</th>
          <td>'.$denumireprod.'</td>
          <td>'.$pretprod.'</td>
          <td>
          <button class="btn btn-primary"><a href="updateprod.php?updateid='.$idprod.'" class="text-light">Actualizeaza</a></button>
          <button class="btn btn-danger"><a href="deleteprod.php?deleteid='.$idprod.'" class="text-light">Sterge</a></button>
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