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
    $this->Cell(30,10,'Boletas por vendedores',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->cell(75, 10,'Nombre de vendedor',1,0,'C',0);
    $this->cell(55, 10,'Cantidad de boletas',1,1,'C',0);


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
$consulta = "SELECT u.username,count(b.idboleta)
from usuario u 
join sucursal s on u.idsucursal = s.idsucursal
join boleta b on s.idsucursal = b.idsucursal
join detalle d on b.idboleta = d.idboleta
join producto p on d.idProducto = p.idProducto
group by u.idusuario";

$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

while($row=$resultado->fetch_assoc()){
    $pdf->cell(75, 10, $row['username'],1,0,'C',0);
    $pdf->cell(55, 10, $row['count(b.idboleta)'],1,1,'C',0);
}

$pdf->Output();
?>