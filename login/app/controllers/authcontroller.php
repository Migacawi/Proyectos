<?php

require_once __DIR__ . '/../models/Usuario.php';

class AuthController {

    private $conn;
    private $usuarioModel;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->usuarioModel = new Usuario($conn);
    }

    public function register() {
        $nombre = $_POST['nombre'] ?? '';
        $correo = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $password2 = $_POST['password2'] ?? '';

        
        if (empty($nombre) || empty($correo) || empty($password)) {
            echo "<script>alert('Completa todos los campos'); window.location='../registro.php';</script>";
            exit;
        }
        if ($password !== $password2) {
            echo "<script>alert('Las contraseñas no coinciden'); window.location='../registro.php';</script>";
            exit;
        }

        if ($this->usuarioModel->existePorCorreo($correo)) {
            echo "<script>alert('El correo ya está registrado'); window.location='../registro.php';</script>";
            exit;
        }

        $ok = $this->usuarioModel->registrar($nombre, $correo, $password);

        if ($ok) {
            echo "<script>alert('Usuario registrado con éxito'); window.location='../login.php';</script>";
        } else {
            echo "<script>alert('Error al registrar usuario'); window.location='../registro.php';</script>";
        }
    }

    public function login() {
        $correo = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        if (empty($correo) || empty($password)) {
            echo "<script>alert('Rellena correo y contraseña'); window.location='../login.php';</script>";
            exit;
        }

        $usuario = $this->usuarioModel->obtenerPorCorreo($correo);
        if (!$usuario) {
            echo "<script>alert('Correo no registrado'); window.location='../login.php';</script>";
            exit;
        }

        if (password_verify($password, $usuario['password'])) {
            session_start();
            // Guarda lo necesario en la sesión
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nombre'] = $usuario['nombre'];

            header("Location: ../dashboard.php");
            exit;
        } else {
            echo "<script>alert('Contraseña incorrecta'); window.location='../login.php';</script>";
            exit;
        }
    }
}

