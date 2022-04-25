<form action="{{ route('saveSection11') }}" class="form_section form-inline" id="form_section11" method="post"
    enctype="multipart/form-data">
    <input type="hidden" id="id_equipo10" name='id_equipo' value="">
    <input type="hidden" id="Folio_service10" name='Folio_service' value="">
    <input type="hidden" id="date_service10" name='date_service' value="">
    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">11.1 PRUEBA DEL PUENTE(sin carga)</h3>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 205px;">
                <h4 class="">11.1.1 Recorrido del puente </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="11.1.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C11.1.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 215px;">
                <h4 class="">11.1.2 Frenado del puente </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="11.1.2">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C11.1.2" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 17px;">
                <h4 class="">11.1.3 Límite de fin de carrera/anticolisión del puente </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="11.1.3">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C11.1.3" placeholder="Comentario">
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">11.2 Prueba del carro</h3>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 200px;">
                <h4 class="">11.2.1 Recorrido del carro</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="11.2.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C11.2.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 212px;">
                <h4 class="">11.2.2 Frenado del carro</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="11.2.2">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C11.2.2" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 13px;">
                <h4 class="">11.2.3 Limite de fin de carrera/anticolisión del carro</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="11.2.3">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C11.2.3" placeholder="Comentario">
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">11.3 Prueba del polipasto</h3>
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 173px;">
                <h4 class="">11.3.1 Recorrido de izaje</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="11.3.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C11.3.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 183px;">
                <h4 class="">11.3.2 Frenado de izaje </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="11.3.2">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C11.3.2" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 55px;">
                <h4 class="">11.3.3 Movimiento del bloque de gancho</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="11.3.3">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C11.3.3" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 93px;">
                <h4 class="">11.3.4 Límite superior del polipasto</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="11.3.4">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C11.3.4" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 15px;">
                <h4 class="">11.3.5 Límites de desaceleración del polipasto </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="11.3.5">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C11.3.5" placeholder="Comentario">
        </div>

        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 57px;">
                <h4 class="">11.3.6 Límite inferior del polipasto</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="11.3.6">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C11.3.6" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 48px;">
                <h4 class="">11.3.7 Ausencia de ruidos inusuales </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="11.3.7">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C11.3.7" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 38px;">
                <h4 class="">11.4.8 Paro de emergencia (Accionar)</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="11.4.8">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C11.4.8" placeholder="Comentario">
        </div>

        <div class=" col-12" style="margin-bottom: 10px">
            <div class="text-center" style="margin-right: 18px;">
                <h4>Archivo para subida</h4>
            </div>
            <center><input type="file" class="form-control" id="file" name="files[]" multiple /></center>
        </div>

        <div class="mt-3 text-center">
            <h4 for="">Comentarios</h4>
            <center>
                <textarea name="body" class="form-control" id="" cols="80" rows="5"></textarea>
            </center>
        </div>

        <input type="button" name="previous" class="previous btn mt-3 btn-primary txt_secction" value="Anterior" />
        <button type="submit" name="password" class="next btn mt-3 btn-sacar">Guardar</button>
    </fieldset>
</form>
