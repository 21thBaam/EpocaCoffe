<?php
require '../logica/sesion_iniciada.php';
require '../logica/conexion.php';
require '../logica/sql_functions.php';

if($_POST["passwordn"] == $_POST["passwordc"]){
    $actual = addslashes($_POST['passworda']);
    $nueva = addslashes($_POST['passwordn']);
    $user = $_SESSION['username'];

    $query = "SELECT COUNT(*) as total FROM usuarios where username = '$user' and password = '$actual' ";
    

    if(total($conn, $query) > 0){
        $sql = "UPDATE usuarios SET password='$nueva' WHERE username='$user' ";
        if(mysqli_query($conn, $sql)){
            echo'<script type="text/javascript">
                alert("El registro se actualizo");
                window.location.href="../usuarios/usuario.php";
            </script>'; 
        }
    }else{
        echo'<script type="text/javascript">
                alert("Datos incorrectos");
                window.location.href="../usuarios/modificar_clave.php";
            </script>';
    }
}else{
    echo'<script type="text/javascript">
        alert("La contraseña nueva no coincide con la confirmación");
        window.location.href="../usuarios/modificar_clave.php";
    </script>';
}
?>