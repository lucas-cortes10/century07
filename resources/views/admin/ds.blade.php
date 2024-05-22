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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


</head>
<body>
    
    <div class="container-fluid">

        <!-- Navegacion -->

        <div class="row">

            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand me-auto logoa" href="ds.html"><img src="img/5.png" alt="" class="logopag"></a>
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

    <div class="pincipal">
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

                
                <h3 class="mb-2 mt-5"><i class="bi bi-arrow-return-left me-3 icons"></i></i>Devoluciones</h3>
                <ul class="funcionalidades mt-3">
                    <li><a href="devoluciones/devoluciones.html">Actualizar Y Eliminar Devolucion</a></li>
                </ul>
                

            </div>
        </div>



        <div class="row Contenido mb-5 col-xl-8 col-sm-4 col-md-6">

            <div class="d-flex align-items-center">
                <div class="mb-5 me-5">
                    <img src="img/admin1.jpg" class="rounded" alt="..." width="75" height="75">
                </div>
                <h2 class="mt-5">Bienvenido Administrador <i class="bi bi-file-lock2-fill"></i></h2>
            </div>
            

            <div class="cartas mt-5">
                
                <div class="me-5">
                    <p class="text-center ">Mas Solicitados</p>
                    <canvas id="myChart"></canvas>
                </div>

                <div class="col-xl-3 col-md-6 col-sm-8 mt-5">
                    <div class="card card2 text-white mb-4">
                        <div class="card-body">
                            <i class="bi bi-motherboard me-3"></i>Componentes

                            <p class="mt-3">Toatales : 10</p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link text-decoration-none" href="error404.html">Ver Detalles</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mt-5">
                    <div class="card card3 text-white mb-4">
                        <div class="card-body">
                            <i class="bi bi-arrow-return-left"></i> Devoluciones

                            <p class="mt-3"> Totales : 5</p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link text-decoration-none" href="error404.html">Ver Detalles</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card-header mt-5 mb-5">
                <i class="fas fa-table me-1 "></i>
                <h4>Compras Recientes</h2>
            </div>
            <div class="card-body">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Producto</th>
                                <th>Marca</th>
                                <th>Cantidad</th>
                                <th>Fecha</th>
                                <th>Precio</th>
                                <th>Detalle Compra</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>Computador Cougar</td>
                                <td>Cougar</td>
                                <td>6</td>
                                <td>2011-04-25</td>
                                <td>$320,800</td>
                                <td><a href=""><i class="bi bi-card-checklist actualizar me-5"></i></a></td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Ryzen 5 5500</td>
                                <td>AMD</td>
                                <td>5</td>
                                <td>2011-07-25</td>
                                <td>$170,750</td>
                                <td><a href=""><i class="bi bi-card-checklist actualizar me-5"></i></a></td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Logitech G457</td>
                                <td>Logitech</td>
                                <td>66</td>
                                <td>2009-01-12</td>
                                <td>$86,000</td> 
                                <td><a href=""><i class="bi bi-card-checklist actualizar me-5"></i></a></td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Intel I5</td>
                                <td>INTEL</td>
                                <td>22</td>
                                <td>2012-03-29</td>
                                <td>$433,060</td>
                                <td><a href=""><i class="bi bi-card-checklist actualizar me-5"></i></a></td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>RTX 3050</td>
                                <td>NVIDIA</td>
                                <td>33</td>
                                <td>2008-11-28</td>
                                <td>$162,700</td>
                                <td><a href=""><i class="bi bi-card-checklist actualizar me-5"></i></a></td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012-12-02</td>
                                <td>$372,000</td>
                                <td><a href=""><i class="bi bi-card-checklist actualizar me-5"></i></a></td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012-08-06</td>
                                <td>$137,500</td>
                                <td><a href=""><i class="bi bi-card-checklist actualizar me-5"></i></a></td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2010-10-14</td>
                                <td>$327,900</td>
                                <td><a href=""><i class="bi bi-card-checklist actualizar me-5"></i></a></td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>39</td>
                                <td>2009-09-15</td>
                                <td>$205,500</td>
                                <td><a href=""><i class="bi bi-card-checklist actualizar me-5"></i></a></td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td>23</td>
                                <td>2008-12-13</td>
                                <td>$103,600</td>
                                <td><a href=""><i class="bi bi-card-checklist actualizar me-5"></i></a></td>
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>30</td>
                                <td>2008-12-19</td>
                                <td>$90,560</td>
                                <td><a href=""><i class="bi bi-card-checklist actualizar me-5"></i></a></td>
                            </tr>
                            <tr>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2013-03-03</td>
                                <td>$342,000</td>
                                <td><a href=""><i class="bi bi-card-checklist actualizar me-5"></i></a></td>
                            </tr>
                            <tr>
                                <td>Charde Marshall</td>
                                <td>Regional Director</td>
                                <td>San Francisco</td>
                                <td>36</td>
                                <td>2008-10-16</td>
                                <td>$470,600</td>
                                <td><a href=""><i class="bi bi-card-checklist actualizar me-5"></i></a></td>
                            </tr>
                            <tr>
                                <td>Haley Kennedy</td>
                                <td>Senior Marketing Designer</td>
                                <td>London</td>
                                <td>43</td>
                                <td>2012-12-18</td>
                                <td>$313,500</td>
                                <td><a href=""><i class="bi bi-card-checklist actualizar me-5"></i></a></td>
                            </tr>
                    </tbody>
                </table>
            </div>
            
        </div>

            
    </div>     


    </div>

    <!-- SCRIPTS TABLAS -->

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>

    <script>
        new DataTable('#example');
    </script>

    <!-- ChartsJS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');
      
        new Chart(ctx, {
          type: 'polarArea',
          data: {
            labels: ['AMD', 'NVIDIA', 'INTEL', 'COUGAR', 'MSI', 'ELGATO'],
            datasets: [{
              label: 'Productos Mas Solicitados',
              data: [12, 19, 3, 5, 7, 5],
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

</body>
</html>