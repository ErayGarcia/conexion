<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap 5.3 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Farmacia UNACH 5J</title>
    <style>
        .mt-4 {
            margin-top: 4 !important;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col text-center">
                <img src="./src/vistas/img/logounach.png" alt="logo-unach" width="90px" height="90px">
            </div>
            <div class="col text-center">
                <h1>Farmacia Unach</h1>
            </div>
            <div class="col text-center">
                <img src="./src/vistas/img/logofca.png" alt="" width="90px" height="90px">
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form action="./src/vistas/menu.php" method="POST">
                <?php
                    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
                    if ($_GET["error"] == "si") {
                        echo ".";
                        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
                        echo '<script>
                            Swal.fire({
                                icon: "error",
                                title: "¡ERROR!",
                                text: "Registro Fallido",
                                showConfirmButton: true,
                                confirmButtonText: "ACEPTAR"
                            });
                        </script>';
                    }
                ?>
                    <div class="form-floating mb-3">
                        <input type="email" name="correo" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Correo</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="clave" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Clave</label>
                    </div><br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success text-center">Ingresar</button>
                    </div>
                </form>
                <br>
                <div class="text-center">
                    <p>Regístrate en el enlace siguiente...</p><br>
                    <a class="btn btn-dark" href='./src/vistas/registroUsuario.php'>Registro</a>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <!--BootStrap 5.3 JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>