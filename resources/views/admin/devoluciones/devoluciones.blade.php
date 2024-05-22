<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <!-- Datatable -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin/ds.css')}}">
    <!-- CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>
    
    <div class="container-fluid">

        <!-- Navegacion -->

        <div class="row">

            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand me-auto logoa" href="../ds.html"><img src="../img/5.png" alt="" class="logopag"></a>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="../error404.html"><i class="bi bi-chat-right-text-fill"></i></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="../error404.html"><i class="bi bi-bell-fill"></i></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="../error404.html"><i class="bi bi-question-square-fill"></i></a>
                                </li>

                                <div class="nav-item">
                                    <a href="../../ini.html" class="nav-link mx-lg-2"><i class="bi bi-box-arrow-right"></i></a>
                                </div>

                            </ul>
                        </div>
                    </div>

                    <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>


        </div>


        <!-- Lista Funcionalidades -->

        <div class="row">
            <div class="col-md-3 lista border-end border-black">

                <h3 class="mb-2"><i class="bi bi-cpu me-3"></i>Prodructos</h3>
                <ul class="funcionalidades mt-3">
                    <li><a href="../productos/registrarproductos.html">Registrar Producto</a></li>
                    <li><a href="../productos/actualizaryeliminarproducto.html" class="">Actualizar Y Eliminar Poruducto</a></li>
                </ul>

                <h3 class="mb-2 mt-5"><i class="bi bi-dropbox me-3" ></i>Proovedores</h3>
                <ul class="funcionalidades mt-3">
                    <li><a href="../proveedores/registrarproveedor.html">Registrar Proovedor</a></li>
                    <li><a class=""  href="../proveedores/actualizaryeliminarproveedor.html">Actualizar Y Eliminar Proovedor</a></li>
                </ul>

                
                <h3 class="mb-2 mt-5"><i class="bi bi-arrow-return-left me-3"></i></i>Devoluciones</h3>
                <ul class="funcionalidades mt-3">
                    <li><a href="" class="text-success">Actualizar Y Eliminar Devolucion</a></li>
                </ul>
                



            </div>
        </div>

        <div class="row Contenido mb-5">
            <div class="card-header mb-5">
                <i class="fas fa-table me-1 "></i>
                <h4>Devoluciones Activas</h2>
            </div>
            <div class="card-body">
                <table id="example" class="table table-striped" style="width:100%" >
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Producto</th>
                            <th>Fecha de Solicitud</th>
                            <th>Razon</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Juan Carlos</td>
                            <td>Computador Cougar</td>
                            <td>14/03/24</td>
                            <td>Computar presenta fallos al encender</td>
                            <td><a href=""><i class="bi bi-brush  actualizar me-4"></i></a></td>
                            <td><a href=""><i class="bi bi-file-x-fill eliminar me-3"></i></a></td>
                        </tr>
                        <tr>
                            <td>Pepito Perez</td>
                            <td>RTX 3050</td>
                            <td>10/03/24</td>
                            <td>Grafica no da Video</td>
                            <td><a href=""><i class="bi bi-brush  actualizar me-4"></i></a></td>
                            <td><a href=""><i class="bi bi-file-x-fill eliminar me-3"></i></a></td>
                        </tr>
                        <tr>
                            <td>Papitas Fritas</td>
                            <td>Audifonos G435</td>
                            <td>07/03/24</td>
                            <td>Audifonos presentan fallos esteticos</td>
                            <td><a href=""><i class="bi bi-brush  actualizar me-4"></i></a></td>
                            <td><a href=""><i class="bi bi-file-x-fill eliminar me-3"></i></a></td>
                        </tr>
                        <tr>
                            <td>Pachito Patacon</td>
                            <td>Mouse G203</td>
                            <td>01/03/24</td>
                            <td>Mouse Presenta fallas al dar clicks</td>
                            <td><a href=""><i class="bi bi-brush  actualizar me-4"></i></a></td>
                            <td><a href=""><i class="bi bi-file-x-fill eliminar me-3"></i></a></td>
                        </tr>
                        
                        
                       
                    
                    
        </div>

    <!-- SCRIPTS TABLAS -->

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>

    <script>
        new DataTable('#example');
    </script>

    

</body>
</html>