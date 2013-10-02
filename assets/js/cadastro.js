$().ready(function() {

    // validate signup form on keyup and submit
    $("#cadastroForm").validate({
        rules: {
            nome: "required",
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
});
	