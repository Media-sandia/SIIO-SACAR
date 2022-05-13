<form action="{{ route('saveSection10') }}" class="form_section form-inline" id="form_section10" method="post"
    enctype="multipart/form-data">
    <fieldset class="container">
        <input type="hidden" id="id_equipo9" name='id_equipo' value="">
        <input type="hidden" id="Folio_service9" name='Folio_service' value="">
        <input type="hidden" id="date_service9" name='date_service' value="">
        <h3 class="txt_secction color-title-sacar">10.1 TABLERO DE CONTROL</h3>
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 30px;">
                <h4 class="">10.1.1 Condición del tablero </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="10.1.1">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C10.1.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(10);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 50px;">
                <h4 class="">10.1.2 Etiquetas externas </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="10.1.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C10.1.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(10);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 46px;">
                <h4 class="">10.1.3 Fijación del tablero </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="10.1.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C10.1.3" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(10);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 30px;">
                <h4 class="">10.1.4 Condición de puertas </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="10.1.4">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C10.1.4" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(10);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 17px;">
                <h4 class="">10.1.5 Condición de empaque </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="10.1.5">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C10.1.5" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(10);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 57px;">
                <h4 class="">10.1.6 Dispositivos de bloqueo</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="10.1.6">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C10.1.6" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(10);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 80px;">
                <h4 class="">10.1.7 Conectores glándula</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="10.1.7">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C10.1.7" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(10);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 153px;">
                <h4 class="">10.1.8 Rieles DIN</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="10.1.8">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C10.1.8" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(10);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 99px;">
                <h4 class="">10.1.9 Ductos/Canaletas</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="10.1.9">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C10.1.9" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(10);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>


        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 93px;">
                <h4 class="">10.1.10 Cableado interno</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="10.1.10">
                    <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C10.1.10" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(10);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>


        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 10px;">
                <h4 class="">10.1.11 Condición de los contactores</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="10.1.11">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C10.1.11" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(10);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 25px;">
                <h4 class="">10.1.12 Protecciones térmicas</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="10.1.12">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-1 mr-3" name="NC10.1.12" placeholder="C">
            <input type="text" class="form-control form-control-sm col-3" name="C10.1.12" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(10);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 70px;">
                <h4 class="">10.1.13 Guardamotores </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="10.1.13">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-1 mr-3" name="NC10.1.13" placeholder="C">
            <input type="text" class="form-control form-control-sm col-3" name="C10.1.13" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(10);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 127px;">
                <h4 class="">10.1.14 Fusibles</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="10.1.14">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-1 mr-3" name="NC10.1.14" placeholder="C">
            <input type="text" class="form-control form-control-sm col-3" name="C10.1.14" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(10);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 37px;">
                <h4 class="">10.3.15 Condición de clemas </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="10.3.15">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C10.3.15" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(10);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 60px;">
                <h4 class="">10.3.16 Conectores PLUG</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="10.3.16">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C10.3.16" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(10);"><i
                class="ni ni-camera-compact"></i>
            </button>
        </div>

        <input type="button" name="previous" class="previous btn mt-3 btn-primary txt_secction" value="Anterior" />
        <button type="submit" name="password" class="next btn mt-3 btn-sacar">Guardar</button>
    </fieldset>
</form>
