<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="css/carrito.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head> 
<body class="d-flex flex-column">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <svg height="60px" width="60px" fill="#111" viewBox="0 0 69 32">
        <path d="M68.56 4L18.4 25.36Q12.16 28 7.92 28q-4.8 0-6.96-3.36-1.36-2.16-.8-5.48t2.96-7.08q2-3.04 6.56-8-1.6 2.56-2.24 5.28-1.2 5.12 2.16 7.52Q11.2 18 14 18q2.24 0 5.04-.72z"></path>
      </svg>
      <div class="d-lg-none d-flex align-items-center">
        <a class="d-inline-flex p-2" href="/wishlist">
          <svg aria-hidden="true"  focusable="false" viewBox="0 0 24 24" role="img" width="24px" height="24px" fill="none">
            <path stroke="#000" stroke-width="1.5" d="M16.794 3.75c1.324 0 2.568.516 3.504 1.451a4.96 4.96 0 010 7.008L12 20.508l-8.299-8.299a4.96 4.96 0 010-7.007A4.923 4.923 0 017.205 3.75c1.324 0 2.568.516 3.504 1.451l.76.76.531.531.53-.531.76-.76a4.926 4.926 0 013.504-1.451">
            </path>
          </svg>
        </a>
        <a class="d-inline-flex p-2" href="carrito.php" title="Carrito 0 artículos" aria-label="Carrito 0 artículos" aria-haspopup="true">
          <svg aria-hidden="true"  focusable="false" viewBox="0 0 24 24" role="img" width="24px" height="24px" fill="none">
            <path stroke="#000" stroke-width="1.5" d="M8.25 8.25V6a2.25 2.25 0 012.25-2.25h3a2.25 2.25 0 110 4.5H3.75v8.25a3.75 3.75 0 003.75 3.75h9a3.75 3.75 0 003.75-3.75V8.25H17.5">
            </path>
          </svg>
        </a>
        <button class="btn p-0 d-inline-flex" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="none" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
          </svg>
        </button>
      </div>
      <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" href="#">Lanzamientos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Hombre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mujer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Niños</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Descuentos</a>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
      <div class="navbar-collapse collapse ps-5 d-lg-flex justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto"> 
          <li class="nav-item">
            <a class="nav-link" href="#">Lanzamientos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Hombre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Mujer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Niños</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Descuentos</a>
          </li>
        </ul>
        <form class="d-flex mt-3 mt-lg-0 ms-auto">
          <button class="btn" type="submit">
          <svg aria-hidden="true" class="pre-nav-design-icon" focusable="false" viewBox="0 0 24 24" role="img" width="24px" height="24px" fill="none">
          <path stroke="#000" stroke-width="1.5" d="M13.962 16.296a6.716 6.716 0 01-3.462.954 6.728 6.728 0 01-4.773-1.977A6.728 6.728 0 013.75 10.5c0-1.864.755-3.551 1.977-4.773A6.728 6.728 0 0110.5 3.75c1.864 0 3.551.755 4.773 1.977A6.728 6.728 0 0117.25 10.5a6.726 6.726 0 01-.921 3.407c-.517.882-.434 1.988.289 2.711l3.853 3.853">
          </path>
          </svg>
          </button>
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        </form>
        <a class="d-inline-flex p-2" href="/wishlist">
        <svg aria-hidden="true"  focusable="false" viewBox="0 0 24 24" role="img" width="24px" height="24px" fill="none">
        <path stroke="#000" stroke-width="1.5" d="M16.794 3.75c1.324 0 2.568.516 3.504 1.451a4.96 4.96 0 010 7.008L12 20.508l-8.299-8.299a4.96 4.96 0 010-7.007A4.923 4.923 0 017.205 3.75c1.324 0 2.568.516 3.504 1.451l.76.76.531.531.53-.531.76-.76a4.926 4.926 0 013.504-1.451">
        </path>
        </svg>
        </a>
        <a class="d-inline-flex" href="carrito.php" title="Carrito 0 artículos" aria-label="Carrito 0 artículos" aria-haspopup="true">
          <svg aria-hidden="true"  focusable="false" viewBox="0 0 24 24" role="img" width="24px" height="24px" fill="none">
            <path stroke="#000" stroke-width="1.5" d="M8.25 8.25V6a2.25 2.25 0 012.25-2.25h3a2.25 2.25 0 110 4.5H3.75v8.25a3.75 3.75 0 003.75 3.75h9a3.75 3.75 0 003.75-3.75V8.25H17.5">
            </path>
          </svg>

        </a>
      </div>



    </div>
  </nav> 

  <div class="container-fluid col-xl-8 p-5 mt-2 d-flex justify-content-center">   
    <div class="container p-0 row border-b">
      <div class="col-lg-8">
        <h1>Carrito de Compras</h1>
        <div class="">
          <div class="row">
            <div class="col-3 p-2 p-md-3 d-flex justify-content-center">
              <a href="" >
                <img class="img-fluid" src="sources/img1.jpg">
              </a>
            </div>
            <div class="col-6 p-3 ">
              <a class="nav-link" href="#">Nike sport cadaca dacca cadac cadac cad good</a>
              <div class="">
                <p>Casaca gororo</p>  
                <p>Color: Olvia</p>
                <div class="d-flex">
                  <div class="form-control border-0">
                    <label>Talla: </label>
                    <select name="talla" id="talla">
                      <option value="S">S</option>
                      <option value="M">M</option>
                      <option selected value="L">L</option>
                      <option value="XL">XL</option>
                    </select>
                  </div>
                  <div class="form-control border-0">
                    <label>Cantidad:</label>
                    <select name="cantidad" id="cantidad">
                      <option value="1">1</option>
                      <option selected value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </div>
                </div>
                <div class="d-flex align-content-center p-3" >
                  <span class="m">
                    <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" role="img" width="24px" height="24px" fill="none">
                      <path stroke="#000" stroke-width="1.5" d="M16.794 3.75c1.324 0 2.568.516 3.504 1.451a4.96 4.96 0 010 7.008L12 20.508l-8.299-8.299a4.96 4.96 0 010-7.007A4.923 4.923 0 017.205 3.75c1.324 0 2.568.516 3.504 1.451l.76.76.531.531.53-.531.76-.76a4.926 4.926 0 013.504-1.451">
                      </path>
                    </svg>
                  </span>
                  <span class="ms-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                      <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                    </svg>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-3  p-2 d-flex justify-content-end">
              <span class=" p-3" id="precio">S/299.00</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4  pt-2 pb-3">
        <h3>Resumen</h3>
        <span>¿Tienes un codigo promocional?</span>
        
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247m2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
        </svg>
        <!-- <div>
          codigo promocional
        </div> -->
        <div class="d-flex justify-content-between mt-3 mb-3 ft-1" >
          <span> Precio con IGV <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247m2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
          </svg></span>
          <span>S/ 0.0</span>
        </div>
        <div class="d-flex justify-content-between mt-3 mb-3" >
          <span> Envío</span>
          <span>S/ 0.0</span>
        </div>
        <div class="d-flex justify-content-between mt-3 mb-3 text-success" >
          <span> Descuentos de la orden</span>
          <span>- S/ 0.0</span>
        </div>
        <div class="d-flex justify-content-between mt-3 mb-3" >
          <span> IGV (18%) <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247m2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
          </svg></span>
          <span>S/ 0.0</span>
        </div>
        <div class="d-flex justify-content-between pt-3 pb-3 border-t-b" >
          <span><strong> Total de la orden</strong></span>
          <span>S/ 0.0</span>
        </div>
        <button class="btn btn-dark container mt-3 py-3 rounded-5" type="submit" height="1500px">Comprar</button>
      </div>
    </div>  
  </div>

  <div class="container-fluid mb-5">
    <h2>Favoritos</h2>
    <i class="fab fa-facebook-f"></i>
    <div class="d-flex " id="favoritos">
      <p> ¿Quieres ver tus favoritos?</p>
      <a class="nav-link" href="">Únete</a>
      <a class="nav-link" href="">Inicia Sesión</a>
    </div>
  </div>
  
<!--   <footer class="mt-auto pt-5 pb-3 bg-black">
    <div class="container-sm-fluid container-md row m-auto">
      <div class="col-3 col-lg-2">
        <a href="" class="link-ft">
          BUSCAR TIENDA
        </a>
        <a href="" class="link-ft">
          REGISTRATE PARA RECIBIR CORREOS 
        </a>
        <a href="" class="link-ft">
          HAZTE MIEMBRO
        </a>
      </div>
      <div class="col-3 col-lg-2">
        <span class="link-ft">OBTENER AYUDA</span>
        <div class="links-ft">
          <a href="" class="nav-link">Estado del pedido</a>
          <a href="" class="nav-link">Envío y entrega</a>
          <a href="" class="nav-link">Cambios, devoluciones y garantías</a>
          <a href="" class="nav-link">Opciones de pago</a>
          <a href="" class="nav-link">Preguntas frecuentes</a>
          <a href="" class="nav-link">Comunicate con nosostros</a>
        </div>
      </div>
      <div class="col-3 col-lg-2">
        <span class="link-ft">ACERCA DE NIKE</span>
        <div class="links-ft">
          <a href="" class="nav-link">Empleo</a>
        </div>
      </div>
      <div class="col-3 col-lg-6 d-flex flex-column p-lg-3 pt-sm-2 p-sm-0 pe-lg-5 links-ft">
        <div class=" d-flex justify-content-lg-end justify-content-sm-center" id="icon-ft">
          <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
          </svg>
          </a>
          <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
          </svg>
          </a>
          <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
          </svg>
          </a>
          <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
          </svg>
          </a>
        </div>
        <div class="d-flex justify-content-lg-end justify-content-sm-center pt-3">
          <a href="">
            <img src="sources/libro-de-reclamaciones.webp" alt="">
            </a>
        </div>
      </div>
    </div>
    <div class="container-sm-fluid container-md p-0 m-auto justify-content-between row">
      <div class="d-flex c-text-ft col-12 col-lg-6">
        <a href="" class="text-ft text-white" >Peru</a>
        <span class="text-ft">2024 Equinox International SAC. RUC 20422488198. Todos los derechos reservados.</span>
      </div>
      <div class="col-12 col-lg-6 d-flex c-text-ft justify-content-end">
        <a href="" class="text-ft">Terminos y Condiciones</a>
        <a href="" class="text-ft">Facturas</a>
        <a href="" class="text-ft">Plitica de privacidad
        </a>
      </div>
    </div>
  </footer>
 -->
 <?php include  'templates/pie.html'; ?>
</body>
</html>
