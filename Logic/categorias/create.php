<?php
require_once "../conexion.php";
$name ="artemio";
$description ="";
//validar que los campos no esten vacios
if($name == "" || $description == ""){
    echo "error, campos vacios";
    die();

}
$arrdata=array(
    $nama,
    $description
);
$sql="INSERT INTO categories (c_name,c_description)VALUES(?,?);";
try{
    $prepared=$conexion->prepare($sql);
    $prepared->execute($arrData);
    echo "Datos guardados";
} catch (PDOException $e){
echo "error" . $e->getMessage();
}
