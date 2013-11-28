$().ready(function() {

    $('#estados').change(function() {
        url = "http://vemsemfila.v1:82/api/locais/cidades/" + $('#estados').val();
        $.get( url, function( data ) {
            data.forEach( function( elemento, index){
                $('#cidades').append(new Option(elemento.ds_cidade_nome, elemento.cd_cidade, true, true));
            });
        });
    });

    $('#cidades').change(function() {
        url = "http://vemsemfila.v1:82/api/locais/bairros/" + $('#cidades').val();
        $.get( url, function( data ) {
            data.forEach( function( elemento, index){
                $('#bairros').append(new Option(elemento.ds_bairro_nome, elemento.cd_bairro, true, true));
            });
        });
    });

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
            $.each($("tr.cliente input"), function(k,v){
                $(v).rules( "remove", "required" );
                $(v).attr("disabled", "disabled");
            })
        } else {
            $.each($("tr.cliente input"), function(k,v){
                $(v).rules( "add", "required" );
                $(v).removeAttr("disabled");
            })
        };
    });

});
	