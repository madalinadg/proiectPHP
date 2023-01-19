<?php

$contehn = new mysqli('localhost', 'root', null, 'operationcrud');

if(!$contehn){
    die(mysqli_error($contehn));
}