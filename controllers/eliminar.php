<?php
if (isset($_GET)) {
    $id = $_GET['id'];
    if (!empty($id)) {
        include('../models/eliminar.php');
        $response = eliminar::delete($id);
    } else {
        echo "Por favor, envie un ID válido";
    }
} else {
    echo 'Error no hay informacion';
}
?>