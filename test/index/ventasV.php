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
    $this->Cell(30,10,'Ventas por vendedor',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->cell(65, 10,'Nombre Sucursal',1,0,'C',0);
    $this->cell(55, 10,'Nombre Vendedor',1,0,'C',0);
    $this->cell(70, 10,'Nombre Producto',1,1,'C',0);


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


$consulta = "SELECT s.nombre, u.username,p.nombrep
from sucursal s 
join usuario u on u.idsucursal=s.idsucursal
join boleta b on s.idsucursal=b.idsucursal
join detalle d on b.idboleta=d.idboleta
join producto p on d.idProducto=p.idProducto
order by u.idusuario";

$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

while($row=$resultado->fetch_assoc()){
    $pdf->cell(65, 10, $row['nombre'],1,0,'C',0);
    $pdf->cell(55, 10, $row['username'],1,0,'C',0);
    $pdf->cell(70, 10, $row['nombrep'],1,1,'C',0);
}

$pdf->Output();
?>