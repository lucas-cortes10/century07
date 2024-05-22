<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CenturyTech.com | Tienda de Tecnologia Colombiana</title>
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
            <div class="col bg d-none d-lg-block col-md-2 col-lg-2 col-xl-3 rounded">               
            </div>

            <div class="col-md-2 col-lg-2 col-xl-3 mb-4"> 
                <h2 class="fw-bold text-center py-5">Productos</h2>
                <img src="img/productos/grafi.png" alt="" class="imgproducto">
                    <div class="info">
                    <p>Tarjeta de Video RTX 3050 8GB</p>
                    <span>$1.000.000</span>
                    </div>
            </div>

            <div class="col bg-white p-5 rounded-end">


                <h2 class="fw-bold text-center py-5">Confirmación de compra</h2>

                <!-- FORM COMPRA -->

                <form  onsubmit="return validarUsuario()">

                    <div class="mb-4">
                        <label for="email" class="form-label">Nombre(s)</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" > 
                    </div>
                    
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" name="email" id="email" > 
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password" > 
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label">Número de telefono</label>
                        <input type="tel" class="form-control" name="telefono" id="telefono" > 
                    </div>

                    <div class="mb-4">
                        <select class="form-select" aria-label="Default select example" required>
                            <option selected>Seleccione...</option>
                            <option value="1">Unilago</option>
                            <option value="2">Centro de alta tecnología</option>
                            <option value="3">El bronx</option>
                          </select>
                    </div>

                    <div class="d-grid">
                        <a href="index.html" class="btn btn-primary mb-2"><- Regresar</a>
                        <button type="submit" class="btn btn-success mb-2">Confirmar compra</button>
                        <button type="reset" class="btn btn-secondary mt-2">Cancelar</button>
                    </div>

                </form>


                <!-- FIN COMPRA -->
            </div>            
        </div>
    </div>



    <!-- VALIDACIONES ROLES -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!--  Script Alertas -->
    <script type="text/javascript">

        function validarUsuario() {
            var email = document.getElementById("email").value;
            var clave = document.getElementById("password").value;
            var nombre = document.getElementById("nombre").value;
            

            // Si el usuario no Escribe ninguna informacion

            if (email === "" && clave === "" && nombre === ""){
                Swal.fire({
                title: "Credenciales de compra",
                text: "No Pusiste Ninguna Credencial ",
                icon: "error"
                });
                return false;
            }
            //El cliente ingresa sus credenciales para envíar la compra

            if (email === "user1@gmail.com" && clave === "cliente1" && nombre=== "pachito") {
                Swal.fire({
                title: "Compra exitosa",
                text: "Tu compra ha sido realiazda con exito",
                icon: "success"
                });
                return false;
            }else {
                Swal.fire({
                title: "Credenciales de compra",
                text: "Credenciales Incorrentas para finalizar la compra",
                icon: "error"
                });
                return false;
            }
        }
    
       
    
    </script>
    
</body>
