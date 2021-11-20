<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">



    <link rel="preconnect" href="https://fonts.googleapis.com">

    <script src="jquery-3.6.0.min.js"> </script>
    <link rel="stylesheet" href="/css/estilo.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="icon" href="img/logo.jfif">


    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">


    <script SameSite="None; Secure" src="https://static.landbot.io/landbot-3/landbot-3.0.0.js"></script>
    <script>
        var myLandbot = new Landbot.Livechat({
            configUrl: 'https://chats.landbot.io/v3/H-1014309-HZSKBPVNZMLZEIYS/index.json',
        });
    </script>

    <!----css banner --->
    <link rel="stylesheet" href="banner/dist/zoomslider.css" />
    <script type="text/javascript" src="banner/js/modernizr-2.6.2.min.js"></script>
    <link rel="stylesheet" href="banner/cssbanner.css">


    <link rel="stylesheet" href="/css/scrollNeon.css">
    <link rel="stylesheet" href="/css/loader.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/css/swiper.css">



    <title>SaferCV</title>

    <!-- PARA LOS EVENTOS -->
    <script>
        function random(fecha) {
            var urlevento
            if (fecha == 0) {
                urlevento = "img/0.jpg";
            } else if (fecha == 1) {
                urlevento = "img/1.jpg";
            } else if (fecha == 2) {
                urlevento = "img/2.jpg";
            } else if (fecha == 3) {
                urlevento = "img/3.jpg";
            } else if (fecha == 4) {
                urlevento = "img/4.jpg";
            } else if (fecha == 5) {
                urlevento = "img/1.jpg";
            } else if (fecha == 6) {
                urlevento = "img/2.jpg";
            } else if (fecha == 7) {
                urlevento = "img/3.jpg";
            } else if (fecha == 8) {
                urlevento = "img/4.jpg";
            } else if (fecha == 9) {
                urlevento = "img/3.jpg";
            } else if (fecha == 10) {
                urlevento = "img/0.jpg";
            }
            document.getElementById('imagen').src = urlevento;
        }
    </script>
    <?php
    $default_img_promociones = "img/4.jpg";
    ?>




</head>

<body>

    <section class="container-loader">
        <div class="loader"> </div>
        <div class="bubbles">
            <img src="img/img__bubble/bubble.png" alt="">
            <img src="img/img__bubble/bubble.png" alt="">
            <img src="img/img__bubble/bubble.png" alt="">
            <img src="img/img__bubble/bubble.png" alt="">
            <img src="img/img__bubble/bubble.png" alt="">
            <img src="img/img__bubble/bubble.png" alt="">
            <img src="img/img__bubble/bubble.png" alt="">
        </div>
    </section>


    <div class="body-item" id="body-item">
        <!-- scroll -->
        <div id="progressbar"></div>
        <div id="scrollPath"></div>



        <div id="sec1">
            <?php
            include("php/config.php");
            ?>

            <div class="titulo titulo0">
                <h1>SaferCV&copy;</h1>
            </div>

            <div>
                <div class="banner-container fila">
                    <!--  <img class="banner col-s-12 col-m-12 col-12" src="img/banner-horizontal-delivery.jpg" usemap="#bannerInput"> -->
                    <?php

                    $sqlBanner   = ("SELECT * FROM banner");
                    $queryBanner = mysqli_query($con, $sqlBanner);
                    $DataBanner  = mysqli_fetch_array($queryBanner);
                    ?>

                    <div id="demo-1" data-zs-src='["<?php echo $DataBanner['bnr1']; ?>", "<?php echo $DataBanner['bnr2']; ?>", "<?php echo $DataBanner['bnr3']; ?>" ]' data-zs-overlay="dots"></div>
                </div>
            </div>


            <map name="bannerInput">
                <area shape="rect" coords="349,184,950,520" href="https://wa.me/+998310683" alt="">

        </div>

        <section id="sec2">
            <nav>
                <div id="toggle-menu" class="toggle-menu">&copy;Más Opciones&copy;</div>
                <ul class="menu">
                    <li><a href="--inicio">Inicio</a></li>
                    <li><a href="Iniciarsesion.html">Iniciar Sesion</a></li>
                    <li><a href="reserva.html">Reservar</a></li>
                    <li><a href="Delivery.html">Delivery</a></li>
                    <li><a href="agregarProductos.html">Agregar Productos</a></li>
                    <li><a href="nosotros.html">Nosotros</a></li>
                </ul>
            </nav>


            <!-- <div class="imagen-container fila">
                <div class="container ">

                    <div class="box col-s-4 col-m-4 col-4">
                        <img class="imagen" src="img/4x4QQQ_446x896.jpg" alt="">

                        <div class="capa">
                            <a href="Delivery.html">
                                <h3>PIZZAS</h3>
                            </a>
                        </div>
                    </div>


                    <div class="box col-s-4 col-m-4 col-4">
                        <img class="imagen" src="img/PASTAS.png" alt="">

                        <div class="capa">
                            <a href="Delivery.html">
                                <h3>PASTAS</h3>
                            </a>
                        </div>
                    </div>


                    <div class="box col-s-4 col-m-4 col-4">
                        <img class="imagen" src="img/PIQUEOS-1.png" alt="">

                        <div class="capa">
                            <a href="Delivery.html">
                                <h3>PIQUEOS</h3>
                            </a>
                        </div>
                    </div>

                </div>
            </div> -->

            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="img/img__categorias/1.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="img/img__categorias/2.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="img/img__categorias/3.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="img/img__categorias/4.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="img/img__categorias/5.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="img/img__categorias/6.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="img/img__categorias/7.jpg" alt=""></div>
                    </div>

                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>



        </section>

        <section id="sec3">

            <div class="contenedor-txt">
                <img src="img/titulo-madera.png" alt="">
                <div class="titulo-promociones">
                    <h1 class="txt">Eventos y Promociones
                    </h1>
                    <p class="txt">(Descuento del 30% en los siguientes días)</p>

                </div>
            </div>


            <div class="promociones-grid">
                <div class="promociones-items ">

                    <div class="pi-grid">
                        <div class="c-img">
                            <img src="img/fecha-restaurant.png" alt="">
                            <div class="text-container-promociones">
                                <input type="submit" value="1 SEP" name="btn1" onclick="random(0)">

                            </div>
                        </div>

                        <div class="c-img">
                            <img src="img/fecha-restaurant.png" alt="">
                            <div class="text-container-promociones">
                                <input type="button" value="2 SEP" name="btn2" onclick="random(1)">

                            </div>
                        </div>
                        <div class="c-img">
                            <img src="img/fecha-restaurant.png" alt="">
                            <div class="text-container-promociones">
                                <input type="button" value="3 OCT" name="" onclick="random(2)">

                            </div>
                        </div>
                        <div class="c-img">
                            <img src="img/fecha-restaurant.png" alt="">
                            <div class="text-container-promociones">
                                <input type="button" value="4 OCT" name="" onclick="random(3)">

                            </div>
                        </div>
                        <div class="c-img">
                            <img src="img/fecha-restaurant.png" alt="">
                            <div class="text-container-promociones">
                                <input type="button" value="5 NOV" name="" onclick="random(4)">

                            </div>
                        </div>
                        <div class="c-img">
                            <img src="img/fecha-restaurant.png" alt="">
                            <div class="text-container-promociones">
                                <input type="button" value="6 NOV" name="" onclick="random(5)">

                            </div>
                        </div>
                    </div>

                </div>
                <div class="promociones-items ">
                    <div class="pi-grid"><img src="<?php echo $default_img_promociones ?>" id="imagen"></div>
                </div>
                <div class="promociones-items ">

                    <div class="pi-grid">
                        <div class="c-img">
                            <img src="img/fecha-restaurant.png" alt="">
                            <div class="text-container-promociones">
                                <input type="submit" value="7 DIC" name="btn1" onclick="random(0)">

                            </div>
                        </div>

                        <div class="c-img">
                            <img src="img/fecha-restaurant.png" alt="">
                            <div class="text-container-promociones">
                                <input type="button" value="8 DIC" name="btn2" onclick="random(6)">

                            </div>
                        </div>
                        <div class="c-img">
                            <img src="img/fecha-restaurant.png" alt="">
                            <div class="text-container-promociones">
                                <input type="button" value="9 DIC" name="" onclick="random(7)">

                            </div>
                        </div>
                        <div class="c-img">
                            <img src="img/fecha-restaurant.png" alt="">
                            <div class="text-container-promociones">
                                <input type="button" value="16 DIC" name="" onclick="random(8)">

                            </div>
                        </div>
                        <div class="c-img">
                            <img src="img/fecha-restaurant.png" alt="">
                            <div class="text-container-promociones">
                                <input type="button" value="23 ENE" name="" onclick="random(9)">

                            </div>
                        </div>
                        <div class="c-img">
                            <img src="img/fecha-restaurant.png" alt="">
                            <div class="text-container-promociones">
                                <input type="button" value="30 ENE" name="" onclick="random(10)">

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>




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

    </div>

    <script src="mostrar.js" type="text/javascript"></script>

    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>

    <!---Importante para hacer funcionar el Banner -->
    <script type="text/javascript" src="banner/dist/jquery.zoomslider.min.js"></script>



    <script src="js/scrollNeon.js" type="text/javascript"> </script>
    <script src="js/loader.js" type="text/javascript"> </script>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script type="module">
        var swiper = new Swiper('.swiper', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 20,
                stretch: 0,
                depth: 200,
                modifier: 1,
                slideShadows: true,
            },
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            }
        });
    </script>



</body>


</html>