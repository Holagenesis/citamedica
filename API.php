<?php 
 

class API{
    function Select(){
        
include 'conection.php';
  $array = array();
       
        $data = mysqli_query($conn, "SELECT * FROM citas");
        while($dataout = mysqli_fetch_assoc($data)){
           $array[$dataout['id_cita']] = array(
            'id_cita' => $dataout['id_cita'],
            'descripcion' => $dataout['descripcion']
           );
        }
        return json_encode($array);
    }
}

$API = new API;
echo $API->Select();

?>