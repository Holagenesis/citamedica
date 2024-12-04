<?php include 'header.php' ?>

<?php 
  
 $sql = mysqli_query($conn, "SELECT e.especialidad FROM especialidad e
  JOIN doctor d
 ON e.id_especialidad = d.id_especialidad
 ");

$row = mysqli_fetch_assoc($sql);

$sql2 = mysqli_query($conn, "SELECT  u.titulo_ubicacion FROM ubicacion u
JOIN doctor d
ON u.id_ubicacion = d.id_ubicacion
");

$row2 = mysqli_fetch_assoc($sql2);
?>

<input type="checkbox" id="sidebar-toggle">
<div class="sidebar">
   <div class="sidebar-header">
      <h3 class="brand">
      
          <span><i class="bi bi-heart-pulse"></i>Cita medica</span>
      </h3>
        <label for="sidebar-toggle" class="ti-menu-alt"><i class="bi bi-list"></i></label>
     
   </div>

   <div class="sidebar-menu">
      <ul>
        <li>
        <span><i class="bi bi-house"></i></span>
          <a href="#" id="dash">Dashboard</a>
          
        </li>
        <li>
        <span><i class="bi bi-person"></i></span>
          <a href="#" id="profile">Perfil</a>
          
        </li>
        <li>
        <span><i class="bi bi-palette"></i></span>
          <a href="#">Widgets</a>
          
        </li>
        <li>
        <span><i class="bi bi-gear"></i></span>
          <a href="#">Configuracion</a>
          
        </li>
        <li>
        <span><i class="bi bi-people"></i></span>
        <a href="logout.php">cerrar sesion</a>
          
        </li>

      </ul>
   </div>
</div>



<div class="main-content" >
   <header>
     <div class=" header-user">
     <span><?php echo $user; ?></span>
     <div class="icon-user"><h4><i class="bi bi-person"></i></h4></div>
     </div>      
   </header>


<div id="profile-form">

<form action="Edit_profile.php" method="POST" class="form-edit-user">
    <h5>Editar Perfil</h5>

    <div class="mb-3">
    <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $user_id; ?>"> 
    </div>

    <div class="mb-3">
    <input type="text" placeholder="nombre" name="nombre" class="form-control" value="<?php echo $user; ?>"> 
    </div>
    
    <div class="mb-3">
    <input type="text" placeholder="nombre de usuario" class="form-control" name="usuario" value="<?php echo $email; ?>">
    </div>
    <div class="mb-3">
    <input type="text" id="telefono" name="telefono" class="form-control" value="<?php echo $tlf; ?>">
    </div>
    
    <div class="mb-3">
    <select name="ubicacion" id="ubicacion" class="form-control">
          
          <?php $ub = mysqli_query($conn, "SELECT * from ubicacion"); 

             while( $ubic = mysqli_fetch_assoc($ub)){ 
             echo '<option value="'.$ubic['id_ubicacion'].'" >'. $ubic['titulo_ubicacion'].'</option>';

             } 
          ?>  
      </select>
    
    </div>
    <div class="mb-3">
    <select name="especialidad" id="especialidad" class="form-control">
          
          <?php $esp = mysqli_query($conn, "SELECT * from especialidad"); 

             while( $especialidad= mysqli_fetch_assoc($esp)){ 
             echo '<option value="'.$especialidad['id_especialidad'].'" >'. $especialidad['especialidad'].'</option>';

             } 
          ?>  
      </select>
    
    </div>
     
    <button class="btn btn-info">Registro</button>
</form>
</div>   

   <main id="main-content">
    
     <div class="dashboard-cards" >
        <div class="card-single">
          <div class="card-body">
             <span></span>
             <div>
               <h5>Perfil </h5>
               <h4>Nombre: <?php echo $user; ?></h4>
               <h4>Email: <?php echo $email; ?></h4>
               <h4>Telefono: <?php echo $tlf; ?></h4>
               <h4>Especialidad: <?php echo $row['especialidad']; ?></h4>
               <h4>Ubicacion: <?php echo $row2['titulo_ubicacion']; ?></h4>
               
             </div>
          </div>

        </div>
     </div>

     
<section class="recent" >
<button class="btn btn-info" type="button" onclick="table_CSV()" id="csv">Descargar archivo CSV</button>
  <div class="activity-grid">
    <div class="activity-card">
       <h5>Resumen de Citas</h5>
        <table class="table" id="tabla">
         <thead>
        <tr>
          <th scope="col">Descripcion</th>
          <th scope="col">Fecha</th>
          <th scope="col">Hora</th>
          <th scope="col">Paciente</th>
          <th scope="col"></th>
      </tr>
     </thead>
  <tbody>
<?php 
  
 $result = mysqli_query($conn, "SELECT u.firstname, c.id_cita, c.descripcion, c.fecha, c.hora, c.id_user FROM citas c
 INNER JOIN users u
 ON c.id_user = u.id
 where c.id_doctor = '$user_id' ");

 while($file = mysqli_fetch_assoc($result)):
?>

<tr>
   <td><?php  echo $file['descripcion']?></td>
   <td><?php  echo $file['fecha']?></td>
   <td><?php  echo $file['hora']?></td>
   <td><?php  echo $file['firstname']?></td>

   <td>
     <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#confirmarModal<?= $file['id_cita'] ?>" data-bs-id="<?= $file['id_cita'] ?>">Detalles</button>
     <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $file['id_cita'] ?>" data-bs-id="<?= $file['id_cita'] ?>">Eliminar</button>
   </td>
</tr>

      <?php include 'confirm_modal.php'; ?>
      <?php include 'delete_modal.php'; ?>


     <?php endwhile; ?>


    </tbody>


    </table>

    </div>

    <div class="summary">
      <div class="summmary-card">
         <div class="summary-single">
          <span><i class="bi bi-alarm"></i></span>
           <div>
            <h6>10</h6>
            <small>mensaje de notifcacion</small>
           </div>
          </div>
          <div class="summary-single">
          <span><i class="bi bi-bag-dash"></i></span>
          <div>
            <h6>17</h6>
            <small>mensaje de notifcacion</small>
          </div>
         </div>
         <div class="summary-single">
          <span><i class="bi bi-calendar-event"></i></span>
          <div>
            <h6>5</h6>
            <small>recordatorios</small>
          </div>
         </div>
      </div>
    </div>
  </div>
</section>
     



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="script.js"></script>
<script src="csv.js"></script>
   </main>
</div>

   
</body>
</html>