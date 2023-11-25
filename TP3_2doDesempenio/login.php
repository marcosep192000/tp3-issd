<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - 2do desempeño</title>
</head>

<body>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <h1>Panel de administración</h1>
        </div>
        <div class="login-box ">
            <form class="login-form" action="" method="post">

                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>INGRESA AL PANEL</h3>

                <?php
          
          require_once './controlador/loginController.php';

          ?>

                <div class="form-group">
                    <label class="control-label">Usuario (*)</label>
                    <input class="form-control" type="text" name="username" value="marcos@marcos.com" class="input"
                        autofocus>
                </div>
                <div class="form-group">
                    <label class="control-label">Clave (*)</label>
                    <input class="form-control" type="password" name="password" value="1234" class="input">
                </div>
                <div class="form-group">
                    <div class="utility">
                        <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Olvidaste la clave ?</a></p>
                    </div>
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block" type="submit" value="btnEnviar" name="btnEnviar"><i
                            class="fa fa-sign-in fa-lg fa-fw"></i>INGRESAR</button>

                    <input type="submit" value="iniciar sesion" class="btn" name="btnEnviar">
                </div>
            </form>



            <form class="forget-form">
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Olvidaste la clave ?</h3>
                <div class="bs-component">
                    <div class="alert alert-dismissible alert-info">
                        <strong>Tu clave será reseteada</strong>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label">Ingresa tu correo</label>
                    <input class="form-control" placeholder="Email">
                </div>
                <div class="form-group btn-container ">
                    <button class="btn btn-primary btn-block" type='submit' name='btnResetearClave' value='dadfa'><i
                            class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
                </div>
                <div class="form-group mt-3">
                    <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i>
                            Ir al Login</a></p>
                </div>
            </form>
        </div>
    </section>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
    $('.login-content [data-toggle="flip"]').click(function() {
        $('.login-box').toggleClass('flipped');
        return false;
    });
    </script>
</body>

</html>