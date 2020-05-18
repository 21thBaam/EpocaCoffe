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
        head("Modificar clave");
    </script>';
    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body id="test">

  <br>
  <div class="container">
      <center>
         <h1>Modificar contraseña</h1><br>
             <form  method="POST" name="form-work" action="../logica/proceso_cambio_clave.php">
                     <fieldset>
                       <div class="form-group">
                         <div class="col-md-6">
                           <label class="control-label">Contraseña actual</label>
                           <input name="passworda" class="form-control" placeholder="Ingrese contraseña actual" type="password" maxlength="15" required>
                           </div>
                         </div>
                       <div class="form-group">
                           <div class="col-md-6">
                             <label class="control-label">Contraseña nueva</label>
                             <input name="passwordn" class="form-control" placeholder="Ingrese contraseña nueva" type="password" maxlength="15" required>
                           </div>
                         </div>
                         <div class="form-group">
                           <div class="col-md-6">
                             <label class="control-label">Confirmar contraseña nueva</label>
                             <input name="passwordc" class="form-control" placeholder="Ingrese contraseña nueva" type="password" maxlength="15" required>
                           </div>
                         </div>
                         <div class="form-group">
                           <div class="col-md-12">
                             <button type="submit" class="btn btn-primary btn-lg btn-block info" style="width: 50%;" >Guardar</button>
                           </div>
                         </div>     
                     </fieldset> 
                   </form>
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

<!--pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"-->