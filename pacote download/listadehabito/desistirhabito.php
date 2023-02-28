<?php 
$hostname = "localhost";
$bancodedados = "listadehabito";
$usuario = "root";
$senha = "";

	$mysqli = new mysqli($hostname,$usuario,$senha,$bancodedados);

	if ($mysqli->connect_errno) {
	echo "falha ao conectar: (".$mysqli->connect_errno.")".$mysqli->connect_error;
    }
//verificar se conectou com sucesso

if ($mysqli->connect_error) {
	die("falha na conexão: ". $mysqli->connect_error);
}

//obtém o id do registro que foi recebido via get
$id = $_GET['id'];

$sql = "DELETE FROM habito WHERE id = ".$id;

//executa o comando delete da variável $s=
if(!($mysqli->query($sql) === TRUE)){
 $mysqli->close();

	die("Erro ao excluir: " .$mysqli->error);
}
//fecha a conexão
$mysqli->close();

//redireciona para a página inicial

header("location: index.php");




 ?>