<form action="{{ route('saveSection3') }}" class="      form_section form-inline" id="form_section3" method="post"
    enctype="multipart/form-data">
    <input type="hidden" id="id_equipo2" name='id_equipo' value="">
    <input type="hidden" id="Folio_service2" name='Folio_service' value="">
    <input type="hidden" id="date_service2" name='date_service' value="">
    <h3 class="txt_secction">RADIO-CONTROL</h3>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="text-left pb-1">
                    <h4 class="">3.1 Condiciones de los botones</h4>
                </div>

                <div class="text-left pb-1">
                    <h4 class="">3.2 Funcionamiento de los botones</h4>
                </div>

                <div class="text-left pb-1">
                    <h4 class="">3.3 Selector de polipasto</h4>
                </div>

                <div class="text-left pb-1 ">
                    <h4 class="">3.4 Direccion de movimiento</h4>
                </div>

                <div class="text-left mt-1">
                    <h4 class="">3.5 Carcasa</h4>
                </div>
            </div>

            <div class="col-2">
                <select class="form-control col-12 form-control-sm mb-1" name="3.1">
                    <option selected='selected'>Selecciona</option>
                    <option value="1">OK</option>
                    <option value="2">NOK</option>
                    <option value="3">NA</option>
                </select><br>

                <select class="form-control col-12 form-control-sm mb-1" name="3.2">
                    <option selected='selected'>Selecciona</option>
                    <option value="1">OK</option>
                    <option value="2">NOK</option>
                    <option value="3">NA</option>
                </select><br>

                <select class="form-control col-12 form-control-sm mb-1" name="3.3">
                    <option selected='selected'>Selecciona</option>
                    <option value="1">OK</option>
                    <option value="2">NOK</option>
                    <option value="3">NA</option>
                </select><br>

                <select class="form-control col-12 form-control-sm mb-1" name="3.4">
                    <option selected='selected'>Selecciona</option>
                    <option value="1">OK</option>
                    <option value="2">NOK</option>
                    <option value="3">NA</option>
                </select><br>

                <select class="form-control col-12 form-control-sm mb-1" name="3.5">
                    <option selected='selected'>Selecciona</option>
                    <option value="1">OK</option>
                    <option value="2">NOK</option>
                    <option value="3">NA</option>
                </select><br>
            </div>

            <div class="col-6">
                <input type="text" style="width: 100%" class="form-control form-control-sm mb-1" name="C3.1"
                    placeholder="Comentario">
                <input type="text" style="width: 100%" class="form-control form-control-sm mb-1" name="C3.2"
                    placeholder="Comentario">
                <input type="text" style="width: 100%" class="form-control form-control-sm mb-1" name="C3.3"
                    placeholder="Comentario">
                <input type="text" style="width: 100%" class="form-control form-control-sm mb-1" name="C3.4"
                    placeholder="Comentario">
                <input type="text" style="width: 100%" class="form-control form-control-sm mb-1" name="C3.5"
                    placeholder="Comentario">
            </div>

            <div class=" col-12" style="margin-bottom: 10px">
                <div class="text-center" style="margin-right: 18px;">
                    <h4>Archivo para subida</h4>
                </div>
                <center><input type="file" class="form-control" id="file" name="files[]" multiple /></center>
            </div>

            <div class="mt-3 text-center col-12">
                <h4 for="">Comentario</h4>
                <textarea name="body" class="form-control" id="" cols="60" rows="5"></textarea>
            </div>

        </div>
        <button type="submit" class="btn btn-sacar txt_secction">Guardar</button>
    </div>
    <!--end-container-->
</form>
