<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Sweet Alert-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11" /></script>
    <title>Farmacia UNACH</title>
</head>
<body>
    <?php
        require("../modelo/conexionPDO.php");
        try{
            //verifico los datos del login
            $correo=htmlentities(addslashes($_POST['correo']));
            $clave = $_POST['clave'];
            //echo "Tu correo es: " . ' '. $correo . ' ' . ' ' . 'Tu password es: '. $clave;
            $sql = "SELECT * FROM t_usuarios WHERE correo = :correo";
            //preparo la consulta SQL
            $resultado=$conn->prepare($sql);
            //ejecucion de la consulta
            $resultado->execute(array(":correo"=>$correo));
            
            $login=$resultado->fetch(PDO::FETCH_ASSOC);
            if(password_verify($clave, $login['clave'])) { 
                echo '<script>
                    Swal.fire({
                    icon: "success",
                    title:"Usuario aceptado",
                    text: "Registro correcto",
                    showConfirmButton: true,
                    confirmButtonText: "Aceptar"
                }) </script>'; 
            }else{
                //Cierra cadena de conexión
                $query = null;
                $conn = null;
                echo "Error de conexión";
                header("Location: ../../index.php?error=si"); 
            }
    
         }catch(Exception $e){
            die($e->getMessage());
        }
    ?>
    <h1>Menú Principal</h1>
    <?php
        echo "Bienvenido/a: " .$login['nombreUsuario'] . ' ' . $login['aPaterno'] . ' ' . $login['aMaterno'];
    ?>
</body>
</html>