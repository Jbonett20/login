<?php
class noticias{
    public static function save($noticia,$contenido){
        include('../config/db.php');
        session_start();
        $idUsuario = $_SESSION['idUsuario'];
        $consulta="INSERT INTO noticias(noticia,contenido,creador_id) VALUES ('$noticia','$contenido','$idUsuario')";
        $result = mysqli_query($conn, $consulta);
       if($result){
           header('Location: ../views/noticias.php');
       }else{
           echo 'ERROR AL CREAR LA NOTICIA';
        }
          
    }
    public static function listarNoticias() {
        include('../config/db.php');
        $query = "SELECT n.*, u.name FROM `noticias` as n
                  INNER JOIN user as u ON n.creador_id = u.id";
        
        $result = mysqli_query($conn, $query);
        $noticias = [];
    
        if (!$result) {
            echo 'No se pudo ejecutar la consulta';
            exit;
        } else {
            while ($obj = mysqli_fetch_assoc($result)) {
                $data = []; 
                $data['id'] = $obj['noticia_id'];
                $data['noticia'] = $obj['noticia'];
                $data['contenido'] = $obj['contenido'];
                $data['usuario'] = $obj['name'];
                $data['creador'] = $obj['creador_id'];
                $data['fecha'] = $obj['fechacreacion'];
                
                $noticias[] = $data; 
            }
        }
    
        return $noticias;
    }
}