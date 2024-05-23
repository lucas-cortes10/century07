
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CenturyTech.com | Registro</title>
    <!-- Font Awesome  -->
    <script src="https://kit.fontawesome.com/32e8cd01f4.js" crossorigin="anonymous"></script>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Estilos CSS     -->
        <link rel="stylesheet" href="{{ asset('css/regist.css')}}">
</head>
<body>
    

       <!-- Barra Navegacion Menu -->

       <nav class="navbar navbar-expand-lg fixed-top"> <!-- Minetras la pantalla tenga un minimo de ancho este se AGRANDA -->
        <div class="container-fluid">
            <a class="navbar-brand me-auto logoa" href="index.html"><img src="{{ asset('img/5.png')}}" alt="" class="logopag"></a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">

                        <li class="nav-item">
                            <a class="nav-link"  href="index.html">Inicio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="index.html">Productos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="error404.html">Nosotros</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="index.html">Marcas</a>
                        </li>
                        

                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                        </li>

                    
                    </ul>
                </div>
            </div>


            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Fin Barra Navegacion -->


        
    <div class="container W-75 bg-white rounded shadow contain">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">
                
            </div>
            <div class="col bg-white p-5 rounded-end">

                <h2 class="fw-bold text-center py-5">Registrarse</h2>

                <!-- FORM DEVOLUCIONES -->
                <!-- FORM REGIS CORREGIDO CON LOS MIN Y MAXLEGTH EN NOMBRE Y APELLIDO-->
                <form class="row g-3 needs-validation novalidate was-validated fromulario">
                   
                    <div class="col-mb-4">
                        <label for="validationCustom01" class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="nombre" id="validationCustom01" minlength="3" maxlength="15" required>
                      </div>
                      
                    <div class="col-mb-4">
                      <label for="validationCustom02" class="form-label">Apellido: </label>
                      <input type="text" class="form-control" name="apellido" id="validationCustom02" minlength="3" maxlength="15" required>
                    </div>
                       
                    <div class="col-mb-4">
                        <label for="validationCustom03" class="form-label">Correo Electronico: </label>
                        <input type="email" class="form-control" name="email" id="validationCustom03" required> 
                    </div>
                       
                    <div class="col-mb-4">
                        <label for="validationCustom04" class="form-label">Contraseña: </label>
                        <input type="password" class="form-control" name="password" id="validationCustom04" required> 
                    </div>
    
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Regístrate</button>
                    </div>
    
                    <div class="my-3">
                        <span>¿Ya eres miembro?<a href="ini.html">Inicia tu sesión</a></span>
                    </div>
                    
                    </form>

                <!-- FIN FORM-->
            </div>
    </div>








    <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()

</script>

</body>

</html>
