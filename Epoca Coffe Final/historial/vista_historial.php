<?php
require '../logica/sesion_iniciada.php';
require '../logica/sql_functions.php';
$venta = consulta("SELECT * FROM ventas WHERE id_usuario = '$_SESSION[id]' ");
if($venta != 0){
    $productos = consulta("SELECT * FROM productos");
    for($i=0;$i<sizeof($venta);$i++){
        for($j=0;$j<sizeof($venta);$j++){
            if($venta[$i]['id_producto'] == $productos[$j]['id']){
                $venta[$i]["nombre"] = $productos[$j]["nombre"];
                break;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head id="cabeza">
    <?php
        echo '
        <script src="../js/head_content.js" type="text/javascript"></script>
        <script src="../js/body_content.js" type="text/javascript"></script>
        <script>
            head("Historial");
        </script>';
    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body id="test">
<br>
    <div class="container">
      <center>
         <h1>Historial</h1><hr>
         
         <?php
         if($venta !=0 ){
            for($x=0;$x<sizeof($venta);$x++){
                echo '<form method="POST" action="../historial/consulta_historial.php">';
                echo '<button type="submit" class="cardd" style="width: 60%;">';
                echo '<div style="height: 80px;">';
                echo '<br> Fecha: '.$venta[$x]["fecha"].' Producto: '.$venta[$x]["nombre"].' Cantidad: '.$venta[$x]["cantidad"].' Importe: '.$venta[$x]["importe"].' ';
                echo '</div>';
                echo '</button>';
                echo '<br>';
                echo '<input type=hidden name="id" value='.$venta[$x]["id"].' >';
                echo '</form>';
            }
         }
         ?>
      </center>
   </div>
<br><br><br><br>
    <?php
        echo '
        <script>
            body("Granos Campos ",1);
        </script>';
    ?>
</body>
</html>