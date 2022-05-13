<form action="{{ route('saveSection3') }}" class="form_section form-inline needs-validation" id="form_section3" method="post"
    enctype="multipart/form-data">
    <input type="hidden" id="id_equipo2" name='id_equipo' value="">
    <input type="hidden" id="Folio_service2" name='Folio_service' value="">
    <input type="hidden" id="date_service2" name='date_service' value="">
    <h3 class="txt_secction">RADIO-CONTROL</h3>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="text-left pb-1">
                    <h4 class="">3.1 Condiciones de los botones</h4>
                </div>

                <div class="text-left pb-1">
                    <h4 class="">3.2 Funcionamiento de los botones</h4>
                </div>

                <div class="text-left pb-1">
                    <h4 class="">3.3 Selector de polipasto</h4>
                </div>

                <div class="text-left pb-1 ">
                    <h4 class="">3.4 Direccion de movimiento</h4>
                </div>

                <div class="text-left mt-1">
                    <h4 class="">3.5 Carcasa</h4>
                </div>
            </div>

            <div class="col-2">
                <select class="form-control col-12 form-control-sm mb-1 validator2" title="3.1 Condiciones de los botones" id="3_1" name="3.1">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select><br>

                <select class="form-control col-12 form-control-sm mb-1 validator2" title="3.2 Funcionamiento de los botones" id="3_2" name="3.2">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select><br>

                <select class="form-control col-12 form-control-sm mb-1 validator2" title="3.3 Selector de polipasto" id="3_3" name="3.3">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select><br>

                <select class="form-control col-12 form-control-sm mb-1 validator2" title="3.4 Direccion de movimiento" id="3_4" name="3.4">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select><br>

                <select class="form-control col-12 form-control-sm mb-1 validator2" title="3.5 Direccion de movimiento" id="3_5" name="3.5">
                    <option value="0"_selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select><br>
            </div>

            <div class="col-4">
                <input type="text" style="width: 100%" class="form-control form-control-sm mb-1" name="C3.1"
                    placeholder="Comentario">
                <input type="text" style="width: 100%" class="form-control form-control-sm mb-1" name="C3.2"
                    placeholder="Comentario">
                <input type="text" style="width: 100%" class="form-control form-control-sm mb-1" name="C3.3"
                    placeholder="Comentario">
                <input type="text" style="width: 100%" class="form-control form-control-sm mb-1" name="C3.4"
                    placeholder="Comentario">
                <input type="text" style="width: 100%" class="form-control form-control-sm mb-1" name="C3.5"
                    placeholder="Comentario">
            </div>

            <div class="col-1">
                <button class="btn btn-sm btn-outline-default btn-rounded" style="margin-top: 5px" onclick="evidence_img(3);"><i
                    class="ni ni-camera-compact"></i>
                </button>

                <button class="btn btn-sm btn-outline-default btn-rounded" style="margin-top: 12px" onclick="evidence_img(3);"><i
                    class="ni ni-camera-compact"></i>
                </button>

                <button class="btn btn-sm btn-outline-default btn-rounded " style="margin-top: 12px" onclick="evidence_img(3);"><i
                    class="ni ni-camera-compact"></i>
                </button>

                <button class="btn btn-sm btn-outline-default btn-rounded" style="margin-top: 12px" onclick="evidence_img(3);"><i
                    class="ni ni-camera-compact"></i>
                </button>

                <button class="btn btn-sm btn-outline-default btn-rounded" style="margin-top: 12px" onclick="evidence_img(3);"><i
                    class="ni ni-camera-compact"></i>
                </button>
            </div>

        </div>
        <button type="submit" class="btn btn-sacar txt_secction mt-3">Guardar</button>
    </div>
    <!--end-container-->
</form>
