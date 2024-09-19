<?php
require_once 'fpdf186/fpdf.php';

// Obtener todos los datos del formulario
$nombre_apellido = $_POST['nombre_apellido']; // Belarmino Antonio Peña Garrido, V27748051
$cedula = $_POST['cedula']; // V27748051 (asumiendo que forma parte de $nombre_apellido)
$medico = $_POST['medico']; // Lic Navas
$fecha = $_POST['fecha']; // Lunes 5 de Junio - 08:00 AM
$especialidad = $_POST['especialidad']; // Área de Pediatría

$pdf = new FPDF();
$pdf->AddPage();

// Logo (ajusta las coordenadas y el tamaño según tus necesidades)
$pdf->Image('Hospital_Logo.jpg', 10, 6, 33); // Ajusta el ancho y alto según corresponda
$pdf->Ln(20);

// Título
$pdf->SetFont('Arial', 'B', 24);
$pdf->Cell(0, 10, 'Cita Agendada', 0, 1, 'C');
$pdf->Ln(20);

// Datos del paciente y Médico Encargado (ajusta la fuente y posición según tus necesidades)
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 6, 'Datos del Paciente:', 0, 1);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 6, $nombre_apellido . ' ' . $cedula, 0, 1);
$pdf->Ln(10);
$pdf->SetFont ('Arial', 'B', 12);
$pdf->Cell(0, 6, 'Medico Encargado:', 0, 1);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 6, $medico, 0, 1);

// Fecha y especialidad (ajusta la fuente y posición según tus necesidades)
$pdf->Ln(20);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 6, 'Fecha y Horario:', 0, 1, 'C');
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 6, $fecha . ' (' . $especialidad . ')', 0, 1, 'C');


// Envía el PDF al navegador
$pdf->Output();
?>


