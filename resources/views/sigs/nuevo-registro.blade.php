@extends("Layaut.layaut")

@section('Contenido')
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Nuevo Registro</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <input type="hidden" id="id_equipo_registro" value="">
                        <div class="col-md-3">
                            <label for="id_sucursal" class="form-label"><strong></strong>Folio Del Servicio</label>
                            <input class="form-control form-control-sm" id="Folio_servicio" type="text"
                                aria-label=".form-control-sm example" onkeyup="Uppercase(this)">
                            <div id="error_Folio"></div>
                        </div>

                        <div class="col-md-3">
                            <label for="id_sucursal" class="form-label"><strong></strong>Fecha del servicio</label>
                            <input class="form-control form-control-sm" type="date" id="Fecha_Servicio"
                                aria-label=".form-control-sm example">
                            <div id="error_Fecha"></div>
                        </div>

                        <div class="col-md-3" style="margin-top:32px;">
                            <button class="btn btn-sm btn-primary" id="view-form">Consultar</button>
                            {{-- <button class="btn btn-sm btn-primary" onclick="pdf();" id="ejemplo_reporte">Reporte</button> --}}
                        </div>
                    </div>

                    <div class="row mt-3" id="secction-001">
                        @include('__parcials.Parcial-seccion1')
                    </div>

                    {{-- <div class="row mt-3" id="secction-002">
                        @include('__parcials.Parcial-seccion2')
                    </div>

                    <div class="row mt-3" id="secction-003">
                        @include('__parcials.Parcial-seccion3')
                    </div>

                    <div class="row mt-3" id="secction-004">
                        @include('__parcials.Parcial-seccion4')
                    </div>

                    <div class="row mt-3" id="secction-005">
                        @include('__parcials.Parcial-seccion5')
                    </div>

                    <div class="row mt-3" id="secction-006">
                        @include('__parcials.Parcial-seccion6')
                    </div>

                    <div class="row mt-3" id="secction-007">
                        @include('__parcials.Parcial-seccion7')
                    </div>

                    <div class="row mt-3" id="secction-008">
                        @include('__parcials.Parcial-seccion8')
                    </div>

                    <div class="row mt-3" id="secction-009">
                        @include('__parcials.Parcial-seccion9')
                    </div>

                    <div class="row mt-3" id="secction-010">
                        @include('__parcials.Parcial-seccion10')
                    </div>

                    <div class="row mt-3" id="secction-011">
                        @include('__parcials.Parcial-seccion11')
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
        window.onload = function() { // también puede usar window.addEventListener('load', (event) => {
            $('#staticBackdrop').modal('show');
        };
    </script> --}}
@endsection
<script src="{{ asset('js/servicio/ServiceImg.js') }}"></script>
@include('Modals.Report-Cliente')
@include('Modals.evidence-img')
