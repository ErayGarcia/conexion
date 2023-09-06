<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap 5.3 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!--Sweet Alert-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11" /></script>
    <title>Captura Agregar Usuario</title>
    <!--Script JS-->
    <script>
        function errorTelefono() {
            let numero = document.getElementById("numero").value;
            document.getElementById("erroNumero").innerHTML = 'Valores insertados: ' + numero.length + "/10";

            if (numero.length > 10) {
                Swal.fire({
                    icon: "error",
                    title: "¡ERROR!",
                    text: "Exede la longitud del campo: " + numero.length + "/10",
                    showConfirmButton: true,
                    confirmButtonText: "ACEPTAR"
                });
            }
        }
    </script>
    <!--CSS-->
</head>
<body>
<div class="container text-center">
	<div class="row">
		<div class="col-md-12"><br>
            <div class="card" style="border-radius: 0.7rem;">
                    <div class="card-header">Agregar Usuario</div>
                    <div class="card-body">
                        <form name="formulario_fmt" method="POST" action="../controlador/validaRegistro.php" enctype="application/x-www-form-urlencoded">
                            <div class="mb-1">
                                <label for="inputEmail" class="form-label">Correo electrónico</label>
                                <input type="email" name="usuario" class="form-control" id="inputEmail" required>
                            </div>
                            <div class="mb-1">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="password" name="pass" class="form-control" id="inputPassword" required >
                            </div>
                            <div class="mb-1">
                                <label for="inputNombre" class="form-label">Nombre</label>
                                <input type="text" name="nombre" class="form-control text-uppercase" id="inputNombre">
                            </div>
                            <div class="mb-1">
                                <label for="inputaPaterno" class="form-label">Apellido Paterno</label>
                                <input type="text" name="apaterno" class="form-control text-uppercase" id="inputaPaterno">
                            </div>
                            <div class="mb-1">
                                <label for="inputaMaterno" class="form-label">Apellido Materno</label>
                                <input type="text" name="amaterno" class="form-control text-uppercase" id="inputaMaterno">
                            </div>
                            <div class="mb-1">
                                <label for="inputDireccion" class="form-label">Dirección</label>
                                <input type="text" name="direccion" class="form-control text-uppercase" id="inputDireccion">
                            </div>
                            <div class="mb-1">
                                <label for="inpuTelefono" class="form-label">Teléfono</label>
                                <input type="number" name="telefono" class="form-control" id="numero" onkeyup="errorTelefono()" required name="numeroTelefono">
                                    <div id="erroNumero"></div>
                            </div><br>
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </form>
                    </div>
            </div><br>
                        <p>Universidad Autónoma de Chiapas. Derechos Reservados</p>         	
		</div>
	</div>
</div>
    <!--BootStrap 5.3 JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>