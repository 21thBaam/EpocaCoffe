<?php
require '../logica/conexion.php';

//"SELECT * FROM productos"
$sql = "SELECT * FROM productos WHERE id=".$_GET['producto'];
    
$result = mysqli_query($conn, $sql);
$iteraciones=0;

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["existencias"];
        $iteraciones++;
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>