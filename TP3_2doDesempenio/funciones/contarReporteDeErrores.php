<?php
function Listar_Solicitudes($conexion)
{
    $sql = "SELECT COUNT(*) as total_error FROM solicitud where id_tipo_solicitud = 2;";
    $result = mysqli_query($conexion, $sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "" . $row["total_error"];
    } else {
        echo "No se encontraron solicitudes";
    }
}


?>