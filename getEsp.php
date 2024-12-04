<?php 
 include 'conection.php';

 $serv = $_POST['descripcion'];

 $sql = "SELECT * FROM especialidad where id_especialidad = '$serv'";
 $result = mysqli_query($conn,$sql);

 $cadena ="<select id='especialidad' name='especialidad'>";

 while($var = mysqli_fetch_assoc($result)){
    $cadena = $cadena.'<option value='.$var["id_especialidad"].'>'.$var["especialidad"].'</option>';
 }

 echo $cadena."</select>";
?>