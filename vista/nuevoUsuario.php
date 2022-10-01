<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo usuario</title>
</head>
<body>
    <h1>Crear nuevo usuario</h1>
    <form action="./../controladores/creaUsuario.php" method="post"> 
        <label>Nombre del usuario</label><br/>    
        <input type="text" name="usuario"><br/>
        <label>Contraseña</label><br/>  
        <input type="passw" name="passw"><br/>
        <label>User</label>
        <input type="radio" id="rol" name="puesto" value="user" checked>
        <label>Staff</label>
        <input type="radio" id="rol" name="puesto" value="staff"><br/>
        <input type="submit" value="Crear">
    </form>

        

</body>
</html>