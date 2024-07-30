<?php
session_start();
include 'conexion.php';

$carrito_id = $_POST['carrito_id'];

$sql = "DELETE FROM Carrito WHERE carrito_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $carrito_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo 'success';
} else {
    echo 'error';
}

$stmt->close();
$conn->close();
?>
