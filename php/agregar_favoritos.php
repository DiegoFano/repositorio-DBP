<?php
session_start();
include 'conexion.php';

$user_id = $_POST['user_id'];
$producto_id = $_POST['producto_id'];

$sql = "INSERT INTO Favoritos (user_id, producto_id) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $user_id, $producto_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo 'success';
} else {
    echo 'error';
}

$stmt->close();
$conn->close();
?>
