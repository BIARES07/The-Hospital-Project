<?php
require_once 'fpdf186/fpdf.php';


$especialidad_Guardar = $_GET['area'];

// abre conexion base de datos
$servername = "sql106.infinityfree.com";
$username = "if0_36535111";
$password = "bI1mOlSIiBpOM6l";
$dbname = "if0_36535111_project_hospital";

// Crea la aplicación
$conn = new mysqli($servername, $username, $password, $dbname);
// Verifica la aplicación
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Consulta SQL para obtener los datos ordenados por "comprobante"
$sql = "SELECT nombre, apellido, cedula, telefono, email, fecha FROM citas WHERE especialidad = '$especialidad_Guardar' ORDER BY comprobante ASC";
$result = $conn->query($sql);

// Crea el archivo PDF
$pdf = new FPDF();
$pdf->AddPage();

// Logo (ajusta las coordenadas y el tamaño según tus necesidades)
$pdf->Image('Hospital_Logo.jpg', 10, 6, 33); // Ajusta el ancho y alto según corresponda
$pdf->Ln(20);

// Título
$pdf->SetFont('Arial', 'B', 24);
$pdf->Cell(0, 10, 'REGISTROS', 0, 1, 'C');
$pdf->Ln(20);

// Encabezados de la tabla
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(40, 10, 'Cedula', 1, 0, 'C');
	$pdf->Cell(40, 10, 'Nombre', 1, 0, 'C');
	$pdf->Cell(40, 10, 'Apellido', 1, 0, 'C');
	$pdf->Cell(40, 10, 'Email', 1, 0, 'C');
	$pdf->Cell(40, 10, 'Telefono', 1, 0, 'C');
	$pdf->Cell(40, 10, 'Fecha', 1, 1, 'C');
	
	//imprime en fila todas las filas de la consulta
	if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(40, 10, $row['cedula'], 1, 0, 'C');
            $pdf->Cell(40, 10, $row['nombre'], 1, 0, 'C');
            $pdf->Cell(40, 10, $row['apellido'], 1, 0, 'C');
            $pdf->Cell(40, 10, $row['email'], 1, 0, 'C');
            $pdf->Cell(40, 10, $row['telefono'], 1, 0, 'C');
            $pdf->Cell(40, 10, $row['fecha'], 1, 1, 'C');
        }
    } else {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(40, 10, 'No hay registros', 1, 1, 'C');
    }

//escribe en el pie de la pagina el valor de $especialidad_Guardar
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 10, 'Area: '.$especialidad_Guardar, 0, 1, 'C');

$pdf->Output();

?>