
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
        <h1>
          Pensum
        </h1>
      </center>

      
    </section>

    <!-- Main content -->
    <section class="content">

       <div class="row panel_modulos">

        <div  style="" class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div style="overflow: hidden" class="small-box bg-aqua">
            <div class="inner">

             <a href="#" onclick="window.open('../public/pensums/contaduria.pdf')">
                
               <h2 style="color: white; font-size: 25px">CONTADURÍA</h2></br>

             </a>

            </div>
            <div class="icon">
              <i class="fa fa-bar-chart" aria-hidden="true"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->


         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div style="overflow: hidden" class="small-box bg-green">
            <div class="inner">

           <a href="<?php echo Conectar::ruta()?>public/pensums/turismo.pdf">
              <h2 style="color: white; font-size: 25px">TURISMO</h2></br>
           </a>

            </div>
            <div class="icon">
              <i  class="fa fa-plane" aria-hidden="true"></i>
            </div>
           
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div style="overflow: hidden" class="small-box bg-yellow">
            <div class="inner">

            <a href="<?php echo Conectar::ruta()?>public/pensums/informatica.pdf">
             
              <h2 style="color: white; font-size: 25px">INFORMÁTICA</h2></br>
             </a>

            </div>
            <div class="icon">
              <i class="fa fa-laptop" aria-hidden="true"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div style="overflow: hidden" class="small-box bg-red">
            <div class="inner">

            <a href="<?php echo Conectar::ruta()?>public/pensums/mercadotecnia.pdf">
           
              <h2 style="color: white; font-size: 25px">MERCADOTECNIA</h2></br>
            </a>

            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div style="overflow: hidden" class="small-box bg-blue">
            <div class="inner">

            <a href="<?php echo Conectar::ruta()?>public/pensums/trabajoso.pdf">
              <h4 style="color: white; font-size:25px">TRABAJO</h4>
              <h4 style="color: white; font-size: 25px">SOCIAL</h4>
            </a>

            </div>
            <div class="icon">
              <i class="fa fa-blind" aria-hidden="true"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div style="overflow: hidden" class="small-box bg-orange">
            <div class="inner">

            <a href="<?php echo Conectar::ruta()?>public/pensums/eduintegral.pdf">
              <h4 style="color: white; font-size: 25px">EDUCACIÓN</h4>
              <h4 style="color: white; font-size: 25px">INTEGRAL</h4>
             </a>

            </div>
            <div class="icon">
              <i class="fa fa-book" aria-hidden="true"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div style="overflow: hidden" class="small-box bg-purple">
            <div class="inner">

            <a href="<?php echo Conectar::ruta()?>public/pensums/edupreescolar.pdf">
              <h4 style="color: white; font-size: 25px">EDUCACIÓN</h4>
              <h4 style="color: white; font-size: 25px">PRE-ESCOLAR</h4>
             </a>

            </div>
            <div class="icon">
              <i class="fa fa-child" aria-hidden="true"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->

       </div><!--ROW-->

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


