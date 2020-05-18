<!DOCTYPE html>
<html lang="en">
<head id="cabeza">
    <?php
    echo '
    <script src="../js/head_content.js" type="text/javascript"></script>
    <script src="../js/body_content.js" type="text/javascript"></script>
    <script>
        head("Registro");
    </script>';
    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body id="test">
                <br>
                <div class="container">
                 <center>
                    <h1>Registro Granos Campos</h1><hr>
                        <form  method="POST" name="form-work" action="../logica/proceso_registro.php">
                                <fieldset>
                                  <div class="form-group">
                                    <div class="col-md-6">
                                      <label class="control-label">Usuario</label>
                                      <input name="0" class="form-control" placeholder="Ingrese nombre de usuario" type="text" maxlength="15" required>
                                      </div>
                                    </div>
                                  <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label">Contraseña</label>
                                        <input name="1" class="form-control" placeholder="Ingrese contraseña" type="password" maxlength="15" required>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label">Email</label>
                                        <input name="2" class="form-control" placeholder="epoca@company.com" type="email" maxlength="40" required>
                                      </div>
                                    </div>
                                    <input type="hidden" name="table" value="usuarios">
                                    <input type="hidden" name="data" value="username">
                                    <div class="form-group">
                                      <div class="col-md-12">
                                        <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block info" style="width: 50%;" >Guardar</button>
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