<!DOCTYPE html>
<html lang="en">
<head id="cabeza">
    <?php
    echo '
    <script src="../js/head_content.js" type="text/javascript"></script>
    <script src="../js/body_content.js" type="text/javascript"></script>
    <script>
        head("Login");
    </script>';
    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body id="test">
    <br>
    <div class="container">
      <center>
         <h1>Iniciar Sesion</h1><hr>
             <form  method="POST" name="form-work" action="../logica/log_in.php">
                     <fieldset>
                       <div class="form-group">
                         <div class="col-md-6">
                           <label class="control-label">Usuario</label>
                           <input type="text" name="usuario" placeholder="Digite su Usuario" class="form-control" maxlength="15" required>
                           </div>
                         </div>
                       <div class="form-group">
                           <div class="col-md-6">
                             <label class="control-label">Contraseña</label>
                             <input type="password" name="clave" placeholder="Digite Contraseña" class="form-control" maxlength="15" required>
                           </div>
                         </div>
                         <div class="form-group">
                           <div class="col-md-12">
                             <button type="submit" class="btn btn-primary btn-lg btn-block info" style="width: 50%;" >Iniciar Sesion</button>
                           </div>
                         </div>     
                     </fieldset> 
                   </form>
                   <a class="btn btn-primary btn-lg btn-block info" style="width: 48.7%;" href="../usuarios/registro.php">¿No tienes cuenta? Registrate</a>
                   <br><br>
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