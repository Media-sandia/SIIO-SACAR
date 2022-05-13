<div class="modal fade" id="img-evidence-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">1.1.1 Recorrido del puente</h5>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <form action="{{route('Evidence')}}" method="post" enctype="multipart/form-data" id="FormEvidence">
                        <input type="hidden" id="evidense_service" name='evidense_service' value="">
                            <div class=" col-12" style="margin-bottom: 10px" >
                            <center>
                            <div class="text-center" style="margin-right: 18px;">
                                    <h4>Seccion</h4>
                                </div>
                                <select class="form-control form-control-sm" id="seccion">
                                </select>
                            </center>    
                            </div>

                            <div class=" col-12" style="margin-bottom: 10px" >
                            <center>
                            <div class="text-center" style="margin-right: 18px;">
                                    <h4>Subseccion</h4>
                            </div>
                            <select class="form-control form-control-sm" id="subsecion">
                            </select>
                            </center>    
                            </div>

                            <div class=" col-12" style="margin-bottom: 10px" >
                            <center>
                            <div class="text-center" style="margin-right: 18px;">
                                    <h4>Item</h4>
                                </div>
                                <select class="form-control form-control-sm" id="items" name="items">
                                </select>
                            </center>    
                            </div>

                            <div class=" col-12" style="margin-bottom: 10px">
                                <div class="text-center" style="margin-right: 18px;">
                                    <h4>Archivo para subida</h4>
                                </div>
                                <center><input type="file" class="form-control" id="file" name="files[]" multiple />
                                </center>
                            </div>

                            <div class="mt-3 text-center">
                                <h4 for="">Comentario</h4>
                                <center>
                                    <textarea name="body" class="form-control" id="" cols="60" rows="5"></textarea>
                                </center>
                            </div>
                            <center><button type="submit" class="btn btn-sacar mt-4">Guardar</button></center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>