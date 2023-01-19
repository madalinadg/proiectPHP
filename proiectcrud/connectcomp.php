<?php

$concomp = new mysqli('localhost', 'root', null, 'operationcrud');

if(!$concomp){
    die(mysqli_error($concomp));
}