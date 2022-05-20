<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
</head>
<body>
    <div id="login">
        <h3 id="titulo" class="text-center display-4">Bienvenido al modulo</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center aling-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12 bg-light text-dark">
                        <form id="formLogin" class="form" action="" method="post">
                            <h3 class="text-center text-dark">Inicio de sesion</h3>
                            <div class="form-group">
                                <label for="usuario" class="text-dark">Usuario</label>
                                <input type="text" name="usuario" id="usuario" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-dark">Contraseña</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" name="submit" id="submit" class="btn btn-dark btn-lg btn-block" value="INICIAR SESION">
                            </div>
                        </form>

                        <form id="formRegistroLogin" class="form" action="" method="post">
                            <h3 class="text-center text-dark">Registro de usuario</h3>
                            <div class="form-group">
                                <label for="usuario" class="text-dark">Usuario</label>
                                <input type="text" name="rusuario" id="rusuario" class="form-control" placeholder="Ingresa tu contraseña">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-dark">Contraseña</label>
                                <input type="password" name="rpassword" id="rpassword" class="form-control" placeholder="Ingresa tu contraseña">
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" name="submit2" id="submit2" class="btn btn-dark btn-lg btn-block" value="Agregar usuario">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="codigo.js"></script>
</body>
</html>