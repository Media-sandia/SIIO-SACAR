<form action="{{ route('saveSection6') }}" class="form_section form-inline needs-validation" id="form_section6" method="post"
    enctype="multipart/form-data">
    <input type="hidden" id="id_equipo5" name='id_equipo' value="">
    <input type="hidden" id="Folio_service5" name='Folio_service' value="">
    <input type="hidden" id="date_service5" name='date_service' value="">
    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">6.1 CONDICION GENERAL DEL CARRO</h3>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 233px;">
                <h4 class="">6.1.1 Uniones soldadas </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator5" id="6_1_1" title="6.1.1 Uniones soldadas" name="6.1.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C6.1.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(6);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 98px;">
                <h4 class="">6.1.2 Uniones atornilladas (marca testigo) </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator5" id="6_1_2" title="6.1.2 Uniones atornilladas (marca testigo)" name="6.1.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C6.1.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(6);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 20px;">
                <h4 class="">6.1.3 Esparrago de carro (solo en grúa mono puente)</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator5" id="6_1_3" title="6.1.3 Esparrago de carro (solo en grúa mono puente)"  name="6.1.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C6.1." placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(6);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 158px;">
                <h4 class="">6.1.4 Condición general de guardas</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator5" id="6_1_4" title="6.1.4 Condición general de guardas"  name="6.1.4">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C6.1.4" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(6);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">6.2 AMORTIGUADORES (Topes)</h3>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 53px;">
                <h4 class="">6.2.1 Condición de los topes de goma </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator5" id="6_2_1" title="6.2.1 Condición de los topes de goma"  name="6.2.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C6.2.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(6);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 19px;">
                <h4 class="">6.2.2 Condición de los topes estructurales </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator5" id="6_2_2" title="6.2.2 Condición de los topes estructurales"  name="6.2.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C6.2.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(6);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>


        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">6.3 PRUEBAS DE CARRO</h3>
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 63px;">
                <h4 class="">6.3.1 Condicion general de ruedas</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator5" id="6_3_1" title="6.3.1 Condicion general de ruedas"  name="6.3.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C6.3.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(6);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 195px;">
                <h4 class="">6.3.2 Alineación </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator5" id="6_3_2" title="6.3.2 Alineación"  name="6.3.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C6.3.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(6);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 7px;">
                <h4 class="">6.3.3 Estado de rodamientos (Vibraciones) </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator5" id="6_3_3" title="6.3.3 Estado de rodamientos (Vibraciones)"  name="6.3.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C6.3.3" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(6);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">6.4 MOTORES DE CARRO</h3>
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 33px;">
                <h4 class="">6.4.1 Comportamiento (Vibración/Ruido)</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator5" id="6_4_1" title="6.4.1 Comportamiento (Vibración/Ruido)" name="6.4.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C6.4.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(6);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 70px;">
                <h4 class="">6.4.2 Funcionamiento de ventilador </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator5" id="6_4_2" title="6.4.2 Funcionamiento de ventilador" name="6.4.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C6.4.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(6);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 157px;">
                <h4 class="">6.4.3 Fijación del motor </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator5" id="6_4_3" title="6.4.3 Fijación del motor" name="6.4.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C6.4.3" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(6);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 235px;">
                <h4 class="">6.4.4 Guarda </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator5" id="6_4_4" title="6.4.4 Guarda" name="6.4.4">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C6.4.4" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(6);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 205px;">
                <h4 class="">6.4.5 Conexiones </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator5" id="6_4_5" title="6.4.5 Conexiones" name="6.4.5">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C6.4.5" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(6);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 158px;">
                <h4 class="">6.4.6 Condición general </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator5" id="6_4_6" title="6.4.6 Condición general"  name="6.4.6">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C6.4.6" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(6);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">6.5 FRENOS DE CARRO</h3>
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 92px;">
                <h4 class="">6.5.1 Medición de entrehierro </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator5" id="6_5_1" title="6.5.1 Medición de entrehierro" name="6.5.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-1 mr-3" name="VEH6.5.1" placeholder="VEH">
            <input type="text" class="form-control form-control-sm col-3" name="C6.5.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(6);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 70px;">
                <h4 class="">6.5.2 Medición del disco de freno </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator5" id="6_5_2" title="6.5.2 Medición del disco de freno" name="6.5.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-1 mr-3" name="G6.5.2" placeholder="G">
            <input type="text" class="form-control form-control-sm col-3" name="C6.5.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(6);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 7px;">
                <h4 class="">6.5.3 Condicion dientes del disco de freno </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator5" id="6_5_3" title="6.5.3 Condicion dientes del disco de freno"  name="6.5.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C6.5.3" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(6);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">6.6 CABEZALES</h3>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 200px;">
                <h4 class="">6.6.1 Condición de tapa </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator5" id="6_6_1" title="6.6.1 Condición de tapa" name="6.6.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C6.6.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(6);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 127px;">
                <h4 class="">6.6.2 Condición de caja reductora </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator5" id="6_6_2" title="6.6.2 Condición de caja reductora"  name="6.6.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C6.6.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(6);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 25px;">
                <h4 class="">6.6.3 Comportamiento (Vibración/Ruido/Temp.) </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator5" id="6_6_3" title="6.6.3 Comportamiento (Vibración/Ruido/Temp.)"  name="6.6.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C6.6.3" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(6);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 78px;">
                <h4 class="">6.6.4 Condición de tapón de respiradero </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator5" id="6_6_4" title="6.6.4 Condición de tapón de respiradero" name="6.6.4">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C6.6.4" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(6);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 224px;">
                <h4 class="">6.6.5 Nivel de aceite </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator5" id="6_6_5" title="6.6.5 Nivel de aceite" name="6.6.5">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C6.6.5" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(6);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>
        <input type="button" name="previous" class="previous mt-3 btn btn-primary txt_secction" value="Anterior" />
        <button type="submit" name="password" class="btn mt-3 btn-sacar">Guardar</button>
    </fieldset>
</form>
