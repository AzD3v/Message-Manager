<!-- Inclusão da classe dos users -->
<?php include 'classes/user_class.php'; ?>

<!-- Starting the session -->
<?php session_start(); ?>

<?php

		# OPERAÇÕES COM O FICHEIRO CSV
		$filename = 'data/users.csv';

			$file = fopen($filename, 'r'); //ler o ficheiro .csv
			while (!feof($file))

			{

				$data = fgetcsv($file, 0, ";"); //ir buscar dados ao ficheiro .csv

				if($data == "") {

						break;

			}

			# ACESSO AOS DADOS DO UTILIZADOR PARA PROCEDER À EDIÇÃO
			if($data[0] == $_SESSION['user']) {

				$user = new User($data[2], $data[3], $data[4], $data[5], $data[6], $data[7]);

				# Saber o nome próprio do utilizador
				$nome = $user->getName();

				# Saber o nome do meio do utilizador
				$middle_name = $user->getMiddle_name();

				# Saber o apelido do utilizador
				$surname = $user->getSurname();

				# Saber a password atual do utilizador
				$password_atual = $user->getPassword();
				
				

			}


		}

		# OBTER DADOS DO FORMULÁRIO DE EDIÇÃO
		if(isset($_POST['submeter_edicao_conta'])) {

				$name = trim($_POST['name']);
				$middle_name = trim($_POST['middle_name']);
				$surname = trim($_POST['surname']);
				$old_password = trim($_POST['old_password']);
				$new_password = trim($_POST['new_password']);
				$password_retype = trim($_POST['password_retype']);

		}

?>

<!DOCTYPE html>
<html lang="pt">
<head>

	<!-- MetaTags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Incluir folha de estilos -->
	<link type="text/css" rel="stylesheet" href="css/styles.css">

	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- Link da google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<!-- Font Awesome icons -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

	<!-- Título da página -->
	<title>BusiChat | Registo de novos utilizadores</title>
</head>
<body>

    <!-- Área de edição de Users -->
    <div id="editar_data">

			<?php
			
			if($_SERVER["REQUEST_METHOD"] == "POST") {
				
			# Verificar se existem campos vazios no formulário
					if(empty($name) || empty($middle_name) || empty($surname) || empty($old_password) || empty($new_password) || empty($password_retype)) {

						echo "<p class='alert alert-warning text-center'>Não podem existir campos vazios</p>";

			}
			
			# Verificar se a palavra-passe introduzida é realmente a antiga palavra-passe
					if($old_password !== $password_atual) {

							echo "<p class='alert alert-warning text-center'>Necessita introduzir a sua antiga palavra-passe</p>";

					}

			# Verificar se a nova palavra-passe e a palavra-passe do retype são iguais
					if($new_password !== $password_retype) {

						echo "<p class='alert alert-warning text-center'>A nova palavra-passe deverá ser igual à reescrita</p>";

					}

				{

					$filename = 'data/users.csv';

					$file = fopen($filename, 'r'); //ler o ficheiro .csv
					while (!feof($file))

				{

					$data = fgetcsv($file, 0, ";"); //ir buscar dados ao ficheiro .csv

					if($data == "") {

					break;

					}				
					
					$file = fopen("data/users.csv", "w");


						$new_name = $user->setName($name);
						$new_middle_name = $user->setMiddle_name($middle_name);
						$new_surname = $user->setSurname($surname);
						$new_pass = $user->setPassword($new_password);

								
					
							$user = new User($new_name,$new_middle_name,$new_surname, $data[5], $new_pass, $data[7]);

							$user = (array)$user;

							fputcsv($file, $user, ";");

							
						

							fclose($file);

					 
					
				   }
				  
				}
				
			}
				
					# Verificar se a

			?>

			<!-- Botão de regresso -->
			<a href="area_gestao.php"><button class="btn btn-info"><i class="fas fa-arrow-circle-left"></i>Regressar à área de gestão</button></a>

			<!-- Título do formulário -->
      <h1 class="text-center">Edição de dados da conta</h1>

      <!-- Formulário de criação de Users -->

    <div class="form-container form-edicao">

			<!-- Formulário de edição de conta -->
			<form action="" method="post">

        <!-- Nome User -->
        <div class="form-inline">
          <label for="nome">Nome próprio</label>
          <input type="text" name="name" value="<?php echo $nome; ?>" class="form-control col-sm-2">
	<!-- Nome do meio -->
        <label for="middle_name">Nome do meio</label>
        <input type="text" name="middle_name" value="<?php echo $middle_name; ?>" class="form-control col-sm-2">

	  		<!-- Apelido -->
        <label for="apelido">Apelido</label>
        <input type="text" name="surname" value="<?php echo $surname; ?>" class="form-control col-sm-2">
			</div>

		<div class="form-inline">

					<!-- Old password -->
          <label for="password_old">Antiga palavra-passe</label>
          <input type="password" name="old_password" class="form-control col-sm-3">

					<!-- Nova password -->
	        <label for="password_new">Nova palavra-passe</label>
	        <input type="password" name="new_password" class="form-control col-sm-3">
			</div>

			<div class="form-inline">
				<!-- Retype da password -->
				<label for="password_retype">Reescreva a nova password</label>
				<input type="password" name="password_retype" class="form-control col-sm-3">
			</div>

			<!-- Departamento ao qual o novo utilizador irá pertencer -->
			<div class="form-inline">
				<label for="departamento">Mudança de departamento</label>
				<select name="departamento" class="custom-select col-sm-3">
					<option selected value="diretor">A</option>
	        <option value="secretaria">B</option>
	        <option value="administracao">C</option>
				</select>
			</div>

			<!-- Botão de submissão -->
	    <div class="form-group">
	      <button type="submit" name="submeter_edicao_conta" class="btn">Editar dados da conta</button>
	    </div>

		</form>

	</div>
</div>