<?php
require('../public/fpdf/fpdf.php');
$vnum = $_POST['numero'];
 
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
  global $vcar;
    // Logo
//	$this->Image('iutembi-logo.png',40,10,130);
  if ($vcar=="INF")	
	$this->Image('../public/images/carnetinformatica.jpg',50,90,55);
  else
    if ($vcar=="TRA")	
    	$this->Image('../public/images/carnettrabsocial.jpg',50,90,55);
  else
    if ($vcar=="TUR")	
    	$this->Image('../public/images/carnetturismo.jpg',50,90,55);
  else
    if ($vcar=="PRE")	
    	$this->Image('../public/images/carneteducpreescolar.jpg',50,90,55);
   else
    if ($vcar=="MER")	
    	$this->Image('../public/images/carnetmercadotecnia.jpg',50,90,55);
	else
    if ($vcar=="EDI")	
    	$this->Image('../public/images/carneteducintegral.jpg',50,90,55);	
	else
    if ($vcar=="CPU")	
    	$this->Image('../public/images/carnetcontaduria.jpg',50,90,55);
	else
    if ($vcar=="CON")	
    	$this->Image('../public/images/carnetcontcomput.jpg',50,90,55);
		
	$this->Image('../public/images/carnetpartinferior.jpg',107,90,55);
	
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(50,100,'Carnet Alumno(a) IUTEMBI:',0,0,'C');
	
	// Arial bold 15
    $this->SetFont('Times','',10);
    // Movernos a la derecha
    $this->Cell(-40);
    // Título
	$this->Cell(10,500,'El carnet estudiantil solo tendra validez al poseer firma y sello del Coordinador.',0,0,'C');
    // Salto de línea
    $this->Ln(20);
	$this->SetFont('Times','',12);
	$this->Cell(20,10,'');
	$this->Cell(20,10,'');
	$this->Cell(20,10,'',0,1,'C');	
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Times','I',12);
    // Número de página
    $this->Cell(0,10,'Pag: '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada

$pdf = new PDF();
$con=mysqli_connect("localhost","root","","sistema") or die ("Error Conectando la Base de Datos");
//mysql_select_db("sistema", $con) or die ("Error en la Base de Datos");
$consulta=mysqli_query( $con,"select * from alumnos where cedula ='$vnum'") or die ("Error en Consulta");
if ($reg = mysqli_fetch_array($consulta))
{
   $vcar = $reg[3];
  }

$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Times','',12);

$consulta=mysqli_query($con,"select * from periodo") or die ("Error en Consulta");
if ($reg = mysqli_fetch_array($consulta))
{
  $vfecha = $reg[0];
}

$consulta=mysqli_query($con,"select * from alumnos where cedula ='$vnum'") or die ("Error en Consulta");
if ($reg = mysqli_fetch_array($consulta))
{
   $pdf->Ln(106);
   $pdf->Cell(42,10,'');
   $pdf->Cell(0,0,$reg[2]);


   $pdf->Ln(7);
   $pdf->Cell(42,10,'');
   $pdf->Cell(0,0,$reg[1]);

  
   $pdf->Ln(6);
   $pdf->Cell(52,10,'');
   $pdf->Cell(0,0,$reg[0]);
   
   $pdf->Ln(6);
   $pdf->Cell(63,10,'');
   $pdf->Cell(0,0,$vfecha);
   
   $pdf->Output();

  }
else
echo"<br><br><h2><center><font SIZE=6> Registro No Existe </font></center></h2></br></br>";
echo '<h2><center><img src="../public/images/iutembi-logo.png" width="700" height="250" HSPACE=10 , VSPACE=20 /></center></h2>';
mysqli_close($con);

?>