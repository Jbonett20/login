<?php

if(isset($_POST)){
    $id  = $_POST['idUser'];
    $nombre = trim($_POST['name']);
    $correo =  trim($_POST['mail']);
    if(!empty($nombre) &&  !empty($correo)){
        include('../models/actualizar.php');
        $response = actualizar::update($correo,$id,$nombre);
        }else{
            echo "Por favor, envie informacion valida";
        }
}else{
    echo 'Error no hay informacion';
}






?>