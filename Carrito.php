<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Resumen del pedido:</h1>
        
        <p>Total a pagar del pedido pedido: </p>
        <?php
        session_start();
        echo 'Pedido del usuario '.$_SESSION['usuario']." <br>";
        echo 'Precio final  pedido: '. $_SESSION['preciotot'].'€ <br>';
        
        if(isset($_REQUEST['cerrar'])){
            session_destroy();
            header("Location: index.php");
        }
        if(isset($_REQUEST['vaciar'])){
            $_SESSION['cantidad'] = 0;
            $_SESSION['preciotot'] = 0;
            header("Location: Carrito.php");
        }
        ?>
        <form>
         <input type="submit" value="Cerrar sesión" name="cerrar">
        <input type="submit" value="Vaciar Carrito" name="vaciar">
        </form>
    </body>
</html>
