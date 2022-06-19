<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dsn="mysql:host=localhost; dbname=cosmetic";
$user="root";
$pass="";

try {
    $db=new PDO($dsn, $user, $pass);
} catch (Exception $ex) {
   
}