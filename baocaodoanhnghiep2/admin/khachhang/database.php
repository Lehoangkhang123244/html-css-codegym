<?php

$dsn="mysql:host=localhost; dbname=cosmetic";
$user="root";
$pass="";

try {
    $db=new PDO($dsn, $user, $pass);
} catch (Exception $ex) {
   
}