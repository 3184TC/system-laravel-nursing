
  
  <!-- Modal create -->
  <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registar Usuario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="POST">
            @csrf
        <div class="modal-body">

          <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder=""/>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Direccion</label>
            <input type="text" class="form-control" name="direccion" id="" aria-describedby="helpId" placeholder=""/>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input type="text" class="form-control" name="telefono" id="" aria-describedby="helpId" placeholder=""/>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Tipo</label>
            <input type="text" class="form-control" name="tipo" id="" aria-describedby="helpId" placeholder=""/>
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
      </div>
    </div>
  </div>