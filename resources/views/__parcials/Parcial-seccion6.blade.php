<form action="{{ route('saveSection6') }}" class="form_section form-inline" id="form_section6" method="post"
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
            <select class="form-control col-2 form-control-sm  mr-3" name="6.1.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C6.1.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 98px;">
                <h4 class="">6.1.2 Uniones atornilladas (marca testigo) </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="6.1.2">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C6.1.2" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 20px;">
                <h4 class="">6.1.3 Esparrago de carro (solo en grúa mono puente)</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="6.1.3">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C6.1.3" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 158px;">
                <h4 class="">6.2 Condición general de guardas</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="6.2">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C6.2" placeholder="Comentario">
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">6.3 AMORTIGUADORES (Topes)</h3>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 53px;">
                <h4 class="">6.3.1 Condición de los topes de goma </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="6.3.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C6.3.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 19px;">
                <h4 class="">6.3.2 Condición de los topes estructurales </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="6.3.2">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C6.3.2" placeholder="Comentario">
        </div>


        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">6.4 PRUEBAS DE CARRO</h3>
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 63px;">
                <h4 class="">6.4.1 Condicion general de ruedas</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="6.4.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C6.4.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 195px;">
                <h4 class="">6.4.2 Alineación </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="6.4.2">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C6.4.2" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 7px;">
                <h4 class="">6.4.3 Estado de rodamientos (Vibraciones) </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="6.4.3">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C6.4.3" placeholder="Comentario">
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">6.5 MOTORES DE CARRO</h3>
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 33px;">
                <h4 class="">6.5.1 Comportamiento (Vibración/Ruido)</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="6.5.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C6.5.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 70px;">
                <h4 class="">6.5.2 Funcionamiento de ventilador </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="6.5.2">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C6.5.2" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 157px;">
                <h4 class="">6.5.3 Fijación del motor </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="6.5.3">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C6.5.3" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 235px;">
                <h4 class="">6.5.4 Guarda </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="6.5.4">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C6.5.4" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 205px;">
                <h4 class="">6.5.5 Conexiones </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="6.5.5">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C6.5.5" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 158px;">
                <h4 class="">6.5.6 Condición general </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="6.5.6">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C6.5.6" placeholder="Comentario">
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">6.6 FRENOS DE CARRO</h3>
        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 92px;">
                <h4 class="">6.6.1 Medición de entrehierro </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="6.6.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-1 mr-3" name="VEH6.6.1" placeholder="VEH">
            <input type="text" class="form-control form-control-sm col-4" name="C6.6.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 70px;">
                <h4 class="">6.6.2 Medición del disco de freno </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="6.6.2">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-1 mr-3" name="G6.6.2" placeholder="G">
            <input type="text" class="form-control form-control-sm col-4" name="C6.6.2" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 7px;">
                <h4 class="">6.6.3 Condicion dientes del disco de freno </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="6.6.3">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C6.6.3" placeholder="Comentario">
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">6.7 CABEZALES</h3>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 200px;">
                <h4 class="">6.7.1 Condición de tapa </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="6.7.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C6.7.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 127px;">
                <h4 class="">6.7.2 Condición de caja reductora </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="6.7.2">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C6.7.2" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 25px;">
                <h4 class="">6.7.3 Comportamiento (Vibración/Ruido/Temp.) </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="6.7.3">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C6.7.3" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 78px;">
                <h4 class="">6.7.4 Condición de tapón de respiradero </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="6.7.4">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C6.7.4" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 224px;">
                <h4 class="">6.7.5 Nivel de aceite </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="6.7.5">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-4" name="C6.7.5" placeholder="Comentario">
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
        <input type="button" name="previous" class="previous mt-3 btn btn-primary txt_secction" value="Anterior" />
        <button type="submit" name="password" class="next btn mt-3 btn-sacar">Guardar</button>
    </fieldset>
</form>
