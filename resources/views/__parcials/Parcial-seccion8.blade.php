<form action="{{ route('saveSection8') }}" class="form_section form-inline" id="form_section8" method="post"
    enctype="multipart/form-data">
    <input type="hidden" id="id_equipo7" name='id_equipo' value="">
    <input type="hidden" id="Folio_service7" name='Folio_service' value="">
    <input type="hidden" id="date_service7" name='date_service' value="">
    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">8.1 CONTACTORES DE MOVIMIENTO DE ELEVACION</h3>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 55px;">
                <h4 class="">8.1.1 Condicion general de contactor reversible </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator7" id="8_1_1" title="8.1.1 Condicion general de contactor reversible" name="8.1.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C8.1.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(8);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 27px;">
                <h4 class="">8.1.2 Condicion general de contactor 2da velocidad </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator7" id="8_1_2" title="8.1.2 Condicion general de contactor 2da velocidad" name="8.1.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C8.1.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(8);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 65px;">
                <h4 class="">8.1.3 Condicion general de contactor de freno </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator7" id="8_1_3" title="8.1.3 Condicion general de contactor de freno"  name="8.1.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C8.1.3" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(8);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 117px;">
                <h4 class="">8.1.4 Condicion general de rectificador </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator7" id="8_1_4" title="8.1.4 Condicion general de rectificador" name="8.1.4">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C8.1.4" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(8);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">8.2 VARIADOR DE FRECUENCIA DE CARRO</h3>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 20px;">
                <h4 class="">8.2.1 Condición general del variador </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator7" id="8_2_1" title="8.2.1 Condición general del variador" name="8.2.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C8.2.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(8);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 63px;">
                <h4 class="">8.2.2 LED de alarmas apagado </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator7" id="8_2_2" title="8.2.2 LED de alarmas apagado"  name="8.2.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C8.2.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(8);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 158px;">
                <h4 class="">8.2.3 Conexiones </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator7" id="8_2_3" title="8.2.3 Conexiones" name="8.2.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C8.2.3" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(8);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 95px;">
                <h4 class="">8.2.4 Historial de alarmas </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator7" id="8_2_4" title="8.2.4 Historial de alarmas" name="8.2.4">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C8.2.4" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(8);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">8.3 VARIADOR DE FRECUENCIA DE LOS CABEZALES</h3>
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 23px;">
                <h4 class="">8.3.1 Condición general del variador</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator7" id="8_3_1" title="8.3.1 Condición general del variador" name="8.3.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C8.3.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(8);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 65px;">
                <h4 class="">8.3.2 LED de alarmas apagado </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator7" id="8_3_2" title="8.3.2 LED de alarmas apagado" name="8.3.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C8.3.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(8);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 160px;">
                <h4 class="">8.3.3 Conexiones</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator7" id="8_3_3" title="8.3.3 Conexiones"  name="8.3.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C8.3.3" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(8);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 100px;">
                <h4 class="">8.3.4 Historial de alarmas </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator7" id="8_3_4" title="8.3.4 Historial de alarmas"  name="8.3.4">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C8.3.4" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(8);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">8.4 DISPOSITIVO DE MONITORIZACION (CID/OWL)</h3>
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 137px;">
                <h4 class="">8.4.1 Condición general</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator7" id="8_4_1" title="8.4.1 Condición general" name="8.4.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C8.4.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(8);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 27px;">
                <h4 class="">8.4.2 Valor real del aparejo en pantalla </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator7" id="8_4_2" title="8.4.2 Valor real del aparejo en pantalla" name="8.4.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-1 mr-3" name="M8.4.2" placeholder="M">
            <input type="text" class="form-control form-control-sm col-2" name="C8.4.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(8);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 87px;">
                <h4 class="">8.4.3 LED de alarmas apagado</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator7" id="8_4_3" title="8.4.3 LED de alarmas apagado" name="8.4.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C8.4.3" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(8);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 180px;">
                <h4 class="">8.4.4 Conexiones</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator7" id="8_4_4" title="8.4.4 Conexiones"  name="8.4.4">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C8.4.4" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(8);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>
        <input type="button" name="previous" class="previous btn mt-3 btn-primary txt_secction" value="Anterior" />
        <button type="submit" name="password" class="btn mt-3 btn-sacar">Guardar</button>
    </fieldset>
</form>
