<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Cambiar según el usuario de la base de datos
$password = ""; // Cambiar según la contraseña de la base de datos
$dbname = "spa_serenidad";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

// Insertar datos en la tabla "clientes"
$sql = "INSERT INTO clientes (nombre, apellidos, correo, telefono) VALUES ('$nombre', '$apellidos', '$correo', '$telefono')";

if ($conn->query($sql) === TRUE) {
    // Redirigir a la página de Agenda.html
    header("Location: Agenda.html");
    exit(); // Asegurarse de que no se ejecuta código adicional
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

