<?php
$_SERVER="localhost";
$user="root";
$pass="";
$bd="col_paul";

$conexion = new mysqli($_SERVER,$user,$pass,$bd);

if($conexion->connect_error)
{
    die("Conexión Fallida".$conexion->connect_error);
}
else
{
    die("Conexión Exitosa");
}
?>