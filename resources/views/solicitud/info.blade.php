
  
  <!-- Modal edit -->
  <div class="modal fade" id="edit{{$solicitud->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Solicitud</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('solicituds.update',$solicitud->id)}}" method="POST">
            @csrf
         @method('PUT')   
        <div class="modal-body">

          <div class="mb-3">
            <label for="" class="form-label">Dirigido a:</label>
            <input type="text" class="form-control" name="dirigido" id="" aria-describedby="helpId" placeholder="" value="{{$solicitud->dirigido}}"/>
          </div
          <div class="mb-3">
            <label for="" class="form-label">Cargo</label>
            <input type="text" class="form-control" name="cargo" id="" aria-describedby="helpId" placeholder="" value="{{$solicitud->cargo}}"/>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Establecimiento</label>
            <input type="text" class="form-control" name="establecimiento" id="" aria-describedby="helpId" placeholder="" value="{{$solicitud->establecimiento}}"/>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Referencia</label>
            <input type="text" class="form-control" name="ref" id="" aria-describedby="helpId" placeholder="" value="{{$solicitud->ref}}"/>
          </div>
          <div class="mb-3">
            <label for="fecha_inicial" class="form-label">Fecha de Emision</label>
            <input type="date" class="form-control" name="fecha_emision" id="fecha_emision" placeholder="" required value="{{$solicitud->fecha_emision}}"/>
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
  <div class="modal fade" id="delete{{$solicitud->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Solicitud</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('solicituds.destroy',$solicitud->id)}}" method="POST">
            @csrf
         @method('DELETE')   
        <div class="modal-body">

            Estas seguro de Eliminar la solicitud de <strong>{{$solicitud->nombre}}?</strong>
         
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
    </form>
      </div>
    </div>
  </div>



