<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
  
    <title>Document</title>
</head>
<body >

<div id="login-register">
   <div class="container">
      <div class="form-box login">
         <form action="login-logic.php" method="POST" class="form_login">
          <h1>Inicio sesion</h1>
            <div class="input-box">
               <input type="email" placeholder="correo electronico" name="email" required>
             <i class="bi bi-envelope"></i>
           </div>
           <div class="input-box">
               <input type="password" placeholder="contraseña" name="contrasena" required>
              <i class="bi bi-bag-fill"></i>
           </div>       
            <button class="btn2">Entrar</button>
         </form>
      </div> 

      <div class="form-box register">
         <form action="sigin-logic.php" method="POST">
          <h1>Registrate</h1>
            <div class="input-box">
              <input type="text" placeholder="nombre" name="nombre">
            
           </div>
           <div class="input-box">
           <input type="email" placeholder="correo electronico" name="correo" required>
              
           </div>    
           <div class="input-box">
           <input type="text" placeholder="nombre de usuario" name="usuario" required>
              
           </div>  
           <div class="input-box">
           <input type="tel" name="telefono">
              
           </div> 
           <div class="input-box">
           <input type="password" placeholder="contraseña" name="contrasena" required>
              
           </div>  
           <div class="input-box">
              <select name="user_type" required>
                
                <option value="2">Paciente</option>
                <option value="1">Doctor</option>
               </select>
              
           </div>
            <button type="submit" class="btn2">Registo</button>
         </form>
      </div> 
      <div class="toggle-box">
        <div class="toggle-panel toggle-left">
            <h1>Bienvenido</h1>
            <p>¿Ya tienes una cuenta?</p>
            <button class="btn2 register-btn">Registrar</button>
        </div>
        <div class="toggle-panel toggle-right">
            <h1>Hola otra vez!</h1>
            <p>¿Ya tienes una cuenta?</p>
            <button class="btn2 login-btn">Entrar</button>
        </div>
    </div>
    </div> 

    
</div>
  
<script src="script2.js"></script>

    
</body>
</html>