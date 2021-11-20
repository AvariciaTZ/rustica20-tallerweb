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
    <link rel="icon" href="img/logo.jfif">
    <script SameSite="None; Secure" src="https://static.landbot.io/landbot-3/landbot-3.0.0.js"></script>
    <script>
        var myLandbot = new Landbot.Livechat({
            configUrl: 'https://chats.landbot.io/v3/H-1014309-HZSKBPVNZMLZEIYS/index.json',
        });
    </script>
    <title>RESERVA</title>

    <!--importar variables -->
    <?php
    include("php/config.php");
    ?>
</head>

<body background="img/a.jpeg" aria-setsize="100%">
    <header>
        <!--  <h4 align="center">
            <marquee>SaferCV: Come rico, Vive Feliz </marquee>
        </h4> -->
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
            </ul>
        </nav>

        <br>
    </header>
    <br>
    <div class="conter">
        <div class="col-6 col-m-12 col-s-12" id="formures">
            <form id="formulario" action="Reservacion.php" method="post">
                <fieldset align="left">
                    <legend align="center">
                        <h1 class="tituloreser">
                            <marquee scrollamount=20 direction=right width=400><i>Reservaciones</i></marquee>
                        </h1>
                    </legend>
                    <label>Listado de Distrito: </label> &nbsp;
                    <select name="distrito" id="distrito">
                        <option value="0" id="0"></option>
                        <option value="a" id="a">Miraflores</option>
                        <option value="b" id="b">San Juan de Miraflores (SJM)</option>
                        <option value="c" id="c">Trujillo (Mall Plaza)</option>
                        <option value="d" id="d">Ventanilla</option>
                    </select>
                    <br><br>
                    <label>Fecha de Reserva: </label>
                    <input type="date" name="fecha" id="fecha">&nbsp;
                    <label>Cantidad de Comensales: </label>
                    <input type="number" name="comensales" id="comensales" required>
                    <br><br>
                    <label>Hora de Reserva: </label>
                    <input type="time" name="hora" id="hora" required>
                    <br><br>
                    <label>Nombres y Apellidos: </label> &nbsp;
                    <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre y apellido" required>
                    <br><br>
                    <label>Correo Electrónico: </label> &nbsp;
                    <input type="text" name="correo" id="correo" required>
                    <br><br>
                    <label>Número: </label> &nbsp;
                    <input type="text" name="num" id="num" maxlength="3" min="0" placeholder="+51" style="width: 27px;">
                    <input type="number" name="numero" id="numero" maxlength="9" min="0" required>
                    <br><br>
                    <label>Detalles Adicionales:</label><br><br>
                    <textarea id="detalles" name="detalles" rows="4" cols="50">
                    </textarea>
                    <br><br>
                    <input type="checkbox" name="ec" id="" required>Acepto las políticas de privacidad
                    <br><br>
                    <label>¿Desea saber como llegar a nuestro local?</label>&nbsp;&nbsp;
                    <select name="mapa">
                        <option value="No" id="No">No</option>
                        <option value="Si" id="Si">Si</option>
                    </select>
                    <br><br>
                    <input type="submit" value="Registrar" style="width: 100px;" style="height: 100px;">&nbsp;&nbsp;
                </fieldset>
            </form>
            <br><input type="submit" value="Observar" style="width: 100px;" style="height: 100px;" onclick="Observar();">
            <br>
        </div>
        <div class="col-6 col-m-12 col-s-12">
            <br>
            <video src="img/Anuncio.mp4" class="imgr" autoplay loop controls>
        </div>
        <!--  -->
    </div>
    <h4 align="right"><b><i>Horario de atencion: 10:00 am - 11:00 pm</i></b></h4>
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