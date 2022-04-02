$(document).ready(function () {
    var checkbox = $('.seccion3'); 

   

    var current = 1,current_step,next_step,steps;
    steps = $("fieldset").length;
    $(".next").click(function(){
      current_step = $(this).parent()
      next_step = $(this).parent().next()
      next_step.show();
      current_step.hide();
    });
    $(".previous").click(function(){
      current_step = $(this).parent();
      next_step = $(this).parent().prev()
      next_step.show();
      current_step.hide();
    });
    
    /**var current = 1,current_step,next_step,steps;
    steps = $(".fieldset").length;
    $(".next").click(function(){
      //alert('entre en el evento')
      current_step = $(this).parent();
      next_step = $(this).parent().next();
      next_step.show();
      current_step.hide();
      //setProgressBar(++current);
    });
    $(".previous").click(function(){
      current_step = $(this).parent();
      next_step = $(this).parent().prev();
      next_step.show();
      current_step.hide();
      //setProgressBar(--current);
    }); **/
    assig_empresa();  

    $('#btn-data-img').click(function(){
        event.preventDefault(); 
        Swal.fire({
            title: 'Deseas agrgar mas imagenes?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'si',
            denyButtonText: `No`,
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
            } else if (result.isDenied) {
                Swal.fire('Saved!', '', 'success')
                pdf(); 
            }
          })
    });


   
    /**setProgressBar(current);
    // Change progress bar action
    function setProgressBar(curStep){
      var percent = parseFloat(100 / steps) * curStep;
      percent = percent.toFixed();
      $(".progress-bar")
        .css("width",percent+"%")
        .html(percent+"%");   
    }**/
    form_hiden();
    
    //select_clientes();
    //load_data();
    //select_sucursal()
    $('#loading').hide();
    
    //$('#table_clientes').DataTable()
    
    $('#btn-modal').click(function () {
        event.preventDefault();
        $('#exampleModal').modal('show');
    }); 

    $('#btn-modal-clientes').click(function(){
        event.preventDefault();
        $('#modal-clientes').modal('show');
    });

    $('#btn-send').click(function () {
        event.preventDefault();
        var route = $('#new-equipo').data('uri') 
        $.ajax({
            url:route,
            type:'POST',
        	headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        	dataType: 'json',
        	data:$('#new-equipo').serialize(),
            success:function(data){
               console.log(data)
                if(data.status === 1){
                success();
               } else{
                   console.log('Error')
               }
            }
        })
    }) 

    /**$('#pruebas').click(function(event){
        event.preventDefault(); 
        $.ajax({
            url:'NuevoRegistro/pruebas',
            type:'POST',
            headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            dataType:'json',
            data:$('#prueba-radio').serialize(),
            success:function(data){
                console.log(data);
            }

        });
    });**/

    $('#view-form').click(function(event){
        event.preventDefault(); 
        //$('#secction-001').fadeToggle(800);
        let timerInterval
            Swal.fire({
            title: 'Validando Folio',
            html: 'Espere Porfavor <b></b>.',
            timer: 1000,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft()
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
            }).then((result) => {
            if (result.dismiss === Swal.DismissReason.timer) {
                $('#secction-001').fadeToggle(800);
            }
})
        
        
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
    
    Dropzone.options.myGreatDropzone = { // camelized version of the `id`
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 4, // MB
        maxFiles:4,
        accept: function(file, done) {
          if (file.name == "justinbieber.jpg") {
            done("Naha, you don't.");
          }
          else { done(); }
        }
      };

})// fin del document ready  

function check(checkbox){
    var subseccion = checkbox.filter(':checked').map(function(){
        return $(this).attr('name');
     }).get();
     console.log(subseccion)
}



function form_hiden(){
    
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

function Uppercase(exp){
    exp.value = exp.value.toUpperCase();
}

function pdf(){
    $('#ejemplo_reporte').click(function(){
        event.preventDefault()
        var route = 'Reporte/prueba';
        return window.open(route ,'Prueba');
        //$('#staticBackdrop').modal('show');
    })
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

function show_clientes(response){
    var table_clien = $('#table_clientes').DataTable({
        "processing": true,
		"scroller": false,
		"pageLength": 15,
		"data": response,
        "columns":[
            {data:'Nom_empresa'},
            {data:'id_sucursal'},
            {data:'Marca'},
            {data:'Modelo'},
            {data: null,
                orderable: false,
                render:function(data, type, row){
                    return "<button class='Editar btn btn-outline-success btn-sm btn-rounded ml-1' id='editar'><i class='fas fa-edit'></i></button>"+
                           "<button class='Eliminar btn btn-outline-danger btn-sm btn-rounded ml-1'><i class='fas fa-trash-alt'></i></button>";
                }
            }
        ]
    })// fin de la tabla clientes
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

function assig_empresa(){
    $('#sucursal_empresa').change(function(){
        var val =  $('#sucursal_empresa').val();
        //console.log(val);
        $.ajax({
            url:'teams/dataClientes/'+val+'',
            type:'GET',
            dataType:'json',
            success:function(data){
            $('#select_empresa').empty();
            $('#select_empresa').append("<option selected='selected'>- Selecciona -</option>");
            $.each(data,function(k,v){
                $('#select_empresa').append("<option value='"+v.id+"'>"+v.Nom_empresa+"</option>");
            }); 
            
            $('#select_empresa').change(function(){
                var val1 =  $('#select_empresa').val(); 
                $('#id_cliente').val(val1);
                var newArr = data.filter(function(el){
                    return (el.id == val1);
                });  

                $.each(newArr,function(k,v){
                    $('#Direccion').val(v.Direccion);
                    $('#Contacto').val(v.Contacto);
                })

            });
            }
        });// fin de la funcion ajax
    });
}  

function Empresas_Report(){
    $('#select_sucursal_Report').change(function(){
        var val = $('#select_sucursal_Report').val();
        $('#select_empresa_report').empty();
        $('#select_empresa_report').append("<option selected='selected'>- Selecciona -</option>");
        $.each(Empresas(val),function(k,v){
            $('#select_empresa_report').append("<option value='"+v.id+"'>"+v.Nom_empresa+"</option>")
        });

    });
} 
function Equipos_Report(){
    $('#select_empresa_report').change(function(){
        var val = $('#select_empresa_report').val();
        $('#select-equipo-report').empty();
        $('#select-equipo-report').append("<option selected='selected'>- Selecciona -</option>");
        $.each(Equipos(val),function(k,v){
            $('#select-equipo-report').append("<option value='"+v.id+"'>"+v.N_serie+"</option>")
        });
    }); 
   
    $('#select-equipo-report').change(function(){
        var val1 = $('#select-equipo-report').val();
        var response = Equipos(val1); 
        console.log(response);
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

function Equipos(val){
    var response;
    $.ajax({
        async:false,
        url:'NuevoRegistro/business/'+val+'',
        type:'GET',
        dataType:'json',
        success:function(data){
            response = (data)
        }
    });
    return response
}

function Empresas(val){
    var response;
    $.ajax({
        async:false,
        url:'teams/dataClientes/'+val+'',
        type:'GET',
        dataType:'json',
        success:function(data){
            response = (data)
        }
    });
    return response
}

function send_customers(){
    var route = $('#new-customers').data('uri')  
    $.ajax({
        url:route,
        type:'POST',
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType:'json',
        data:$('#new-customers').serialize(),
        success:function(data){
            //console.log(data);
            if(data.status === 1){
                success();
            }
            else{
                console.log('Error');
            }
            //show_clientes(data);
        }
    })
}


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

function check(check){
    var check = $('.form-check-input');
    var subseccion = check.filter(':checked').map(function(){
        return $(this).value();
    }).get();
    console.log(subseccion);
}

function reset_form(){
    $('#new-empresa')[0].reset();
    $('#select_sucursal' ).val('').trigger('change');
} 

/** funciones de mensajes del sistemas*/

function success(){
    Swal.fire(
        'Exito!',
        'Registro Guardado',
        'success'
    ) 
}

/** Funciones de los botones del formulario por secciones**/

function btn_secction001(){
    success()
    $('#secction-002').fadeToggle(800);
}

function btn_secction002(){
    success()
    $('#secction-002').fadeToggle();
    $('#secction-003').fadeToggle(800);
}

function btn_secction003(){
    success();
    $('#secction-003').fadeToggle();
    $('#secction-004').fadeToggle(800);
   
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

function btn_secction004(){
    success()
    $('#secction-004').fadeToggle();
    $('#secction-005').fadeToggle(800);
}

function btn_secction005(){
    success()
    $('#secction-005').fadeToggle();
    $('#secction-006').fadeToggle(800);
}

function btn_secction006(){
    success()
    $('#secction-006').fadeToggle();
    $('#secction-007').fadeToggle(800);
}

function btn_secction007(){
    success()
    $('#secction-007').fadeToggle();
    $('#secction-008').fadeToggle(800);
}

function btn_secction008(){
    success()
    $('#secction-008').fadeToggle();
    $('#secction-009').fadeToggle(800);
}

function btn_secction009(){
    success()
    $('#secction-009').fadeToggle();
    $('#secction-010').fadeToggle(800);
} 

function btn_secction010(){
    success()
    $('#secction-010').fadeToggle();
    $('#secction-011').fadeToggle(800);
}

function btn_secction011(){
    success()
    $('#secction-010').fadeToggle();
    $('#secction-anexos').fadeToggle(800);
}


