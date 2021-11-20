<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <title>RESERVACIÓN</title>
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
    </header><br>
    <div class="conter">
        <div id="formures">
            <form id="formulario">
                <legend align="center">
                    <h1 class="tituloreser"><i>Datos de la Reservación</i></h1>
                    <h2 id="datosreserva" class="tituloreser1">
                        <?php
                        /* Agregar mapas con una condicional, que copie el link del mapa y lo pase al html, el mapa que este abajo de los datos de la reservación o al costado
                                Copiar los datos de Reservas a Reservacion donde te muestre todos los datos ingresados en el html
                                */
                        error_reporting(0);
                        $distri = $_POST["distrito"];
                        $distrito1;
                        if ($distri == "a") {
                            $distrito1 = "Miraflores";
                        } else {
                            if ($distri == "b") {
                                $distrito1 = "San Juan de Miraflores (SJM)";
                            } else {
                                if ($distri == "c") {
                                    $distrito1 = "Trujillo (Mall Plaza)";
                                } else {
                                    if ($distri == "d") {
                                        $distrito1 = "Ventanilla";
                                    } else {
                                        $distrito1 = "Seleccione un Distrito";
                                    }
                                }
                            }
                        }
                        $fech = $_POST["fecha"];
                        $cant = $_POST["comensales"];
                        if ($cant > 20) {
                            $cant = "Supera la Cantidad Disponible";
                        }
                        $hor = $_POST["hora"];
                        $nomb = $_POST["nombre"];
                        $corr = $_POST["correo"];
                        $num = $_POST["num"];
                        if ($num == "") {
                            $num = "+51";
                        }
                        $nume = $_POST["numero"];
                        $detall = $_POST["detalles"];
                        //imprimir
                        echo "Distrito: " . $distrito1;
                        echo "<br>Fecha de Reserva: " . $fech;
                        echo "<br>Cantidad de Comensales: " . $cant;
                        echo "<br>Hora de Reserva: " . $hor;
                        echo "<br>Nombres y Apellidos: " . $nomb;
                        echo "<br>Correo Electrónico: " . $corr;
                        echo "<br>Número: " . $num . " " . $nume;
                        echo "<br>Detalles Adicionales: " . $detall;
                        //mapa
                        $map = $_POST["mapa"];
                        $mensaje;
                        $link;
                        if ($map == "Si") {
                            $mensaje = "<h2>El Mapa a nuestro local de " . $distrito1 . " es: </h2>";
                            switch ($distrito1) {
                                case "Miraflores":
                                    $link = "<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.862018490312!2d-77.03312104995123!3d-12.121591991375423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c81854362fb9%3A0xcc157430a89d5346!2sRustica!5e0!3m2!1ses!2spe!4v1636096528610!5m2!1ses!2spe' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy'></iframe>";
                                    break;
                                case "San Juan de Miraflores (SJM)":
                                    $link = "<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.3421137082864!2d-76.9751012499508!3d-12.157095791351619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b85ba089936d%3A0x4dfb79ab29bd0241!2sRustica!5e0!3m2!1ses!2spe!4v1636096152921!5m2!1ses!2spe' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy'></iframe>";
                                    break;
                                case "Trujillo (Mall Plaza)":
                                    $link = "<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.807834019203!2d-79.03776054998862!3d-8.12103879412514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ad3d76b001784d%3A0x35f906b8131416f3!2sRustica!5e0!3m2!1ses!2spe!4v1636096322211!5m2!1ses!2spe' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy'></iframe>";
                                    break;
                                case "Ventanilla":
                                    $link = "<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3904.47190274677!2d-77.12910874995401!3d-11.872192791542439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d3a44b2e712f%3A0xa80309f299c080c3!2sRustica!5e0!3m2!1ses!2spe!4v1636095856930!5m2!1ses!2spe' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy'></iframe>";
                                    break;
                                default:
                                    $link = "Seleccione un Distrito";
                            }
                        } else {
                            $mensaje = "<h2>No escogió mapa</h2>";
                            $link = "";
                        }
                        ?>
                    </h2>
                </legend>
            </form>
            <br>
            <center>
                <a href="reserva.html"><input id="regresar" type="submit" value="Regresar" style="width: 200px;" style="height: 200px;"></a>
                <br>
                <?php
                echo "<br>" . $mensaje;
                echo "<br>" . $link;
                ?>
            </center><br>
        </div>
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