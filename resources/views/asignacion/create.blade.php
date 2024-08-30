
  
  <!-- Modal create -->
  <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Asignar Docente Asistencial</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="POST">
            @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">ID Asistencial</label>
            <select name="id_asistencial" id="" class="form-control">
              @foreach ($asistencials as $asistencial)
              <option value="{{$asistencial->id}}">{{$asistencial->nombre}}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">ID Establecimiento</label>
            <select name="id_establecimiento" id="" class="form-control">
              @foreach ($establecimientos as $establecimiento)
              <option value="{{$establecimiento->id}}">{{$establecimiento->nombre}}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Docente de Catedra</label>
            <select name="id_nombramiento" id="" class="form-control">
              @foreach ($nombramientos as $nombramiento)
              <option value="{{$nombramiento->id}}">{{$nombramiento->docente}}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
            <input type="date" class="form-control" name="fecha_inicio" id="" aria-describedby="helpId" placeholder=""/>
          </div>
          <div class="mb-3">
            <label for="fecha_fin" class="form-label">Fecha de Fin</label>
            <input type="date" class="form-control" name="fecha_fin" id="" aria-describedby="helpId" placeholder=""/>
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