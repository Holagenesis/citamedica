<?php 
$server_name = 'localhost';
$user = 'root';
$password = '12345678';
$database = 'cita_medica';

$conn = new mysqli($server_name, $user, $password, $database);
if($conn->connect_error){
    die("fallo de conexion".$conn->connect_error);
}
?>