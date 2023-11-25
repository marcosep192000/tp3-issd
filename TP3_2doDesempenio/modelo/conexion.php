<?php
            $Host = 'localhost';
            $User = 'root';
            $Password = 'riverplate';
            $BaseDeDatos = 'login_1';

  $conexion = mysqli_connect($Host, $User, $Password, $BaseDeDatos);
            if ($conexion != false) {
                print "<script>console.log('Coneccion exitosa!');</script>";
            } else {
                echo '<h2>Hubo algun error al intentar conectarse...</h2>';
            }
            
            ?>