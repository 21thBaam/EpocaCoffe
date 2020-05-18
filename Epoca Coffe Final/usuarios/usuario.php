<?php
require '../logica/sesion_iniciada.php';
?>

<!DOCTYPE html>
<html lang="en">
<head id="cabeza">
    <?php
    echo '
    <script src="../js/head_content.js" type="text/javascript"></script>
    <script src="../js/body_content.js" type="text/javascript"></script>
    <script>
        head("Usuario");
    </script>';
    ?>
</head>
<body id="test">

    <h1>Usuario</h1>

    <section style="font-weight: 400;">

        <!--Articulos-->
        <article>
            <div class="content">
                <div class="productos" style="text-align: center;">
                    <?php
                    echo '
                    <section id="main-content" style="font-weight: 400;">
                    <center>
                        <br><br>
                        <a class="a">Nombre de usuario: ',$_SESSION['username'],'</a>
                        <br><br>
                        <a href="../usuarios/modificar_clave.php" class="a">Modificar contraseña</a>
                        <br><br>
                        <a href="../logica/log_out.php" class="a">Salir</a>
                        <br><br>
                        ';
                    ?>
                </div>
            </div>
            
        </article>	<!-- / article -->

    </section><!-- / #main-content -->

    <?php
    echo '
    <script>
        body("Granos Campos ",1);
    </script>';
    ?>
</body>
</html>