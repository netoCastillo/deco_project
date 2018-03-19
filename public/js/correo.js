
//$(document).ready(function () {

//    console.log("Inicializando la App")

//    $.alert({
//        icon: 'glyphicon glyphicon-info-sign',
//        closeIcon: false,
//        keyboardEnabled: false,
//        title: 'Información',
//        content: "Se guardó la actividad correctamente",
//        confirmButton: 'Aceptar',
//    });
//}); 

function EnviarCorreo()
{ 
    try {
        //$.alert({
        //    icon: 'glyphicon glyphicon-info-sign',
        //    closeIcon: false,
        //    keyboardEnabled: false,
        //    title: 'Enviando',
        //    content: "Enviando el correo ",
        //    confirmButton: 'Aceptar',
        //});

        $(".cargando").show();

        var _datosFormulario = [];
        _datosFormulario.push({
            nombre: $("#nombre").val(),
            telefono: $("#telefono").val(),
            mensaje: $("#mensaje").val(),
            correo: $("#correo").val()
        });


        $.ajax({
            type: 'GET',
            url: $("#url-envio-correo").val(), //EnviarCorreo
            datatype: "json",
            traditional: true,
            data: {
                datosFormulario: JSON.stringify(_datosFormulario)
            },
            success: function (result) {

                if (result == "exito") {
                    $.confirm({
                        title: 'Tu correo ha sido enviado exitosamente!',
                        content: 'Nos pondremos en contacto contigo a la brevedad posible',
                        type: 'green',
                        typeAnimated: true,
                        buttons: {
                            tryAgain: {
                                text: 'Ok',
                                btnClass: 'btn-green',
                                action: function () {
                                }
                            }

                        }
                    });

                   

                }
                else {
                    $.confirm({
                        title: 'Ups! Ocurrio un problema al intentar enviar el correo',
                        content: 'Puedes intentar nuevamente enviar el correo o comunicate directamente con nosotros mediante el numero  +52 1 55 3082 1399​⁠​',
                        type: 'red',
                        typeAnimated: true,
                        buttons: {
                            tryAgain: {
                                text: 'Ok',
                                btnClass: 'btn-red',
                                action: function () {
                                }
                            }

                        }
                    });

                }

                $(".cargando").hide();

            }
        });

    } catch (e) {
        $.confirm({
            title: 'Ups! Ocurrio un problema al intentar enviar el correo',
            content: 'Puedes intentar enviar el correo o comunicate directamente con nosotros al numero  +52 1 55 3082 1399​⁠​',
            type: 'red',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'Ok',
                    btnClass: 'btn-red',
                    action: function () {
                    }
                }

            }
        });
        $(".cargando").hide();
    }

   

}