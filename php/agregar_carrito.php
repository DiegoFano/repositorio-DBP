<?php
session_start();
include 'php/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $producto_id = $_POST['producto_id'];
    $user_id = 1; // Cambia esto según tu lógica para obtener el ID del usuario

    // Verificar si el producto ya está en el carrito
    $sql = "SELECT * FROM Carrito WHERE producto_id = ? AND user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $producto_id, $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Si el producto ya está en el carrito, no hacer nada o actualizar la cantidad
    } else {
        // Agregar el producto al carrito
        $sql = "INSERT INTO Carrito (producto_id, user_id, cantidad) VALUES (?, ?, 1)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $producto_id, $user_id);
        $stmt->execute();
    }

    $stmt->close();
    $conn->close();

    // Redirigir al usuario de vuelta a la página de favoritos o al carrito
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}
?>
