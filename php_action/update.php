<?php 
//sessao

include_once '../includes/session.php';

//conexao
require_once "db_connect.php";

//verifica se o usuario enviou os dados do formulario.
if(isset($_POST['btn-editar'])):


	//pega os dados que foram passados pelo formulario, e guarda dentro dessas variaveis.
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$matricula = mysqli_escape_string($connect, $_POST['matricula']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$telefone = mysqli_escape_string($connect, $_POST['telefone']);
	$id = mysqli_escape_string($connect, $_POST['id']);

	// seleciona a tabela aluno do banco de dados com seus indices, e guarda as variaveis que estao com os dados que foram passados pelo formulario.
	$sql = "UPDATE alunos SET nome = '$nome', matricula = '$matricula', email = '$email', telefone = '$telefone' WHERE id = '$id' ";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com Sucesso";

		header('location: ../crud.php');

	else:

		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('location: ../crud.php');
	endif;

endif;	


 ?>