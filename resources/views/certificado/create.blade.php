<!-- Modal create -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">CREAR CERTIFICADO</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('certificados.generar') }}" method="POST">
            @csrf
          <div class="modal-body">
            <div class="mb-3">
              <label for="caso" class="form-label">CERTIFICADO DE:</label>
              <select class="form-control" name="caso" id="caso" required>
                <option value="DOCENTE ASISTENCIAL">DOCENTE ASISTENCIAL</option>
                <option value="AGRADECIMIENTO">AGRADECIMIENTO</option>
              </select>
          <div class="mb-3">
            <label for="" class="form-label">Cite</label>
            <input type="text" class="form-control" name="cite" id="" aria-describedby="helpId" placeholder=""/>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Cargo</label>
            <input type="text" class="form-control" name="cargo" id="" aria-describedby="helpId" placeholder=""/>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder=""/>
          </div>
          <div class="mb-3">
            <label for="estudiante_de" class="form-label">Estudiantede:</label>
            <select class="form-control" name="estudiante_de" id="estudiante_de" aria-describedby="helpId" required>
                <option value="" disabled selected>Seleccione una opción</option>
                <option value="AGRADECIMIENTO">AGRADECIMIENTO</option>
                <option value="PREGRADO">PREGRADO</option>
                <option value="INTERNADO ROTATORIO">INTERNADO ROTATORIO</option>
            </select>
        </div>
          <div class="mb-3">
            <label for="" class="form-label">Establecimiento</label>
            <input type="text" class="form-control" name="establecimiento" id="" aria-describedby="helpId" placeholder=""/>
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

      <script>
        document.getElementById('caso').addEventListener('change', function() {
          var estudianteDeField = document.getElementById('estudiante_de');
          if (this.value === 'AGRADECIMIENTO') {
            estudianteDeField.required = false;
            estudianteDeField.placeholder = 'Opcional';
          } else {
            estudianteDeField.required = true;
            estudianteDeField.placeholder = '';
          }
        });
      </script>

    </div>
  </div>