<?php
session_start();
include 'php/conexion.php';

$user_id = 1; // Cambia esto según tu lógica para obtener el ID del usuario

// Obtener los elementos del carrito
$sql = "SELECT c.producto_id, c.cantidad, p.nombre, p.descripcion, p.precio, p.imagen_url 
        FROM Carrito c 
        JOIN Productos p ON c.producto_id = p.producto_id 
        WHERE c.user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$carrito_items = [];
while ($row = $result->fetch_assoc()) {
    $carrito_items[] = $row;
}

// Calcular totales
$total = 0;
foreach ($carrito_items as $item) {
    $total += $item['precio'] * $item['cantidad'];
}
$envio = 10; // Ejemplo de costo de envío
$descuentos = 0.10; // Ejemplo de descuento

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprar</title>
    <link rel="stylesheet" href="css/carrito.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head> 
<body class="d-flex flex-column">
    <nav class="navbar navbar-expand-lg bg-body-tertiary border-t-b mb-5">
        <div class="container-fluid px-5 ">
        <svg height="60px" width="60px" fill="#111" viewBox="0 0 69 32">
            <path d="M68.56 4L18.4 25.36Q12.16 28 7.92 28q-4.8 0-6.96-3.36-1.36-2.16-.8-5.48t2.96-7.08q2-3.04 6.56-8-1.6 2.56-2.24 5.28-1.2 5.12 2.16 7.52Q11.2 18 14 18q2.24 0 5.04-.72z"></path>
        </svg>
            <a class="d-inline-flex" href="carrito.php" title="Carrito 0 artículos" aria-label="Carrito 0 artículos" aria-haspopup="true">
                <svg aria-hidden="true"  focusable="false" viewBox="0 0 24 24" role="img" width="24px" height="24px" fill="none">
                <path stroke="#000" stroke-width="1.5" d="M8.25 8.25V6a2.25 2.25 0 012.25-2.25h3a2.25 2.25 0 110 4.5H3.75v8.25a3.75 3.75 0 003.75 3.75h9a3.75 3.75 0 003.75-3.75V8.25H17.5">
                </path>
                </svg>
            </a>
        </div>
    </nav> 

    <div class="container-lg container-fluid mb-5">
        <div class="text-center">
            <h1>Comprar</h1>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="border mb-3">
                    <div class="border p-3 bg-dark text-white">
                        <h3>1. Opciones de entrega</h3>
                    </div>
                    <div class="">
                        <div class="d-flex p-3">
                            <button class="btn btn-outline-dark rounded-3 p-3 flex-grow-1 me-2" type="button">Entrega en dirección</button>
                            <button class="btn btn-outline-dark rounded-3 p-3 flex-grow-1" type="button">Recojo en tienda</button>
                        </div>
                    </div>
                    <div class="">
                        <div class="d-flex p-3">
                            <input class=" p-3 flex-grow-1 rounded-3 me-2" type="text" placeholder="*Nombre   "></input>
                            <input class="  p-3  flex-grow-1 rounded-3" type="text" placeholder="*Apellido"></input>
                        </div>
                    </div>
                    <div class="">
                        <div class="d-flex p-3">
                            <select class="  p-3  flex-grow-1 rounded-3 me-2" name="" id="documento">
                                <option value="DNI">DNI</option>
                                <option value="PASAPORTE">PASAPORTE</option>
                                <option value="CARNET DE EXTRANJERIA">CARNET DE EXTRANJERIA</option>
                            </select>
                            <input class="  p-3  flex-grow-1 rounded-3" type="number" placeholder="*Numero de Documento"></input>

                        </div>
                    </div>
                    <div class="">
                        <div class="d-flex p-3">
                            <input class=" p-3 flex-grow-1 rounded-3 " type="text" placeholder="*Direccion   "></input>
                        </div>
                    </div>
                    <div class="">
                        <div class="d-flex p-3">
                            <input class=" p-3 flex-grow-1 rounded-3 " type="number" placeholder="*Numero de telefono   "></input>
                        </div>
                    </div>
                    <div>
                        <p>SERVICIO DE ENVIO</p>
                    </div>
                    <div class="d-flex justify-content-end pe-4">
                        <button type="submit" class="btn btn-dark mt-3 p-2 px-4 rounded-5">Continuar con el pago</button>
                    </div>
                </div>
                <div>
                    <div class="border p-3 bg-dark text-white">
                        <h3>2. Pago</h3>
                    </div>
                </div>
                <div>
                    <div class="border p-3 bg-dark text-white">
                        <h3>3.Finalizar pedido</h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 border p-0" >
                <div class="d-flex justify-content-between p-2 " style="background-color:darkgrey;">
                    <h3>Productos en tu carro</h3>
                    <a href="carrito.php" class="text-black">Editar</a>
                </div>
                <div class="container pb-3">
                    <h3>Resumen</h3>
                    <div class="d-flex justify-content-between mt-3 mb-3 ft-1" >
                    <span> Precio con IGV <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247m2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                    </svg></span>
                    <span>S/ <?php echo number_format($total, 2); ?></span>
                    </div>
                    <div class="d-flex justify-content-between mt-3 mb-3" >
                    <span> Envío</span>
                    <span>S/ <?php echo number_format($envio, 2); ?></span>
                    </div>
                    <div class="d-flex justify-content-between mt-3 mb-3 text-success" >
                    <span> Descuentos de la orden</span>
                    <span>- S/ <?php echo number_format($descuentos * $total, 2); ?></span>
                    </div>
                    <div class="d-flex justify-content-between mt-3 mb-3" >
                    <span> IGV (18%) <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247m2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                    </svg></span>
                    <span>S/ <?php echo number_format($total * 0.18, 2); ?></span>
                    </div>
                    <div class="d-flex justify-content-between pt-3 pb-3 border-t-b" >
                    <span><strong> Total de la orden</strong></span>
                    <span>S/ <?php echo number_format($total + $envio - $descuentos * $total , 2); ?></span>
                    </div>
                </div>
                <?php foreach ($carrito_items as $item): ?>
                <div class="tarjeta">
                    <div class="row">
                        <div class="col-3 p-2 p-md-3 d-flex justify-content-center">
                        <a href="">
                            <img class="img-fluid" src="<?php echo $item['imagen_url']; ?>">
                        </a>
                        </div>
                        <div class="col-6 p-3">
                        <a class="nav-link" href="#"><?php echo $item['nombre']; ?></a>
                        <div class="">
                            <p><?php echo $item['descripcion']; ?></p>  
                            <div class="d-flex align-content-center p-3">
                            <!-- Botón para agregar al carrito -->
                            <form action="agregar_carrito.php" method="post">
                                <input type="hidden" name="producto_id" value="<?php echo $item['producto_id']; ?>">
                            </form>
                            </div>
                        </div>
                        </div>
                        <div class="col-3 p-2 d-flex justify-content-end">
                        <span class="p-3" id="precio">S/ <?php echo number_format($item['precio'], 2); ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <footer class="mt-auto pt-2 pb-3 bg-black m-0">
        <div class="container-sm-fluid container-md p-0 m-auto mt-5 justify-content-between row">
            <div class="d-flex c-text-ft col-12 col-lg-6">
                <a href="" class="text-ft text-white" >Peru</a>
                <span class="text-ft">2024 Equinox International SAC. RUC 20422488198. Todos los derechos reservados.</span>
            </div>
            <div class="col-12 col-lg-6 d-flex c-text-ft justify-content-end">
                <a href="" class="text-ft">Terminos y Condiciones</a>
                <a href="" class="text-ft">Factura Electronica</a>
                <a href="" class="text-ft">Plitica de privacidad
                </a>
            </div>
        </div>          
    </footer>
</body>
</html>
