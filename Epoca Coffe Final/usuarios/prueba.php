<?php
require '../logica/sesion_iniciada.php';

if(isset($_POST['submit'])){
    echo $_SESSION['username'];
    echo "Precio c/u: ",$_POST['precio'],"<br>";
    echo "Cantidad: ",$_POST['cantidad'],"<br>";
    echo "ID: ",$_POST['id'],"<br>";
    echo "Banco: ",$_POST['banco'],"<br>";
    echo "CN: ",$_POST['cn'],"<br>";
    echo "NT: ",$_POST['nt'],"<br>";
    echo "EXM: ",$_POST['exm'],"<br>";
    echo "EXY: ",$_POST['exy'],"<br>";
    echo "CVV: ",$_POST['cvv'],"<br>";
}
?>