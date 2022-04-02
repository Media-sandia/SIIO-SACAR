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
          <table class="table table-sm table-hover table-hover-index m-t-0 bg-td" id="table_clientes" name="">
            <thead class="thead-index">
              <tr>
                <th>Empresa</th>
                <th>Sucursal</th>
                <th>Marca</th>
                <th>Modelo</th>
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
