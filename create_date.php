<?php 

 include 'conection.php';

 $description = $_POST['descripcion'];
 $fecha = $_POST['fecha'];
 $hora = $_POST['hora'];
 $doctor = $_POST['id_doctor'];
 $paciente = $_POST['paciente'];

 $create_date = "INSERT INTO citas (descripcion,fecha,hora,id_doctor,id_user)
                 VALUES ('$description','$fecha', '$hora', '$doctor', '$paciente')";
 $create = mysqli_query($conn, $create_date);

 header("location: bienvenida.php");

?>