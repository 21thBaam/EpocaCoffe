<?php
/*$array1    = array("color" => "red", 2, 4, array("a", "b", "color" => "green", "shape" => "trapezoid", 4));
$array2    = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$resultado = array_merge($array1, $array2);
print_r($resultado);
print_r($array1);*/

/*require '../logica/sql_functions.php';
$productos = consulta("SELECT * FROM productos");
$array1 = array(array("Yoo" => "Angel"), array("Y1" => "Emmanuel"));

for($i=0;$i<sizeof($productos);$i++){
    $resultado[$i] = array_merge($productos[$i], $array1[$i]);
}
print_r($resultado);*/


/*require '../logica/sql_functions.php';
require '../logica/sesion_iniciada.php';
$venta = consulta("SELECT * FROM ventas WHERE id_usuario = '$_SESSION[id]' ");
$productos = consulta("SELECT * FROM productos");
for($i=0;$i<sizeof($venta);$i++){
    for($j=0;$j<sizeof($venta);$j++){
        if($venta[$i]['id_producto'] == $productos[$j]['id']){
            $venta[$i]["nombre"] = $productos[$j]["nombre"];
            break;
        }
    }
}
for($i=0;$i<sizeof($venta);$i++){
    echo "<br>";
    foreach($venta[$i] as $value) {
        echo $value . "\n";
     }
}
print_r($venta);
*/

/*$array_numerico_indexado = array(1, "dos", 3, "cuatro");
 
foreach($array_numerico_indexado as $numero)
    {
    echo $numero . " ";
    }
 
array_push($array_numerico_indexado, 5, "seis");
 
foreach($array_numerico_indexado as $numero)
    {
    echo $numero . " ";
    }*/
?>