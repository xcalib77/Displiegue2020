
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1>Listado de productos</h1>
        
        <form action="Menu.php" method="post">
            <input type="checkbox"value="Pesas" name="productos[]">Pesas (25€)<br>
            <input type="checkbox" value="Cinta" name="productos[]" >Cinta de correr (1500€)<br>
            <input type="checkbox" value="Eliptica" name="productos[]">Eliptica (3000€)<br>
            <input type="checkbox" value="Pulsera" name="productos[]">Pulsera de actividad (80€)<br>
            <input type="checkbox" value="Saco" name="productos[]">Saco de Boxeo (150€)<br><br>
            
            <input type="submit" value="Añadir al carrito" name="añadirP">
            <input type="submit" value="Cerrar sesion" name="cerrarS"><br>
            <a href="Carrito.php">Ir al carrito</a>
        </form>
        <?php
        if(isset($_REQUEST['cerrarS'])){
            session_abort();
            header("Location: index.php");
        }
        
        if(isset($_REQUEST['añadirP'])){
            session_start();
           $productos=$_REQUEST['productos'];
           
           for($i=0;$i< count($productos);$i++){
               
               $_SESSION['cantidad']++;
               if($productos[$i]=="Pesas"){
                   $_SESSION['preciotot']+=25;
               }elseif($productos[$i]=="Cinta"){
                   $_SESSION['preciotot']+=1500;
               }elseif($productos[$i]=="Eliptica"){
                   $_SESSION['preciotot']+=3000;
               }elseif($productos[$i]=="Pulsera"){
                   $_SESSION['preciotot']+=80;
               }elseif($productos[$i]=="Saco"){
                   $_SESSION['preciotot']+=150;
               }
           }
           
           
        }
        
        ?>
    </body>
</html>
