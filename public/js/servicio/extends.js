$(document).ready(function () {
    $("#ejemplo_reporte").click(function () {
        var route = "Reporte/prueba";
        return window.open(route, "Prueba");
        //$('#staticBackdrop').modal('show');
    });

    $("#form_section1").submit(function (e) {
        //e.preventDefault();
        //$("#secction-002").fadeToggle(800);
        /**$.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            data: new FormData(this),
            dataType: "json",
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response);
                if (response.status == 1) {
                    success();
                    generate_report(response.url);
                    $("#secction-002").fadeToggle(800);
                } else {
                    console.log("Error");
                }
            },
        });**/
    });

    $("#form_section2").submit(function (e) {
        e.preventDefault();
        var Folio_service = $("#Folio_servicio").val();
        var date_service = $("#Fecha_Servicio").val();
        var equipo = $("#id_equipo_registro").val();
        $("#Folio_service1").val(Folio_service);
        $("#date_service1").val(date_service);
        $("#id_equipo1").val(equipo);
        $("#secction-002").fadeToggle();
        $("#secction-003").fadeToggle(800);
        // $.ajax({
        //     type: $(this).attr("method"),
        //     url: $(this).attr("action"),
        //     headers: {
        //         "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        //     },
        //     data: new FormData(this),
        //     dataType: "json",
        //     cache: false,
        //     contentType: false,
        //     processData: false,
        //     success: function (response) {
        //         if (response.status == 1) {
        //             console.log(response);
        //             success();
        //             $("#secction-003").fadeToggle(800);
        //         } else {
        //             console.log("Error");
        //         }
        //     },
        // });
    });

    $("#form_section3").submit(function (e) {
        e.preventDefault();
        var Folio_service = $("#Folio_servicio").val();
        var date_service = $("#Fecha_Servicio").val();
        var equipo = $("#id_equipo_registro").val();
        $("#Folio_service2").val(Folio_service);
        $("#date_service2").val(date_service);
        $("#id_equipo2").val(equipo);
        // $.ajax({
        //     type: $(this).attr("method"),
        //     url: $(this).attr("action"),
        //     headers: {
        //         "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        //     },
        //     data: new FormData(this),
        //     dataType: "json",
        //     cache: false,
        //     contentType: false,
        //     processData: false,
        //     success: function (response) {
        //         console.log(response);
        //         if (response.status == 1) {
        //             success();
        //             $("#secction-004").fadeToggle(800);
        //         } else {
        //             console.log("Error");
        //         }
        //     },
        // });
    });

    var current = 1,
        current_step,
        next_step,
        steps;
    steps = $("fieldset").length;
    $(".next").click(function () {
        current_step = $(this).parent();
        next_step = $(this).parent().next();
        next_step.show();
        current_step.hide();
    });

    $(".previous").click(function () {
        current_step = $(this).parent();
        next_step = $(this).parent().prev();
        next_step.show();
        current_step.hide();
    });

    assig_empresa();

    form_hiden();

    //select_clientes();
    //load_data();
    //select_sucursal()
    $("#loading").hide();

    //$('#table_clientes').DataTable()

    $("#btn-modal").click(function () {
        event.preventDefault();
        $("#exampleModal").modal("show");
    });

    $("#btn-modal-clientes").click(function () {
        event.preventDefault();
        $("#modal-clientes").modal("show");
    });

    $("#btn-send").click(function () {
        event.preventDefault();
        var route = $("#new-equipo").data("uri");
        $.ajax({
            url: route,
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            dataType: "json",
            data: $("#new-equipo").serialize(),
            success: function (data) {
                console.log(data);
                if (data.status === 1) {
                    success();
                } else {
                    console.log("Error");
                }
            },
        });
    });

    $("#view-form").click(function (event) {
        event.preventDefault();
        var Folio_service = $("#Folio_servicio").val();
        var date_service = $("#Fecha_Servicio").val();
        if (Folio_service == null || Folio_service == "") {
            validate_Erros();
            $("#error_Folio_hide").remove();
            $("#error_Folio").append(
                "<font color='#BF4949' size='2' id='error_Folio_hide'>Este Campo Es Oblogatorio</font>"
            );
        } else if (date_service == null || date_service == "") {
            validate_Erros();
            $("#error_Folio_hide").remove();
            $("#error_Fecha_hide").remove();
            $("#error_Fecha").append(
                "<font color='#BF4949' size='2' id='error_Fecha_hide'>Este Campo Es Oblogatorio</font>"
            );
        } else {
            let timerInterval;
            Swal.fire({
                title: "Validando Folio",
                html: "Espere Porfavor <b></b>.",
                timer: 1000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading();
                    const b = Swal.getHtmlContainer().querySelector("b");
                    timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft();
                    }, 100);
                },
                willClose: () => {
                    clearInterval(timerInterval);
                },
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                    $("#error_Folio_hide").remove();
                    $("#error_Fecha_hide").remove();
                    $("#Folio_service").val(Folio_service);
                    $("#date_service").val(date_service);
                    $("#secction-001").fadeToggle(800);
                }
            });
        }

        /**$.ajax({
            url:'',
            type:'POST',
            headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            dataType:'json',
            data:$('#prueba-radio').serialize(),
            success:function(data){
                console.log(data);
            }
        });**/
    });

    form_hiden();
    Empresas_Report();
    Equipos_Report();

    $("#close_report_customers").click(function (e) {
        e.preventDefault();
        $("#staticBackdrop").modal("hide");
        $(location).attr("href", "/");
    });

    $("#validate_report_customers").click(function (e) {
        e.preventDefault();
        var team = $("#select-equipo-report").val();
        var business = $("#select_empresa_report").val();

        if (business === null || business == 0) {
            validate_Erros();
            $("#error_business_hide").remove();
            $("#error_empresa").append(
                "<font color='#BF4949' size='2' id='error_business_hide'>Este Campo Es Oblogatorio</font>"
            );
        } else if (team == 0) {
            validate_Erros();
            $("#error_business_hide").remove();
            $("#error_team_hide").remove();
            $("#error_equipo").append(
                "<font color='#BF4949' size='2' id='error_team_hide'>Este Campo Es Oblogatorio</font>"
            );
        } else {
            $("#id_equipo_registro").val(team);
            $("#id_equipo").val(team);
            $("#error_team_hide").remove();
            $("#error_business_hide").remove();
            $("#staticBackdrop").modal("hide");
        }
    });

    $("#btn_secction003").click(function (e) {
        e.preventDefault();
        $("#secction-003").fadeToggle();
        $("#secction-004").fadeToggle(800);
    });
}); // fin del document ready

function check(checkbox) {
    var subseccion = checkbox
        .filter(":checked")
        .map(function () {
            return $(this).attr("name");
        })
        .get();
    console.log(subseccion);
}

function validate_Erros() {
    toastr.error(
        "Hay algunos errores de validación, corrígelos.",
        "Error de validación",
        {
            timeOut: 4000,
            positionClass: "toast-top-full-width",
        }
    );
}

function form_hiden() {
    $("#secction-001").css("display", "none");
    $("#secction-002").css("display", "none");
    $("#secction-003").css("display", "none");
    $("#secction-004").css("display", "none");
    $("#secction-005").css("display", "none");
    $("#secction-006").css("display", "none");
    $("#secction-007").css("display", "none");
    $("#secction-008").css("display", "none");
    $("#secction-009").css("display", "none");
    $("#secction-010").css("display", "none");
    $("#secction-011").css("display", "none");
    $("#secction-anexos").css("display", "none");
    //$("#secction-004").css("display", "none");
}

function Uppercase(exp) {
    exp.value = exp.value.toUpperCase();
}

function generate_report(url) {
    return window.open(url, "Prueba");
}

function inicializeFolio() {
    var Folio_service = $("#Folio_servicio").val();
    var date_service = $("#Fecha_Servicio").val();
    var equipo = $("#id_equipo_registro").val();
    $("#Folio_service").val(Folio_service);
    $("#date_service").val(date_service);
    $("#id_equipo").val(equipo);
}

/**function load_data(){
    $.ajax({
        url:'/Clientes/dataClientes',
        type:'GET',
        dataType:'json',
        success:function(data){
            //console.log(data);
            show_clientes(data);
        }
    })
}**/

function show_clientes(response) {
    var table_clien = $("#table_clientes").DataTable({
        processing: true,
        scroller: false,
        pageLength: 15,
        data: response,
        columns: [
            { data: "Nom_empresa" },
            { data: "id_sucursal" },
            { data: "Marca" },
            { data: "Modelo" },
            {
                data: null,
                orderable: false,
                render: function (data, type, row) {
                    return (
                        "<button class='Editar btn btn-outline-success btn-sm btn-rounded ml-1' id='editar'><i class='fas fa-edit'></i></button>" +
                        "<button class='Eliminar btn btn-outline-danger btn-sm btn-rounded ml-1'><i class='fas fa-trash-alt'></i></button>"
                    );
                },
            },
        ],
    }); // fin de la tabla clientes
}

/**function select_sucursal(){
    $.ajax({
        url:'/Clientes/sucursales',
        type:'GET',
        dataType:'json',
        success:function(data){
            $('#select_sucursal').empty();
            $('#select_sucursal').append("<option selected='selected'>- Selecciona -</option>");
            $.each(data,function(k,v){
                $('#select_sucursal').append("<option value='"+v.id+"'>"+v.Sucursal+"</option>");
            });//select_clientes
        }
    });
}**/

function assig_empresa() {
    $("#sucursal_empresa").change(function () {
        var val = $("#sucursal_empresa").val();
        //console.log(val);
        $.ajax({
            url: "teams/dataClientes/" + val + "",
            type: "GET",
            dataType: "json",
            success: function (data) {
                $("#select_empresa").empty();
                $("#select_empresa").append(
                    "<option selected='selected'>- Selecciona -</option>"
                );
                $.each(data, function (k, v) {
                    $("#select_empresa").append(
                        "<option value='" +
                            v.id +
                            "'>" +
                            v.Nom_empresa +
                            "</option>"
                    );
                });

                $("#select_empresa").change(function () {
                    var val1 = $("#select_empresa").val();
                    $("#id_cliente").val(val1);
                    var newArr = data.filter(function (el) {
                        return el.id == val1;
                    });

                    $.each(newArr, function (k, v) {
                        $("#Direccion").val(v.Direccion);
                        $("#Contacto").val(v.Contacto);
                    });
                });
            },
        }); // fin de la funcion ajax
    });
}

function Empresas_Report() {
    $("#select_sucursal_Report").change(function () {
        var val = $("#select_sucursal_Report").val();
        $("#select_empresa_report").empty();
        $("#select_empresa_report").append(
            "<option selected='selected'  value='0'>- Selecciona -</option>"
        );
        $.each(Empresas(val), function (k, v) {
            $("#select_empresa_report").append(
                "<option value='" + v.id + "'>" + v.Nom_empresa + "</option>"
            );
        });
    });
}
function Equipos_Report() {
    $("#select_empresa_report").change(function () {
        var val = $("#select_empresa_report").val();
        $("#select-equipo-report").empty();
        $("#select-equipo-report").append(
            "<option selected='selected' value='0'>- Selecciona -</option>"
        );
        $.each(Equipos(val), function (k, v) {
            $("#select-equipo-report").append(
                "<option value='" + v.id + "'>" + v.N_serie + "</option>"
            );
        });
    });

    $("#select-equipo-report").change(function () {
        var val1 = $("#select-equipo-report").val();
        var response = Equipos(val1);
        //console.log(response);
        /**var newArr = response.filter(function(el){
            return (el.id == val1);
        });**/
        //console.log(newArr);
        /**$.each(newArr,function(k,v){
            $('#Marca-Equipo').val(v.Direccion);
            $('#Modelo-Equipo').val(v.Contacto);
        })**/
    });
}

function Equipos(val) {
    var response;
    $.ajax({
        async: false,
        url: "NuevoRegistro/business/" + val + "",
        type: "GET",
        dataType: "json",
        success: function (data) {
            response = data;
        },
    });
    return response;
}

function Empresas(val) {
    var response;
    $.ajax({
        async: false,
        url: "teams/dataClientes/" + val + "",
        type: "GET",
        dataType: "json",
        success: function (data) {
            response = data;
        },
    });
    return response;
}

function send_customers() {
    var route = $("#new-customers").data("uri");
    $.ajax({
        url: route,
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        dataType: "json",
        data: $("#new-customers").serialize(),
        success: function (data) {
            //console.log(data);
            if (data.status === 1) {
                success();
            } else {
                console.log("Error");
            }
            //show_clientes(data);
        },
    });

    /**function select_clientes(){
    $.ajax({
        url:'/Clientes/dataClientes',
        type:'GET',
        dataType:'json',
        success:function(data){
            $('#select_clientes').empty();
            $('#select_clientes').append("<option selected='selected'>- Selecciona -</option>");
            //console.log(data.data);
            $.each(data,function(k,v){
                $('#select_clientes').append("<option value='"+v.id+"'>"+v.Nom_empresa+"</option>");
            });//select_clientes
        }
    });
}**/

    function check(check) {
        var check = $(".form-check-input");
        var subseccion = check
            .filter(":checked")
            .map(function () {
                return $(this).value();
            })
            .get();
        console.log(subseccion);
    }

    function reset_form() {
        $("#new-empresa")[0].reset();
        $("#select_sucursal").val("").trigger("change");
    }

    /** funciones de mensajes del sistemas*/

    function success() {
        Swal.fire("Exito!", "Registro Guardado", "success");
    }

    /** Funciones de los botones del formulario por secciones**/

    // function btn_secction001() {
    //     success();
    //     $("#secction-002").fadeToggle(800);
    // }

    // function btn_secction002() {
    //     success();
    //     $("#secction-002").fadeToggle();
    //     $("#secction-003").fadeToggle(800);
    // }

    /**var checkbox = $('.seccion3');
    var title = $('.title-3');

    var campos = checkbox.filter('.seccion3').map(function(){
        return $(this).attr('id');
    }).get();

    var name = title.filter('.title-3').map(function(){
        return $(this).attr('id');
    }).get();**/
    /**event.preventDefault(); 
        $.ajax({
            url:'NuevoRegistro/pruebas',
            type:'POST',
            headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            dataType:'json',
            data:$('#form_section3').serialize(),
            success:function(data){
                console.log(data);
                if(data.status == 1){
                    success();
                    console.log(data.data);
                }
                else{
                    console,log('Error');
                }
            }
        });**/
}

function btn_secction004() {
    success();
    $("#secction-004").fadeToggle();
    $("#secction-005").fadeToggle(800);
}

function btn_secction005() {
    success();
    $("#secction-005").fadeToggle();
    $("#secction-006").fadeToggle(800);
}

function btn_secction006() {
    success();
    $("#secction-006").fadeToggle();
    $("#secction-007").fadeToggle(800);
}

function btn_secction007() {
    success();
    $("#secction-007").fadeToggle();
    $("#secction-008").fadeToggle(800);
}

function btn_secction008() {
    success();
    $("#secction-008").fadeToggle();
    $("#secction-009").fadeToggle(800);
}

function btn_secction009() {
    success();
    $("#secction-009").fadeToggle();
    $("#secction-010").fadeToggle(800);
}

function btn_secction010() {
    success();
    $("#secction-010").fadeToggle();
    $("#secction-011").fadeToggle(800);
}

function btn_secction011() {
    success();
    $("#secction-010").fadeToggle();
    $("#secction-anexos").fadeToggle(800);
}