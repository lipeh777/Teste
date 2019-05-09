<?php 

include_once 'includes/header.php';
include_once 'includes/mensagem.php';

 ?>


<div class="row">
    	<div class="col s12 m6 push-m3">
    		
			<h3 class="light">Cadastro</h3>
			
		  	<button class="btn" id="perfil-discente">Discente</button>
		  	<button class="btn" id="perfil-docente">Docente</button>
		  	<button class="btn" id="perfil-visitante">Visitante</button>
		  	
			<form action="php_action/create.php" method="POST" id="formulario">
				<div id="formuall">
					<!-- <div class="input-field col s12">
					    <select>
					      <option value="" disabled selected>Você é?</option>
					      <option value="discente" id="perfil-discente">Discente</option>
					      <option value="docente" id="perfil-docente">Docente</option>
					      <option value="visitante" id="perfil-visitante">Visitante</option>
					    </select>
					    <label>Insira seus Dados</label>
				  	</div> -->


					<div class="input-field col s12">
						<i class="material-icons prefix">assignment_ind</i>
						<input type="text" name="nome" id="nome">
						<label for="nome">Nome</label>
					</div>
					
					<div class="input-field col s12">
						<i class="material-icons prefix">mail_outline</i>
						<input type="text" name="email" id="email">
						<label for="email">Email</label>
					</div>
					
					<div class="input-field col s12">
						<i class="material-icons prefix">phone</i>
						<input type="text" name="telefone" id="telefone">
						<label for="telefone">Telefone</label>
					</div>

					<div class="input-field col s12">
						<i class="material-icons prefix">error_outline</i>
						<input type="password" name="senha" id="senha">
						<label for="senha">Senha</label>
					</div>
				</div>

				<button type="submit" name="enviar" class="btn">Cadastrar</button>
				<!-- <a href="crud.php" class="btn green">Lista de Alunos</a> -->
			<!-- 	<a href="index.php" class="btn blue">Página Inicial</a> -->
			</form>
				

    	</div>
    </div>

 <?php 
include_once 'includes/footer.php';
  ?>