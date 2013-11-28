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
            sobrenome: "required",
            email: "required",
            senha: {
                required: true,
                minlength: 6
            },
            confirmasenha: {
                required: true,
                minlength: 6,
                equalTo: "#senha"
            },
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            nome: "Preencha com o seu nome",
            sobrenome: "Preencha com o seu sobrenome",
            email: "Entre com um email válido",
            senha: {
                required: "Entre com uma senha",
                minlength: "Sua senha deve conter pelo menos 6 caracteres"
            },
            confirmasenha: {
                required: "Entre com uma senha",
                minlength: "Sua senha deve conter pelo menos 6 caracteres",
                equalTo: "As senhas devem ser iguais"
            }
        }
    });

    $("#telefone").mask("(99) 9999-9999");
    $("#cep").mask("99999-999");
});
	