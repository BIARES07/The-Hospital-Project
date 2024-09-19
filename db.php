<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agendar Cita</title>
        <link rel="stylesheet" type="text/css" href="style3.css">
    </head>
    <body>

        <header>
            <div class="barra_nav"></div>
            <a href="index.html" id="cita">
                <img src="icono.png" alt="Icono de cita"> Regresar
              </a>
              
        </header>   

        <main>
<p>Muchas gracias!! su cita ha sido agendada con exito, por favor guarde su comprobante de cita
    en un lugar seguro, para que podamos llevar a cabo la atenciòn de su salud. puede descargarlo
    <a href="generarPDF.php">haciendo click aqui</a>
        </main>



        <footer>
            <p>
                Charallave, Municipio Cristóbal Rojas, Sector Peñuela Ruiz, barrio ajuro entre la calle 7 y 8, Edo. Miranda. 
                
            </p>
        </footer>

<?php
session_start();
// Tus datos de conexión a la base de datos
$servername = "sql106.infinityfree.com";
$username = "if0_36535111";
$password = "bI1mOlSIiBpOM6l";
$dbname = "if0_36535111_project_hospital";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Recoge los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$fecha = $_POST['fecha'];
$especialidad = $_POST['especialidad'];

// Verificar si la cédula ya existe en la base de datos
$check_query = "SELECT * FROM citas WHERE cedula = '$cedula'";
$result = $conn->query($check_query);

if ($result->num_rows > 0) {
    header("Location: error.html");
    exit();
}

// Array con todos los valores del select especialidad
$especialidades = array(
    "pediatria",
    "Consulta general its",
    
    "psicologia",
    
    "ginecologia",
    "nino sano",
    "planificacion familiar",
    "carent",
    "aro",
    
    "prenatal"
);

$especialidades2 = array(
   "nutricion",
   "cardiologia",
   "gastro"
);
if (in_array($especialidad, $especialidades)) {
    $max_comprobante_limit = 14;
} elseif (in_array($especialidad, $especialidades2)) {
    $max_comprobante_limit = 7;
}

// Consulta SQL con filtro por especialidad
$sql = "SELECT comprobante FROM citas WHERE especialidad = '$especialidad'";
$result = $conn->query($sql);

$comprobante = 1;

if ($result->num_rows > 0) {
    $comprobantes_array = array();

    while ($row = $result->fetch_assoc()) {
        $comprobantes_array[] = $row['comprobante'];
    }

    $max_comprobante = max($comprobantes_array);

    // Verificar si se alcanzó el límite
    if ($max_comprobante >= $max_comprobante_limit) {
        // Redirigir a error.html
        header("Location: error.html");
        exit;
    }

    $comprobante = $max_comprobante + 1;
}


// Prepara la consulta SQL
$sql = "INSERT INTO citas (nombre, apellido, cedula, telefono, email, fecha, especialidad, comprobante)
VALUES ('$nombre', '$apellido', '$cedula', '$telefono', '$email', '$fecha', '$especialidad', '$comprobante')";

// Ejecuta la consulta
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cierra la conexión
$conn->close();

// Tus variables
$_SESSION['nombre'] = $nombre;
$_SESSION['apellido'] = $apellido;
$_SESSION['cedula'] = $cedula;
$_SESSION['telefono'] = $telefono;
$_SESSION['email'] = $email;
$_SESSION['fecha'] = $fecha;
$_SESSION['especialidad'] = $especialidad;
$_SESSION['comprobante'] = $comprobante;

?>
    </body>
</html>


























