<?php
if (isset($_POST['submit'])) {
    $nombre = $_POST['name'];
    $correo = $_POST['email'];
    $web = $_POST['website'];
    $comentario = $_POST['comment'];
    $genero = $_POST['gender'];
    echo "Nombre: ".$nombre."<br>";
    echo "E-mail: ".$correo."<br>";
    echo "Web: ".$web."<br>";
    echo "Comentario: ".$comentario."<br>";
    echo "Género: ".$genero."<br>";

    $archivo = $_FILES['file'];
    $nombre_archivo = $archivo['name'];
    $tipo_archivo = $archivo['type'];
    $ruta_temporal = $archivo['tmp_name'];
    $error = $archivo['error'];
    $tamaño = $archivo['size'];
    $ruta_destino = "subidas/".$nombre_archivo;


    if($error == UPLOAD_ERR_OK){
        move_uploaded_file($ruta_temporal, $ruta_destino);
        echo "Archivo subido correctamente";
    } else {
        echo "Error al subir el archivo";
    }
}
?>
