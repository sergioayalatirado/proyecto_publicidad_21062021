<?php 
if(isset($_GET['id'])){
    include("../conexion.php");
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$id = validate($_GET['id']);

$mostrar = "UPDATE dispositivo SET estatus=0 WHERE id_dispositivo=$id";
$resultado = mysqli_query($mysqli, $mostrar);

    if($resultado){
    header("Location: ../lista_dispositivos.php?success=Dispositivo dado de baja exitosamente.");
    }else{
        header("Location: ../lista_dispositivos.php?error=Ocurrio un error.");
    }
}else{
    header("Location: ../lista_dispositivos.php");
}