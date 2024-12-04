


<?php 
  include 'conection.php';
  session_start();
  if(!isset($_SESSION['user'])){
    header("location: index.php");
    session_destroy();
    die();
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    

<div class="citas">
  <div class="citas2">
  <h5>hola, querido cliente</h5>
       <form action="create_date.php" method="POST">

      <div class="input-box">
        <select name="descripcion" id="descripcion">
          
          <?php $servicio = mysqli_query($conn, "SELECT * from servicios"); 

             while( $value_s = mysqli_fetch_assoc($servicio)){ 
             echo '<option value="'.$value_s['id_especialidad'].'">'. $value_s['servicio'].'</option>';

             } 
          ?>  
        </select>

      </div>

     
     

      <div id="especialidad"></div>
     
      <div class="input-box">
      <select name="id_doctor" id="id_doctor">
          
          <?php $doctor = mysqli_query($conn, "SELECT * from doctor"); 

             while( $value_d = mysqli_fetch_assoc($doctor)){ 
             echo '<option value="'.$value_d['id_doctor'].'" >'. $value_d['nombre'].'</option>';

             } 
          ?>  
      </select>
        
      </div>
     
     
      <div class="input-box">
      <input type="date" name="fecha">
      </div>
      <div class="input-box">
             <input type="time" name="hora">
      </div>

      <div class="input-box">
        
      <button type="submit"  class="btn2" value="registro">Registro</button>
      </div>

      <input type="hidden" name="paciente" value=<?php echo $_SESSION['user_id']; ?>>
      
      <div class="input-box">
      <button class="btn2"><a href="logout.php" >cerrar sesion</a></button>
      </div>
      
    </form>
    
  </div>
</div>

</body>

<script type="text/javascript">
    $(document).ready(function(){
      recargalista();
      $('#descripcion').change(function(){
       recargalista();
      });
    })
</script>

<script type="text/javascript">
    function recargalista(){
      $.ajax({
        type:"POST",
        url:"getEsp.php",
        data:"descripcion=" + $('#descripcion').val(),
        success:function(r){
          $('#especialidad').html(r);
        }
      });
    }
</script>


</html>