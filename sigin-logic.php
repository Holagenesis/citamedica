<?php 
    include 'conection.php';
   
    $name = $_POST['nombre'];
    $email = $_POST['correo'];
    $username = $_POST['usuario'];
    $password = $_POST['contrasena'];
    $user_type = $_POST['user_type'];

    if($user_type == "1"){
      $query = "INSERT INTO doctor(nombre, email, username, password, user_type) VALUES ('$name','$email','$username','$password', 1)";
      $verify_email_doctor = "SELECT * FROM doctor Where email = '$email'";
      $verify_doctor = mysqli_query($conn, $verify_email_doctor);
      if(mysqli_num_rows($verify_doctor) > 0){
        echo 'el usuario ya esta registrado';
        exit();
        mysqli_close($conn);
      }
    }
    else if($user_type == "2"){
      $query = "INSERT INTO users(firstname, correo, username, password, id_type) VALUES ('$name','$email','$username','$password', 2)";
      $verify_email = "SELECT * FROM users Where correo = '$email'";
      $verify= mysqli_query($conn, $verify_email);

      if(mysqli_num_rows($verify) > 0){
        echo 'el usuario ya esta registrado';
        exit();
        mysqli_close($conn);
      }
    }

    $execute = mysqli_query($conn, $query);

      if($execute){
       echo ' <script>
                  alert("exitoso");
                  window.location = "index.php";       
              </script>
        ';
      }
    

    
?>