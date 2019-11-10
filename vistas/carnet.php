<?php

   require_once("../config/conexion.php");

    if(isset($_SESSION["correo"])){


?>


<?php require_once("header.php");?>

     
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <center>
        <h2>
         Consulta de Carnet
        </h2>

           
        <br /><br>

          <div id="formul"> 

              <form method="POST" action="../procesos/reporte.php" name="mensaje_f">  
                
                  <p>Cédula del Alumno(a):<br /> 
                  <input name="numero" type="text" onkeypress="return valida(event)" class="camposcorto" id="numero" maxlength="8" width="10">
                  </p>
                  <p>
                    <input class="boton" type="reset" value="Limpiar" name="B2"> 
                    <input class="boton" type="submit" value="Buscar" name="B1">
                  </p>
      
              </form>  
          </div> 
        <br /><br>   
      </center>

    </section>

    <!-- Main content -->
    <section class="content">

      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php require_once("footer.php");?>



<?php
     
     } else {

        header("Location:".Conectar::ruta()."vistas/carnet.php");
        exit();
     }
  ?>


