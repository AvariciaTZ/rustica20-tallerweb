<?php
$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "Banner";
$con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al servidor");
$db = mysqli_select_db($con, $basededatos) or die("error en conectar a la base de datos");


/* VARIABLES */
$inicio = "index.php";
$iniciarsesion = "iniciarsesion.php";
$reserva = "reserva.php";
$delivery = "Delivery.php";
$addProductos = "agregarProductos.php";
$nosotros = "nosotros.php";
$equipo = "equipo.php";
