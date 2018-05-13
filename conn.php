<?php

$url= 'localhost';
$username= 'root';
$password= 'udohjoy';
$database= 'project';

try{
    $conn = new mysqli($url, $username, $password, $database);
//    echo "connection successful";
}
catch(exception $e){
    die("connection failed:". $e);
}

?>