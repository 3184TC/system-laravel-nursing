
  
  <!-- Modal edit -->
  <div class="modal fade" id="edit{{$asignacion->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Asignacion de Establecimiento</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('asignacions.update',$asignacion->id)}}" method="POST">
            @csrf
         @method('PUT')   
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">ID Asistencial</label>
            <select name="id_asistencial" id="" class="form-control">
              @foreach ($asistencials as $asistencial)
              @if($asistencial->id == $asignacion->id_asistencial)
              <option value="{{$asistencial->id}}" selected>{{$asistencial->nombre}}</option>
              @else
              <option value="{{$asistencial->id}}">{{$asistencial->nombre}}</option>
              @endif
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">ID Establecimiento</label>
            <select name="id_establecimiento" id="" class="form-control">
              @foreach ($establecimientos as $establecimiento)
              @if($establecimiento->id == $asignacion->id_establecimiento)
              <option value="{{$establecimiento->id}}" selected>{{$establecimiento->nombre}}</option>
              @else
              <option value="{{$establecimiento->id}}">{{$establecimiento->nombre}}</option>
              @endif
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Docente de Catedra</label>
            <select name="id_nombramiento" id="" class="form-control">
              @foreach ($nombramientos as $nombramiento)
              @if($nombramiento->id == $asignacion->id_nombramiento)
              <option value="{{$nombramiento->id}}" selected>{{$nombramiento->docente}}</option>
              @else
              <option value="{{$nombramiento->id}}">{{$nombramiento->docente}}</option>
              @endif
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
            <input type="date" class="form-control" name="fecha_inicio" id="" aria-describedby="helpId" placeholder="" value="{{$asignacion->fecha_inicio}}"/>
          </div>
          <div class="mb-3">
            <label for="fecha_fin" class="form-label">Fecha de Fin</label>
            <input type="date" class="form-control" name="fecha_fin" id="" aria-describedby="helpId" placeholder="" value="{{$asignacion->fecha_fin}}"/>
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
  <div class="modal fade" id="delete{{$asignacion->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Asignacion</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('asignacions.destroy',$asignacion->id)}}" method="POST">
            @csrf
          @method('DELETE')   
          <div class="modal-body">

              Estas seguro de Eliminar a <strong>{{$asignacion->Asistencial->nombre}}?</strong>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Confirmar</button>
          </div>
        </form>
      </div>
    </div>
  </div>



