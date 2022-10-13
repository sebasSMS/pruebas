<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="view/css/visual.css">
  
</head>
<body>

  <h2>Registro de Stiker</h2>

  <hr>

 <div class="row">
    <div class=" col-5 col-sm-5" id="container1">
      <form class="formulario" id="formulario" action="" method="post">
        
        <div class="">
          <label for="inputDocumento" class="form-label">Tipo de documento</label>
          <label for="" class ="txt">Selecciones el documento:</label>
            <select name="tipo" id="txtRol" class="form-control" required>
                  <option value=""> Seleccione  </option>
                  <?php
                        require_once "model/conexionBD.php";
                        require_once "controller/controller.php";
                        require_once "model/dao/dao.php";
                        require_once "model/dto/dto.php";
                        require_once "controller/controller.php";
                      $objCtrUsuario = new ControllerRegistros();
                      $listaUsuario = $objCtrUsuario -> ctrMostrarRol();  
                      foreach($listaUsuario as $dato){
                          echo'<option value="'.$dato["idTD"].'"> '.$dato["TD"].' </option>';
                      }
                  ?>
              
            </select>
          </div>
              <div class=" ">
                <label for="inputDocumento" class="form-label">Documento</label>
                <input type="text" class="form-control" name="Cedula" placeholder="DNI" aria-label="First name">
              </div>
              <div class=" " id>
                <label for="inputDocumento" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="Nombres" placeholder="Nombre" aria-label="Nombre">
              </div>
              <div class=" ">
                <label for="inputDocumento" class="form-label">Dirección</label>
                <input type="text" class="form-control" name="direccion" placeholder="Dirección" aria-label="Dirección">
              </div>
              <div class=" ">
                <label for="inputDocumento" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fechaDeNaciomiento" placeholder="Last name" aria-label="Last name">
              </div>
              <center><button type="submit" class="btn btn-outline-light" id="enviar">Enviar</button></center>
        </form>
            <?php

            require_once "model/conexionBD.php";
            require_once "controller/controller.php";
            require_once "model/dao/dao.php";
            require_once "model/dto/dto.php";
            require_once "controller/controller.php";
            if (isset($_POST["Cedula"])) {
              $objCtrCliente = new ControllerRegistros();
              $objCtrCliente->crtInsertarCliente(
                $_POST["Cedula"],
                $_POST["Nombres"],
                $_POST["tipo"],
                $_POST["direccion"],
                $_POST["fechaDeNaciomiento"]
      
              );
            }
          ?>
    
  
        
    </div>
      <div id="tamano">
        <table class="table table-fixed">
       
           <div class="container">

    <div class="panel panel-default">
      <div class="panel-body">
        <table class="table table-fixed">
          <thead>
            <tr>
              <th>tipo de cedula</th>
              <th>Cedula</th>
              <th>Nombre</th>
              <th>Dirección</th>
              <th>Fecha de nacimiento</th>
              <th>funciones</th>
            </tr>
          </thead>
          <tbody>
        <?php
          $objCtrCtrUsuario = new ControllerRegistros();
          $listaDeUsuario = $objCtrCtrUsuario->ctrListarUsuario();
          foreach ($listaDeUsuario as $dato) {
            echo "
            <tr>
              <td>" . $dato["tipoDeDocumeto"] . "</td>
              <td>" . $dato["CEDULA"] . "</td>
              <td>" . $dato["nombre"] . "</td>
              <td>" . $dato["direccion"] . "</td>
              <td>" . $dato["fechaDeNaci"] . "</td>
              <td><button type='button' id='boton' class='btn btn-dark'>Eliminar</button></td> 
            </tr>
              
            ";
          }
        ?>

      </tbody>

        </table>
      </div>
  </div>

  <hr>
  <!-- -------------------------------------------------------------PRUEBA------------------------------------------------------------ -->
  
 

</body>
</html>
