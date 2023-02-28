<?php 
$hostname = "localhost";
$bancodedados = "listadehabito";
$usuario = "root";
$senha = "";

$mysql = new mysqli($hostname,$usuario,$senha,$bancodedados);

if ($mysql->connect_errno) {
	echo "falha ao conectar: (".$mysql->connect_errno.")".$mysql->connect_error;
	}		

//atualiza o status  de A -  ativo ,para V-vencido

$id = $_GET['id'];
$sql = "UPDATE habito SET `status` = 'v' WHERE id = " . $id;


//verifica se o comando foi executado com sucesso

if(!($mysql->query($sql)=== TRUE)){
	$mysql->close();	
	die("Erro ao atualizar:" . $mysql->error);
}
//fecha a conexão
$mysql->close();

//redireciona para index
header("Location: index.php");

 ?>