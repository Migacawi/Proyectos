<?php

require "conexion.php";

$correo = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$sql = "SELECT * FROM usuarios WHERE correo = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $correo);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $usuario = $result->fetch_assoc();

    
    if (password_verify($password, $usuario['password'])) {


        session_start();
        $_SESSION['usuario'] = $usuario['correo'];

        header("Location: dashboard.html");
        exit();

    } else {
        echo "<script>alert('Contraseña incorrecta'); window.location='login.html';</script>";
    }

} else {
    echo "<script>alert('Correo no registrado'); window.location='login.html';</script>";
}
?>
