<?php 
//sessao

include_once '../includes/session.php';

//conexao
require_once "db_connect.php";

//verifica se o usuario enviou os dados do formulario.
if(isset($_POST['btn-deletar'])):

	//pega o id passado pelo formulario no index, e coloca dentro da variavel $id
	$id = mysqli_escape_string($connect, $_POST['id']);

	// seleciona a tabela aluno do banco de dados com seus indices, e guarda as variaveis que estao com os dados que foram passados pelo formulario.
	$sql = "DELETE FROM alunos WHERE id = '$id' ";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Deletado com Sucesso";

		header('location: ../crud.php');

	else:

		$_SESSION['mensagem'] = "Erro ao Deletar";
		header('location: ../crud.php');
	endif;

endif;	


 ?>