
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
          Inicio
        </h1>
      </center>     
      
    </section>

    <!-- Main content -->
    <section class="content">

          <h2>Filosofía Institucional</h2>
        <p style="text-align: justify">
          <span>
            El Instituto Universitario de Tecnología “Mario Briceño Iragorry” (IUTEMBI) es una Institución de Educación Superior dedicada a la formación Integral de personas altamente calificadas en las áreas humanísticas, científicas y tecnológicas que se requieran para el desarrollo del País y de la Región. La Educación que se imparte en la institución está orientada a formar un individuos con potencial creativo, con actitud crítica, con un sólido basamento ético, moral y humanístico, con capacidad de aprender durante toda su vida, capaz de participar activa, conciente y solidariamente en los procesos de transformación social y apto para convivir en una sociedad demócrata, justa y libre inmersa en procesos de globalización y sujeta a intensos cambios tecnológicos que exigen excelencia, competitividad y calidad en el desempeño profesional.
          </span>
        </p>

        <h4>Visión</h4>
        <p style="text-align: justify">
          <span>
            Hacer del Instituto Universitario de Tecnología “Mario Briceño Iragorry” (IUTEMBI), una Institución de Educación Superior reconocida por su calidad, competitividad, pertinencia, capacidad innovadora y responsabilidad social; siempre a la vanguardia de los nuevos paradigmas y transformaciones tecnológicas, para garantizar a nuestros estudiantes una formación integral actualizada, en un contexto de modernidad, que les capacite para desempeñarse con éxito en una sociedad cambiante, competitiva y global.
          </span>
        </p>

        <h4>Misión</h4>
        <p style="text-align: justify">
          <span>
            Formar personas altamente capacitadas que respondan a los requerimientos del País y de la Región, a través de una Educación integral con sólidos basamentos éticos, morales y humanísticos que les capacite para desempeñarse con éxito en una sociedad cambiante, competitiva y global; y para participar activamente, consiente y solidariamente en el proceso de transformación social en una sociedad demócrata.

            Producir conocimiento científico mediante investigaciones aplicadas en áreas prioritarias para el desarrollo económico y social.

            Atender a las comunidades nacionales y regionales por medio de la divulgación del conocimiento, de la asistencia técnica, social y cultural para mejorar sus procesos y sus formas de vida, así como también elevar su autoestima, a fin de contribuir a aliviar la pobreza y la exclusión social.

            Generar programas de producción de bienes y servicios a través de la Fundación del Instituto (FUNDAIUTEMBI) con miras a proveer recursos complementarios.

            Para el cumplimiento de su Misión, el Instituto Universitario de Tecnología “Mario Briceño Iragorry” (IUTEMBI) propiciará un clima institucional idóneo que estimule la libertad de pensamiento, la creatividad, la igualdad de oportunidades y la competitividad entre su personal, reconociendo la calidad de su desempeño mediante la retribución al merito y promoviendo oportunidades para su capacitación y mejoramiento profesional permanente.
          </span>
        </p>
        
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


