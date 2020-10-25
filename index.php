
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <form action="index.php" method="post">
            <h1>Identificate</h1>
            Usuario <input type="text" name="usuario"><br>
            Clave <input type="password" name="clave"><br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <?php
        session_start();
        if (isset($_REQUEST['enviar'])) {
            if ($_REQUEST['usuario'] == "" || $_REQUEST['clave'] == "") {
                echo "Indentificate correctamente <br>";
            } elseif ($_REQUEST['clave'] == "deporte") {
                $_SESSION['usuario'] = $_REQUEST['usuario'];
                $_SESSION['cantidad'] = 0;
                $_SESSION['preciotot'] = 0;
                $_SESSION['productos'] = array();
                header("Location: Menu.php");
            } else {
                echo "Introduce bien la contraseña";
            }
        }
        ?>
    </body>
</html>
