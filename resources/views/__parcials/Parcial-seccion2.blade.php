<form action="{{ route('saveSection2') }}" id="form_section2" class="form_section needs-validation" method="post"
    enctype="multipart/form-data" novalidate>

    <input type="hidden" id="id_equipo1" name='id_equipo' value="">
    <input type="hidden" id="Folio_service1" name='Folio_service' value="">
    <input type="hidden" id="date_service1" name='date_service' value="">
    <h3 class="txt_secction color-title-sacar">2 BOTONERA</h3>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="text-left pb-1">
                    <h4 class="">2.1 Condiciones de los botones</h4>
                </div>

                <div class="text-left pb-1">
                    <h4 class="">2.2 Funcionamiento de los botones</h4>
                </div>

                <div class="text-left pb-1">
                    <h4 class="">2.3 Selector de polipasto</h4>
                </div>

                <div class="text-left pb-1 ">
                    <h4 class="">2.4 Direccion de movimiento</h4>
                </div>

                <div class="text-left pb-1">
                    <h4 class="">2.5 Condiciones de los botones</h4>
                </div>

                <div class="text-left mt-1">
                    <h4 class="">2.6 Cable de control</h4>
                </div>
            </div>

            <div class="col-2">
                <select class="form-control col-12 form-control-sm mb-1 validator1" title="2.1 Condiciones de los botones" id="2_1" name="2.1">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select>

                <select class="form-control col-12 form-control-sm mb-1 validator1" title="2.2 Funcionamiento de los botones" id="2_2" name="2.2">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select>

                <select class="form-control col-12 form-control-sm mb-1 validator1" title="2.3 Selector de polipasto" id="2_3" name="2.3">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select>

                <select class="form-control col-12 form-control-sm mb-1 validator1" title="2.4 Direccion de movimiento" id="2_4" name="2.4">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select>

                <select class="form-control col-12 form-control-sm mb-1 validator1" title="2.5 Condiciones de los botones" id="2_5" name="2.5">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select>

                <select class="form-control col-12 form-control-sm mb-1 validator1" title="2.6 Cable de control" id="2_6" name="2.6">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select>
            </div>

            <div class="col-4">
                <input type="text" style="width: 100%" class="form-control form-control-sm mb-1" name="C2.1"
                    placeholder="Comentario">
                <input type="text" style="width: 100%" class="form-control form-control-sm mb-1" name="C2.2"
                    placeholder="Comentario">
                <input type="text" style="width: 100%" class="form-control form-control-sm mb-1" name="C2.3"
                    placeholder="Comentario">
                <input type="text" style="width: 100%" class="form-control form-control-sm mb-1" name="C2.4"
                    placeholder="Comentario">
                <input type="text" style="width: 100%" class="form-control form-control-sm mb-1" name="C2.5"
                    placeholder="Comentario">
                <input type="text" style="width: 100%" class="form-control form-control-sm mb-1" name="C2.6"
                    placeholder="Comentario">
            </div>

            <div class="col-1">
                <button class="btn btn-sm btn-outline-default btn-rounded" style="margin-top: 5px" onclick="evidence_img(2);"><i
                    class="ni ni-camera-compact"></i>
                </button>

                <button class="btn btn-sm btn-outline-default btn-rounded" style="margin-top: 12px" onclick="evidence_img(2);"><i
                    class="ni ni-camera-compact"></i>
                </button>

                <button class="btn btn-sm btn-outline-default btn-rounded " style="margin-top: 12px" onclick="evidence_img(2);"><i
                    class="ni ni-camera-compact"></i>
                </button>

                <button class="btn btn-sm btn-outline-default btn-rounded" style="margin-top: 12px" onclick="evidence_img(2);"><i
                    class="ni ni-camera-compact"></i>
                </button>

                <button class="btn btn-sm btn-outline-default btn-rounded" style="margin-top: 12px" onclick="evidence_img(2);"><i
                    class="ni ni-camera-compact"></i>
                </button>

                <button class="btn btn-sm btn-outline-default btn-rounded" style="margin-top: 12px" onclick="evidence_img(2);"><i
                    class="ni ni-camera-compact"></i>
                </button>
            </div>
        </div>
        <button type="submit" class="btn btn-sacar txt_secction">Guardar</button>
        <!--<div class="btn btn-sacar txt_secction mt-2" type='submit'>Guardar</div>-->
    </div>
    <!--end-container-->
</form>
