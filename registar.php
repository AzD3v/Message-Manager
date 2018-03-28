<?php include'User.php';?>

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
	<title>Registo | Utilizador</title>
</head>
<body>


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

            $user = (array)$user;

            $file = fopen("data/users.csv", "a");

            fputcsv($file, $user, ";");

            fclose($file);

           echo "<strong><p class='text-center alert alert-primary'>User criado com sucesso!</p></strong>";

        }

    ?>

    <!-- Área de criação de Users -->
    <div id="criar_data">

      <!-- Título do formulário -->
      <h3 class="text-center titulo_form">Adicionar Users</h3>

      <!-- Formulário de criação de Users -->

    <div class="form-container">
      <form action="" method="post">

        <!-- Nome User -->
        <div class="form-inline">
          <label for="nome">Nome do funcionário:</label>
          <input type="text" name="name" class="form-control col-sm-2">
		</div>
		
		<div class="form-inline">
          <!-- Nome do meio -->
          <label for="meio">Nome do meio</label>
          <input type="text" name="middle_name" class="form-control col-sm-1">
		</div>
		
		<div class="form-inline">
		  <!-- Apelido -->
          <label for="apelido">Apelido</label>
          <input type="text" name="surname" class="form-control col-sm-1">
        </div>
		
		<div class="form-inline">
		  <!-- Username -->
          <label for="utilizador">Nome utilizador</label>
          <input type="text" name="username" class="form-control col-sm-1">
        </div>
		
		<div class="form-inline">
		  <!-- Password -->
          <label for="palarapasse">Palavra-passe</label>
          <input type="password" name="password" class="form-control col-sm-1">
        </div>
		
		<div class="form-inline">
		  <!-- Retype da password -->	
          <label for="rescreve">Rescreve a palarapasse</label>
          <input type="password" name="retype" class="form-control col-sm-1">
        </div>
		
		<!-- Cargo do User-->
		
    <label class="">Cargo que o user vai ter</label>
      <select name ="cargo" class="custom-select col-sm-2">
        <option selected value="diretor">Diretor Departamento</option>
        <option value="secretaria">Secretaria</option>
        <option value="administracao">Administração</option>
      </select>
		

		

        <div class="form-group">
          <button type="submit" name="formulario_funcionarios" class="btn btn-success botao_editar_funcionario">Submeter</button>
        </div>

      </form>

      </div>

    </div>
