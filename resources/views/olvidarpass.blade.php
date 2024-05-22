<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CenturyTech.com | Recuperar Contraseña</title>
    <script src="https://kit.fontawesome.com/32e8cd01f4.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/olv.css')}}">
</head>
<body>
    
    <div class="container W-75 bg-white rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">
                
            </div>
            <div class="col bg-white p-5 rounded-end">

                <h2 class="fw-bold text-center py-5">Recupera tu cuenta</h2>
                <hr>
                <p class="uno">Introduce tu correo electrónico con el que te registraste para buscar tu cuenta.</p>
                <hr>

                <!-- FORM  -->

                <form class="row g-3 needs-validation" method="get" novalidate>
                    <div class="mb-4">
                        <label for="inputEmail4" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" id="inputEmail4" required placeholder="Ingrese el correo con el cual se registro"> 
                        <div class="valid-feedback">
                            Correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese un correo valido.
                        </div>
                    </div>
                   
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Recuperar</button>
                    </div>

                    <div class="my-3">
                        <span>No tienes Cuenta? <a href="regist.html">Registrate</a></span>
                        <br>
                        <span>Inicia Sesion:  <a href="ini.html">Iniciar Sesion</a></span>
                    </div>
                </form>

                <!-- FIN  -->
            </div>
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