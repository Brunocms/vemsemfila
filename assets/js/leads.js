$().ready(function() {

    // validate signup form on keyup and submit
    $("#cadastroForm").validate({
        rules: {
            nome: "required",
            email1: {
                required: true,
                email: true
            },
            email2: {
                email: true
            },
            tel1: "required",
            pais: "required",
            cidade: "required",
            estado: "required",
            bairro: "required"
        },
        messages: {
            nome: "Preencha com o nome do restaurante",
            sobrenome: "Preencha com o seu sobrenome",
            email1: "Entre com um email válido",
            tel1: "Entre com um número de telefone"
        }
    });


    $("input[name=restaurante_opcao]").change(function(){
        if ($(this).val() == "1") {
            $("tr.cliente input").rules( "remove", "required" );
        } else {
            $("tr.cliente input").rules( "add", "required" );
        };
    });

});
	