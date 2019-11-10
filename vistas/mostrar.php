
<?php

   require_once("../config/conexion.php");

    if(isset($_SESSION["correo"])){


?>


<?php require_once("header.php");?>

     
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h2>
        <title>Listando Datos </title>
      </h2>
      <?php

      $conexion=mysqli_connect("localhost","root","","sistema") or die("problemas de comunicación");
      //mysql_select_db("data",$conexion) or die("problemas de comunicación");
      $registro = mysqli_query($conexion,"select alumnos.cedula as cedula, alumnos.nombre as nombre, alumnos.apellido as apellido, alumnos.carrera as carrera, carrera.nombre as nomcarrera  from alumnos inner join carrera on alumnos.carrera=carrera.codigo where cedula = '$_REQUEST[numero]'") or die ("Problemas en el Listado".mysqli_error());
      if ($reg=mysqli_fetch_array($registro))
      { 
       echo "<center>";
       echo "<font size = 3>";
       echo "C&eacute;dula del Estudiante:".$reg['cedula']."<br>";
       echo "Nombre del Estudiante:".$reg['nombre']."<br>";
       echo "Apellido del Estudiante:".$reg['apellido']."<br>";
       echo "Especialidad:".$reg['carrera']."-".$reg['nomcarrera'];
      } 
 
      echo "<p>";
      echo "<center>";
      echo "<table border = 4 bgcolor = 'yellow'>"; 
      //echo "<table border = 4 BORDERCOLORLIGHT = 'yellow'>"; 
      echo "<tr bgcolor = 'green'>";
      echo "<td colspan = 20>"."<font size = 3 color='white'>"."<center>"."Periodo:"."</font>"."</center>"."</td>";
      echo "<td colspan = 10>"."<font size = 3 color='white'>"."<center>"."Código:"."</font>"."</center>"."</td>";
      echo "<td colspan = 50>"."<font size = 3 color='white'>"."<center>"."Nombre de la Materia:"."</font>"."</center>"."</td>";
      echo "<td colspan = 20>"."<font size = 3 color='white'>"."<center>"."Nota   :"."</font>"."</center>"."</td>";
       echo "<td colspan = 20>"."<font size = 3 color='white'>"."<center>"."Estatus:"."</font>"."</center>"."</td>";

       echo "</tr>";
      $numero = 1;

      $registro = mysqli_query($conexion,"select notas.ciclo as ciclo, notas.anio as anio, notas.alumno as alumno, notas.materia as materia,notas.suma as suma, notas.estatus as estatus, materia.nombre as nombre  from notas inner join materia on notas.materia= materia.codigo where notas.alumno = '$_REQUEST[numero]' and notas.estatus <> 'SI' order by notas.materia asc") or die ("Problemas en el Listado".mysqli_error());

      while ($reg=mysqli_fetch_array($registro))
      { 

         echo "<tr bgcolor = 'white'>";
         
         echo "<td colspan = 10>"."<center>".$reg["ciclo"]."</center>"."</td>";
         echo "<td colspan = 10>"."<center>".$reg["anio"]."</center>"."</td>";
         echo "<td colspan = 10>"."<center>".$reg["materia"]."</center>"."</td>";
         echo "<td colspan = 50>"."<center>".$reg["nombre"]."</center>"."</td>";
         echo "<td colspan = 20>"."<center>".$reg["suma"]."</center>"."</td>";
         echo "<td colspan = 20>"."<center>".$reg["estatus"]."</center>"."</td>";
         echo "</tr>";
      } 
      echo "</table>";
      mysqli_close($conexion);
      ?>
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


