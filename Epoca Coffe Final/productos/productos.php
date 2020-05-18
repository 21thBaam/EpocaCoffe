<!DOCTYPE html>
<html lang="en">
<head id="cabeza">
    <?php
        echo '
        <script src="../js/head_content.js" type="text/javascript"></script>
        <script src="../js/body_content.js" type="text/javascript"></script>
        <script>
            head("Productos");
        </script>';
    ?>
</head>
<body id="test">
    <?php
    require '../logica/sql_functions.php';
    $productos = consulta("SELECT * FROM productos");
    ?>
    <h1>Productos</h1>

    <section id="main-content" style="font-weight: 400;">

        <!--Articulos-->
        <article>
            <div class="content">
                <div class="produc">
                    <div class="row center-xs">
                        <!--Productos-->
                        <?php
                        for($i=2;$i<sizeof($productos);$i++){
                            echo '
                                <div class="col-xs-10 col-sm-6 col-md-4 product">
                                    <div class="card">
                                        <img src="'.$productos[$i]['img_dir'].'" alt="Feels Bad">
                                        <h3>'.$productos[$i]['nombre'].'</h3>
                                        <p>$ '.$productos[$i]['precio'].' USD</p>
                                        <a href="../productos/vista_comprar.php?producto='.$productos[$i]['id'].'" class="button">Comprar</a>
                                    </div>
                                </div>';
                        }
                        ?>
                         <!--Productos End-->
                    </div>
                </div>
            </div>
            
        </article>	<!-- / article -->

    </section><!-- / #main-content -->

    <?php
        echo '
        <script>
            body("Granos Campos ",0);
        </script>';
    ?>
</body>
</html>