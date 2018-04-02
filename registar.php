<!-- Inclusão da classe dos users -->
<?php include 'classes/user_class.php'; ?>

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




    <!-- Área de criação de Users -->
    <div id="criar_data">

			<a href="area_gestao.php"><button class="btn btn-info"><i class="fas fa-arrow-circle-left"></i>Regressar à área de gestão</button></a>

			<?php

					if(!file_exists("data/users.csv")) {

							$file = fopen("data/users.csv", "w");
							fclose($file);

							}


					if($_SERVER["REQUEST_METHOD"] == "POST") {

							$file=fopen("data/users.csv", "r");

							while (!feof($file)) {

								$data=fgetcsv($file, 0, ";");

					if($data[0]==""){

					break;

					}

								$user = new User($data[1], $data[2], $data[3], $data[4], $data[5], $data[6]);


							}

							fclose($file);

							$user = new User($_POST['name'], $_POST['middle_name'], $_POST['surname'],
								 $_POST['username'], $_POST['password'], $_POST['cargo']);

							$file = fopen("data/users.csv", "a");

							fputcsv($file, (array)$user, ";");

							fclose($file);

						 echo "<strong><p class='text-center alert alert-primary'>Utilizador criado com sucesso!</p></strong>";

					}

			?>

		  <!-- Título do formulário -->
      <h1 class="text-center">Registo de novos utilizadores</h1>

      <!-- Formulário de criação de Users -->

    <div class="form-container form-registo">
      <form action="" method="post">

        <!-- Nome User -->
        <div class="form-inline">
          <label for="nome">Nome próprio</label>
          <input type="text" name="name" class="form-control col-sm-2">

				<!-- Nome do meio -->
        <label for="middle_name">Nome do meio</label>
        <input type="text" name="middle_name" class="form-control col-sm-2">

	  		<!-- Apelido -->
        <label for="apelido">Apelido</label>
        <input type="text" name="surname" class="form-control col-sm-2">
			</div>

		<div class="form-inline">
		  <!-- Username -->
          <label for="utilizador">Nome de utilizador</label>
          <input type="text" name="username" class="form-control col-sm-3">

		  <!-- Password -->
          <label for="password">Palavra-passe</label>
          <input type="password" name="password" class="form-control col-sm-3">
        </div>

			<div class="form-inline">
		  <!-- Retype da password -->
        <label for="password_retype">Rescrever a palavra-passe</label>
        <input type="password" name="password_retype" class="form-control col-sm-3">
			</div>

			<!-- Departamento ao qual o novo utilizador irá pertencer -->
			<div class="form-inline">
				<label for="departamento">Departamento ao qual o utilizador irá pertencer</label>
				<select name="departamento" class="custom-select col-sm-3">
					<option selected value="diretor">Diretor Departamento</option>
	        <option value="secretaria">Secretaria</option>
	        <option value="administracao">Administração</option>
				</select>
			</div>

		<!-- Cargo do User-->
		<div class="form-inline">
    <label class="">Cargo que o utilizador irá ter</label>
      <select name="cargo" class="custom-select col-sm-4">
        <option selected value="diretor">Diretor de Departamento</option>
        <option value="secretaria">Secretaria</option>
        <option value="administracao">Administração</option>
      </select>
		</div>

			<!-- Botão de submissão -->
	    <div class="form-group">
	      <button type="submit" name="formulario_funcionarios" class="btn">Criar novo utilizador</button>
	    </div>

		</form>

	</div>
</div>