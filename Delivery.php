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
    <link rel="stylesheet" type="text/css" href="estilo(Delivery).css">
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
    <title>Delivery</title>
    <meta name="description" content="Las mejores ofertas en comida, lo encuentras en SaferCV ">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="lhRNop23sOD50wlhHHwDxxjmlHopuBQAG2kWqh79">
    <meta name="sessionID" content="fLtMtG6PZOOOx849imwbpUXnaDVAX2Pq8jcykvZZ">

    <!--importar variables -->
    <?php
    include("php/config.php");
    ?>
</head>

<body background="img/WhatsApp Image 2021-09-03 at 12.45.51 PM.jpeg" aria-setsize="100%"></body>

<!-- 
<br>
  <h4 style="color: black;" align="center">
        <marquee>SaferCV: Come rico, Vive Feliz</marquee>
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

</header>
<table bgcolor="#FED64F" align="center">
    <tr>
        <td>
            <form>
                <fieldset align="left">
                    <legend align="center">
                        <h1><i>Delivery</i></h1>
                    </legend>


                    <br><br>
                    <main id="website">
                        <!-- Header -->

                        <header id="js-header" class=" custom-bg-opacity-none  cpnazo__header u-header u-header--static u-shadow-v19 position-fixed  ">

                            <!-- Search -->
                            <div class="cpnazo__header-top-search d-inline-block g-valign-middle">
                                <div class="item">
                                    <div class="cpnazo__header-top-search__container">
                                        <div class="cpnazo__content-search">

                                            <br>
                                            <form action="/" method="post" id="frmAddProductToCart" @submit.prevent="addProduct('detail',8)">





                                                <input type="hidden" name="id" value="8">
                                                <input type="hidden" name="sessionID" :value="sid">
                                                <input type="hidden" name="quantity" v-model="quantity">
                                                <input type="hidden" name="price" id="detail_price" v-model="detail_price" value="0">
                                                <label>Horario de atencion: </label><br>
                                                <label></label>10:00 am - 11:00 pm
                                                <br>
                                                <div class="list g-py-10  g-brd-bottom g-brd-gray-light-v3">
                                                    <h3 class="pt-0">Platillos:</h3>





                                                    <label class="p-0 m-0 g-font-size-13" for="su_p_term_376">
                                                        <input type="checkbox" class="check_complements_detail" data-price="29.9" @click="checkProductTermPrice()" value="376" id="su_p_term_376" name="productTerm[372][]">Poker en salsas de carne
                                                    </label><br>

                                                    <label class="p-0 m-0 g-font-size-13" for="su_p_term_2212">
                                                        <input type="checkbox" class="check_complements_detail" data-price="44.9" @click="checkProductTermPrice()" value="2212" id="su_p_term_2212" name="productTerm[2210][]">Piqueos
                                                    </label><br>
                                                    <label class="p-0 m-0 g-font-size-13" for="su_p_term_2213">
                                                        <input type="checkbox" class="check_complements_detail" data-price="16.9" @click="checkProductTermPrice()" value="2213" id="su_p_term_2213" name="productTerm[2210][]">Bebidas
                                                    </label><br>
                                                    <label class="p-0 m-0 g-font-size-13" for="su_p_term_2214">
                                                        <input type="checkbox" class="check_complements_detail" data-price="27.9" @click="checkProductTermPrice()" value="2214" id="su_p_term_2214" name="productTerm[2210][]">Pollos a la brasa y Parrillas
                                                    </label><br>


                                                    <label class="p-0 m-0 g-font-size-13" for="su_p_term_2211">
                                                        <input type="checkbox" class="check_complements_detail" data-price="39.9" @click="checkProductTermPrice()" value="2211" id="su_p_term_2211" name="productTerm[2210][]">Lomo Saltado
                                                    </label><br>
                                                    <label class="p-0 m-0 g-font-size-13" for="su_p_term_2212">
                                                        <input type="checkbox" class="check_complements_detail" data-price="16.9" @click="checkProductTermPrice()" value="2212" id="su_p_term_2212" name="productTerm[2210][]">Pizzas y Pastas
                                                    </label><br>


                                                </div>




                                                <!-- Price -->
                                                <div class="box-price g-pt-18">
                                                    <div class="price">
                                                        <h4>S/. {{ detail_price|formatNumber }} </h4>
                                                        <span class="line_tache" id="oldPrice">
                                                        </span>
                                                    </div>
                                                    <input type="submit" value="Comprar" style="width: 100px;" style="height: 100px;">

                    </main>


                    <img src="img/CookedFrankDegus (1).webp" width="220px" height="220px" />
            </form>
            <h4 style="color: black;" align="center">
                <marquee>SaferCV </marquee>
            </h4>
            <br><br>
            <script type="text/javascript"></script>
            <script src="agregardatosCalculos.js"></script>







            <br><br>
            <script src="agregardatos.js"></script>

            </fieldset>

            </form>
        </td>
        <td>
            <img src="img/323_508586937 (2).jpg" width="200">

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

<script src="mostrar.js" type="text/javascript"></script>
</body>

</html>