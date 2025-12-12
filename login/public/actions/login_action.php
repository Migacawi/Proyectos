<?php

require_once __DIR__ . '/../../app/core/conexion.php';
require_once __DIR__ . '/../../app/controllers/AuthController.php';

$controller = new AuthController($conn);
$controller->login();
