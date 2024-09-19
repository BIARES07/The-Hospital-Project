<?php
require_once 'fpdf186/fpdf.php';

session_start();

// Recupera las variables de la sesión
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];
$cedula = $_SESSION['cedula'];
$telefono = $_SESSION['telefono'];
$email = $_SESSION['email'];
$fecha = $_SESSION['fecha'];
$especialidad = $_SESSION['especialidad'];
$comprobante = $_SESSION['comprobante'];

$pdf = new FPDF();
$pdf->AddPage();

// Logo (ajusta las coordenadas y el tamaño según tus necesidades)
$pdf->Image('Hospital_Logo.jpg', 10, 6, 33); // Ajusta el ancho y alto según corresponda
$pdf->Ln(20);

// Título
$pdf->SetFont('Arial', 'B', 24);
$pdf->Cell(0, 10, 'Comprobante De Citas', 0, 1, 'C');
$pdf->Ln(10);

// Número de comprobante
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'Nro. de la Cita:'.$comprobante, 0, 1);
$pdf->Ln(20);

// Añade el contenido al PDF
$pdf->SetFont('Arial','',12);
$pdf->Cell(50, 10,'Nombres: '.$nombre, 0, 0, 'L');
$pdf->Cell(0, 10,'Apellido: '.$apellido, 0, 1, 'R');
$pdf->Cell(50, 10,'Cedula: '.$cedula, 0, 0, 'L');
$pdf->Cell(0, 10,'Telefono: '.$telefono, 0, 1, 'R');
$pdf->Cell(50, 10,'Email: '.$email, 0, 0, 'L');
$pdf->Cell(0, 10,'Fecha de Nacimiento: '.$fecha, 0, 1, 'R');

//requisitos generales
$pdf->Ln(20); // Salto de línea para separar secciones
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(50, 10,'Requisitos Generales:', 0, 1, 'L');
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(50, 10,'- 1 Carpeta Amarilla', 0, 1, 'L');
$pdf->Cell(50, 10,'- 5 Hojas Blancas', 0, 1, 'L');
$pdf->Cell(50, 10,'- 1 Copia de la Cedula', 0, 1, 'L');
$pdf->Cell(50, 10,'- 1 Referencia', 0, 1, 'L');

//requisitos especiales
if ($especialidad == 'carent') {

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10,'Requisitos Especiales:', 0, 1, 'R');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, 'Electro, RXtorax y examenes', 0, 1, 'R');
}

if ($especialidad == 'Consulta general its') {
    
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10,'Requisitos Especiales:', 0, 1, 'R');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, 'Referencia Medica', 0, 1, 'R');
}

if ($especialidad == 'ginecologia') {
    
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10,'Requisitos Especiales:', 0, 1, 'R');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, 'Referencia Medica', 0, 1, 'R');
}

if ($especialidad == 'planificacion familiar') {
    
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10,'Requisitos Especiales:', 0, 1, 'R');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, 'Referencia Medica', 0, 1, 'R');
}

if ($especialidad == 'aro') {
    
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10,'Requisitos Especiales:', 0, 1, 'R');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, 'Perfil Prenatal, Ecosonograma', 0, 1, 'R');
}

if ($especialidad == 'prenatal') {
    
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10,'Requisitos Especiales:', 0, 1, 'R');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, 'Perfil Prenatal, Ecosonograma', 0, 1, 'R');
}

if ($especialidad == 'cardiologia') {
    
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10,'Requisitos Especiales:', 0, 1, 'R');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, 'Electro, RXtorax', 0, 1, 'R');
}

if ($especialidad == 'gastro') {
    
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10,'Requisitos Especiales:', 0, 1, 'R');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, 'Referencia Medica', 0, 1, 'R');
}

if ($especialidad == 'nutricion') {
    
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10,'Requisitos Especiales:', 0, 1, 'R');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, 'Referencia Medica', 0, 1, 'R');
}

if ($especialidad == 'psicologia') {
    
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10,'Requisitos Especiales:', 0, 1, 'R');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, 'Referencia Medica', 0, 1, 'R');
}

if ($especialidad == 'pediatria') {
    
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10,'Requisitos Especiales:', 0, 1, 'R');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, 'Referencia Medica', 0, 1, 'R');
}

if ($especialidad == 'nino sano') {
    
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10,'Requisitos Especiales:', 0, 1, 'R');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, 'Referencia Medica', 0, 1, 'R');
}


// Área citada
$pdf->Ln(20); // Salto de línea para separar secciones
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10,'Area Citada: '.$especialidad, 0, 1, 'C');

// Sello de área citada (ajusta las coordenadas y el tamaño)
$pdf->Image('Sellos.jpg', 80,230, 50); // Ajusta el ancho y alto según corresponda


// Envía el PDF al navegador
$pdf->Output();
?>
