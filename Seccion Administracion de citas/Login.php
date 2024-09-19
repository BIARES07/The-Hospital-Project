<?php
// Conexión a la base de datos
$servername = "sql106.infinityfree.com";
$username = "if0_36535111";
$password = "bI1mOlSIiBpOM6l";
$dbname = "if0_36535111_project_hospital";
// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Recibe variables
$User = $_POST['User'];
$Pass = $_POST['Pass'];

// Consulta la tabla "login" campo "usuario" y campo "contraseña"
$sql = "SELECT * FROM login WHERE usuario = '$User' AND contrasena = '$Pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    session_start(); 
    $_SESSION['username'] = $User; 

    
    header("Location: PanelAdmin.php");
    exit; 
} else {
    
    echo '<script>alert("Usuario o contraseña incorrectos");</script>';
}

$conn->close();
?>







