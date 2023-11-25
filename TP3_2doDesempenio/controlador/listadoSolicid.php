<?php
require_once './modelo/conexion.php';
$filaColor="";
$sql = "SELECT solicitud.*, tipo_solicitud.nombre_tipo_solicitud  
        FROM solicitud 
        INNER JOIN tipo_solicitud ON solicitud.id_tipo_solicitud = tipo_solicitud.id_tipo_solicitud";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
  
    while ($row = $result->fetch_assoc()) {
                    
      if ($row["id_tipo_solicitud"] == "3") {
         $filaColor=      '<tr class="table-danger">';
      }
      if ($row['id_tipo_solicitud'] == '2') {
            $filaColor = '<tr class="table-warning">';
      }
      if ($row['id_tipo_solicitud'] == '1') {
            $filaColor =  '<tr class="table-info">';
      }
      
        $descripcion_cortada = implode(' ', array_slice(str_word_count($row["descripcion"], 1), 0, 20));

      
        echo "{$filaColor}
            <td>{$row["id"]}</td>
            <td>{$row["titulo"]}</td>
            <td>{$descripcion_cortada}</td>
            <td>{$row["nombre_tipo_solicitud"]}</td>
           <td>" . date('d/m/Y', strtotime($row['fechaActual'])) . "</td>
            <td>" . date('d/m/Y', strtotime($row['fecha'])) . "</td>
            <td>{$row["usuario"]}</td>
           
            <td>
                <a href='#'>Ver detalles...</a>
                <a href='#'><i class='app-menu__icon fa fa-cog'></i>Eliminar...</a>
            </td>
        </tr>";
  
    }
} else {
    "No se encontraron resultados";
}
$conexion->close();
?>