<form action="{{ route('saveSection1') }}" class="form_section form-inline" id="form_section1" method="post"
    enctype="multipart/form-data">
    @csrf
    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">1.1 PRUEBA DEL PUENTE</h3>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 62px;">
                <h4 class="">1.1.1 Recorrido del puente</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="2.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-6" name="C2.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 71px;">
                <h4 class="">1.1.2 Frenado del puente</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="2.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-6" name="C2.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 44px;">
                <h4 class="">1.1.3 Limite de fin de carrera</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="2.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-6" name="C2.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 23px;">
                <h4 class="">1.1.4 Estado de amortiguadores </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="2.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-6" name="C2.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 5px;">
                <h4 class="">1.1.5 Ausencia de ruidos inusuales </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="2.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-6" name="C2.1" placeholder="Comentario">
        </div>
        <input type="button" name="password" class="next btn btn-success txt_secction" value="Siguiente" />
    </fieldset>

    <fieldset class="container">
        <h3 class="txt_secction color-title-sacar">1.2 PRUEBA DEL CARRO</h3>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 82px;">
                <h4 class="">1.2.1 Recorrido del carro</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="2.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-6" name="C2.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 92px;">
                <h4 class="">1.2.2 Frenado del carro</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="2.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-6" name="C2.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 52px;">
                <h4 class="">1.2.3 Limite de fin de carrera</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="2.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-6" name="C2.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 32px;">
                <h4 class="">1.2.4 Estado de amortiguadores </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="2.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-6" name="C2.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 12px;">
                <h4 class="">1.2.5 Ausencia de ruidos inusuales </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="2.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-6" name="C2.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 40px;">
                <h4 class="">1.2.6 Recorrido del cable plano </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="2.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-6" name="C2.1" placeholder="Comentario">
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
            <select class="form-control col-2 form-control-sm  mr-3" name="2.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C2.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 182px;">
                <h4 class="">1.3.2 Frenado de izaje</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="2.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C2.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 52px;">
                <h4 class="">1.3.3 Movimiento del bloque de gancho</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="2.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C2.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 90px;">
                <h4 class="">1.3.4 Límite superior del polipasto </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="2.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C2.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 88px;">
                <h4 class="">1.3.5 Límite accionado por gancho </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="2.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C2.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 11px;">
                <h4 class="">1.3.6 Límites de desaceleración del polipasto </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="2.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C2.1" placeholder="Comentario">
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
            <select class="form-control col-2 form-control-sm  mr-3" name="2.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C2.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 22px;">
                <h4 class="">1.3.8 Ausencia de ruidos inusuales</h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="2.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C2.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right:100px;">
                <h4 class="">1.3.9 Vueltas de fricción </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="2.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C2.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 80px;">
                <h4 class="">1.3.10 Paro de emergencia </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="2.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C2.1" placeholder="Comentario">
        </div>

        <div class=" col-12 form-group" style="margin-bottom: 10px">
            <div class="text-left" style="margin-right: 18px;">
                <h4 class="">1.3.11 Capacidad en puente legible </h4>
            </div>
            <select class="form-control col-2 form-control-sm  mr-3" name="2.1">
                <option selected='selected'>Selecciona</option>
                <option value="1">OK</option>
                <option value="2">NOK</option>
                <option value="3">NA</option>
            </select>
            <input type="text" class="form-control form-control-sm col-5" name="C2.1" placeholder="Comentario">
        </div>

        Archivo para subida: <input type="file" name="file[]" multiple>
        <div class="mt-3 text-center">
            <label for="">Comentario</label>
            <textarea name="body" class="form-control" id="" cols="40" rows="5"></textarea>
        </div>
        <input type="button" name="previous" class="previous btn btn-primary txt_secction" value="Anterior" />
        {{-- <input type="button" name="password" class="next btn btn-sacar"  value="Guardar" /> --}}
        <button type="submit" name="password" class="next btn btn-sacar">Guardar</button>
        {{-- <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
            Launch
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="my-element" class="dropzone text-center border border-dark"
                            style="width:auto; height:240px; border:none;]">
                            <div class="dz-message">
                                <div class="icon py-3">
                                    <i class="bi bi-cloud-arrow-up-fill" style="font-size: 8rem"></i>
                                </div>
                                <h4>Da click para seleccionar archivos</h4>
                                <h5>o arrastra y suéltalos aquí</h5>

                            </div>
                        </div>
                        <div class="mt-3 text-center">
                            <label for="">Comentario</label>
                            <textarea name="" class="form-control" id="" cols="40" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" id="" class="btn btn-primary savefiles">Save</button>
                    </div>
                </div>
            </div>
        </div> --}}
    </fieldset>

</form>
