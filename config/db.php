<?php
$host = 'localhost';
$db = 'crud';
$usuario = 'root';
$pass ='';

$conn =  new mysqli($host, $usuario, $pass, $db);

if(!$conn){
    echo 'Error';
}


?>