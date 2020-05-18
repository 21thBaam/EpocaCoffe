<?php
require '../logica/sesion_iniciada.php';
require '../logica/conexion.php';

if($_POST == NULL){
    header("location: ../index.html");
}

if($_POST){
    $sql = "SELECT * FROM ventas WHERE id = $_POST[id]";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $sql = "SELECT * FROM usuarios WHERE id = $row[id_usuario]";
    $result = mysqli_query($conn, $sql);
    $usua = mysqli_fetch_assoc($result);

    $sql = "SELECT * FROM productos WHERE id = $row[id_producto]";
    $result = mysqli_query($conn, $sql);
    $prod = mysqli_fetch_assoc($result);

    #echo "ID: " . $row["id"]. " Name: " . $row["username"]. " Precio: " . $row["cu"]. " nomt: " . $row["nomt"]."  ".$row["numt"]."  ".$row["fecha"]."  ".$row["prod"]." ".$row["total"]."<br>";
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
         <h1>Recibo</h1><hr>
         <?php
         echo 'Fecha: ';
         echo $row["fecha"];
         echo '
             <br>
             <a>Compra a nombre de: </a>'.$usua["username"].'
             <br>
             <a>Numero de tarjeta: </a>'.$row["cn"].'
             <br>
             <a>Nombre del titular: </a>'.$row["nt"].'
             <br>
             <a>Producto: </a>'.$prod["nombre"].'
             <br>
             <a>Cantidad: </a>'.$row["cantidad"].'
             <br>
             <a>Precio C/U: </a>'.$prod["precio"].'
             <br>
             <a>Total: </a>'.$row["importe"].'
             <br>
             ';
         ?>
      </center>
   </div>

   <?php
        echo '
        <script>
            body("Granos Campos ",1);
        </script>';
    ?>
</body>
</html>