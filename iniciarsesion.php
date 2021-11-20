<?php
//inclide y require
require "php/conexion.php";

session_start();

if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id,nombreCompleto,telefono, email, password, direccion,fecha_reg, tipo_usuario FROM usuarios WHERE email='$email'";

    $resultado = mysqli_query($mysqli, $sql);

    //si existe le usuario
    $num = $resultado->num_rows;

    if ($num > 0) {
        $row = $resultado->fetch_assoc();
        $password_bd = $row['password'];
        $pass_c = sha1($password);

        if ($password_bd == $pass_c) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['nombreCompleto'] = $row['nombreCompleto'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['tipo_usuario'] = $row['tipo_usuario'];

            //muestre el principal
            header("Location: index.php");
        } else { ?>
            <div style="position: absolute;">
                <h3 style="color: red;">La contraseña es incorrecta</h3>
            </div>
        <?php
        }
    } else {
        ?>
        <div style="position: absolute;">
            <h3 style="color: red;">No existe usuario</h3>
        </div>
<?php
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilologin.css">
    <link rel="stylesheet" href="footer.css">
    <script src="jquery-3.6.0.min.js"> </script>
    <title>Login</title>
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

<body background="img/12-1588566365-5eaf995d170e7.jpg" aria-setsize="100%">


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

    <!--     <div class="menu">
        <ul >
            <li> <a href="index.html">Inicio</a>&nbsp;</li>
            <li> <a href="iniciarSesion.html">Iniciar Sesion</a>&nbsp;</li>
            <li> <a href="reserva.html">Reservar</a>&nbsp;</li>
            <li> <a href="delivery.html">Delivery</a>&nbsp;</li>
            <li> <a href="agregarProductos.html">Agregar Productos</a>&nbsp;</li>
            <li> <a href="nosotros.html">Nosotros</a>&nbsp;</li>
        </ul>
    </div> -->

    <table bgcolor="#FED64F" align="center">
        <tr>
            <td>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <fieldset align="left">
                        <legend align="center">
                            <h1><i>Iniciar Sesion</i></h1>
                        </legend>
                        <div>

                            <label for="inputEmail">Correo Electrónico: </label> &nbsp;
                            <input id="inputEmail" name="email" required>
                        </div>
                        <br><br>

                        <div> <label for="inputPassword"> Password: </label> &nbsp;
                            <input type="password" id="inputPassword" name="password" required>


                        </div>
                        <br><br>

                        <div>
                            <input type="submit" value="Login"></input><!-- add boton y elminar el href (Referencia) -->
                        </div>
                        <br><br>
                        <p>Si no tiene una cuenta hacer click en <a href="/VC_ProyectoSaferCV/Registrar.php">Registrar</a> </p>
                    </fieldset>
                </form>

            </td>


            <td class="container">
                <div class="box">

                    <img class="imagen" src="img/logo.jfif" width="800px">

                    <div class="capa">
                        <h3>SaferCV</h3>
                    </div>

                </div>

            </td>

        </tr>

    </table>
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

</html>