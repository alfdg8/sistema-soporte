
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
          Profesores
        </h2>


        <div class="col-lg-3 col-xs-6">

          <div class="panel panel-default">

            <div class="panel-heading"><h2 style="font-size: 15px">Tonny Vergara</h2></div>
           <div class="panel-body"><h2 style="font-size: 15px; text-align: justify">Correo: tvergara@iutembi.edu.ve</br>Telefono: 0800</br>Materias: Lenguaje IV, Inglés:I,II,III</h2></div>

          </div>

        </div>

        <div class="col-lg-3 col-xs-6">

          <div class="panel panel-default">

            <div class="panel-heading"><h2 style="font-size: 15px">Hugo Trujillo</h2></div>
           <div class="panel-body"><h2 style="font-size: 15px; text-align: justify">Correo: htrujillo@iutembi.edu.ve</br>Telefono: 0800</br>Materias: Lenguaje III, Base de Datos I, Redes Informáticas</h2></div>

          </div>

        </div>

        <div class="col-lg-3 col-xs-6">

          <div class="panel panel-default">

            <div class="panel-heading"><h2 style="font-size: 15px">Leonardo Matos</h2></div>
           <div class="panel-body"><h2 style="font-size: 15px; text-align: justify;">Correo: lmatos@iutembi.edu.ve</br>Telefono: 0800</br>Materias: Contabilidad I,II</h2></div>

          </div>

        </div>

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


