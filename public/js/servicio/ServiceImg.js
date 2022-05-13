// window.onload = function() { // también puede usar window.addEventListener('load', (event) => {
//     $('#staticBackdrop').modal('show');
// };

function EvaluationErrors(array){
    var status;
    if(array.length != 0){
        Swal.fire({
            icon: 'error',
            title: '<strong style="color:#000000;">SECCION INCOMPLETA</strong>',
            html: '<strong>Existen '+array.length+' Puntos Por Llenar</strong>',
            showConfirmButton: false,
            footer: '<strong> Punto Obligatorio: '+$('#'+array[0]).attr('title')+' </strong>'
        });
        status = false;
    }
    else{
         status = true;
    }
    return status;
}

//Validacion seccion 1
function Validator(){
    var Errors =  [];
    var elementos = $(".validator").map(function(){
        return $(this).attr('id');
    }).get();

    for(i = 0;i < elementos.length; ++i){
        var value = $('#'+elementos[i]).val();
        if(value != 0){
            $('#'+elementos[i]).removeClass('is-invalid');
            $("#"+elementos[i]).addClass('is-valid');
        }
       else{
        Errors.push(elementos[i]);
        $("#"+elementos[i]).removeClass('is-valid');
        $("#"+elementos[i]).addClass('is-invalid');
       }
    }
    return EvaluationErrors(Errors);
}

//Validacion seccion 2
function Validator1(){
    var Errors =  [];
    var elementos = $(".validator1").map(function(){
        return $(this).attr('id');
    }).get();
    for(i = 0;i < elementos.length; ++i){
        var status;
        var value = $('#'+elementos[i]).val();
        if(value != 0){
            $('#'+elementos[i]).removeClass('is-invalid');
            $("#"+elementos[i]).addClass('is-valid');
            status =  true;
        }
        else{
            Errors.push(elementos[i]);
            $("#"+elementos[i]).removeClass('is-valid');
            $("#"+elementos[i]).addClass('is-invalid');
        }
    }
    return EvaluationErrors(Errors);
}
//Validacion seccion 3
function Validator2(){
    var Errors =  [];
    var elementos = $(".validator2").map(function(){
        return $(this).attr('id');
    }).get();

    for(i = 0;i < elementos.length; ++i){
        var status;
        var value = $('#'+elementos[i]).val();
        if(value != 0){
            $('#'+elementos[i]).removeClass('is-invalid');
            $("#"+elementos[i]).addClass('is-valid');
        }
        else{
            Errors.push(elementos[i]);
            $("#"+elementos[i]).removeClass('is-valid');
            $("#"+elementos[i]).addClass('is-invalid');
        }
    }
    return EvaluationErrors(Errors);
}

// function Validator3(){
//     var Errors =  [];
//     var elementos = $(".validator3").map(function(){
//         return $(this).attr('id');
//     }).get();
//     for(i = 0;i < elementos.length; ++i){
//         var status;
//         var value = $('#'+elementos[i]).val();
//         if(value != 0){
//             $('#'+elementos[i]).removeClass('is-invalid');
//             $("#"+elementos[i]).addClass('is-valid');
//             status =  true;
//         }
//         else{
//             Errors.push(elementos[i]);
//             $("#"+elementos[i]).removeClass('is-valid');
//             $("#"+elementos[i]).addClass('is-invalid');
//         }
//        }
//     return EvaluationErrors(Errors);
// }

//Validacion seccion 5
function Validator5(){
    var Errors =  [];
    var elementos = $(".validator4").map(function(){
        return $(this).attr('id');
    }).get();

    for(i = 0;i < elementos.length; ++i){
        var status;
        var value = $('#'+elementos[i]).val();
        if(value != 0){
            $('#'+elementos[i]).removeClass('is-invalid');
            $("#"+elementos[i]).addClass('is-valid');
        }
        else{
            Errors.push(elementos[i]);
            $("#"+elementos[i]).removeClass('is-valid');
            $("#"+elementos[i]).addClass('is-invalid');
        }
    }
    return EvaluationErrors(Errors);
}

//Validacion seccion 6
function Validator6(){
    var Errors =  [];
    var elementos = $(".validator5").map(function(){
        return $(this).attr('id');
    }).get();

    for(i = 0;i < elementos.length; ++i){
        var status;
        var value = $('#'+elementos[i]).val();
        if(value != 0){
            $('#'+elementos[i]).removeClass('is-invalid');
            $("#"+elementos[i]).addClass('is-valid');
        }
        else{
            Errors.push(elementos[i]);
            $("#"+elementos[i]).removeClass('is-valid');
            $("#"+elementos[i]).addClass('is-invalid');
        }
    }
    return EvaluationErrors(Errors);
}

function savesection(){
    $.ajax({
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
                Swal.fire("Exito!", "Registro Guardado", "success");
                $("#secction-001").fadeToggle();
                $("#secction-002").fadeToggle(800);
            } else {
                console.log("Error");
            }
        },
    });
}

function teams_customer(id){
    var data;
    $.ajax({
        async: false,
        type: "GET",
        url: "equipos/data/"+id,
        data: "data",
        dataType: "json",
        success: function (response) {
            data = response;
        }
    });
    return data;
}

function load_equipos(){
    $('#loading').show();
    var id = $("#select_empresa_report").val();
    data = teams_customer(id);
    show_equipos(data);

}

function show_equipos(data){
    $('#loading').hide();
    var table_clien = $("#table_equipos").DataTable({
        processing: true,
        scroller: false,
        paging: true,
        searching: false,
        pageLength: 15,
        data: data,
        columns: [
            { data: "MarcaGrua" },
            { data: "NSGrua" },
            { data: "MarcaPolipasto" },
            { data: "ModeloPoli" },
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

function evidence_img(id) {
    event.preventDefault();
    $.ajax({
        type: "GET",
        url: "/sections/"+id+"",
        dataType: "json",
        success: function (response) {
            $("#seccion").empty();
            $.each(response, function (k, v) {
                $("#seccion").empty();
                $("#seccion").append(
                    "<option selected='selected'>- Selecciona -</option>"
                );
                $("#seccion").append(
                        "<option value='" +
                            v.id +
                            "'>" +
                            v.name +
                            "</option>"
                    );
                });
        }
    });
    var folio_serviceimg = $("#Folio_servicio").val();
    $('#evidense_service').val(folio_serviceimg);
    $("#img-evidence-modal").modal("show");
}

function subsection(id){
    var data;
    $.ajax({
        async: false,
        type: "GET",
        url: "/subsections/"+id+ "",
        dataType: "json",
        success: function (response) {
            data = response;
        }
    });
    return data;
}

function items(id){
    var data;
    $.ajax({
        async: false,
        type: "GET",
        url: "/items/"+id+ "",
        dataType: "json",
        success: function (response) {
            data = response;
        }
    });
    return data;
}



