<?php
include("conexiondb.php");

if(isset($_POST['Enviar']))
{
    if(strlen($_POST['email']) >= 1 && strlen($_POST['contraseña']) >= 1)
    {
        $email = trim($_POST['email']);
        $contraseña = trim($_POST['contraseña']);
        $consulta = "SELECT * FROM datos where email = '$email' and contraseña = '$contraseña'";
        $resultado = mysqli_query($conexion,$consulta);

        $filas = mysqli_num_rows($resultado);

        if($filas)
        {
            header("location:inicio.html");
        } else {
            ?>
            <h3 class="bad">Los datos ingresados no se encuentran registrados</h3>
            <?php 
        }
    } else{
        ?>
            <h3 class="bad">Porfavor complete todos los datos</h3>
            <?php 
    }

}
?>