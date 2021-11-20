<?php
session_start();

session_destroy();

//redireccionamiento
header("Location:iniciarsesion.php");
