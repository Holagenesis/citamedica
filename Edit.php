<?php
 include 'conection.php';

 $id =  $_POST['id'];
 $fecha = $_POST['fecha'];
 $hora = $_POST['hora'];

 $update = "UPDATE citas SET 
                   fecha = '$fecha',
                   hora = '$hora'
                   where id_cita = '$id'";

 $result = mysqli_query($conn, $update);

 header("location: doctor.php");

?>