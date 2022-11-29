<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/Estilos.css">
    <title>Login</title>
</head>
<body>
    <form method="post">
        <h1>Login</h1>
        <input type="text" name="email" placeholder="Ingrese email">
        <input type="password" name="contraseña" placeholder="Ingrese contraseña">
        <input type="submit" value = "Enviar" name="Enviar">
</form>
<a href="registrarse.php"><img id = "registrate" src="Assets/registrate.png" alt="Icono registrate" width="220px" ></a>
    <?php
    include("validarDatos.php");
    ?>
    <body background = "Assets/fondo3.jpg">
    
</body>
</html>