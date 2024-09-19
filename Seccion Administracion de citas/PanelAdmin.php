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
// abrir conexion base de datos
$servername = "sql106.infinityfree.com";
$username = "if0_36535111";
$password = "bI1mOlSIiBpOM6l";
$dbname = "if0_36535111_project_hospital";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start(); // Inicia la sesión

if (isset($_SESSION['username'])) {
    // Si existe la variable de sesión "username", muestra un mensaje de bienvenida
    $username = $_SESSION['username'];
    echo "<div id='mis-parrafos'>";
    echo "<p class='bienvenida'><img src='User.png' alt='User Icon'>Bienvenido: $username</p>"; // Nuevo párrafo con la clase "bienvenida"
    echo "<p id='titulo'><img src='Panel.png' alt='Panel Icon'>Panel de Citas</p>";
    echo "</div>";
    
    
    // Cerrar la conexión
    $conn->close();
} else {
    // Si no existe la variable de sesión "username", redirige a otra página
    header("Location: LoginAdmin.html");
    exit; // Asegura que no se procese más código después de la redirección
}


?>

<form id="generar_citaPDF" action="generarcitaPDF.php" method="post">
                
                <label for="nombre_apellido">Nombres y Apellidos del paciente*</label>
                <input type="text" id="nombre_apellido" name="nombre_apellido"><br><br>

                <label for="cedula">Introduzca la Cedula del paciente</label>
                <input type="text" id="cedula" name="cedula"><br><br>

                <label for="medico">Medico Encargado*</label>
                <input type="text" id="medico" name="medico"><br><br>

                <label for="fecha">Fecha de la cita</label>
                <input type="date" id="fecha" name="fecha"><br><br>

                <label for="especialidad">Especialidad*</label>
                <select id="especialidad" name="especialidad">
                    <option value="none">Elija una opcion</option>
                    <option value="pediatria">Pediatria</option>
                    <option value="Consulta general its">Consulta General ITS</option>
                    <option value="nutricion">Nutricion</option>
                    <option value="psicologia">Psicologia</option>
                    <option value="cardiologia">Cardiologia</option>
                    <option value="ginecologia">Ginecologia</option>
                    <option value="nino sano">Niño Sano</option>
                    <option value="planificacion familiar">Planificacion Familiar</option>
                    <option value="carent">Carent</option>
                    <option value="aro">ARO</option>
                    <option value="gastro">Gastro</option>
                    <option value="prenatal">Prenatal</option>

                    

                </select><br><br>

                <label for="hora">Hora de la cita*</label>
                    <select id="hora" name="hora">
                        <option value="none">Elija una opcion</option>
                        <option value="07:00AM">07:00AM</option>
                        <option value="07:30AM">07:30AM</option>
                        <option value="08:00AM">08:00AM</option>
                        <option value="08:30AN">08:30AM</option>
                        <option value="09:00AM">09:00AM</option>
                        <option value="09:30AM">09:30AM</option>
                        <option value="10:00AM">10:00AM</option>
                        <option value="10:30AM">10:30AM</option>
                        <option value="11:00AM">11:00AM</option>
                        <option value="11:30AM">11:30AM</option>
                        <option value="12:00PM">12:00PM</option>
                        <option value="12:30PM">12:30PM</option>
                        <option value="01:00PM">01:00PM</option>
                        <option value="01:30PM">01:30PM</option>
                        <option value="02:00PM">02:00PM</option>
                        <option value="02:30PM">02:30PM</option>
                        <option value="03:00PM">03:00PM</option>
                        <option value="03:30PM">03:30PM</option>
                        <option value="04:00PM">04:00PM</option>
                        <option value="04:30PM">04:30PM</option>
                        <option value="05:00PM">05:00PM</option>


                    </select><br><br>


                <input type="submit" value="generar cita">


    </main>

    <footer>
        <p>
            Charallave, Municipio Cristóbal Rojas, Sector Peñuela Ruiz, barrio ajuro entre la calle 7 y 8, Edo. Miranda.
        </p>
    </footer>

    <script src="validarPDF.js"></script>
</body>
</html>


