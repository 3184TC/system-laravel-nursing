
  
  <!-- Modal edit -->
  <div class="modal fade" id="edit{{$establecimiento->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Gestion</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('gestions.update',$gestion->id)}}" method="POST">
            @csrf
         @method('PUT')   
        <div class="modal-body">

          <div class="mb-3">
            <label for="" class="form-label">Fecha de Inicio</label>
            <input type="text" class="form-control" name="fecha_inicio" id="" aria-describedby="helpId" placeholder="" value="{{$gestion->fecha_inicio}}"/>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Fecha de fin</label>
            <input type="text" class="form-control" name="fecha_fin" id="" aria-describedby="helpId" placeholder="" value="{{$gestion->fecha_fin}}"/>
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
  <div class="modal fade" id="delete{{$gestion->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Gestion</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('gestions.destroy',$gestion->id)}}" method="POST">
            @csrf
         @method('DELETE')   
        <div class="modal-body">

            Estas seguro de Eliminar a <strong>{{$gestion->nombre}}?</strong>
         
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
    </form>
      </div>
    </div>
  </div>



