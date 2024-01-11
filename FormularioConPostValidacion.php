<!-- 1.Crea un formulario de registro con PHP POST que requiera los siguientes datos: 
    usuario, contraseña, nombre, apellidos, DNI/Pasaporte, correo, dirección y código postal. Después, enseña todos estos datos por pantalla.  -->
    <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="eje2.4.php" method="post">
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
        if(empty($_POST["usuario"]) && empty($_POST["contrasena"]) && empty($_POST["nombre"]) && empty($_POST["apellidos"]) && empty($_POST["dni"]) && empty($_POST["email"]) && empty($_POST["direccion"]) && empty($_POST["cp"]))
            return;

        if(!empty($_POST["usuario"]))
        echo "Usuario: ",$_POST["usuario"], "<br>";
        else echo "Campo Usuario vacio <br>";

        // Checkear si tiene mas de 6 y menos de 12 el tamaño de la contraseña.
        if(!empty($_POST["contrasena"]) && strlen($_POST["contrasena"]) > 6 && strlen($_POST["contrasena"]) < 12)
        echo "Contraseña: ",$_POST["contrasena"], "<br>";
        else echo "Campo contraseña vacio o invalido <br>";

        if(!empty($_POST["apellidos"]))
            echo "Apellidos: ", $_POST["apellidos"], "<br>";
        else echo "Campo nombre vacio <br>";

        // Validar que tiene 8 números y una letra en el caso del DNI, 4 letras y 6 números en el caso del pasaporte.
        if(!empty($_POST["dni"]) 
        && (strlen($_POST["dni"]) == 9 && (preg_match_all("/[0-9]/", $_POST["dni"]) == 8)) 
        || (strlen($_POST["dni"] ) == 10 && preg_match_all("/[0-9]/", $_POST["dni"]) == 6))
            echo "DNI/Pasaporte: ", $_POST["dni"], "<br>";
        else echo "Campo Dni/Pasaporte vacio o invalido <br>";

        // Validar la sintaxis del Correo.
        if(!empty($_POST["email"]) && str_contains($_POST["email"], '@') && str_contains($_POST["email"], '.'))
            echo "Email: ", $_POST["email"], "<br>";
        else echo "Campo Email vacio o invalido <br>";

        if(!empty($_POST["direccion"]))
            echo "Direccion: ", $_POST["direccion"], "<br>";
        else echo "Campo Direccion vacio <br>";

        // Validar que tenga 5 dígitos
        if(!empty($_POST["cp"]) && preg_match_all("/[0-9]/", $_POST["cp"]) == 5)
            echo "CP: ", $_POST["cp"], "<br>";
        else echo "Campo Codigo Postal vacio <br>";

        ?>
    </body>
</html>