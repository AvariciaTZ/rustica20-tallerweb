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
    <link rel="stylesheet" type="text/css" href="estiloAP.css">
    <link rel="stylesheet" href="footer.css">

    <link rel="icon" href="img/lectormanga.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="icon" href="img/logo.jfif">
    <script src="jquery-3.6.0.min.js"> </script>
    <script SameSite="None; Secure" src="https://static.landbot.io/landbot-3/landbot-3.0.0.js"></script>
    <script>
        var myLandbot = new Landbot.Livechat({
            configUrl: 'https://chats.landbot.io/v3/H-1014309-HZSKBPVNZMLZEIYS/index.json',
        });
    </script>

    <!-- Title -->
    <title>Agregar Productos</title>
    <meta name="description" content="jamón y mozzarella. Disfrútala desde 1/4 de mt. ">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="lhRNop23sOD50wlhHHwDxxjmlHopuBQAG2kWqh79">
    <meta name="sessionID" content="fLtMtG6PZOOOx849imwbpUXnaDVAX2Pq8jcykvZZ">

    <!--importar variables -->
    <?php
    include("php/config.php");
    ?>
</head>

<body class="home" background="img/12-1588566365-5eaf995d170e7.jpg">


    <!-- <br>
    <h4 style="color: black;" align="center">
        <marquee>Horario de atencion: 10:00 am - 11:00 pm</marquee>
    </h4> -->

    <div class="titulo titulo0">
        <h1>SaferCV&copy;</h1>
    </div>

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

    <br><br>


    <div class="container-slider">
        <div class="slider" id="slider">
            <div class="slider__section">
                <h2 align="center">1/2 Parrilla + Gaseosa 1L.</h2>
                <img src="img/promocion.png" alt="" class="slider__img">
            </div>
            <div class="slider__section">
                <h2 align="center">Piqueo Rustico + Gaseosa 1L.</h2>
                <img src="img/promo1.jpg" alt="" class="slider__img">
            </div>
            <div class="slider__section">
                <h2 align="center">Piqueo Chelero (Piqueo Rústico + 02 cusqueñas personales)</h2>
                <img src="img/promo2.jpeg" alt="" class="slider__img">
            </div>
            <div class="slider__section">
                <h2 align="center">
                    PORTA AVIÓN (MEDIA PARRILLA + 1/4 POLLO A LA BRASA + 5 ALITAS)</h2>
                <img src="img/promo3.jpeg" alt="" class="slider__img">
            </div>
        </div>
        <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
        <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
    </div>
    <br><br>
    <div class="info">
        <h1 class="title" align="center">Productos</h1>
        <p class="excert" align="center"></p>
    </div>
    <br>
    <div class="imagen-container fila">
        <div class="container ">

            <div class="box col-s-4 col-m-4 col-4">
                <img class="imagen" src="img/pizza.jpg" alt="">

                <div class="capa">
                    <a href="agregarProductos-Pizza_Americana.html">
                        <h3>PIZZA AMERICANA</h3><br>
                        Precio: <br> 1/4 metro: S/. 16.90 <br>1/2 metro: S/ 31.9
                        <br>1 metro: S/ 61.9
                    </a>

                </div>
            </div><br>

            <div class="box col-s-4 col-m-4 col-4">
                <img class="imagen" src="img/PASTAS.png" alt="">

                <div class="capa">
                    <a href="agregarProductos-Poker.html">
                        <h3>POKER EN SALSAS DE CARNE</h3>
                        <br>Precio: S/. 29.90
                    </a>
                </div>
            </div><br>

            <div class="box col-s-4 col-m-4 col-4">
                <img class="imagen" src="img/Lomo-Saltados.jpg" alt="">

                <div class="capa">
                    <a href="agregarProductos-Lomo.html">
                        <h3>LOMO SALTADO</h3>
                        <br>Precio: S/. 39.90
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="imagen-container fila">
        <div class="container ">

            <div class="box col-s-4 col-m-4 col-4">
                <img class="imagen" src="img/POLLO.jpeg" alt="">

                <div class="capa">
                    <a href="agregarProductos-Parrilla.html">
                        <h3>POLLO A LA BRASA A LA PARRILLERA</h3><br>
                        Precio: S/. 27.90
                    </a>

                </div>
            </div><br>

            <div class="box col-s-4 col-m-4 col-4">
                <img class="imagen" src="img//piqueoR.jpeg" alt="">

                <div class="capa">
                    <a href="agregarProductos-Piqueos.html">
                        <h3>Piqueo Rustico</h3>
                        <br>Precio: S/. 44.90
                    </a>
                </div>
            </div><br>

            <div class="box col-s-4 col-m-4 col-4">
                <img class="imagen" src="img/anticucho.jpeg" alt="">

                <div class="capa">
                    <a href="agregarProductos-Anticucho.html">
                        <h3>Anticucho</h3>
                        <br>Precio: S/. 23.90

                    </a>
                </div>
            </div><br>
        </div>
    </div>



    <script type="text/javascript"></script>
    <script src="agregardatosCalculos.js"></script>


    <br><br>
    <script src="agregardatos.js"></script>
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

                <div class="categorias-footer"> <a href="">Más Opciones</a> </div>
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

</html>