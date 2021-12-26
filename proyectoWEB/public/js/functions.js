



//esto me permitia que ejecute estas cosas
$(document).ready(() => {


    /* esto es para que ande bien el formulario */
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#registroMascota").click((evento) => {
        /* el evento representa al evento del click en si, nosotros vamos a hacer
        nos permita que no se ejecuta el submit */
        evento.preventDefault();


        var nombre = $("#nombre").val();
        var tipoAnimal = $("#tipoAnimal").val();
        var raza = $("#raza").val();
        var sexo = $("#sexo").val();
        var size = $("#tamanio").val();
        var foto = $("#foto").val();
        var edad = $("#edad").val();

        /* con esto simulamos un post */

        $.ajax(
            {
                url: '/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/mascotas',
                type: 'post',
                data: {
                    "nombre" : nombre,
                    "tipoAnimal" : tipoAnimal,
                    "raza" : raza,
                    "sexo" : sexo,
                    "tamanio" : size,
                    "foto" : foto,
                    "edad" : edad
                },
                success: function(respuestaServidor){
                    console.log(respuestaServidor);
                    alert("Se ha creado la mascota correctamente");
                },
                error: function(respuestaServidor){
                    console.log(respuestaServidor);
                    alert("No se ha creado la mascota correctamente, uno de los datos no se ingreso correctamente");
                }
            }
        );
        }

    );


    $("#registroAdopcion").click((evento) => {
        /* el evento representa al evento del click en si, nosotros vamos a hacer
        nos permita que no se ejecuta el submit */
        evento.preventDefault();


        var nombre = $("#nombre").val();
        var tipoAnimal = $("#tipoAnimal").val();
        var raza = $("#raza").val();
        var sexo = $("#sexo").val();
        var size = $("#tamanio").val();
        var foto = $("#foto").val();
        var estado = $("#estado").val();
        var edad = $("#edad").val();


        /* con esto simulamos un post */

        $.ajax(
            {
                url: '/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/adopciones',
                type: 'post',
                data: {
                    "nombre" : nombre,
                    "tipoAnimal" : tipoAnimal,
                    "raza" : raza,
                    "sexo" : sexo,
                    "tamanio" : size,
                    "foto" : foto,
                    "estado" : estado,
                    "edad" : edad
                },
                success: function(respuestaServidor){
                    console.log(respuestaServidor);
                    alert("Se ha creado la publicacion, espera que un administrador la apruebe");
                },
                error: function(respuestaServidor){
                    console.log(respuestaServidor);
                    alert("No se ha creado la publicacion, uno de los datos no se ingreso correctamente");
                }
            }
        );
    });

});

