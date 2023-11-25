<?php require_once './controlador/usuarioNoRegistrado.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once './vista/index/head.php'; ?>

<body class="app sidebar-mini">
    <?php require_once './vista/index/header.php'; ?>
    <?php require_once './vista/index/asideBar.php'; ?>


    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Bienvenidos</h1>
                <p>Este es nuestro panel de administración.
                    Por favor selecciona alguna opción del menú lateral izquierdo</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            </ul>
        </div>


        <div class="row">
            <div class="col-md-3">
                <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                    <div class="info">
                        <h4>Usuarios</h4>
                        <p><b><?php include './controlador/contarUsuario.php'; ?></b>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
                    <div class="info">
                        <h4>Solicitudes Desarrollo</h4>
                        <p><b><?php include './controlador/contarSolicitudDesarrollo.php'; ?></b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
                    <div class="info">
                        <h4>Solicitudes de Soporte Tecnico</h4>
                        <p><b><?php include './controlador/contarSoporteTecnico.php'; ?></b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
                    <div class="info">
                        <h4>Reportes de errores</h4>
                        <p><b><?php include './controlador/contarReporteError.php'; ?></b></p>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php include_once './vista/index/footer.php' ?>
</body>

</html>