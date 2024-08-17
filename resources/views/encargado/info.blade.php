
  
  <!-- Modal edit -->
  <div class="modal fade" id="edit{{$establecimiento->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Encargado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('establecimientos.update',$establecimiento->id)}}" method="POST">
            @csrf
         @method('PUT')   
        <div class="modal-body">

          <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$establecimiento->nombre}}"/>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Direccion</label>
            <input type="text" class="form-control" name="direccion" id="" aria-describedby="helpId" placeholder="" value="{{$establecimiento->direccion}}/>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input type="text" class="form-control" name="telefono" id="" aria-describedby="helpId" placeholder="" value="{{$establecimiento->telefono}}/>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Tipo</label>
            <input type="text" class="form-control" name="tipo" id="" aria-describedby="helpId" placeholder="" value="{{$establecimiento->tipo}}/>
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
  {{--<div class="modal fade" id="delete{{$establecimiento->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Establecimiento</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('establecimientos.destroy',$establecimiento->id)}}" method="POST">
            @csrf
         @method('DELETE')   
        <div class="modal-body">

            Estas seguro de Eliminar a <strong>{{$establecimiento->nombre}}?</strong>
         
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
    </form>
      </div>
    </div>
  </div>--}}



