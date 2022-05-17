<form action="{{ route('saveSection9') }}" class="form_section form-inline" id="form_section9" method="post"
    enctype="multipart/form-data">
    <fieldset class="container">
        <input type="hidden" id="id_equipo8" name='id_equipo' value="">
        <input type="hidden" id="Folio_service8" name='Folio_service' value="">
        <input type="hidden" id="date_service8" name='date_service' value="">
        <fieldset class="container">
            <h3 class="txt_secction color-title-sacar">9.1 INTERRUPTOR PREINCIPAL DE LA GRUA</h3>
            <div class=" col-12 form-group" style="margin-bottom: 10px">
                <div class="text-left" style="margin-right: 125px;">
                    <h4 class="">9.1.1 Identificación del interruptor </h4>
                </div>
                <select class="form-control col-2 form-control-sm mr-3 validator8" id="9_1_1" title="9.1.1 Identificación del interruptor" name="9.1.1">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select>
                <input type="text" class="form-control form-control-sm col-3" name="C9.1.1" placeholder="Comentario">
                <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(9);"><i
                    class="ni ni-camera-compact"></i>
                </button>
            </div>

            <div class=" col-12 form-group" style="margin-bottom: 10px">
                <div class="text-left" style="margin-right: 215px;">
                    <h4 class="">9.1.2 Funcionamiento </h4>
                </div>
                <select class="form-control col-2 form-control-sm mr-3 validator8" id="9_1_2" title="9.1.2 Funcionamiento" name="9.1.2">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select>
                <input type="text" class="form-control form-control-sm col-3" name="C9.1.2" placeholder="Comentario">
                <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(9);"><i
                    class="ni ni-camera-compact"></i>
                </button>
            </div>

            <div class=" col-12 form-group" style="margin-bottom: 10px">
                <div class="text-left" style="margin-right: 194px;">
                    <h4 class="">9.1.3 Orificio de bloqueo </h4>
                </div>
                <select class="form-control col-2 form-control-sm mr-3 validator8" id="9_1_3" title="9.1.3 Orificio de bloqueo" name="9.1.3">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select>
                <input type="text" class="form-control form-control-sm col-3" name="C9.1.3" placeholder="Comentario">
                <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(9);"><i
                    class="ni ni-camera-compact"></i>
                </button>
            </div>

            <div class=" col-12 form-group" style="margin-bottom: 10px">
                <div class="text-left" style="margin-right: 17px;">
                    <h4 class="">9.1.4 Ausencia de voltaje en posición de apagado </h4>
                </div>
                <select class="form-control col-2 form-control-sm mr-3 validator8" id="9_1_4" title="9.1.4 Ausencia de voltaje en posición de apagado" name="9.1.4">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select>
                <input type="text" class="form-control form-control-sm col-3" name="C9.1.4" placeholder="Comentario">
                <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(9);"><i
                    class="ni ni-camera-compact"></i>
                </button>
            </div>

            <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
            <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
        </fieldset>

        <fieldset class="container">
            <h3 class="txt_secction color-title-sacar">9.2 FUSIBLES</h3>

            <div class=" col-12 form-group" style="margin-bottom: 10px">
                <div class="text-left" style="margin-right: 20px;">
                    <h4 class="">9.2.1 Condición de fusibles (continuidad)</h4>
                </div>
                <select class="form-control col-2 form-control-sm mr-3 validator8" id="9_2_1" title="9.2.1 Condición de fusibles (continuidad)" name="9.2.1">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select>
                <input type="text" class="form-control form-control-sm col-4" name="C9.2.1" placeholder="Comentario">
                <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(9);"><i
                    class="ni ni-camera-compact"></i>
                </button>
            </div>

            <div class=" col-12 form-group" style="margin-bottom: 10px">
                <div class="text-left" style="margin-right: 63px;">
                    <h4 class="">9.2.2 Condición de base de fusibles</h4>
                </div>
                <select class="form-control col-2 form-control-sm mr-3 validator8" id="9_2_2" title="9.2.2 Condición de base de fusibles" name="9.2.2">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select>
                <input type="text" class="form-control form-control-sm col-4" name="C9.2.2" placeholder="Comentario">
                <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(9);"><i
                    class="ni ni-camera-compact"></i>
                </button>
            </div>
            <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
            <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
        </fieldset>

        <fieldset class="container">
            <h3 class="txt_secction color-title-sacar">9.3 ELECTRIFICACION</h3>
            <div class=" col-12 form-group" style="margin-bottom: 10px">
                <div class="text-left" style="margin-right: 125px;">
                    <h4 class="">9.3.1 Soportería (ducto barra/AKAPP)</h4>
                </div>
                <select class="form-control col-2 form-control-sm mr-3 validator8" id="9_3_1" title="9.3.1 Soportería (ducto barra/AKAPP)" name="9.3.1">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select>
                <input type="text" class="form-control form-control-sm col-3" name="C9.3.1" placeholder="Comentario">
                <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(9);"><i
                    class="ni ni-camera-compact"></i>
                </button>
            </div>

            <div class=" col-12 form-group" style="margin-bottom: 10px">
                <div class="text-left" style="margin-right: 293px;">
                    <h4 class="">9.3.2 Uniones </h4>
                </div>
                <select class="form-control col-2 form-control-sm mr-3 validator8" id="9_3_2" title="9.3.2 Uniones" name="9.3.2">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select>
                <input type="text" class="form-control form-control-sm col-3" name="C9.3.2" placeholder="Comentario">
                <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(9);"><i
                    class="ni ni-camera-compact"></i>
                </button>
            </div>

            <div class=" col-12 form-group" style="margin-bottom: 10px">
                <div class="text-left" style="margin-right: 140px;">
                    <h4 class="">9.3.3 Condición de los conductores</h4>
                </div>
                <select class="form-control col-2 form-control-sm mr-3 validator8" id="9_3_3" title="9.3.3 Condición de los conductores" name="9.3.3">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select>
                <input type="text" class="form-control form-control-sm col-3" name="C9.3.3" placeholder="Comentario">
                <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(9);"><i
                    class="ni ni-camera-compact"></i>
                </button>
            </div>

            <div class=" col-12 form-group" style="margin-bottom: 10px">
                <div class="text-left" style="margin-right: 10px;">
                    <h4 class="">9.3.4 Condición de los colectores (zapatas/escobillas) </h4>
                </div>
                <select class="form-control col-2 form-control-sm mr-3 validator8" id="9_3_4" title="9.3.4 Condición de los colectores (zapatas/escobillas)" name="9.3.4">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select>
                <input type="text" class="form-control form-control-sm col-3" name="C9.3.4" placeholder="Comentario">
                <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(9);"><i
                    class="ni ni-camera-compact"></i>
                </button>
            </div>

            <div class=" col-12 form-group" style="margin-bottom: 10px">
                <div class="text-left" style="margin-right: 78px;">
                    <h4 class="">9.3.5 Condición del deslizador (brazo/carro) </h4>
                </div>
                <select class="form-control col-2 form-control-sm mr-3 validator8" id="9_3_5" title="9.3.5 Condición del deslizador (brazo/carro)" name="9.3.5">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select>
                <input type="text" class="form-control form-control-sm col-3" name="C9.3.5" placeholder="Comentario">
                <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(9);"><i
                    class="ni ni-camera-compact"></i>
                </button>
            </div>

            <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
            <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
        </fieldset>

        <fieldset class="container">
            <h3 class="txt_secction color-title-sacar">9.4 CABLE FESTOON</h3>
            <div class=" col-12 form-group" style="margin-bottom: 10px">
                <div class="text-left" style="margin-right: 67px;">
                    <h4 class="">9.4.1 Condición general del cable</h4>
                </div>
                <select class="form-control col-2 form-control-sm  mr-3 validator8" id="9_4_1" title="9.4.1 Condición general del cable" name="9.4.1">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select>
                <input type="text" class="form-control form-control-sm col-4" name="C9.4.1" placeholder="Comentario">
                <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(9);"><i
                    class="ni ni-camera-compact"></i>
                </button>
            </div>

            <div class=" col-12 form-group" style="margin-bottom: 10px">
                <div class="text-left" style="margin-right: 113px;">
                    <h4 class="">9.4.2 Carretillas para cable </h4>
                </div>
                <select class="form-control col-2 form-control-sm mr-3 validator8" id="9_4_2" title="9.4.2 Carretillas para cable" name="9.4.2">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select>
                <input type="text" class="form-control form-control-sm col-4" name="C9.4.2" placeholder="Comentario">
                <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(9);"><i
                    class="ni ni-camera-compact"></i>
                </button>
            </div>

            <div class=" col-12 form-group" style="margin-bottom: 10px">
                <div class="text-left" style="margin-right: 140px;">
                    <h4 class="">9.4.3 Brazo de arrastre</h4>
                </div>
                <select class="form-control col-2 form-control-sm mr-3 validator8" id="9_4_3" title="9.4.3 Brazo de arrastre" name="9.4.3">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select>
                <input type="text" class="form-control form-control-sm col-4" name="C9.4.3" placeholder="Comentario">
                <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(9);"><i
                    class="ni ni-camera-compact"></i>
                </button>
            </div>

            <div class=" col-12 form-group" style="margin-bottom: 10px">
                <div class="text-left" style="margin-right: 10px;">
                    <h4 class="">9.4.4 Cable del motorreductor de cabezal</h4>
                </div>
                <select class="form-control col-2 form-control-sm mr-3 validator8" id="9_4_4" title="9.4.4 Cable del motorreductor de cabezal" name="9.5">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
                </select>
                <input type="text" class="form-control form-control-sm col-4" name="C9.5" placeholder="Comentario">
                <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(9);"><i
                    class="ni ni-camera-compact"></i>
                </button>
            </div>
            <input type="button" name="previous" class="previous btn mt-3 btn-primary txt_secction" value="Anterior" />
            <button type="submit" name="password" class="btn mt-3 btn-sacar">Guardar</button>
        </fieldset>
</form>
