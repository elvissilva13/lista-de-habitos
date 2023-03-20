<!DOCTYPE html>
<html lang="pt_br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Lista de Hábitos</title>
</head>
<body>
	<div class="center">
		<h1>Novo Hábito</h1>
		<form id="formulario" action="inserthabito.php">
			<p><label>Nome: <input type="text" id="nome" name="nome" autofocus></label></p>
			<p><input type="submit" value="Criar"></p>


		</form>


	</div>
	<script type="text/javascript">
		//declarar uma função para validar o formulário
		var validaForm = function() {
			var nomeHabito = document.getElementById("nome").value;
			if ("" == nomeHabito) {
				alert("É necessario informar o nome Hábito");

				return false;
			}
		}

			//Aqui declaramos que esta função ocorre sempre no submit do formulário
			document.getElementById("formulario").onsubmit = validaForm;


	</script>

</body>
</html>