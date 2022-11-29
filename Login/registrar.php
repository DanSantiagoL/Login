<?php
include("conexiondb.php");

if(isset($_POST['Enviar']))
{
    if(strlen($_POST['usuario']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['contraseña']) >= 1)
    {
        $nombre = trim($_POST['usuario']);
        $email = trim($_POST['email']);
        $contraseña = trim($_POST['contraseña']);
        $consulta = "INSERT INTO datos (usuario, email, contraseña) VALUES ('$nombre', '$email', '$contraseña')";
        $resultado = mysqli_query($conexion,$consulta);
        if($resultado)
        {
            ?>
            <h3 class="ok">Registro completado</h3>
            <?php
        } else {
            ?>
            <h3 class="bad">Error al completar registro</h3>
            <?php 
        }
    } else{
        ?>
            <h3 class="bad">Porfavor complete todos los datos</h3>
            <?php 
    }

}
?>