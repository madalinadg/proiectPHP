<?php

$conpromo = new mysqli('localhost', 'root', null, 'operationcrud');

if(!$conpromo){
    die(mysqli_error($conpromo));
}