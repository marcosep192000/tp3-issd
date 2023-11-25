<?php require_once './controlador/usuarioNoRegistrado.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once './vista/index/head.php'; ?>

<body class="app sidebar-mini">
    <?php require_once './vista/index/header.php'; ?>
    <?php require_once './vista/index/asideBar.php'; ?>

    <!-- fin Sidebar menu-->
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i> Listados</h1>
                <!-- si es administrador vera este titulo-->
                <p>Listado total de solicitudes</p>

                <!-- si es usuario normal vera este titulo-
          <p>Listado de mis solicitudes cargadas</p> -->

                <!-- si es analista o tecnico vera este titulo
          <p>Listado de solicitudes cargadas</p> -->


            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Listado</li>
                <li class="breadcrumb-item active"><a href="#">Listado de Solicitudes</a></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Solicitudes (<?php require_once './controlador/contarTotalSolicitud.php'; ?>)
                    </h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Título</th>
                                    <th>Descripción</th>
                                    <th>Tipo</th>
                                    <th>Registro</th>
                                    <th>Fecha estimada</th>
                                    <th>Solicitante</th>
                                    <th>Opciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php include './controlador/listadoSolicid.php'; ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

        </div>
    </main>
    <?php include_once './vista/index/footer.php' ?>
</body>

</html>