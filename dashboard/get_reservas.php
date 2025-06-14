<?php
include 'config/conexion.php'; // tu archivo de conexión

$fecha = $_GET['fecha'] ?? null;

if ($fecha) {
    $stmt = $conn->prepare("SELECT horario, modalidad FROM tbl_reservas WHERE fecha = ?");
    $stmt->execute([$fecha]);
    $reservas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($reservas);
} else {
    echo json_encode([]);
}
