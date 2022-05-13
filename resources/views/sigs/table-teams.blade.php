@extends("Layaut.layaut")
@section('Contenido')
<div class="row">
    <div class="col-xl-12 order-xl-1">
      <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Gruas</h3>
            </div>
            <div class="col-4 text-right">
              <button id="btn-modal" href="#!" class="btn btn-sm btn-primary">Nuevo Equipo</button>
            </div>
          </div>
        </div>
        <div class="card-body">

            <div class="form-row mb-3 ">
                <div class="col-md-3">
                    <span  class="label-form">Sucursal<span class="text-danger">*</span></span>
                     <div class="input-group">
                          <select class="form-control form-control-sm" name="" id="select_sucursal_Report">
                              <option selected="selected" value="">- Selecciona -</option>
                              <option value="SAN LUIS POTOSI">SAN LUIS POTOSI</option>
                              <option value="QUERETARO">QUERETARO</option>
                              <option value="AGUASCALIENTES">AGUASCALIENTES</option>
                              <option value="LEON">LEÓN</option>
                              <option value="SONORA">SONORA</option>
                              <option value="PUEBLA">PUEBLA</option>
                          </select>
                     </div>
                </div>

                <div class="col-md-3">
                    <span  class="label-form">Cliente<span class="text-danger">*</span></span>
                     <div class="input-group">
                          <select class="form-control form-control-sm" name="" id="select_empresa_report">
                              <option selected="selected" value="">- Selecciona -</option>
                          </select>
                     </div>
                </div>

                <div class="ml-2 mt-4">
                    <button style="line-height:1.1;" class="btn btn-primary btn-sm mt-1 py-1" onclick="load_equipos()"><i class="fas fa-database"></i> Consultar</button>
                </div>

            </div>

            <table class="table table-sm table-hover table-hover-index m-t-0 bg-td" id="table_equipos" name="">
            <thead class="thead-index">
              <tr>
                <th>Marca Grua</th>
                <th>Numero Serie</th>
                <th>Marca Polipasto</th>
                <th>Modelo Polipasto</th>
                <th>Panel</th>
              </tr>
             </thead>
          </table><!--End Table-->
              <center>
                <div id="loading">
                    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                </div>
              </center>
        </div>
      </div>
    </div>
  </div>
@endsection
@include('Modals.Cliente-grua')
