<?php

//include("config.php");

$servidor = "mysql:dbname=" . BD_SISTEMA . ";host=" . BD_SERVIDOR;

try {
    // Conexión a la base de datos
    $pdo = new PDO($servidor, BD_USUARIO, BD_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    
    // Mensaje de éxito
    echo "<script>alert('Base de Datos Conectada');</script>";
} catch(PDOException $e) {
    // Mensaje de error
    echo "<script>alert('La conexión no ha sido establecida');</script>";
}

?>
