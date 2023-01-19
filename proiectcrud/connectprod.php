<?php

$conprod = new mysqli('localhost', 'root', null, 'operationcrud');

if(!$conprod){
    die(mysqli_error($conprod));
}