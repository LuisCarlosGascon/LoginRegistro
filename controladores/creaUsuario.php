<?php
include "./../helpers/valida.php";
include "./../datos/accesoFichero.php";

$user=$_POST['usuario'];
$passw=$_POST['passw'];
$rol=$_POST['puesto'];

$lista=leeFichero();
nuevoUsuario($user,$passw,$rol,$lista);
