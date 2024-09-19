<?php

$servername = "sql106.infinityfree.com";
$username = "if0_36535111";
$password = "bI1mOlSIiBpOM6l";
$dbname = "if0_36535111_project_hospital";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cedula = $_POST["cedula"];
    $sql = "DELETE FROM citas WHERE cedula = '$cedula'";
    if ($conn->query($sql) === TRUE) {
        header("Location: PanelAdmin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>