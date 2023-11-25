<?php
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Consulta los tipos de solicitud disponibles
    $sql = "SELECT id_tipo_solicitud, nombre_tipo_solicitud FROM tipo_solicitud";
    $result = $conexion->query($sql);
while ($row = $result->fetch_assoc()) {
    $idTipoSolicitud = $row['id_tipo_solicitud'];
    $nombreTipoSolicitud = $row['nombre_tipo_solicitud'];
    $selectedOption = 'Desarrollo de nuevas funcionalidades'; 


    $checked = ($nombreTipoSolicitud == $selectedOption) ? 'checked' : '';


    
    echo "<label>
                <input type='radio' name='opcion_seleccionada' value='{$idTipoSolicitud}' {$checked}>
                {$nombreTipoSolicitud}
              </label><br>";
}
$conexion->close();
    ?>