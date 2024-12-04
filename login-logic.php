<?php
  session_start();
  include 'conection.php';

  $email = $_POST['email'];
  $password = $_POST['contrasena'];


  $verify_login = "SELECT * FROM users Where correo='$email' and password='$password'";
  $verify = mysqli_query($conn, $verify_login);

  if(mysqli_num_rows($verify) > 0){
      $file = mysqli_fetch_assoc($verify);
      $_SESSION['user'] = $email;
      $_SESSION['user_id'] = $file['id'];

      header("location: bienvenida.php");
    
      
     
  }else if($verify_login = "SELECT * FROM doctor Where email='$email' and password='$password'"){
    $verify2 = mysqli_query($conn, $verify_login);

   
    if(mysqli_num_rows($verify2) > 0){
      $file2 = mysqli_fetch_assoc($verify2);
      $_SESSION['user_id'] = $file2['id_doctor'];
      $_SESSION['nombre'] = $file2['nombre'];
      $_SESSION['user'] = $email;
      $_SESSION['telefono'] = $file2['telefono'];
      $_SESSION['especialidad'] = $file2['id_especialidad'];
      $_SESSION['ubicacion'] = $file2['id_ubicacion'];

      if($verify2){
        echo ' <script>
                   alert("exitoso");
                   window.location = "index.php";       
               </script>
         ';
         header("location: doctor.php");
       }
      
  
     
  }
  }


    
    
  
  


  
  
  
  
  
  
  

  //else{
 
   // echo'
   //  <script>
    //    alert("usuario no existe");
    //    window.location = "index.php";
   //  </script>
  //  ';
   
  
  

?>