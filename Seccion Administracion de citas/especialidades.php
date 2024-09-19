<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Panel Admin</title>
    <link rel="stylesheet" type="text/css" href="style5.css">
</head>
<body>
    <!-- Encabezado de la página -->
    <header>
        <img id="logo" src="Hospital_Logo.png" alt="imagen">
        <div class="barra_nav"></div>
        <div class="titulo_main">Administrador De Citas</div>
        <div class="dropdown">
            <button class="dropbtn">Menú</button>
            <div class="dropdown-content">
            <a href="PanelAdmin.php">Inicio</a>
            <a href="especialidades.php?area=prenatal">Prenatal</a>
              <a href="especialidades.php?area=aro">ARO</a>
              <a href="especialidades.php?area=pediatria">Pediatria</a>
              <a href="especialidades.php?area=Consulta general its">ITS</a>
              <a href="especialidades.php?area=nutricion">Nutricion</a>
              <a href="especialidades.php?area=psicologia">Psicologia</a>
              <a href="especialidades.php?area=cardiologia">Cardiologia</a>
              <a href="especialidades.php?area=ginecologia">Ginecologia</a>
              <a href="especialidades.php?area=nino sano">Niño Sano</a>
              <a href="especialidades.php?area=planificacion familiar">P. Familiar</a>
              <a href="especialidades.php?area=gastro">Gastro</a>
              <a href="especialidades.php?area=carent">Carent</a>
              <a href="logout.php">Cerrar sesion</a>
            </div>
          </div>
    </header>

    <main>
    <?php
//obten el area de la especialidad
$area_especialidad = $_GET['area'];



session_start(); // Inicia la sesión

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
$sql = "SELECT nombre, apellido, cedula, telefono, email, fecha FROM citas WHERE especialidad = '$area_especialidad' ORDER BY comprobante ASC";
$result = $conn->query($sql);

if (isset($_SESSION['username'])) {
    // Si existe la variable de sesión "username", muestra un mensaje de bienvenida
    $username = $_SESSION['username'];
    echo "<div id='mis-parrafos'>";
    echo "<p class='bienvenida'><img src='User.png' alt='User Icon'>Bienvenido: $username</p>"; // Nuevo párrafo con la clase "bienvenida"
    echo "<p id='titulo'><img src='Panel.png' alt='Panel Icon'>Panel de Citas</p>";
    echo "</div>";
}

//muestra el valor de $area_especialidad
echo "<h1 style='text-align:center; color: #337ab7; font-size: 24px; font-weight: bold;'>$area_especialidad</h1>";
if ($result->num_rows > 0) {
    // Imprime los encabezados de la tabla
    echo "<table>";
    echo "<tr><th>Nombre</th><th>Apellido</th><th>Cédula</th><th>Teléfono</th><th>Email</th><th>Fecha de Nacimiento</th><th>Validado</th><th>Eliminar</th></tr>";
    
    // Imprime los datos de cada fila
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nombre"] . "</td><td>" . $row["apellido"] . "</td><td>" . $row["cedula"] . "</td><td>" . $row["telefono"] . "</td><td>" . $row["email"] . "</td><td>" . $row["fecha"] . "</td><td><input type='checkbox' name='validado[]' value='" . $row["cedula"] . "'></td><td><form action='borrar.php' method='post'><input type='hidden' name='cedula' value='" . $row["cedula"] . "'><input type='submit' value='Eliminar' onclick='return confirmDelete();'></form></td></tr>";
    }
    echo "</table>";
    echo "<script src='confirmDelete.js'></script>";

}
else {
    echo "en este momento no hay citas pendientes";
}

echo "<p style='text-align:center;'><a href='descargarRegistros.php?area=".$area_especialidad."'><img src='Guardar.png' alt='Guardar Icon' style='width: 24px; height: 24px;'></a></p>";
// Cerrar la aplicación
$conn->close();


?>




    </main>

    <footer>
        <p>
            Charallave, Municipio Cristóbal Rojas, Sector Peñuela Ruiz, barrio ajuro entre la calle 7 y 8, Edo. Miranda.
        </p>
    </footer>
</body>
</html>