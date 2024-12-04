
<div class="modal fade" id="deleteModal<?= $file['id_cita'] ?>" tabindex="-1" aria-labelledby="deleterModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Borrar Cita</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <h5 class="modal-title">
           ¿Deseas eliminar la cita de?
      </h5>
      <div class="modal-body">
               <strong><?php echo $file['firstname']; ?></strong>
      </div>
      <form action="Delete.php" method="POST">
        <div class="modal-footer">
              <button type="submit" class="btn btn-primary"  name="id" value="<?php echo $file['id_cita']; ?>">Confirmar</button>
        </div>
      </form>
    
    </div>
  </div>
</div>