<form action="{{ route('saveSection7') }}" class="form_section form-inline needs-validation" id="form_section7" method="post"
    enctype="multipart/form-data">
    <input type="hidden" id="id_equipo6" name='id_equipo' value="">
    <input type="hidden" id="Folio_service6" name='Folio_service' value="">
    <input type="hidden" id="date_service6" name='date_service' value="">
    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">7.1 CONDICION GENERAL DE LOS CABEZALES</h3>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 103px;">
                <h4 class="">7.1.1 Placa de amarre soldadas </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator6" id="7_1_1" title="7.1.1 Placa de amarre soldadas" name="7.1.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <div class="invalid-feedback">
                Campo Obligatorio
            </div>
            <input type="text" class="form-control form-control-sm col-4" name="C7.1.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(7);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 27px;">
                <h4 class="">7.1.2 Uniones atornilladas (marca testigo) </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator6" id="7_1_2" title="7.1.2 Uniones atornilladas (marca testigo)" name="7.1.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <div class="invalid-feedback">
                Campo Obligatorio
            </div>
            <input type="text" class="form-control form-control-sm col-4" name="C7.1.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(7);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">7.2 RIELES DE RODADURA</h3>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 109px;">
                <h4 class="">7.2.1 Condición general </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator6" id="7_2_1" title="7.2.1 Condición general"  name="7.2.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <div class="invalid-feedback">
                Campo Obligatorio
            </div>
            <input type="text" class="form-control form-control-sm col-4" name="C7.2.1" placeholder="Comentario">
             <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(7);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 19px;">
                <h4 class="">7.2.2 Alineación de los rieles (visual) </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator6" id="7_2_2" title="7.2.2 Alineación de los rieles (visual)" name="7.2.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <div class="invalid-feedback">
                Campo Obligatorio
            </div>
            <input type="text" class="form-control form-control-sm col-4" name="C7.2.2" placeholder="Comentario">
             <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(7);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 90px;">
                <h4 class="">7.2.3 Uniones de los rieles </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator6" id="7_2_3" title="7.2.3 Uniones de los rieles" name="7.2.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <div class="invalid-feedback">
                Campo Obligatorio
            </div>
            <input type="text" class="form-control form-control-sm col-4" name="C7.2.3" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(7);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>


        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">7.3 AMORTIGUADORES</h3>
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 63px;">
                <h4 class="">7.3.1 Condición de los topes de goma</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator6" id="7_3_1" title="7.3.1 Condición de los topes de goma" name="7.3.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C7.3.1" placeholder="Comentario">
             <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(7);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 30px;">
                <h4 class="">7.3.2 Condición de los topes estructurales </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator6" id="7_3_2" title="7.3.2 Condición de los topes estructurales" name="7.3.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C7.3.2" placeholder="Comentario">
             <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(7);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">7.4 RUEDAS DE LOS CABEZALES</h3>
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 87px;">
                <h4 class="">7.4.1 Condicion general de ruedas</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator6" id="7_4_1" title="7.4.1 Condicion general de ruedas" name="7.4.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C7.4.1" placeholder="Comentario">
             <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(7);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 162px;">
                <h4 class="">7.4.2 Alineación (visual) </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator6" id="7_4_2" title="7.4.2 Alineación (visual)" name="7.4.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C7.4.2" placeholder="Comentario">
             <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(7);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 27px;">
                <h4 class="">7.4.3 Estado de rodamientos (Vibraciones) </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator6" id="7_4_3" title="7.4.3 Estado de rodamientos (Vibraciones)" name="7.4.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C7.4.3" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(7);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">7.5 MOTOREDUCTORES DE CABEZALES</h3>
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 22px;">
                <h4 class="">7.5.1 Comportamiento (Vibración/Ruido) </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator6" id="7_5_1" title="7.5.1 Comportamiento (Vibración/Ruido)" name="7.5.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C7.5.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(7);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 58px;">
                <h4 class="">7.5.2 Funcionamiento de ventilador </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator6" id="7_5_2" title="7.5.2 Funcionamiento de ventilador" name="7.5.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C7.5.2" placeholder="Comentario">
             <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(7);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 110px;">
                <h4 class="">7.5.3 Fijación de los motores </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator6" id="7_5_3" title="7.5.3 Fijación de los motores" name="7.5.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C7.5.3" placeholder="Comentario">
             <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(7);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 223px;">
                <h4 class="">7.5.4 Guarda </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator6" id="7_5_4" title="7.5.4 Guarda" name="7.5.4">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C7.5.4" placeholder="Comentario">
             <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(7);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 192px;">
                <h4 class="">7.5.5 Conexiones </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator6" id="7_5_5" title="7.5.5 Conexiones" name="7.5.5">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C7.5.5" placeholder="Comentario">
             <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(7);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 147px;">
                <h4 class="">7.5.6 Condición general </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator6" id="7_5_6" title="7.5.6 Condición general" name="7.5.6">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C7.5.6" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(7);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset>
        <h3 class="txt_secction color-title-sacar">7.6 FRENOS DE LOS CABEZALES</h3>
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 95px;">
                <h4 class="">7.6.1 Medición de entrehierro</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator6" id="7_6_1" title="7.6.1 Medición de entrehierro"  name="7.6.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-1 mr-3" name=EH7.6.1" placeholder="EH">
            <input type="text" class="form-control form-control-sm col-2" name="C7.6.1" placeholder="Comentario">
             <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(7);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 70px;">
                <h4 class="">7.6.2 Medición del disco de freno </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator6" id="7_6_2" title="7.6.2 Medición del disco de freno" name="7.6.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-1 mr-3" name="G7.6.2" placeholder="G">
            <input type="text" class="form-control form-control-sm col-2" name="C7.6.2" placeholder="Comentario">
             <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(7);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 7px;">
                <h4 class="">7.6.3 Condicion dientes del disco de freno </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator6" id="7_6_3" title="7.6.3 Condicion dientes del disco de freno" name="7.6.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C7.6.3" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(7);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>
        <input type="button" name="previous" class="previous btn mt-3 btn-primary txt_secction" value="Anterior" />
        <button type="submit" name="password" class="btn mt-3 btn-sacar">Guardar</button>
    </fieldset>
</form>
