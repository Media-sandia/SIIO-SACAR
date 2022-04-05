<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Selecciona Cliente</h5>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="col-md-12">
                        <label for="id_sucursal" class="form-label"><strong></strong>Sucursal</label>
                        <select class="form-control form-control-sm" name="Sucursal" id="select_sucursal_Report">
                            <option selected='selected'>- Selecciona -</option>
                            <option value="SAN LUIS POTOSI">SAN LUIS POTOSI</option>
                            <option value="QUERETARO">QUERETARO</option>
                            <option value="AGUASCALIENTES">AGUASCALIENTES</option>
                            <option value="LEON">LEÓN</option>
                            <option value="SONORA">SONORA</option>
                            <option value="PUEBLA">PUEBLA</option>
                        </select>
                    </div>

                    <div class="col-md-12 mt-2">
                        <label for="Nom_empresa" class="form-label"><strong></strong>Empresa</label>
                        <select class="form-control form-control-sm" name="" id="select_empresa_report">
                        </select>
                        <div id="error_empresa"></div>
                    </div>

                    <div class="col-md-12 mt-2">
                        <label for="Nom_empresa" class="form-label"><strong></strong>Numero De Serie Del
                            Equipo</label>
                        <select class="form-control form-control-sm" name="" id="select-equipo-report">
                        </select>
                        <div id="error_equipo"></div>
                    </div>
                </div>
                <!--end container-->
            </div>
            <!--end modal-body-->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" id="close_report_customers">Cancelar</button>
                <button type="button" class="btn btn-primary btn-sm" id="validate_report_customers">Aceptar</button>
            </div>
        </div>
    </div>
</div>
