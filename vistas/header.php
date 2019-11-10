
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Sistema de Soporte IUTEMBI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../public/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../public/bower_components/Ionicons/css/ionicons.min.css">

  <!-- DataTables -->
  
  <!--<link rel="stylesheet" href="../public/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">-->
  <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">
  <link  href="../public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
  <link  href="../public/datatables/responsive.dataTables.min.css" rel="stylesheet"/>

  <!-- Theme style -->
  <link rel="stylesheet" href="../public/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../public/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../public/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../public/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../public/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- Css Carnets-->
  <style type="text/css">   

    #formul {  
        padding: 20px 0px 0px 30px;   /* margen con valores: arriba - derecha - abajo - izquierda */ 
        font-family:verdana,arial; 
        font-size:12pt; 
    }  
    .camposcorto {  
        font-family:verdana,arial;     /* tipo de letra */  
        width: 150px;                 /* anchura de campos de formulario */  
        font-size:11pt;                /* tamaño de la letra*/   
        color:#008000;                 /* color del texto */   
        border: 1px dotted black;        /* color del borde puede ser solid ó dotted */   
        background-color:white;    /* color del fondo */   
    }  

    .campos {  
        font-family:verdana,arial;     /* tipo de letra */  
        width: 500px;                 /* anchura de campos de formulario */  
        font-size:11pt;                /* tamaño de la letra*/   
        color:#008000;                 /* color del texto */   
        border: 1px dotted red;        /* color del borde puede ser solid ó dotted */   
        background-color:white;    /* color del fondo */   
    }  

    .boton{ 
        font-size:12px; 
        font-family:Verdana,Helvetica; 
        font-weight:bold; 
        color:#0000FF; 
        background:#A4C1FF; 
        border:0px; 
        width:120px; 
        height:25px; 
    } 

    #b_reset {  
        margin: 0px 0px 0px 0px;    /* margen con valores: arriba - derecha - abajo - izquierda */  
    }  

    #b_submit {  
        margin: -25px 0px 0px 380px;    /* margen con valores: arriba - derecha - abajo - izquierda */  
    }  

  </style>  

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div  class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a  style="background-color: green" href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SSO</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Sistema de Soporte</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav  style="background-color: green" class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a   style="background-color: green" href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             
             <!-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
              <i class="fa fa-user" aria-hidden="true"></i>
              <span class="hidden-xs"><?php echo $_SESSION['nombre'] ?></span>
            </a>
          </li>
       
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside  class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li  class="header" ><b>MENU</b></li>

          <li class="">
            <a href="home.php">
              <i class="fa fa-home" aria-hidden="true"></i> <span>Inicio</span>
            </a>
          
          </li>

          <li class="">
            <a href="carnet.php">
              <i class="fa fa-list" aria-hidden="true"></i> <span>Carnet</span>
            </a>
         
          </li>


          <li class="">
            <a href="pensum.php">
              <i class="fa fa-clipboard" aria-hidden="true"></i> <span>Pensum</span>
            </a>
         
          </li>

          <li class="">
              <a href="horarios.php">
                <i class="fa fa-users"></i> <span>Horarios</span>
              </a>

          </li>

          
          <li class="">
            <a href="profesores.php">
              <i class="fa fa-address-book-o"></i> <span>Profesores</span>
            </a>
          </li>


          <li class="">
            <a href="notas.php">
              <i class="fa fa-print" aria-hidden="true"></i> <span>Notas</span>
            </a>
          </li>


          <li class="">
            <a href="usuarios.php">
              <i class="fa fa-user" aria-hidden="true"></i> <span>Usuarios</span>
            </a>
         
          </li>

          <li class="">
            <a href="logout.php">
              <i class="fa fa-sign-out" aria-hidden="true"></i> <span>Salir</span>
            </a>
         
          </li>
   
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

