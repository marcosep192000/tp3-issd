<?php

require_once './modelo/conexion.php';

if (isset($_POST['submit'])) {
    $titulo =  $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $tipoSolicitud = $_POST['opcion_seleccionada'];
    $semana='' ;
    if (strlen($titulo) < 3) {
        echo '<div class="bs-component">
                <div class="alert alert-dismissible alert-danger">
                  <strong>Debes ingresar xxx.</strong>
                </div>
              </div>';
    } elseif (strlen($descripcion) >= 100 && strlen($descripcion) < 5) {
        echo '<div class="bs-component">
                <div class="alert alert-dismissible alert-danger">
                  <strong>Debes ingresar mas de 5 caracteres y menos que 100.</strong>
                </div>
              </div>';
    } else {
  
    if ($tipoSolicitud ==1){
        $semana=1; }
        elseif ($tipoSolicitud==2){$semana =2; }
        else{ $semana = 3;}
    $fecha_actual = date('Y-m-d');
    $fecha = date('Y-m-d', strtotime($fecha_actual . "+{$semana} week"));
    if (isset($_SESSION['nombre'])) {
    $nombreDeUsuario = $_SESSION["nombre"] . "," . $_SESSION["apellido"];
    }

    $SQL_Insert = "INSERT INTO solicitud (titulo, descripcion, fechaActual, fecha, usuario, id_tipo_solicitud)
                   VALUES ('$titulo', '$descripcion', NOW(), '$fecha', '$nombreDeUsuario', '$tipoSolicitud')";

    $resultado = mysqli_query($conexion, $SQL_Insert);
    if (!$resultado) {
        $errorCode = mysqli_error($conexion);
        echo "Error en la inserción: " . $errorCode;
    } 
    
    
    
    else {
        echo ' <div class="bs-component">
                <div class="alert alert-dismissible alert-success">
                  <strong>Solicitud almacenada!</strong>
                </div>
              </div>';
    }
}
}

?>