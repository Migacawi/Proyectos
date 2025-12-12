<?php

class Usuario {
    private $conn;

    public function __construct($conexion) {
        $this->conn = $conexion;
    }

    public function registrar($nombre, $correo, $password) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios (nombre, correo, password) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $nombre, $correo, $hash);
        return $stmt->execute();
    }

    public function existePorCorreo($correo) {
        $sql = "SELECT id FROM usuarios WHERE correo = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $res = $stmt->get_result();
        return $res->num_rows > 0;
    }

    public function obtenerPorCorreo($correo) {
        $sql = "SELECT * FROM usuarios WHERE correo = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}
