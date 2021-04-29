<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "paises";

try {
    $conexion = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass);
} catch (PDOException $e) {
    print "¡Error!: ".$e->getMessage()."<br/>";
    die();
}
?>