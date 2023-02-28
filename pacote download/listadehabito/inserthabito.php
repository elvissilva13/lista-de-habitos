<?php 

	$hostname = "localhost";
	$bancodedados = "listadehabito";
	$usuario = "root";
	$senha = "";

	$mysqli = new mysqli($hostname,$usuario,$senha,$bancodedados);

		if ($mysqli->connect_errno) {
			echo "falha ao conectar: (".$mysqli->connect_errno.")".$mysqli->connect_error;

		}


//Busca nome que foi recebido via get através do formulário de cadastro

	$nome = $_GET['nome'];

	//insere o hábito na tabela hábito de banco de dados

	$sql = "INSERT INTO `habito` (`id`, `nome`, `status`) VALUES (NULL, '".$nome."', 'A')";


		//verifica se ocorreu tudo bem, caso houve um erro, fecha a conexão e aborta o programa

		if(!($mysqli->query($sql)=== TRUE)){
			$mysqli->close();
			die("Erro: " .$sql ."<br/>" .$mysqli->error);
		}

		//fecha a conexão com o banco de dados 
		$mysqli->close();

		//envia para a página index ,onde aparece a lista de hábitos ,ja com o novo hábito cadastrado

		header("location:  index.php");


 ?>