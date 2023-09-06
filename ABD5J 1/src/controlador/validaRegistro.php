
<?php
    session_start();
    require("../modelo/conexionPDO.php");
    $pass_nocifrada = $_POST['pass'];
    $pass_cifrada = password_hash($pass_nocifrada, PASSWORD_DEFAULT, array("cost"=>10));

    if($conn == true){
        $inserta = $conn -> prepare("INSERT INTO t_usuarios(correo,clave,nombreUsuario,aPaterno,aMaterno,direccion,telefono)VALUES (:correo, :clave, :nombreUsuario, :aPaterno, :aMaterno, :direccion, :telefono)");
        $inserta -> bindParam(':correo', $_POST['usuario']);
        $inserta -> bindParam(':clave', $pass_cifrada);
        $inserta -> bindParam(':nombreUsuario', strtoupper($_POST['nombre']));
        $inserta -> bindParam(':aPaterno', strtoupper($_POST['apaterno']));
        $inserta -> bindParam(':aMaterno', strtoupper($_POST['amaterno']));
        $inserta -> bindParam(':direccion', strtoupper($_POST['direccion']));
        $inserta -> bindParam(':telefono', $_POST['telefono']);
        
        $inserta -> execute();

        $conn = null;
        header('Location: ../../index.php');
    }else {
        echo "Error al procesar recurso";
    }
?>
