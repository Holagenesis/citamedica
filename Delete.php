<?php
 include 'conection.php';

 $id =  $_POST['id'];

 $delete = "DELETE FROM citas  where id_cita='$id'";
 $result = mysqli_query($conn, $delete);

 header("location: doctor.php");

?>