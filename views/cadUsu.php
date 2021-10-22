<form class="container grid3" method="POST" action="?rota=cadastroUsuario">
	<h6 class="text-center" style="font-size:40px">CADASTRO DE USUÁRIO</h6>
	<div class="row">
		<div class="inputbox">
			<label>Nome:

			</label>
			<input name="nome" id="nome" type="text" />
		</div>
		<div class="inputbox">
			<label class="inputbox">E-mail:

			</label>
			<input name="email" id="email" type="text" required="" />
			<div class="invalid-feedback">
				Preencha o campo de email.
			</div>
		</div>
		<div class="inputbox">
			<label>CPF:
			</label>
			<input name="cpf" id="cpf" type="text" maxlength="11" />
		</div>
	</div>
	<br>
	<div class="row">
		<div class="inputbox">
			<label>Senha:</label>
			<input name="senha" id="senha" type="password" />
		</div>
		<div class="inputbox">
			<label>Confirmar:</label>
			<input name="senha2" id="senha2" type="password" />
		</div>
		<div class="inputbox">
			<label>Data de nascimento:</label>
			<input name="idade" id="idade" type="text" maxlength="10" onkeypress="formatData(this, event)" />
		</div>
	</div>
	<br>
	<br>
	<div>
		<h4>ENDEREÇO</h4>
	</div>
	<div>
		<div class="row">
			<div class="inputbox">
				<label>CEP:</label>
				<input name="cep" type="text" id="cep" value="" size="10" maxlength="9" />
			</div>
			<div class="inputbox">
				<label>NÚMERO:</label>
				<input name="numero" type="text" id="numero" />
			</div>
			<div class="inputbox">
				<label>ENDEREÇO:</label>
				<input name="endereco" type="text" id="endereco" />
			</div>
		</div>
		<div class="row">
			<div class="inputbox">
				<label>BAIRRO:</label>
				<input name="bairro" type="text" id="bairro" />
			</div>
			<div class="inputbox">
				<label>CIDADE:</label>
				<input name="cidade" type="text" id="cidade" />
			</div>
			<div class="inputbox">
				<label>ESTADO:</label>
				<input name="uf" type="text" id="uf" size="2" />
			</div>
		</div>
	</div>
	<br>
	<div class="form-row text-center">
		<button type="submit" class="news-btn" style="margin-bottom: 25px;">Salvar</button><br>
	</div>
</form>
<script>
	$("#cpf").blur(function() {
		let cpf = $(this).val();
		console.log(cpf);
		var soma;
		var resto;
		soma = 0;
		if (cpf == "00000000000") {
			alert("CPF INVÁLIDO.");
		}

		for (i = 1; i <= 9; i++) {
			soma = soma + parseInt(cpf.substring(i - 1, i)) * (11 - i);
		}
		resto = (soma * 10) % 11;

		if ((resto == 10) || (resto == 11)) {
			resto = 0;
		}
		if (resto != parseInt(cpf.substring(9, 10))) {
			alert("CPF INVÁLIDO.");
		}

		return true;
	});

	function formatData(campo, e) {
		var varData = (document.all) ? event.keyCode : e.keyCode;
		var data = campo.value;
		if (varData != 8 && varData != 46) {
			if (data.length == 2) {
				campo.value = data += '/';
			} else if (data.length == 5) {
				campo.value = data += '/';
			} else
				campo.value = data;
		}
	}

	$(document).ready(function() {
		$("form").submit(function(event) {
			var nomeRegex = /[0-9]/;

			if (nomeRegex.test($("#nome").val()) == true && $("#nome").val() != '') {
				event.preventDefault();
				alert("Campo NOME deve conter apenas letras.");
				return;
			}

			if ($("#senha").val() != $("#senha2").val()) {
				event.preventDefault();
				alert("Os campos de SENHAS não correspondem, favor entrar com senhas iguais");
				return;
			}

			if ($("#nome").val() == '' || $("#cpf").val() == '' || $("#email").val() == '' || $("#senha").val() == '' || $("#senha2").val() == '' || $("#idade").val() == '') {
				event.preventDefault();
				alert("Todos os campos devem ser preenchidos.");
				return;
			}

		})

		function limparModal() {
			$("#endereco").val("");
			$("#bairro").val("");
			$("#cidade").val("");
			$("#uf").val("");
			$("#numero").val("");

		}

		$("#cep").blur(function() {
			let cep = $(this).val().replace(/\D/g, '');
			if (cep != "") {
				let validacep = /^[0-9]{8}$/;
				if (validacep.test(cep)) {
					$("#endereco").val();
					$("#bairro").val();
					$("#cidade").val();
					$("#uf").val();

					$.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

						if (!("erro" in dados)) {
							$("#endereco").val(dados.logradouro);
							$("#bairro").val(dados.bairro);
							$("#cidade").val(dados.localidade);
							$("#uf").val(dados.uf);
						} else {
							limparModal();
							alert("CEP não encontrado.");
						}
					});
				} else {
					limparModal();
					alert("Entre com um CEP válido.");
				}
			} else {
				limparModal();
			}
		});
	});
</script>