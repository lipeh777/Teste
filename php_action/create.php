<?php 
//sessao
include_once '../includes/session.php';
include_once 'init.php';
//conexao
require_once "db_connect.php";


//verifica se o usuario enviou os dados do formulario.
if (isset($_POST['matricula'])) {
	
	$nome = post_protect('nome');
	$matricula = post_protect('matricula');
	$email = post_protect('email');
	$telefone = post_protect('telefone');
	$senha = post_protect('senha');

	addDiscente($nome, $email, $senha, $telefone, $matricula);

}

if (isset($_POST['siape'])) {
	$nome = post_protect('nome');
	$siape = post_protect('siape');
	$email = post_protect('email');
	$telefone = post_protect('telefone');
	$senha = post_protect('senha');

	addDocente($nome, $email, $senha, $telefone, $siape);
}

if (isset($_POST['cpf'])) {
	$nome = post_protect('nome');
	$cpf = post_protect('cpf');
	$email = post_protect('email');
	$telefone = post_protect('telefone');
	$senha = post_protect('senha');

	addVisitante($nome, $email, $senha, $telefone, $cpf);
}

if (!isset($_POST['matricula']) || !isset($_POST['siape']) || !isset($_POST['cpf']) ) {
	header('location: ../index.php');
}
	


 ?>