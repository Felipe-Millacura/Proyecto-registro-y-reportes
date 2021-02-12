<?php
require('../fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Productos con quiebre de stock',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->cell(75, 10,'Nombre de productos',1,0,'C',0);
    $this->cell(55, 10,'Stock actual',1,0,'C',0);
    $this->cell(55, 10,'Stock Minimo',1,1,'C',0);


}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'cn.php';

$consulta = "SELECT nombreP, stock,stockMinimo 
from producto
where stock<stockMinimo";

$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

while($row=$resultado->fetch_assoc()){
    $pdf->cell(75, 10, $row['nombreP'],1,0,'C',0);
    $pdf->cell(55, 10, $row['stock'],1,0,'C',0);
    $pdf->cell(55, 10, $row['stockMinimo'],1,1,'C',0);
}

$pdf->Output();
?>