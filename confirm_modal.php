
<div class="modal fade" id="confirmarModal<?= $file['id_cita'] ?>" tabindex="-1" aria-labelledby="confirModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="Edit.php" method="POST">
            <input type="hidden" id="id" name="id" value="<?= $file['id_cita']; ?>">

            <div class="mb-3">
               <label for="nombre" id="nombre" name="nombre" class="form-label"><?php echo $file['firstname']; ?></label>
            </div>

            <div class="mb-3">
               <label for="descripcion" id="descripcion" name="descripcion" class="form-label"><?php echo $file['descripcion']; ?></label>
            </div>

            <div class="mb-3">
               <label for="fecha" class="form-label">Fecha: <?php echo $file['fecha']; ?></label>
               <input type="date" id="fecha"  name="fecha" class="form-control" value="<?php echo $file['fecha']; ?>">
            </div>

            <div class="mb-3">
               <label for="hora" class="form-label">Hora: <?php echo $file['hora']; ?></label>
               <input type="time" id="hora"  name="hora" class="form-control" value="<?php echo $file['hora']; ?>">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
           </div>
        </form>
      </div>
     
    </div>
  </div>
</div>