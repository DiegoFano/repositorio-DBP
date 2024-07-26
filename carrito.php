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
<body>
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
      </div>
    </div>  
  </div>

  <div class="container-fluid">
    <h2>Favoritos</h2>
    <div class="d-flex " id="favoritos">
      <p> ¿Quieres ver tus favoritos?</p>
      <a class="nav-link" href="">Únete</a>
      <a class="nav-link" href="">Inicia Sesión</a>
    </div>
  </div>

</body>
</html>
