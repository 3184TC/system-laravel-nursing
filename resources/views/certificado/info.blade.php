
  
  <!-- Modal edit -->
  <div class="modal fade" id="edit{{$certificado->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Certificado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('certificados.update',$certificado->id)}}" method="POST">
            @csrf
         @method('PUT')   
        <div class="modal-body">

          <div class="mb-3">
            <label for="" class="form-label">Cite</label>
            <input type="text" class="form-control" name="cite" id="" aria-describedby="helpId" placeholder="" value="{{$certificado->cite}}"/>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Cargo</label>
            <input type="text" class="form-control" name="cargo" id="" aria-describedby="helpId" placeholder="" value="{{$certificado->cargo}}"/>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$certificado->nombre}}"/>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Estudiante de:</label>
            <input type="text" class="form-control" name="estudiante_de" id="" aria-describedby="helpId" placeholder="" value="{{$certificado->estudiante_de}}"/>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Establecimiento</label>
            <input type="text" class="form-control" name="establecimiento" id="" aria-describedby="helpId" placeholder="" value="{{$certificado->establecimiento}}"/>
          </div>
          <div class="mb-3">
            <label for="fecha_inicial" class="form-label">Fecha de Emision</label>
            <input type="date" class="form-control" name="fecha_emision" id="fecha_emision" placeholder="" required value="{{$certificado->fecha_emision}}"/>
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
  <div class="modal fade" id="delete{{$certificado->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Certificado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('certificados.destroy',$certificado->id)}}" method="POST">
            @csrf
         @method('DELETE')   
        <div class="modal-body">

            Estas seguro de Eliminar el certificado de <strong>{{$certificado->nombre}}?</strong>
         
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
    </form>
      </div>
    </div>
  </div>



