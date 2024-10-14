<?php
//definimos las bariables de coneccion
$server = "localhost";
$user = "root";
$pass = "";
$db = "bd_ventas";
//creamos las conexiones
try {
    $conexion = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pass);
    $conexion ->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    echo "conectado";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
