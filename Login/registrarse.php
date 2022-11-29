<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/Estilos.css">
    <title>Registrarse</title>
</head>
<body>
    <form method="post">
        <h1>Registrarse</h1>
        <input type="text" name="usuario" placeholder="Ingrese Usuario">
        <input type="text" name="email" placeholder="Ingrese email">
        <input type="password" name="contraseña" placeholder="Ingrese contraseña">
        <input type="submit" value = "Enviar" name="Enviar">
</form>
<a href="index.php"><img id = "volver" src="Assets/Volver.png" alt="Icono volver" width="300px" ></a>
    <?php
    include("registrar.php");
    ?>
    <body background = "Assets/fondo3.jpg">
    
    
</body>
</html>