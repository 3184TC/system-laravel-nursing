
  
  <!-- Modal edit -->
  <div class="modal fade" id="edit{{$asistencial->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Docente Asistencial</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('asistencials.update',$asistencial->id)}}" method="POST">
            @csrf
         @method('PUT')   
        <div class="modal-body">
          <div class="modal-body">
            <div class="mb-3">
              <label for="" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$asistencial->nombre}}"/>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Genero</label>
              <input type="text" class="form-control" name="genero" id="" aria-describedby="helpId" placeholder="" value="{{$asistencial->genero}}"/>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Cargo</label>
              <input type="text" class="form-control" name="cargo" id="" aria-describedby="helpId" placeholder="" value="{{$asistencial->cargo}}"/>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">CI</label>
              <input type="text" class="form-control" name="ci" id="" aria-describedby="helpId" placeholder="" value="{{$asistencial->ci}}"/>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Celular</label>
              <input type="text" class="form-control" name="celular" id="" aria-describedby="helpId" placeholder="" value="{{$asistencial->celular}}"/>
            </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
      </div>
    </div>
  </div>


    <!-- Modal eliminar -->
    <div class="modal fade" id="delete{{$asistencial->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Eliminar Docente Asistencial</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="{{route('asistencials.destroy',$asistencial->id)}}" method="POST">
              @csrf
           @method('DELETE')   
          <div class="modal-body">
  
              Estas seguro de Eliminar a <strong>{{$asistencial->id}}?</strong>
           
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Confirmar</button>
          </div>
      </form>
        </div>
      </div>
    </div>
  