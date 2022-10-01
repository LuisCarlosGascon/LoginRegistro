<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion</title>
</head>
<?php 
include "./../datos/accesoFichero.php";
$fichero="./../datos/datos.csv";
$lista=leeFichero($fichero); 
?>
<body>
    <h1>Lista de usuarios</h1>

    <table>
        <tr> 
            <td>
                <strong>Usuario</strong>
            </td>
            <td>
                <strong>Rol</strong>
            </td>
        </tr>
        <?php foreach($lista as $v){
            echo "<tr><td>".$v[0]."</td><td>".$v[2]."</td>";
        }
        ?>
    </table>
    <form action="nuevoUsuario.php" method="post">
        <input type="submit" value="Crear nuevo usuario">
    </form>
    <h1><a href="./../vista/login.html">Inicio</h1>
</body>
</html>



