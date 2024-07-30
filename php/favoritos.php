<?php
include 'php/conexion.php';

$user_id = 2; // Cambia esto según tu lógica para obtener el ID del usuario

// Obtener los elementos de la tabla Favoritos
$sql = "SELECT p.producto_id, p.nombre, p.descripcion, p.precio, p.imagen_url 
        FROM Favoritos f
        JOIN Productos p ON f.producto_id = p.producto_id
        WHERE f.user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$favoritos_items = [];
while ($row = $result->fetch_assoc()) {
    $favoritos_items[] = $row;
}

$stmt->close();

// Mostrar los elementos de favoritos si existen
if (!empty($favoritos_items)) {
    foreach ($favoritos_items as $item) {
        ?>
        <div class="tarjeta">
            <div class="row">
                <div class="col-3 p-2 p-md-3 d-flex justify-content-center">
                    <a href="">
                        <img class="img-fluid" src="<?php echo $item['imagen_url']; ?>" alt="<?php echo $item['nombre']; ?>">
                    </a>
                </div>
                <div class="col-6 p-3">
                    <a class="nav-link" href="#"><?php echo $item['nombre']; ?></a>
                    <div class="">
                        <p><?php echo $item['descripcion']; ?></p>  
                        <div class="d-flex align-content-center p-3">
                            <!-- Botón para agregar al carrito -->
                            <form action="php/agregar_carrito.php" method="post">
                                <input type="hidden" name="producto_id" value="<?php echo $item['producto_id']; ?>">
                                <button type="submit" class="btn btn-primary">Agregar a Carrito</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-3 p-2 d-flex justify-content-end">
                    <span class="p-3" id="precio">S/ <?php echo number_format($item['precio'], 2); ?></span>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    echo "<p>No tienes elementos en favoritos.</p>";
}

$conn->close();
?>
