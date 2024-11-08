<?php
require_once 'config.php';
error_reporting(0);
$link = getDBConexion();
    if (!$link) {
        echo 'Hubo un error al conectarse con la base de datos.';
        die;
    }
$errores='';
$nombreMateria = $_POST['nombreMateria'];
$numeroMateria = $_POST['numeroMateria'];
$anio = $_POST['anio'];
$division = $_POST['division'];
$enviar = $_POST['enviar'];

if($enviar == 'Dar de alta'){

        if (isset($_FILES['logoMateria']) && $_FILES['logoMateria']['error'] == 0) {
            $rutaEnvio = '../../paginas/imagenes/';
            $nombreArchivo = basename($_FILES['logoMateria']['name']);
            $direccionArchivo = $rutaEnvio . $nombreArchivo;
        
        
            if (move_uploaded_file($_FILES['logoMateria']['tmp_name'], $direccionArchivo)) {
                echo "La imagen se subió correctamente.<br>";
            } else {
                echo "Error al subir la imagen.";
            }
        } else {
            echo "No se ha recibido una imagen o hubo un error.";
        }

        $sql = "INSERT INTO materia (num_materia, nombre_materia, logo, anio, division)
                VALUES (
                $numeroMateria, '$nombreMateria', '$nombreArchivo', $anio, $division)";
        $result = mysqli_query($link, $sql);
        
        if ($result) {
        $filas_afectadas = mysqli_affected_rows($link);
            if ($filas_afectadas > 0) {
                echo "Se ha agregado la materia con éxito.";
            }}
            else {
                echo "Error en la consulta: " . mysqli_error($link);
            }
    }
    
    else if($enviar == 'Dar de baja'){

        $rutaEnvio = '../../paginas/imagenes/';
        $nombreArchivo = basename($_FILES['logoMateria']['name']);
        $direccionArchivo = $rutaEnvio . $nombreArchivo;
        if(file_exists($direccionArchivo)){
            unlink($direccionArchivo);
    }

        $sql = "DELETE FROM materia WHERE 
            num_materia = $numeroMateria 
            AND nombre_materia =  '$nombreMateria'
            AND logo = '$nombreArchivo'
            AND anio = $anio
            AND division = $division";
        $result = mysqli_query($link, $sql);
        
        if ($result) {
        $filas_afectadas = mysqli_affected_rows($link);
            if ($filas_afectadas > 0) {
                echo "Se ha eliminado la materia con éxito.";
            } else {
                echo "No se ha encontrado una materia con esos datos.";
            }}
            else {
                echo "Error en la consulta: " . mysqli_error($link);
            }
        
    }

