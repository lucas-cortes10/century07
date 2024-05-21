<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CenturyTech.com | Tienda de Tecnologia Colombiana</title>
    <link rel="icon" href="{{ asset('img/carta-grafica.png')}}">
    <script src="https://kit.fontawesome.com/32e8cd01f4.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>

<body>

    <!-- Barra Navegacion Menu -->

    <nav class="navbar navbar-expand-lg fixed-top"> <!-- Minetras la pantalla tenga un minimo de ancho este se AGRANDA -->
        <div class="container-fluid">
            <a class="navbar-brand me-auto logoa" href=""><img src="http://localhost/centuryejemplo/resources/img/5.png" alt="" class="logopag"></a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="producto.html">Productos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="error404.html">Nosotros</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#slider">Marcas</a>
                        </li>
                        

                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="compra.html"><i class="fa-solid fa-cart-shopping"></i></a>
                        </li>

                    </ul>
                </div>
            </div>

            <a href="" class="boton-login">Iniciar Sesion</a>

            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Fin Barra Navegacion -->

    <!-- Main -->

    <section class="main">
        <div class="container d-flex align-items-center justify-content-center fs-1 text-white flex-column">
            <h1>Tienda Hardware</h1>
            <h2>Bogota , Colombia</h2>
        </div>
    </section>

    <section class="sec2">

        <!-- Productos -->
        
        <p class="h3 titprodu">Productos Recomendados 🔥</p>

        <div class="container d-flex justify-content-center">
            <div class="row row-cols-auto text-center">

                <div class="col g-col-6 p-2">
                    <img src="{{ asset('img/productos/grafi.png')}}" alt="" class="imgproducto">
                    <div class="info">
                    <p>Tarjeta de Video RTX 3050 8GB</p>
                    <span>$1.000.000</span>
                    </div>
                    <a href="compra.html">Agregar al carrito</a>
                </div>
            
                <div class="col g-col-6 p-2">
                    <img src="{{ asset('img/productos/monitorasus.png')}}" alt="" class="imgproducto">
                    <div class="info">
                    <p>Monitor Asus TUF Gaming 24"</p>
                    <span>$1.700.000</span>
                    </div>
                    <a href="compra.html">Agregar al carrito</a>
                </div>


                <div class="col g-col-6 p-2">
                    <img src="{{ asset('img/productos/audifonos.png')}}" alt="" class="imgproducto">
                    <div class="info">
                    <p>Audifonos Logitech G435</p>
                    <span>$325.000</span>
                    </div>
                    <a href="compra.html">Agregar al carrito</a>
                </div>

                <div class="col g-col-6 p-2">
                    <img src="{{ asset('img/productos/grafi2.png')}}" alt="" class="imgproducto">
                    <div class="info">
                    <p>Tarjeta de Video GTX 1650</p>
                    <span>$870.000</span>
                    </div>
                    <a href="compra.html">Agregar al carrito</a>
                </div>

                <div class="col g-col-6 p-2">
                    <img src="{{ asset('img/productos/streamdeck.png')}}" alt="" class="imgproducto">
                    <div class="info">
                    <p>StreamDeck</p>
                    <span>$700.000</span>
                    </div>
                    <a href="compra.html">Agregar al carrito</a>
                </div>

                <div class="col g-col-6 p-2">
                    <img src="{{ asset('img/productos/teclado.png')}}" alt="" class="imgproducto">
                    <div class="info">
                    <p>Teclado Red Dragon</p>
                    <span>$420.000</span>
                    </div>
                    <a href="compra.html">Agregar al carrito</a>
                </div>


            </div>
        </div>

        <!-- Fin productos -->
    </section>

    <section class="sec3">
        <!-- "SLIDER MARCAS " -->

    <h1 class="marca">MARCAS</h1>

    <div class="slider" id="slider">
        <div class="slider-movimiento">

            <div class="slide">
                <img src="{{ asset('img/marcas/1.png')}}" alt="">
            </div>

            <div class="slide">
                <img src="{{ asset('img/marcas/2.png')}}" alt="">
            </div>

            <div class="slide">
                <img src="{{ asset('img/marcas/4.png')}}" alt="">
            </div>

            <div class="slide">
                <img src="{{ asset('img/marcas/5.png')}}" alt="">
            </div>

            <div class="slide">
                <img src="{{ asset('img/marcas/6.png')}}" alt="">
            </div>

            <div class="slide">
                <img src="{{ asset('img/marcas/1.png')}}" alt="">
            </div>

            <div class="slide">
                <img src="{{ asset('img/marcas/2.png')}}" alt="">
            </div>

            <div class="slide">
                <img src="{{ asset('img/marcas/4.png')}}" alt="">
            </div>

            <div class="slide">
                <img src="{{ asset('img/marcas/5.png')}}" alt="">
            </div>

            <div class="slide">
                <img src="{{ asset('img/marcas/6.png')}}" alt="">
            </div>

            <div class="slide">
                <img src="{{ asset('img/marcas/1.png')}}" alt="">
            </div>


        </div>
    </div>
    </section>
        

    <!-- Fin Main -->



</body>

</html>