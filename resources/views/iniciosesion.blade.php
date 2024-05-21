<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CenturyTech.com | Inicio Sesion</title>
    <script src="https://kit.fontawesome.com/32e8cd01f4.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/ini.css')}}">
</head>
<body>
    
    <div class="container W-75 bg-white rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">
                
            </div>
            <div class="col bg-white p-5 rounded-end">

                <h2 class="fw-bold text-center py-5">Bienvenido</h2>

                <!-- FORM LOGIN -->

                <form  onsubmit="return validarUsuario()">
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" name="email" id="email" > 
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password" > 
                    </div>
                    <div class="mb-4 form-check">
                        <input type="checkbox" name="connectd" class="form-check-input">
                        <label for="connected" class="form-check-label">Mantenerme Conectado</label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                    </div>

                    <div class="my-3">
                        <span>No tienes Cuenta? <a href="regist.html">Registrate</a></span>
                        <br>
                        <span><a href="olvidarpass.html">Recuperar Contrseña</a></span>
                    </div>
                </form>

                <!-- FIN LOGIN -->
            </div>
        </div>
    </div>


    <!-- VALIDACIONES ROLES -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!--  Script Alertas -->
    <script type="text/javascript">

        function validarUsuario() {
            var email = document.getElementById("email").value;
            var clave = document.getElementById("password").value;

            // Si el usuario no Escribe ninguna informacion

            if (email === "" && clave === ""){
                Swal.fire({
                title: "Credenciales de Accseso",
                text: "No Pusiste Ninguna Credencial ",
                icon: "error"
                });
                return false;
            }
    
            //El rol admin ingresa al dashboard con las funcionalidades de su rol
    
            if (email === "admin@gmail.com" && clave === "admin") {
                
                window.location.href = "rolAdmin/ds.html";
                return false;
            } 
    
            //El rol otro usuario ingresa al dashboard con las funcionalidades de su rol

            if (email === "user1@gmail.com" && clave === "user1") {
                
                window.location.href = "rolUsuario/index2.html";
                return false;
            }else {
                Swal.fire({
                title: "Credenciales de Accseso",
                text: "Credenciales Incorrentas",
                icon: "error"
                });
                return false;
            }
        }
    
       
    
    </script>
    
</body>
</html>