<?php
   require('fdpf.php');

   //Obtén los parámetros name y surname de la petición GET
   $name=isset($_GET['name'])?$_GET['name']:'Nombre';
   $surname = isset($_GET['surname'])?$_GET['surname']:'Apellido'

   class PDF extends FPDF{
      function Header(){
     	//Agregar tu imagen o logo
	$this->Image('logo.png',10,10,30);

	//Configurar titulo y fuentes
	$this->SetFont('Arial','B',12);
	$this->Cell(80);
	$this->Cell(30, 10, 'Diploma de Desarrollo Web',0,0,'C');
	$this->Ln(20);
      }


      function Footer(){
      	//Informacion de la fecha del diploma
	$this->SetY(-15);
	$this->SetFont('Arial',",8);
	$this->Cell(0,10,'Fecha del diploma:'.date('Y-m-d'),0,0,'C');
      }
   }

   $pdf = new PDF();
   $pdf->AddPage();

   //Agregar texto personalizado

   $pdf->SetFont('Arial',",14);
   $pdf->Cell(0,10,"Este diploma se otorga a:",0,1,'C');
   $pdf->Cell(0,10,$name.''.$surname,0,1,'C');

   // Agregar imágenes
   $pdf->Image('imagen1.jpg',50,60,100);
   $pdf->Image('imagen2.png',50,100,100);

   // Más texto
   $pdf->SetFont('Arial','B',16);
   $pdf->Cell(0,10,"Felicidades",0,1,'C');
   $pdf->SetFont('Arial',",12);
   $pdf->Cell(0,10,"Por completar con éxito el curso de Desarrolo Web en Entorno Servidor.",0,1,'C');

   // Slida de PDF
   $pdf->Output();
?>



