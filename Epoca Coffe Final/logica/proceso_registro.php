<?php
require '../logica/conexion.php';
require '../logica/sql_functions.php';

function proceso_registro($conn,$total){
    $user = addslashes($_POST['0']);
    $clave = addslashes($_POST['1']);
    $email = addslashes($_POST['2']);

    if($total > 0){
        echo'<script type="text/javascript">
                alert("El nombre de usuario ya existe");
                window.location.href="../usuarios/registro.php";
            </script>';
    }else{
        $sql = "INSERT INTO usuarios (username,password,email) VALUES ('$user','$clave','$email') ";
        mysqli_query($conn, $sql);
        echo'<script type="text/javascript">
                alert("Usuario registrado");
                window.location.href="../usuarios/login.php";
            </script>';
    }
}

if(isset($_POST['submit']))
{
    $data_u = addslashes($_POST['0']);
    $table = $_POST['table'];
    $data = $_POST['data'];
    $query = "SELECT COUNT(*) as total FROM $table where $data = '$data_u' ";
    proceso_registro($conn,total($conn,$query));
}
?>