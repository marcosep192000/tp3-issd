<?php
require_once './controlador/usuarioNoRegistrado.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php
require_once './vista/index/head.php';
?>

<body class="app sidebar-mini">
    <?php require_once './vista/index/header.php'; ?>
    <?php require_once './vista/index/asideBar.php'; ?>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i> Registra aquí tu solicitud</h1>
                <p>Detalla lo más que puedas para que un encargado pueda asesorarte.</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Inicio</li>
                <li class="breadcrumb-item"><a href="#">Registro</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Ingresa los datos solicitados</h3>
                    <div class="tile-body">


                        <form action="" method="post">
                            <?php
                            include "./modelo/conexion.php";
                            include './controlador/solicitud.php';
                            ?>

                            <div class="form-group">
                                <label class="control-label">Título</label> <i class="fa fa-asterisk"
                                    aria-hidden="true"></i>
                                <input class="form-control" name="titulo">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Descripción de solicitud <i class="fa fa-asterisk"
                                        aria-hidden="true"></i></label>
                                <textarea class="form-control" rows="4" name="descripcion"
                                    placeholder="Ingresa los detalles..."></textarea>
                            </div>


                            <div class="form-group">
                                <label class="control-label">Tipo de solicitud</label> <i class="fa fa-asterisk"
                                    aria-hidden="true"></i>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <?php include_once './controlador/selectRegistro.php'; ?>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Puedes subir una captura de pantalla</label>
                                <input class="form-control" type="file">
                            </div>

                            <div class="tile-footer">
                                <button class="btn btn-primary" type="submit" name="submit"><i
                                        class="fa fa-fw fa-lg fa-check-circle"></i>Registrar</button>&nbsp;&nbsp;&nbsp;<a
                                    class="btn btn-secondary" href="index.html"><i
                                        class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include_once './vista/index/footer.php' ?>
</body>

</html>