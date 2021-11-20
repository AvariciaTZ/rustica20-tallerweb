<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: iniciarsesion.php");
}
$nombre =  $_SESSION['nombreCompleto'];
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo</title>
    <link rel="stylesheet" href="estilo(R-N-E).css">
    <link rel="stylesheet" href="footer.css">
    <script src="jquery-3.6.0.min.js"> </script>

    <link rel="icon" href="img/logo.jfif">
    <script src="R-N-E.js"></script>
    <script SameSite="None; Secure" src="https://static.landbot.io/landbot-3/landbot-3.0.0.js"></script>
    <script>
        var myLandbot = new Landbot.Livechat({
            configUrl: 'https://chats.landbot.io/v3/H-1014309-HZSKBPVNZMLZEIYS/index.json',
        });
    </script>
    <!--importar variables -->
    <?php
    include("php/config.php");
    ?>
</head>

<body bgcolor="black" aria-setsize="100%">
    <header>
        <div class="titulo">
            <h1>SaferCV&copy;</h1>
        </div>

    </header>
    <nav>
        <div id="toggle-menu" class="toggle-menu">&copy;Más Opciones&copy;</div>
        <ul class="menu">
            <li><a href="<?php echo $inicio ?>">Inicio</a></li>
            <li><a href="<?php echo $iniciarsesion ?>">Iniciar Sesion</a></li>
            <li><a href="<?php echo $reserva ?>">Reservar</a></li>
            <li><a href="<?php echo $delivery ?>">Delivery</a></li>
            <li><a href="<?php echo $addProductos ?>">Agregar Productos</a></li>
            <li><a href="<?php echo $nosotros ?>">Nosotros</a></li>
        </ul>
    </nav>
    <h1 class="tituloequi" align="center">
        <marquee scrollamount=20 direction=right width=500><b>Equipo</b></marquee>
    </h1>
    <div class="conteq1">
        <span>
            <div class="col-13 col-m-12 col-s-12 equ" style="text-align: center;">
                <h2 class="hequi">Días Ordoñez, Kevin Albert</h2>
                <br>
                <img src="img/Foto02.jpeg" width="100" class="imge">
                <br>
                <h3 class="hequi">U19202892</h3>
                <h3 class="hequi">Función: Iniciar Sesión</h3>
            </div>
        </span>
        <span>
            <div class="col-13 col-m-12 col-s-12 equ" style="text-align: center;">
                <h2 class="hequi">De la Cruz Díaz, Pedro David</h2>
                <br>
                <img src="img/Foto01.jpeg" width="100" class="imge">
                <br>
                <h3 class="hequi">U19207574</h3>
                <h3 class="hequi">Función: Balsamiq e Inicio</h3>
            </div>
        </span>
        <span>
            <div class="col-13 col-m-12 col-s-12 equ" style="text-align: center;">
                <h2 class="hequi">Guerrero Luján, Piero Giovanni</h2>
                <br>
                <img src="img/Foto03.jpeg" width="100" class="imge">
                <br>
                <h3 class="hequi">U18301677</h3>
                <h3 class="hequi">Función: Delivery</h3>
            </div>
        </span>
        <span>
            <div class="col-13 col-m-12 col-s-12 equ" style="text-align: center;">
                <h2 class="hequi">García Berrocal, Bryan Alexander</h2>
                <br>
                <img src="img/Foto04.jpeg" width="100" class="imge">
                <br>
                <h3 class="hequi">U19216947</h3>
                <h3 class="hequi">Función: Reserva, Nosotros y Equipo</h3>
            </div>
        </span>
        <span>
            <div class="col-13 col-m-12 col-s-12 equ" style="text-align: center;">
                <h2 class="hequi">Sánchez Luyo, Bryan</h2>
                <br>
                <img src="img/Foto05.png" width="100" class="imge">
                <br>
                <h3 class="hequi">U19213512</h3>
                <h3 class="hequi">Función: Agregar Productos</h3>
            </div>
        </span>
    </div>
    <footer>
        <div class="footer-container">
            <div class="div-footer-img">

                <img class="imagen-footer" src="img/logo.jfif" alt="">

            </div>

            <div class="div-footer Sitio">
                <h3>SITIO</h3>
                <div class="categorias-footer">

                    <a href="preguntas-footer.html">Preguntas Frecuentes</a>
                    <a href="https://wa.me/+998654876">Contacto</a>
                    <a href="equipo.html">Página desarrollado por el grupo 2</a>
                </div>
            </div>
            <div class="div-footer Explorar">
                <h3>EXPLORAR</h3>

                <div class="categorias-footer"> <a href="--inicio">Más Opciones</a> </div>
            </div>
            <div class="div-footer Contenidos-Social">
                <h3>CONTENIDOS</h3>
                <p>
                <h4>SaferCV es un página de servicios delivery, creada para la satisfaccíon del consumidor.</h4>

                </p>

                <h3>SOCIAL</h3>
                <a href="https://www.facebook.com/profile.php?id=100073635441173"><img src="img/facebook.png" alt=""></a>
                <a href="https://wa.me/+998654876"><img src="img/whatsapp.png" alt=""></a>
                <a href="https://www.youtube.com/channel/UCswABX-tSBRNcwuMU1DlRfA/featured"><img src="img/youtube.png" alt=""></a>
                <a href="https://twitter.com/SaferCV"><img src="img/twitter.png" alt=""></a>
                <a href="https://www.instagram.com/safercv/"><img src="img/instagram.png" alt=""></a>
                <h5>2021 - 2022 SaferCV</h5>
            </div>
        </div>
    </footer>

</body>

<script src="mostrar.js" type="text/javascript"></script>