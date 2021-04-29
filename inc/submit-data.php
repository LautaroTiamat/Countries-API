<?php
require('conexion.php');
$code = $_POST['code'];
$date = date('Y-m-d H:i:s');

if($code){
    $sql = "INSERT INTO web_consumos_precios(pais, fechaclick) VALUES (:pais, :fechaclick)";
    $insert = $conexion->prepare($sql);
    $insert->execute(array(":pais" => $code, ":fechaclick" => $date));
} else {
    header('Location: ./../');
}

exit;
?>