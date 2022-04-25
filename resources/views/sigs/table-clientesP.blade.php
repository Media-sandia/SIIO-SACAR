@extends("Layaut.layaut")
@section('Contenido')
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Clientes</h3>
                        </div>
                        <div class="col-4 text-right">
                            <button id="btn-modal-clientes" href="#!" class="btn btn-sm btn-primary">Nuevo Cliente</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-sm   m-t-0 bg-td" id="table_clientes" name="">
                        <thead class=" thead-index">
                            <tr>
                                <th class="gh">Empresa</th>
                                <th>Direccion</th>
                                <th>Contacto</th>
                                <th>Numero Telefonico</th>
                                <th class="gh">Panel</th>
                            </tr>
                        </thead>
                    </table>
                    <!--End Table-->
                </div>
            </div>
        </div>
    </div>
@endsection
@include('Modals.Clientes')
