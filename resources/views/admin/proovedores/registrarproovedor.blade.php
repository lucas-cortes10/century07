<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/admin/ds.css')}}">


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
                                    <a class="nav-link mx-lg-2" href="#"><i class="bi bi-chat-right-text-fill"></i></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="#"><i class="bi bi-bell-fill"></i></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="#"><i class="bi bi-question-square-fill"></i></a>
                                </li>

                                <div class="nav-item">
                                    <a href="" class="nav-link mx-lg-2"><i class="bi bi-box-arrow-right"></i></a>
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
                    <li><a href="../productos/registrarproductos.html" class="">Registrar Producto</a></li>
                    <li><a href="../productos/actualizaryeliminarproducto.html">Actualizar Y Eliminar Poruducto</a></li>
                </ul>

                <h3 class="mb-2 mt-5"><i class="bi bi-dropbox me-3" ></i>Proovedores</h3>
                <ul class="funcionalidades mt-3">
                    <li><a href="registrarproveedor.html" class="text-success">Registrar Proovedor</a></li>
                    <li><a href="actualizaryeliminarproveedor.html">Actualizar Y Eliminar Proovedor</a></li>
                </ul>

                
                <h3 class="mb-2 mt-5"><i class="bi bi-arrow-return-left me-3"></i></i>Devoluciones</h3>
                <ul class="funcionalidades mt-3">
                    <li><a href="../devoluciones/devoluciones.html">Actualizar Y Eliminar Devolucion</a></li>
                </ul>
            
            </div>
        </div>

        <!-- Formulario Proveedores -->

        <div class="row Contenido">
             
            <div class="d-flex flex-column align-items-center col-md-12">
                <h3 class="mb-3"><i class="bi bi-archive-fill"></i>Registro</h3>
                <h4 class="mb-5  prove">Proveedor</h4>
            </div>
            <form action="#"  class="row g-3 needs-validation was-validated" novalidate>

                <div class="col-md-6">
                    <label for="inputProveedores" class="form-label">Nombre Proveedor</label>
                    <input type="text" class="form-control" id="inputProveedores" required>
                </div>
                

                  <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Tipo de Proveedor</label>
                        <select id="inputState" class="form-select" required>
                          <option selected disabled>Seleccione</option>
                          <option value="HA">Harware</option>
                          <option value="COM">Computadores</option>
                          <option value="DS">Dispositivos de Sonido</option>
                        </select>
                      </div>

                  <div class="col-md-6">
                    <label for="inputNumeroIdentificacion" class="form-label">Numero Celular</label>
                    <input type="number" class="form-control" id="inputNumeroIdentificacion" required min="1" >
                  </div>

                <div class="col-md-6">
                  <label for="inputEmail" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail" required>
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Direccion</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="Kr 124 ..." required>
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Ciudad</label>
                  <input type="text" class="form-control" id="inputCity" required>
                </div>
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Codigo Postal</label>
                  <input type="number" class="form-control" id="inputZip" required min="100" max="999" >
                </div>
                <div class="col-12 d-flex justify-content-center mt-5">
                  <button type="submit" class="btn btn-primary btn-form">Registrar Proveedor</button>
                </div>
             </form>

        </div>

  
  
  </body>
  </html>