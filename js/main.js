$(document).ready(function(){

	// Validação de Login
	$("#form_login").validate({
		rules: {
			user_email: {
				required: true,
				email: true
			},
			user_password: {
				required: true,
				minlength: 5
			}

		},
		messages: {
			user_email: {
				required: "Campo email obrigatorio",
				email: "Digite um endereço de email valido"
			},
			user_password: {
				required: "Campo senha obrigatorio",
				minlength: "Minimo 5 caracteres"
			}
		}
	})

	// Validação de Formulario de Cadastro
	$('#form_cad').validate({
		rules: {
			nome_cad: {
				required: true
			},
			email_cad: {
				required: true,
				email: true
			},
			senha_cad: {
				required: true,
				minlength: 5,
				maxlength: 12
			},
			repetirsenha_cad: {
				required: true,
				minlength: 5,
				maxlength: 12,
				equalTo: "#senha_cad"
			}
		},
		messages: {
			nome_cad: {
				required: "Campo nome obrigatorio"
			},
			email_cad: {
				required: "Campo email obrigatorio",
				email: "Informe um endereço de email valido"
			},
			senha_cad: {
				required: "Campo senha obrigatorio",
				minlength: "Minimo de 5 caracteres",
				maxlength: "Maximo de 12 caracteres"
			},
			repetirsenha_cad: {
				required: "Confirmação de senha obrigatorio",
				minlength: "Minimo de 5 caracteres",
				maxlength: "Maximo de 12 caracteres",
				equalTo: "Senhas diferentes"
			}
		}
	})
});