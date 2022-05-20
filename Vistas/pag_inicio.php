<?php 
session_start();
if ($_SESSION["s_usuario"]==null) {
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayOn</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0b2cf726a6.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/sweetalert2/sweetalert2.min.css">
</head>
<body class="bodyclass">
<div class="navegador">
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            
            <a href="pag_inicio.php" class="enlace">
                <img src="img/logo2.png" alt="" class="logo">
                
            </a>
            <ul>
                <li><a class="btn btn-danger btn-lg" href="paginas/nosotros.html">Nosotros</a></li>
                <li><a class="btn btn-danger btn-lg" href="../DB/logout.php" role="button">Cerrar Sesion</a></li>
                
            </ul>
        </nav>
    </div>
    
    <main>
        <div class="galeria">
            <div class="imagenPrincipal">
                <img src="img/image1.png" alt="Imagen Principal">
            </div>
                <div class="centrado text-center"><h1>Bienvenido Usuario: <span class="badge badge-primary"> 
                        <?php echo $_SESSION["s_usuario"]; ?> 
                        </h1> </span></div>
            <!-- <div class="lista-imagenes">
                <img src="img/BirdHero.png" alt="">
            </div> -->
        </div>
        <div class="galeria2">
            <div class="Card">
                <a href="../Juegos/MarioFrog.html"><img src="img/Ninja frog.png"></a>
                <div class="body-card">
                    <h5>Mario-Frog</h5>
                    <p>
                        En el juego, los jugadores completan niveles agarrando todas las frutas en la mazmorra,
                        lograras
                        pasar mas de una??.
                    </p>
                </div>
            </div>
            <div class="Card">
                <a href="../Juegos/FlappyDuck.html"><img src="img/BirdHero.png"></a>
                <div class="body-card">
                    <h5>Flappy Duck</h5>
                    <p>
                        El juego consiste en conducir a Juanito "el pato", atraves de una serie de obstaculos ¡no
                        mueras!!.
                    </p>
                </div>
            </div>
            <div class="Card">
                <a href="../Juegos/Culebrita.html"><img src="img/snake.png"></a>
                <div class="body-card">
                    <h5>Culebrita</h5>
                    <p>
                        El juego consiste en conducir a pepito, una culebra que va comiendo para ser mas grande, es
                        posible
                        morir!!.
                    </p>
                </div>
            </div>
            <div class="Card">
                <a href="../Juegos/PingPong.html"><img src="img/PingPong1.png"></a>
                <div class="body-card">
                    <h5>Ping Pong</h5>
                    <p>
                        Se uno de los primeros en este caliente juego de PingPong.
                    </p>
                </div>
            </div>
            <div class="Card">
                <a href="../Juegos/Arkanoid.html"><img src="img/Arkanoid1.png"></a>
                <div class="body-card">
                    <h5>Arkanoid</h5>
                    <p>
                        El clasico arkanoid lo traemos de una forma informal, trata de avanzar en este nivel.
                    </p>
                </div>
            </div>
            <div class="Card">
                <img src="img/snake.png">
                <div class="body-card">
                    <h5>No c que mas</h5>
                    <p>
                        El clasico arkanoid lo traemos de una forma informal, trata de avancar en este nivel.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <div class="piePagina">
        <footer>
            <div class="footer-all">
                <div class="container-body">
                    <div class="colunm1">
                        <h1>Mas informacion</h1>
                        <p>
                            Somos una empresa dedicada por una pasion y un sueño, para brindar comodidad y lograr
                            distraer del estres a jovenes estudiantes,
                            con el sueño y anhelo de alcanzar el reconocimiento y la aprobacion, no contamos con los
                            mejores juegos pero si con los mas entretenidos,
                            Lograras animarte a ser uno de los mejores 3?
                        </p>
                    </div>
                    <div class="colunm2">
                        <h1>Redes sociales</h1>
                        <div class="row">
                            <img src="img/logo_facebok.png">
                            <label>Hernandez Mendez Levi Magdiel: 19700039</label>
                        </div>
                        <div class="row">
                            <img src="img/logo_facebok.png">
                            <label>Aguilar Garcia Brisa Jazmin: 18700305</label>
                        </div>
                        <div class="row">
                            <img src="img/logo_facebok.png">
                            <label>Ruedas Velasco Pedro Eduardo: 19700073</label>
                        </div>
                    </div>
                    <div class="colunm3">
                        <h1>Informacion</h1>
                        <div class="row2">
                            <img src="img/localizacion.png">
                            <label>Avenida Instituto Tecnológico Kilómetro 3.5, Los Sabinos, 30000 Comitán de
                                Domínguez,
                                Chis.</label>
                        </div>
                        <div class="row2">
                            <img src="img/telefono2.png">
                            <label>+52 044 044 0044</label>
                        </div>
                        <div class="row2">
                            <img src="img/correo.png">
                            <label>l19700039@comitan.tecnm.mx</label>
                        </div>
                        <div class="row2">
                            <img src="img/correo.png">
                            <label>l18700305@comitan.tecnm.mx</label>
                        </div>
                        <div class="row2">
                            <img src="img/correo.png">
                            <label>l19700073@comitan.tecnm.mx</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-footer">
                <div class="copyritght">
                    © 2021 Todos los derechos reservados | <a>PlayOn</a>
                </div>
                <div class="information">
                    <a href="">Politica y Privacidad | PlayOn</a>
                </div>
            </div>
        </footer>
    </div>

    <!-- <div class="overLay" id="overLay">
        <div class="popup" id="popup">
            <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
            <h3>SUSCRIBETE!!</h3>
            <form action="php/registrar.php" method="post">
                <div class="contenedor-inputs">
                    <input type="text" name="name" placeholder="Nombre">
                    <input type="email" name="email" placeholder="Correo">
                </div>
                <input type="submit" name="register" class="btn-submit" value="Suscribirce">
            </form>
        </div>
    </div>-->

    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../popper/popper.min.js"></script>
    <script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="../codigo.js"></script>
</body>
</html>