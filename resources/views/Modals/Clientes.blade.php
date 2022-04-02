<div class="modal fade" id="modal-clientes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header text-blue-creo">
          <center><h4 class="modal-title" id="">Nuevo Cliente</h4></center>
      </div>
        <div class="modal-body">
            <form class="form-horizontal" id="new-customers" data-uri="{{route('process-customers')}}">
                <div class="fieldset-form">
                    <legend>Datos Del Cliente</legend>
                </div> 
                <div class="form-row">
                    <div class="col-md-4">
                      <label for="Nom_empresa" class="form-label"><strong></strong>Nombre De La Empresa</label>
                      <input type="text" class="form-control form-control-sm" id="Nom_empresa" name="Nom_empresa" onkeyup="Uppercase(this)"  required>
                    </div>
              
                    <div class="col-md-4">
                      <label for="Direccion" class="form-label"><strong></strong>Direccion</label>
                      <input type="text" class="form-control form-control-sm" id="Direccion" name="Direccion" onkeyup="Uppercase(this)"  required>
                    </div>
              
                    <div class="col-md-4">
                      <label for="Contacto" class="form-label"><strong></strong>Contacto</label>
                      <input type="text" class="form-control form-control-sm" id="Contacto" name="Contacto" onkeyup="Uppercase(this)"  required>
                    </div>
                  </div> 
                  <div class="form-row mt-4">
                    <div class="col-md-3">
                        <label for="id_sucursal" class="form-label"><strong></strong>Numero Telefonico</label>
                        <input type="text" class="form-control form-control-sm" id="Telefono" name="Telefono" onkeyup="Uppercase(this)"  required>
                    </div> 
                    <div class="col-md-3">
                      <label for="id_sucursal" class="form-label"><strong></strong>Sucursal</label>
                      <select class="form-control form-control-sm" name="Sucursal" id="select_sucursal_Report">
                          <option selected='selected'>- Selecciona -</option>
                          <option value="SAN LUIS POTOSI">SAN LUIS POTOSI</option>
                          <option value="QUERETARO">QUERETARO</option>
                          <option value="AGUASCALIENTES">AGUASCALIENTES</option>
                          <option value="LEON">LEÓN</option>
                          <option value="SONORA">SONORA</option>
                          <option value="PUEBLA">PUEBLA</option>
                      </select>
                  </div> 
                  </div>
            </form>
        </div>
            <center>
                <button  id="" onclick="send_customers()" class="btn btn-sacar my-4">Guardar</button>
            </center> 
      </div>
    </div>
  </div>