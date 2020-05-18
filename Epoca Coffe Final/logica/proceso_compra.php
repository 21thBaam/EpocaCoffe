<?php
require '../logica/conexion.php';
require '../logica/sesion_iniciada.php';
require '../logica/sql_functions.php';

$productos = consulta("SELECT * FROM productos WHERE id = '$_POST[id]' ");

if($_POST){
    if($productos[0]['existencias'] >= $_POST['cantidad']){
        $time = time()-28800;
        $fecha = date("Y-m-d H:i:s", $time);
        $importe = (float)$_POST['cantidad'] * (float)$productos[0]['precio'];
        $recibo = array(
            "id_producto" => $_POST['id'],
            "fecha" => $fecha,
            "id_usuario" => $_SESSION['id'],
            "nomt" => $_POST['nt'],
            "numt" => $_POST['cn'],
            "cu" => $productos[0]['precio'],
            "importe" => $importe,
            "cantidad" => $_POST['cantidad'],
        );
        echo $_POST['nt']," : ",$_POST['cn']," : ",$_POST['exm']," : ",$_POST['exy'];

        $sql = "INSERT INTO ventas (id_producto,cantidad,id_usuario,fecha,importe,nt,cn)
        VALUES('$recibo[id_producto]','$recibo[cantidad]','$recibo[id_usuario]','$recibo[fecha]','$recibo[importe]','$recibo[nomt]','$recibo[numt]') ";
        //mysqli_query($conn, $sql);
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }else{
        echo "Error: Excede numero de existencia.";
    }

    #header( "refresh:3; url=../recibo.php" );

    /*foreach ($recibo as $value) {
        echo "$value <br>";
    }*/
}
?>