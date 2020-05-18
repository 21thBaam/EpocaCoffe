<?php
session_start();
if($_SESSION['loggedin'] == false){
    header("location: ../usuarios/login.php");
}
?>