<form action="{{ route('saveSection5') }}" class="form_section form-inline needs-validation" id="form_section5" method="post"
    enctype="multipart/form-data">
    <input type="hidden" id="id_equipo4" name='id_equipo' value="">
    <input type="hidden" id="Folio_service4" name='Folio_service' value="">
    <input type="hidden" id="date_service4" name='date_service' value="">
    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">5.1 TORNILLERIA DEL POLIPASTO</h3>
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 32px;">
                <h4 class="">5.1.1 Tornillería general de polipasto</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator4" id="5_1_1" title="5.1.1 Tornillería general de polipasto" name="5.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C5.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 62px;">
                <h4 class="">5.2.2 Condición general de tapas</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator4" id="5_1_2" title="5.2.2 Condición general de tapas" name="5.1.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C5.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction " value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">5.2 TAMBOR</h3>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 72px;">
                <h4 class="">5.2.1 Rotación, cojinetes</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator4"  id="5_2_1" title="5.2.1 Rotación, cojinetes" name="5.2.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C5.2.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 149px;">
                <h4 class="">5.2.2 Ranuras</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator4" id="5_2_2" title="5.2.2 Ranuras" name="5.2.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C5.2.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
             </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 1px;">
                <h4 class="">5.2.3 Posición de cable en ranuras</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator4" id="5_2_3" title="5.2.3 Posición de cable en ranuras" name="5.2.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C5.2.3" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 109px;">
                <h4 class="">5.2.4 Bloqueo axial</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator4" id="5_2_4" title="5.2.4 Bloqueo axial" name="5.2.4">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C5.2.4" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                    class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 62px;">
                <h4 class="">5.2.5 Varillas de conexión</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator4" id="5_2_5" title="5.2.5 Varillas de conexión" name="5.2.5">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C5.2.5" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                    class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 90px;">
                <h4 class="">5.2.6 Corona dentada</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_2_6" title="5.2.6 Corona dentada" name="5.2.6">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C5.2.6" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                    class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 58px;">
                <h4 class="">5.2.7 Abrazadera del cable</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-1 validator4" id="5_2_7" title="5.2.7 Abrazadera del cable" name="5.2.7">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5 mr-2" name="C5.2.7" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                    class="ni ni-camera-compact"></i>
            </button>
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction " value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">5.3 GUIA DE CABLE</h3>
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 32px;">
                <h4 class="">5.3.1 Movimiento</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_3_1" title="5.3.1 Movimiento" name="5.3.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C5.3.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
        </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 47px;">
                <h4 class="">5.3.2 Condición</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_3_2" title="5.3.2 Condición"  name="5.3.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C5.3.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction " value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">5.4 CABLE DE ACERO</h3>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 47px;">
                <h4 class="">5.4.1 Condición general (Izquierdo)</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_4_1" title="5.4.1 Condición general (Izquierdo)" name="5.4.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C5.4.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>


        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 19px;">
                <h4 class="">5.4.2 Medición de diámetro (Izquierdo)</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_4_2" title="5.4.2 Medición de diámetro (Izquierdo)" name="5.4.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="D5.2.2" placeholder="DIAMETRO">
            <input type="text" class="form-control form-control-sm col-2" name="C5.4.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 53px;">
                <h4 class="">5.4.3 Condición general (Derecho)</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_4_3" title="5.4.3 Condición general (Derecho)"  name="5.4.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C5.4.3" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 25px;">
                <h4 class="">5.4.4 Medición de diámetro (Derecho)</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_4_4" title="5.4.4 Medición de diámetro (Derecho)" name="5.4.4">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="D5.4.4" placeholder="DIAMETRO">
            <input type="text" class="form-control form-control-sm col-2" name="C5.4.4" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction " value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">5.5 ANCLAJE DE CABLE</h3>
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 172px;">
                <h4 class="">5.5.1 Abrazaderas (tuercas apretadas)</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator4" id="5_5_1" title="5.5.1 Abrazaderas (tuercas apretadas)" name="5.5.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C5.5.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 47px;">
                <h4 class="">5.5.2 Condición del cable de acero dentro del punto fijo</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator4" id="5_5_2" title="5.5.2 Condición del cable de acero dentro del punto fijo"   name="5.5.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-3" name="C5.5.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction " value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">5.6 PROTECTOR DE SOBRECARGA</h3>
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 135px;">
                <h4 class="">5.6.1 Activación manual</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator4" id="5_6_1" title="5.6.1 Activación manual" name="5.6.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C5.6.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 47px;">
                <h4 class="">5.6.2 Condición de tornillo de ajuste</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_6_2" title="5.6.2 Condición de tornillo de ajuste" name="5.6.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C5.6.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction " value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">5.7 POLEAS SUPERIORES(Igualadoras)</h3>
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 109px;">
                <h4 class="">5.7.1 Condición polea</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_7_1" title="5.7.1 Condición polea"  name="5.7.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C5.7.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 54px;">
                <h4 class="">5.7.2 Condición rodamientos</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_7_2" title="5.7.2 Condición rodamientos"  name="5.7.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C5.7.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 47px;">
                <h4 class="">5.7.3 Eje de soporte de poleas</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_7_3" title="5.7.3 Eje de soporte de poleas"  name="5.7.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C5.7.3" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction " value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">5.8 BLOQUEO DE GANCHO</h3>
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 235px;">
                <h4 class="">5.8.1 Etiquetas</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_8_1" title="5.8.1 Etiquetas"  name="5.8.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C5.8.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 260px;">
                <h4 class="">5.8.2 Tapas</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_8_2" title="5.8.2 Tapas"  name="5.8.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C5.8.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 47px;">
                <h4 class="">5.8.3 Desplazamiento de cable en poleas</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator4" id="5_8_3" title="5.8.3 Desplazamiento de cable en poleas" name="5.8.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C5.8.3" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 174px;">
                <h4 class="">5.8.4 Barra transversal</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_8_4" title="5.8.4 Barra transversal"  name="5.8.4">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C5.8.4" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 169px;">
                <h4 class="">5.8.5 Seguro de gancho</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_8_5" title="5.8.5 Seguro de gancho"  name="5.8.5">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C5.8.5" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 150px;">
                <h4 class="">5.8.6 Apertura del gancho</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_8_6" title="5.8.6 Apertura del gancho"  name="5.8.6">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="L5.8.6" placeholder="L">
            <input type="text" class="form-control form-control-sm col-2" name="C5.8.6" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 20px;">
                <h4 class="">5.8.7 Condicion general del gancho de carga</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_8_7" title="5.8.7 Condicion general del gancho de carga" name="5.8.7 ">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C5.8.7 " placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction " value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">5.9 MOTOR DE ELEVACION</h3>
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 25px;">
                <h4 class="">5.9.1 Comportamiento (Vibración/Ruido)</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_9_1" title="5.9.1 Comportamiento (Vibración/Ruido)"  name="5.9.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C5.9.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 60px;">
                <h4 class="">5.9.2 Funcionamiento de ventilador</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_9_2" title="5.9.2 Funcionamiento de ventilador" name="5.9.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C5.9.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 147px;">
                <h4 class="">5.9.3 Fijación del motor</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_9_3" title="5.9.3 Fijación del motor"  name="5.9.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C5.9.3" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 224px;">
                <h4 class="">5.9.4 Guarda</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_9_4" title="5.9.4 Guarda" name="5.9.4">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C5.9.4" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 195px;">
                <h4 class="">5.9.5 Conexiones</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_9_5" title="5.9.5 Conexiones" name="5.9.5">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C5.9.5" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 148px;">
                <h4 class="">5.9.6 Condición general</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_9_6" title="5.9.6 Condición general"  name="5.9.6">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C5.9.6" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction " value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">5.10 FRENO DE ELEVACION</h3>
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 30px;">
                <h4 class="">5.10.1 Medición del disco de freno</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_10_1" title="5.10.1 Medición del disco de freno" name="5.10.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-1 mr-3" name="G5.10.1" placeholder="G">
            <input type="text" class="form-control form-control-sm col-4" name="C5.10.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 40px;">
                <h4 class="">5.10.2 Dientes del disco de freno</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_10_2" title="5.10.2 Dientes del disco de freno"  name="5.10.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C5.10.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>


        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 10px;">
                <h4 class="">5.10.3 Condición del disco de fricción</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator4"  id="5_10_3" title="5.10.3 Condición del disco de fricción"  name="5.10.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C5.10.3" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 105px;">
                <h4 class="">5.10.4 Modelo del freno</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_10_4" title="5.10.4 Modelo del freno" name="5.10.4">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-1 mr-3" name="M5.10.4" placeholder="M">
            <input type="text" class="form-control form-control-sm col-4" name="C5.10.4" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction " value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">5.11 MOTOR REDUCTOR DE ELEVACION</h3>
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 187px;">
                <h4 class="">5.11.1 Condición de tapa</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_11_1" title="5.11.1 Condición de tapa"  name="5.11.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C5.11.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 120px;">
                <h4 class="">5.11.2 Condición de caja reductora</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_11_2" title="5.11.2 Condición de caja reductora"  name="5.11.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C5.11.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 17px;">
                <h4 class="">5.11.3 Comportamiento (Vibración/Ruido/Temp.)</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_11_3" title="5.11.3 Comportamiento (Vibración/Ruido/Temp.)" name="5.11.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C5.11.3" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 70px;">
                <h4 class="">5.11.4 Condición de tapón de respiradero</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_11_4" title="5.11.4 Condición de tapón de respiradero"  name="5.11.4">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C5.11.4" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 215px;">
                <h4 class="">5.11.5 Nivel de aceite</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator4" id="5_11_5" title="5.11.5 Nivel de aceite"  name="5.11.5">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C5.11.5" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(5);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>
        <input type="button" name="previous" class="previous mt-3 btn btn-primary txt_secction " value="Anterior" />
        <button type="submit" name="password" class="btn mt-3 btn-sacar">Guardar</button>
    </fieldset>







</form>
