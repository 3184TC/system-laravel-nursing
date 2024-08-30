<!-- Modal create -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">CREAR SOLICITUD</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('solicituds.generar') }}" method="POST">
            @csrf
          <div class="modal-body">
            <div class="mb-3">
              <label for="" class="form-label">Cite</label>
              <input type="text" class="form-control" name="cite" id="" aria-describedby="helpId" placeholder=""/>
            </div>
          <div class="mb-3">
            <label for="" class="form-label">Dirigido a:</label>
            <input type="text" class="form-control" name="dirigido" id="" aria-describedby="helpId" placeholder=""/>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Cargo</label>
            <input type="text" class="form-control" name="cargo" id="" aria-describedby="helpId" placeholder=""/>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Establecimiento</label>
            <input type="text" class="form-control" name="establecimiento" id="" aria-describedby="helpId" placeholder=""/>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Referencia</label>
            <input type="text" class="form-control" name="ref" id="" aria-describedby="helpId" placeholder=""/>
          </div>
          <div class="mb-3">
            <label for="fecha_emision" class="form-label">Fecha de Emision</label>
            <input type="date" class="form-control" name="fecha_emision" id="fecha_emision" placeholder="" required />
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary" formtarget="blank">Guardar y generar</button>
        </div>
    </form>
      </div>
    </div>
  </div>