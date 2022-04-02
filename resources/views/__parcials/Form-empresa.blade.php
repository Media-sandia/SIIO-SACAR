<form class="form-horizontal" id="new-empresa" data-uri="">
  <div class="fieldset-form">
    <legend>Datos Del Cliente</legend>
  </div>
  <div class="form-row">

    <div class="col-md-3">
      <label for="id_sucursal" class="form-label"><strong></strong>Sucursal Responsable</label>
      <select class="form-control form-control-sm" name="id_sucursal" id="sucursal_empresa">
        <option selected='selected'>- Selecciona -</option>
        <option value="SAN LUIS POTOSI">SAN LUIS POTOSI</option>
        <option value="QUERETARO">QUERETARO</option>
        <option value="AGUASCALIENTES">AGUASCALIENTES</option>
        <option value="LEON">LEÓN</option>
        <option value="SONORA">SONORA</option>
        <option value="PUEBLA">PUEBLA</option>
      </select>
    </div>

    <div class="col-md-3">
      <label for="Nom_empresa" class="form-label"><strong></strong>Nombre De La Empresa</label>
      <select class="form-control form-control-sm" name="Empresa" id="select_empresa">
      </select>
    </div>

    <div class="col-md-3">
      <label for="Direccion" class="form-label"><strong></strong>Direccion</label>
      <input type="text" class="form-control form-control-sm" id="Direccion" name="Direccion"  required>
    </div>

    <div class="col-md-3">
      <label for="Contacto" class="form-label"><strong></strong>Contacto</label>
      <input type="text" class="form-control form-control-sm" id="Contacto" name="Contacto"  required>
    </div>
  </div> 
</form>

<form class="form-horizontal" id="new-equipo" data-uri="{{route('process_teams')}}">
    <div class="fieldset-form">
      <legend>Datos De La Grúa</legend>
    </div>
    <input type="hidden" name="id_cliente" id="id_cliente" value="">
    <div class="form-row">
      <div class="col-md-3">
        <label for="Marca" class="form-label"><strong></strong>Marca</label>
        <input type="text" class="form-control form-control-sm" id="Marca" name="Marca"  required>
      </div>

      <div class="col-md-3">
        <label for="Modelo" class="form-label"><strong></strong>Modelo</label>
        <input type="text" class="form-control form-control-sm" id="Modelo" name="Modelo"  required>
      </div>

      <div class="col-md-3">
        <label for="N_serie" class="form-label"><strong></strong>Numero De Serie</label>
        <input type="text" class="form-control form-control-sm" id="N_serie" name="N_serie"  required>
      </div>

      <div class="col-md-3">
        <label for="Area" class="form-label"><strong></strong>Area</label>
        <input type="text" class="form-control form-control-sm" id="Area" name="Area"  required>
      </div>
    </div>

    <div class="form-row mt-3">
      <div class="col-md-3">
        <label for="Recorrido" class="form-label"><strong></strong>Recorrido</label>
        <input type="text" class="form-control form-control-sm" id="Recorrido" name="Recorrido"  required>
      </div>

      <div class="col-md-3">
        <label for="Claro" class="form-label"><strong></strong>Claro</label>
        <input type="text" class="form-control form-control-sm" id="Claro" name="Claro"  required>
      </div>

      <div class="col-md-3">
        <label for="Altura" class="form-label"><strong></strong>Altura</label>
        <input type="text" class="form-control form-control-sm" id="Altura" name="Altura"  required>
      </div>

      <div class="col-md-3">
        <label for="Capacidad" class="form-label"><strong></strong>Capacidad</label>
        <input type="text" class="form-control form-control-sm" id="Capacidad" name="Capacidad"  required>
      </div>
    </div> 

    <div class="form-row mt-3">
      <div class="col-md-3">
        <label for="Voltaje" class="form-label"><strong></strong>Voltaje</label>
        <input type="text" class="form-control form-control-sm" id="Voltaje" name="Voltaje"  required>
      </div>

      <div class="col-md-3">
        <label for="Responsable" class="form-label"><strong></strong>Responsable</label>
        <input type="text" class="form-control form-control-sm" id="Responsable" name="Responsable"  required>
      </div>
    </div>
  </form>