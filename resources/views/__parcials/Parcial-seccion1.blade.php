<form action="{{ route('saveSection1') }}" class="form_section form-inline needs-validation" id="form_section1"
    method="post" enctype="multipart/form-data" novalidate>
    <input type="hidden" id="id_equipo" name='id_equipo' value="">
    <input type="hidden" id="Folio_service15" name='Folio_service15' value="">
    <input type="hidden" id="date_service" name='date_service' value="">
    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">1.1 PRUEBA DEL PUENTE</h3>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 62px;">
                <h4 class="">1.1.1 Recorrido del puente</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-4 validator" title="1.1.1 Recorrido del puente" id="1_1_1" name="1.1.1" required>
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select><br><br>
            <input type="text" class="form-control form-control-sm col-4" name="C1.1.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(1);"><i
                    class="ni ni-camera-compact"></i>
            </button>
        </div>


        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 71px;">
                <h4 class="">1.1.2 Frenado del puente</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator" title="1.1.2 Frenado del puente"  id="1_1_2" name="1.1.2" required>
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C1.1.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(1);"><i
                    class="ni ni-camera-compact"></i>
            </button>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 44px;">
                <h4 class="">1.1.3 Limite de fin de carrera</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator" title="1.1.3 Limite de fin de carrera" id="1_1_3" name="1.1.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C1.1.3" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(1);"><i class="ni ni-camera-compact"> </i>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 23px;">
                <h4 class="">1.1.4 Estado de amortiguadores </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator" title="1.1.4 Estado de amortiguadores" id="1_1_4" name="1.1.4">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C1.1.4" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(1);"><i class="ni ni-camera-compact"> </i>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 5px;">
                <h4 class="">1.1.5 Ausencia de ruidos inusuales </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator" title="1.1.5 Ausencia de ruidos inusuales" id="1_1_5" name="1.1.5">
                <option value="0" selected='selected'>Selecciona</option>
                    <option value="1">CORRECTO</option>
                    <option value="2">INCORRECTO</option>
                    <option value="4">CORREGIDO</option>
                    <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C1.1.5" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(1);" ><i class="ni ni-camera-compact"> </i>
        </div>
        <input type="button" name="password" class="next btn btn-success txt_secction" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">1.2 PRUEBA DEL CARRO</h3>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 82px;">
                <h4 class="">1.2.1 Recorrido del carro</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator" title="1.2.1 Recorrido del carro" id="1_2_1" name="1.2.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C1.2.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(1);" ><i class="ni ni-camera-compact"> </i>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 92px;">
                <h4 class="">1.2.2 Frenado del carro</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator" title="1.2.2 Frenado del carro" id="1_2_2" name="1.2.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C1.2.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(1);" ><i class="ni ni-camera-compact"> </i>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 52px;">
                <h4 class="">1.2.3 Limite de fin de carrera</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator" title="1.2.3 Limite de fin de carrera" id="1_2_3" name="1.2.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C1.2.3" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(1);" ><i class="ni ni-camera-compact"> </i>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 32px;">
                <h4 class="">1.2.4 Estado de amortiguadores </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator" title="1.2.4 Estado de amortiguadores" id="1_2_4"  name="1.2.4">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C1.2.4" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(1);" ><i class="ni ni-camera-compact"> </i>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 12px;">
                <h4 class="">1.2.5 Ausencia de ruidos inusuales </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator" title="1.2.5 Ausencia de ruidos inusuales" id="1_2_5" name="1.2.5">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C1.2.5" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(1);" ><i class="ni ni-camera-compact"> </i>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 40px;">
                <h4 class="">1.2.6 Recorrido del cable plano </h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator" title="1.2.6 Recorrido del cable plano" id="1_2_6" name="1.2.6">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C1.2.6" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(1);" ><i class="ni ni-camera-compact"> </i>
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">1.3 PRUEBA DEL POLIPASTO</h3>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 172px;">
                <h4 class="">1.3.1 Recorrido de izaje</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator" title="1.3.1 Recorrido de izaje" id="1_3_1" name="1.3.1">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C1.3.1" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(1);" ><i class="ni ni-camera-compact"> </i>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 182px;">
                <h4 class="">1.3.2 Frenado de izaje</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator" title="1.3.2 Frenado de izaje" id="1_3_2" name="1.3.2">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C1.3.2" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(1);" ><i class="ni ni-camera-compact"> </i>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 52px;">
                <h4 class="">1.3.3 Movimiento del bloque de gancho</h4>
            </div>
            <select class="form-control col-2 form-control-sm mr-3 validator" title="1.3.3 Movimiento del bloque de gancho" id="1_3_3" name="1.3.3">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C1.3.3" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(1);" ><i class="ni ni-camera-compact"> </i>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 90px;">
                <h4 class="">1.3.4 Límite superior del polipasto </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator" title="1.3.4 Límite superior del polipasto" id="1_3_4" name="1.3.4">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C1.3.4" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(1);" ><i class="ni ni-camera-compact"> </i>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 88px;">
                <h4 class="">1.3.5 Límite accionado por gancho </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator" title="1.3.5 Límite accionado por gancho" id="1_3_5" name="1.3.5">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C1.3.5" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(1);" ><i class="ni ni-camera-compact"> </i>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 11px;">
                <h4 class="">1.3.6 Límites de desaceleración del polipasto </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator" title="1.3.6 Límites de desaceleración del polipasto" id="1_3_6" name="1.3.6">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C1.3.6" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(1);" ><i class="ni ni-camera-compact"> </i>
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>


    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">1.3 PRUEBA DEL POLIPASTO</h3>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 32px;">
                <h4 class="">1.3.7 Límite inferior del polipasto</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator" title="1.3.7 Límite inferior del polipasto" id="1_3_7" name="1.3.7">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C1.3.7" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(1);" ><i class="ni ni-camera-compact"> </i>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 22px;">
                <h4 class="">1.3.8 Ausencia de ruidos inusuales</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator" title="1.3.8 Ausencia de ruidos inusuales" id="1_3_8" name="1.3.8">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C1.3.8" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(1);" ><i class="ni ni-camera-compact"> </i>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right:100px;">
                <h4 class="">1.3.9 Vueltas de fricción </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator" title="1.3.9 Vueltas de fricción" id="1_3_9" name="1.3.9">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C1.3.9" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(1);" ><i class="ni ni-camera-compact"> </i>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 80px;">
                <h4 class="">1.3.10 Paro de emergencia </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator" title="1.3.10 Paro de emergencia" id="1_3_10" name="1.3.10">
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C1.3.10" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(1);" ><i class="ni ni-camera-compact"> </i>
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 18px;">
                <h4 class="">1.3.11 Capacidad en puente legible </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3 validator" title="1.3.11 Capacidad en puente legible" id="1_3_11" name="1.3.11" required>
                <option value="0" selected='selected'>Selecciona</option>
                <option value="1">CORRECTO</option>
                <option value="2">INCORRECTO</option>
                <option value="4">CORREGIDO</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C1.3.11" placeholder="Comentario">
            <button class="btn btn-sm btn-outline-default btn-rounded ml-4" onclick="evidence_img(1);" ><i class="ni ni-camera-compact"> </i>
        </div>

        <!-- <div class=" col-12" style="margin-bottom: 10px">
            <div class="text-center" style="margin-right: 18px;">
                <h4>Archivo para subida</h4>
            </div>
            <center><input type="file" class="form-control" id="file" name="files[]" multiple /></center>
        </div>

        <div class="mt-3 text-center">
            <h4 for="">Comentario</h4>
            <center>
                <textarea name="body" class="form-control" id="" cols="60" rows="5"></textarea>
            </center>
        </div> -->

        <input type="button" name="previous" class="previous btn btn-primary txt_secction mt-4" value="Anterior" />
        <button name="password" type="submit" class="btn btn-sacar mt-4">Guardar</button>
    </fieldset>

</form>
