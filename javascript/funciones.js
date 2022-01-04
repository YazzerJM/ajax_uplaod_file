
function registra_paciente() {    
    

    var parametros = new FormData($('#formulario-envia')[0]);

    $.ajax({
        data: parametros,
        url: "ajax/insertar_ajax.php",
        type: "POST",
        contentType: false,
        processData: false,
        beforeSend: function(){

        },
        success: function(response){
            alert(response);
        }
    });

}