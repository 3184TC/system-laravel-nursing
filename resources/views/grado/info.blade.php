
  
  <!-- Modal edit -->
  <div class="modal fade" id="edit{{$establecimiento->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Establecimiento</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('grados.update',$grado->id)}}" method="POST">
            @csrf
         @method('PUT')   
        <div class="modal-body">

          <div class="mb-3">
            <label for="" class="form-label">id persona</label>
            <input type="text" class="form-control" name="id_persona" id="" aria-describedby="helpId" placeholder="" value="{{$grado->id_perosna}}"/>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Nivel</label>
            <input type="text" class="form-control" name="nivel" id="" aria-describedby="helpId" placeholder="" value="{{$grado->nivel}}"/>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Especialidad</label>
            <input type="text" class="form-control" name="especialidad" id="" aria-describedby="helpId" placeholder="" value="{{$grado->especialidad}}"/>
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
  <div class="modal fade" id="delete{{$grado->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Grado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('grados.destroy',$grado->id)}}" method="POST">
            @csrf
         @method('DELETE')   
        <div class="modal-body">

            Estas seguro de Eliminar a <strong>{{$grado->nombre}}?</strong>
         
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
    </form>
      </div>
    </div>
  </div>



