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
    $this->Cell(30,10,'Stock de productos',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->cell(20, 10,'Codigo',1,0,'C',0);
    $this->cell(55, 10,'Nombre Producto',1,0,'C',0);
    $this->cell(55, 10,'Tipo Producto',1,0,'C',0);
    $this->cell(17, 10,'Stock',1,0,'C',0);
    $this->cell(50, 10,'Precio',1,1,'C',0);


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
$consulta = "SELECT p.codigo,p.nombreP,t.nombre,p.stock,p.precio from producto p join tipoproducto t on p.idTipoProducto = t.idTipoProducto  
ORDER BY `p`.`stock`  DESC";

$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

while($row=$resultado->fetch_assoc()){
    $pdf->cell(20, 10, $row['codigo'],1,0,'C',0);
    $pdf->cell(55, 10, $row['nombreP'],1,0,'C',0);
    $pdf->cell(55, 10, $row['nombre'],1,0,'C',0);
    $pdf->cell(17, 10, $row['stock'],1,0,'C',0);
    $pdf->cell(50, 10, $row['precio'],1,1,'C',0);
}

$pdf->Output();
?>