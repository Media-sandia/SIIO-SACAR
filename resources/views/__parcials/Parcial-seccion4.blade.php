<form action="{{ route('saveSection4') }}" class="form_section form-inline" id="form_section4" method="post"
    enctype="multipart/form-data">
    <fieldset class="container">
        <input type="hidden" id="id_equipo3" name='id_equipo' value="">
        <input type="hidden" id="Folio_service3" name='Folio_service' value="">
        <input type="hidden" id="date_service3" name='date_service' value="">
        <h3 class="txt_secction color-title-sacar">4.1 VOLTAJE DE ALIMENTACION NOMINAL</h3>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 62px;">
                <h4 class="">4.1.1 Voltaje linea-linea</h4>
            </div>
            <select for='' class="form-control col-2 form-control-sm  mr-3" name="4.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="VLL" placeholder="VLL">
            <input type="text" class="form-control form-control-sm col-4" name="C4.1.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 55px;">
                <h4 class="">4.1.2 Voltaje linea-tierra</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="421">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="VLT" placeholder="VLT">
            <input type="text" class="form-control form-control-sm col-4" name="C4.1.2" placeholder="Comentario">
        </div>
        <input type="button" name="password" class="next btn btn-success txt_secction" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">4.2 CORRIENTE DE ELEVACION SIN CARGA</h3>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 12px;">
                <h4 class="">4.2.1 Corriente línea 1 (1ra Velocidad)</h4>
            </div>
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="GP4.2.1"
                placeholder="Gancho principal">
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="GA4.2.1"
                placeholder="Gancho Auxiliar">
            <input type="text" class="form-control form-control-sm col-4" name="C4.2.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 12px;">
                <h4 class="">4.2.2 Corriente línea 2 (1ra Velocidad)</h4>
            </div>
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="GP4.2.2"
                placeholder="Gancho principal">
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="GA4.2.2"
                placeholder="Gancho Auxiliar">
            <input type="text" class="form-control form-control-sm col-4" name="C4.2.2" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 12px;">
                <h4 class="">4.2.3 Corriente línea 3 (1ra Velocidad)</h4>
            </div>
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="GP4.2.3"
                placeholder="Gancho principal">
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="GA4.2.3"
                placeholder="Gancho Auxiliar">
            <input type="text" class="form-control form-control-sm col-4" name="C4.2.3" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 12px;">
                <h4 class="">4.2.4 Corriente línea 1 (2ra Velocidad)</h4>
            </div>
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="GP4.2.4"
                placeholder="Gancho principal">
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="GA4.2.4"
                placeholder="Gancho Auxiliar">
            <input type="text" class="form-control form-control-sm col-4" name="C4.2.4" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 12px;">
                <h4 class="">4.2.5 Corriente línea 2 (2ra Velocidad)</h4>
            </div>
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="GP4.2.5"
                placeholder="Gancho principal">
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="GA4.2.5"
                placeholder="Gancho Auxiliar">
            <input type="text" class="form-control form-control-sm col-4" name="C4.2.5" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 12px;">
                <h4 class="">4.2.6 Corriente línea 3 (2ra Velocidad)</h4>
            </div>
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="GP4.2.6"
                placeholder="Gancho principal">
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="GA4.2.6"
                placeholder="Gancho Auxiliar">
            <input type="text" class="form-control form-control-sm col-4" name="C4.2.6" placeholder="Comentario">
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction " value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">4.3 CORRIENTE EN MOTOR DE CARRO</h3>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 62px;">
                <h4 class="">4.3.1 Corriente línea 1</h4>
            </div>
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="GP4.3.1"
                placeholder="Carro principal">
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="GA4.3.1"
                placeholder="Carro auxiliar">
            <input type="text" class="form-control form-control-sm col-4" name="C4.3.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 62px;">
                <h4 class="">4.3.2 Corriente línea 2</h4>
            </div>
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="GP4.3.2"
                placeholder="Carro principal">
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="GA4.3.2"
                placeholder="Carro auxiliar">
            <input type="text" class="form-control form-control-sm col-4" name="C4.3.2" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 62px;">
                <h4 class="">4.3.3 Corriente línea 3</h4>
            </div>
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="GP4.3.3"
                placeholder="Carro principal">
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="GA4.3.3"
                placeholder="Carro auxiliar">
            <input type="text" class="form-control form-control-sm col-4" name="C4.3.3" placeholder="Comentario">
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction " value="Anterior" />
        <input type="button" name="password" class="next btn btn-success" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">4.4 CORRIENTE EN MOTOR DE CABEZALES</h3>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 62px;">
                <h4 class="">4.3.1 Corriente línea 1</h4>
            </div>
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="GP4.4.1" placeholder="CL1">
            <input type="text" class="form-control form-control-sm col-4" name="C4.4.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 62px;">
                <h4 class="">4.3.2 Corriente línea 2</h4>
            </div>
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="GP4.4.2" placeholder="CL2">
            <input type="text" class="form-control form-control-sm col-4" name="C4.4.2" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 62px;">
                <h4 class="">4.3.3 Corriente línea 3</h4>
            </div>
            <input type="text" class="form-control form-control-sm col-2 mr-3" name="GP4.4.3" placeholder="CL3">
            <input type="text" class="form-control form-control-sm col-4" name="C4.4.3" placeholder="Comentario">
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

        <input type="button" name="previous" class="previous mt-3 btn btn-primary txt_secction " value="Anterior" />
        <button type="submit" name="password" class="next btn btn-sacar mt-3">Guardar</button>

    </fieldset>
</form>
