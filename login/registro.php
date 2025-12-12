<?php
require "conexion.php";

$nombre = $_POST['nombre'] ?? '';
$correo = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$hash = password_hash($password, PASSWORD_DEFAULT);

// Activar errores visibles
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $sql = "INSERT INTO usuarios (nombre, correo, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nombre, $correo, $hash);
    $stmt->execute();

    echo "<script>alert('Usuario registrado con éxito'); window.location='login.html';</script>";

} catch (Exception $e) {
    echo "ERROR SQL:<br>";
    echo $e->getMessage() . "<br>";
}
