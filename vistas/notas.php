
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
         Consulta de Notas
        </h2>

           
        <br /><br>

          <div id="formul"> 

              <form method="POST" action="mostrar.php" name="mensaje_f">  
                
                  <p align="center"> Introduzca su Cédula :
                    <input type="text" name="numero" maxlength="10" size = "10">
                  <input type="submit" name="Submit" value="Buscar"> 
      
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

        header("Location:".Conectar::ruta()."vistas/index.php");
        exit();
     }
  ?>


