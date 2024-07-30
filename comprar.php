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
<body>
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

    <div class="container-lg container-fluid ">
        <div class="text-center">
            <h1>Comprar</h1>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="border">
                    <div class="border">
                        <h3>1. Opciones de entrega</h3>
                    </div>
                    <div class="">
                        <div class="d-flex p-3">
                            <button class="btn btn-outline-dark rounded-3 p-3" type="button">Entrega en direccion</button>
                            <button class="btn btn-outline-dark" type="button">Recojo en tienda</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 border">
                <div class="d-flex justify-content-between">
                    <h3>Productos en tu carro</h3>
                    <a href="nav-link">Editar</a>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
