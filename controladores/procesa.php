<?php
include "./../helpers/valida.php";
include "./../datos/accesoFichero.php";
$usuario=$_POST['usuario'];
$passw=$_POST['passw'];
$fichero="./../datos/datos.csv";

validaCampos($usuario,$passw);

$datos=leeFichero($fichero);

if(existeUsuario($usuario,$passw,$datos)){
    if(trim($datos[$usuario][2])=="staff"){
        header("Location:./../vista/administra.php");
    }else{
        echo "<h1>Bienvenido alumno</h1><br/>
        <h3><a href='./../vista/login.html'>Inicio</h3>";
    }
}else{
    header("Location:./../vista/login.html");
}
?>