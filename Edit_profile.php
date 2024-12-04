<?php

 include 'conection.php';

 $id =  $_POST['id'];
 $nombre =  $_POST['nombre'];
 $usuario = $_POST['usuario'];
 $tlf = $_POST['telefono'];
 $ubicacion = $_POST['ubicacion'];
 $especialidad = $_POST['especialidad'];


 $update = "UPDATE doctor SET 
                   nombre= '$nombre',
                   email = '$usuario',
                   telefono = '$tlf',
                   id_ubicacion = '$ubicacion',
                   id_especialidad = '$especialidad'

                   where id_doctor = '$id'";

 $result = mysqli_query($conn, $update);

  header("location: doctor.php");

?>