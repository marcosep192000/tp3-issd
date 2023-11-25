<?php
function Listar_Usuarios($conexion)
{
    $sql = "SELECT COUNT(*) as total_usuarios FROM usuario";
    $result = mysqli_query($conexion,$sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "" . $row["total_usuarios"];
    } else {
        echo "No se encontraron usuarios";
    }
}?>