<?php

$con = new mysqli('localhost', 'root', null, 'operationcrud');

if(!$con){
    die(mysqli_error($con));
}