<?php
include 'connectcomp.php';
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
  <button class="btn btn-primary my-5"><a href="compartiment.php" class="text-light">Adauga compartiment</a>
    
  </button>
  <table class="table">
      <thead class="table-dark">
        <tr>
          <th scope="col">Nr. crt.</th>
          <th scope="col">Denumire compartiment</th>
          <th scope="col">Nume tehnician</th>
          <th scope="col">Operație</th>
        </tr>
      </thead>

      <tbody>

      <?php

      $sql = "select * from `compartimente`";
      $resultcomp = mysqli_query($concomp, $sql);
      if($resultcomp){
        while( $row = mysqli_fetch_assoc($resultcomp)){
          $idcomp = $row['idcomp'];
          $denumirecopm = $row['denumirecopm'];
          $numetehn = $row['numetehn'];
          echo '<tr>
          <th scope="row">'.$idcomp.'</th>
          <td>'.$denumirecopm.'</td>
          <td>'.$numetehn.'</td>
          <td>
          <button class="btn btn-primary"><a href="updatecomp.php?updateid='.$idcomp.'" class="text-light">Actualizeaza</a></button>
          <button class="btn btn-danger"><a href="deletecomp.php?deleteid='.$idcomp.'" class="text-light">Sterge</a></button>
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