<!-- 1.formulario de registro con PHP POST requira los siguientes datos: 
    usuario, contraseña, nombre, apellidos, DNI/Pasaporte, correo, dirección y código postal. Despues, enseña todos estos datos por pantalla.  -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="eje2.3.php" method="post">
        Ingresa tu usuario. <input type="text" name="usuario"><br>
        Ingresa tu contraseña. <input type="text" name="contrasena"><br>
        Ingresa tu nombre. <input type="text" name="nombre"><br>
        Ingresa tu apellidos. <input type="text" name="apellidos"><br>
        <hr>
        Ingresa tu DNI/Pasaporte. <input type="text" name="dni"><br>
        Ingresa tu correo. <input type="text" name="email"><br>
        Ingresa tu direccion. <input type="text" name="direccion"><br>
        Ingresa tu CP. <input type="text" name="cp"><br>
        <input type="submit" value="Enviar!"><br>
    </form>
    <?php
        if(!empty($_POST["usuario"]))
        {
            echo "Usuario: ",$_POST["usuario"], "<br>";
            echo "Contraseña: ",$_POST["contrasena"], "<br>";
            echo "Nombre: ", $_POST["nombre"], "<br>";
            echo "Apellidos: ", $_POST["apellidos"], "<br>";
            echo "DNI/Pasaporte: ", $_POST["dni"], "<br>";
            echo "Email: ", $_POST["email"], "<br>";
            echo "Direccion: ", $_POST["direccion"], "<br>";
            echo "CP: ", $_POST["cp"], "<br>";
        }
        ?>
    </body>
</html>