<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <!-- Datatable -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/admin/ds.css')}}">
    
</head>
<body>

   <!-- Navegacion -->

   <div class="row">

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-auto logoa" href="ds.html"><img src="../img/5.png" alt="" class="logopag"></a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="error404.html"><i class="bi bi-chat-right-text-fill"></i></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="error404.html"><i class="bi bi-bell-fill"></i></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="error404.html"><i class="bi bi-question-square-fill"></i></a>
                        </li>

                        <div class="nav-item">
                            <a href="../ini.html" class="nav-link mx-lg-2"><i class="bi bi-box-arrow-right"></i></a>
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
    
     <!-- Fin Barra Navegacion -->
     
     <!-- Lista Funcionalidades -->

        <div class="row ">
            <div class="col-md-3 lista border-end border-black">

                <h3 class="mb-2"><i class="bi bi-cpu me-3 icons"></i>Prodructos</h3>
                <ul class="funcionalidades mt-3">
                    <li><a href="productos/registrarproductos.html">Registrar Producto</a></li>
                    <li><a href="">Actualizar Y Eliminar Poruducto</a></li>
                </ul>

                <h3 class="mb-2 mt-5"><i class="bi bi-dropbox me-3 icons" ></i>Proovedores</h3>
                <ul class="funcionalidades mt-3">
                    <li><a href="proveedores/registrarproveedor.html">Registrar Proovedor</a></li>
                    <li><a href="proveedores/actualizaryeliminarproveedor.html">Actualizar Y Eliminar Proovedor</a></li>
                </ul>

                
                <h3 class="mb-2 mt-5"><i class="bi bi-arrow-return-left me-3 icons"></i>Devoluciones</h3>
                <ul class="funcionalidades mt-3">
                    <li><a href="devoluciones/devoluciones.html">Actualizar Y Eliminar Devolucion</a></li>
                </ul>
                

            </div>
        </div>
     <!-- Fin Lista Funcionalidades -->  
     
     <!-- Formulario -->

        <div class="contenido">
             <div class="card mb-2">
                <div class=" d-flex card-body justify-content-center align-items-center col-md-6 col-xl-8">
                    <div class="col-6">
                        <form class="needs-validation was-validated me-5" novalidate>
                        <h1 class="text-center mb-3"><i class="bi bi-clipboard2 me-2"></i>Registro </h1>
                        <h4 class="text-center mb-5">Productos</h4>
                            <div class="mb-3">
                              <label for="examplenombre" class="form-label">Nombre Producto: </label>
                              <input type="text" class="form-control" id="examplenombre" required>
                            </div>
            
                            <div class="mb-3">
                              <label for="exampleInputmarca" class="form-label">Marca </label>
                              <input type="text" class="form-control" id="exampleInpumarca" required>
                            </div>
            
            
                          <div class="form-check"> 
                            <label for="Categoria">Categoria:</label>
            
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                              <label class="form-check-label" for="flexRadioDefault1">
                                Computadoras
                              </label>
                            </div>
            
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                              <label class="form-check-label" for="flexRadioDefault1">
                               Harware de PC
                              </label>
                            </div>
            
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                              <label class="form-check-label" for="flexRadioDefault2">
                                Dispositivos de Sonido
                              </label>
                            </div>
                          </div>
            
                            <div class="mb-3">
                              <label for="examplevalor" class="form-label">Valor: </label>
                              <input type="number" class="form-control" id="examplevalor" min="0" required>
                            </div>
            
                            <div class="mb-3">
                              <label for="examplecantidad" class="form-label">Cantidad: </label>
                              <input type="number" class="form-control" id="examplecantidad" required min="1">
                            </div>
            
                            <div class="mb-3">
                              <label for="examplefecha" class="form-label">Fecha: </label>
                              <input type="date" class="form-control" id="examplefecha" required>
                            </div>
            
                            <button type="submit" class="btn btn-primary btn-form ms-5 mb-5 mt-4">Resgistrar Producto</button>
                          </form>
                    </div> 

                    <div class="ms-5">
                      <canvas id="myChart"></canvas>
                    </div>

                </div>
            </div>

        </div>
    <!-- Fin Formulario -->

    <!-- ChartsJS -->
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

     <script>
        const ctx = document.getElementById('myChart');
      
        new Chart(ctx, {
          type: 'line',
          data: {
            labels: ['GRAFICAS', 'MEMORIAS', 'TECLADOS', 'MOUSES', 'COMPUTRADORES', 'AUDIFONOS'],
            datasets: [{
              label: 'Productos Registrados',
              data: [12, 29, 30, 50, 40, 15],
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
      </script>
    <!-- ChartsJS -->
</body>
</html>