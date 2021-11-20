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
    <link rel="stylesheet" href="estilo(R-N-E).css">
    <link rel="stylesheet" href="footer.css">
    <script src="R-N-E.js"></script>
    <script src="jquery-3.6.0.min.js"></script>
    <title>NOSOTROS</title>
    <link rel="icon" href="img/logo.jfif">
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

<body bgcolor="black" background="img/WhatsApp Image 2021-09-03 at 12.45.47.jpeg" aria-setsize="100%">
    <header>
        <!--  <h4 align="right"><b><i>Horario de atencion: 10:00 am - 11:00 pm</i></b></h4> -->
        <div class="titulo">
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
                <li><a href="<?php echo $equipo ?>">Equipo</a></li>
            </ul>
        </nav>
        <br>
    </header>
    <h1 class="titulonos" align="center">
        <marquee scrollamount=20 direction=right width=500><i>Nosotros</i></marquee>
    </h1>
    <div class="contnos">
        <br>
        <div class="col-6 col-m-12 col-s-12" style="text-align: center;">
            <h2 style="color: white;"><i>Historia</i></h2>
            <p class="pnosotros"><b>El sueño empezó con una pequeña tienda en Jesús María pero gracias a la dedicación,
                    creatividad y empeño,
                    hoy contamos con (42) locales en lima y alrededor de todo el país. En un inicio nos destacamos por
                    la venta de pizzas y pastas
                    pero con la finalidad de satisfacer a nuestros clientes hemos ampliado nuestra cartera de
                    productos.<br><br>
                    Actualmente contamos con la “carta Safer”: pizzas, pastas y parrillas. Con el servicio de buffet
                    criollo e internacional. Por si esto fuera poco ahora la
                    experiencia SaferCV te ofrece la posibilidad de disfrutar de los servicios de discoteca, bar,
                    karaoke y shows en un solo lugar.</b></p>
        </div>
        <div class="col-6 col-m-12 col-s-12" style="text-align: center;">
            <h2 style="color: white;"><i>Visión</i></h2>
            <p class="pnosotros"><b>Participar activamente en la nueva historia del Perú tanto en su desarrollo
                    económico como social, liderando
                    un cambio de mentalidad positiva que se inicia desde nuestros colaboradores.</b></p>
            <br>
            <h2 style="color: white;"><i>Misión</i></h2>
            <p style="color: white;"><b>Consolidar líderes comprometidos y dedicados a la protección del concepto
                    SaferCV a través de una Administración eficiente de la gestión.</b></p>
        </div>
    </div>
    <br>
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

    <script src="mostrar.js" type="text/javascript"></script>


</body>

</html>