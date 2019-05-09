<?php 

include_once '../includes/session.php';  

require_once "db_connect.php";
	
	if (empty($_POST['email'] || $_POST['senha'])) {
		header('location: ../login.php');
		$_SESSION['mensagem'] = "Insira os dados.";
		exit();
	}

$email = mysqli_real_escape_string($connect, $_POST['email']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']);

$query = "SELECT * FROM alunos WHERE email = '$email' AND senha = '$senha'";

$result = mysqli_query($connect, $query);

$row = mysqli_num_rows($result);



if ($row > 0) {
	$_SESSION['usuario'] = $email;
	header('location: ../perfil-aluno.php');
	$_SESSION['mensagem'] = 'Logado';
}
else{
	$_SESSION['mensagem'] = "Dados errados, tente novamente.";
	header('location: ../login.php');
}



 
 ?>