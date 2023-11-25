<?php 
$errorCode ="";
require_once './modelo/conexion.php';

session_start();
if (!empty($_POST["btnEnviar"])) {
    if (!empty($_POST["username"]) and !empty($_POST["password"])) {
        $usuario = $_POST["username"];
        $password = $_POST["password"];
        $_SESSION = array();
    
        $sqlConsulta ="SELECT * FROM usuario WHERE username='$usuario' AND password=MD5('$password')";
       $sql= mysqli_query($conexion , $sqlConsulta);
       
        if ($datos = $sql->fetch_object()) {
            $_SESSION["id"] = $datos->id;
            $_SESSION["nombre"] = $datos->nombre;
            $_SESSION["apellido"] = $datos->apellido;
            $_SESSION["imagen"] = $datos->imagen;
            
          
            header("Location: ../TP3_2doDesempenio/index.php");
        } else {
         $errorCode =  '<div class="bs-component"> 
           <div class="alert alert-dismissible alert-danger">
              <strong>Datos incorrectos.</strong>
            </div>
          </div>';
        echo $errorCode;   
        }
    } else {
        $errorCode =  '<div class="bs-component"> 
           <div class="alert alert-dismissible alert-danger">
              <strong>Datos vacios.</strong>
            </div>
          </div>';
          echo $errorCode;
    }
}?>