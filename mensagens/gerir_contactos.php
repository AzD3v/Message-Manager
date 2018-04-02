<!-- Iniciar a sessão -->
<?php session_start(); ?>

<!-- Incluir o ficheiro de autoload do PHPMailer -->
<?php require "../vendor/autoload.php"; ?>

<!-- Incluir a classe que contém a configuração do PHPMailer -->
<?php require '../classes/config.php'; ?>

<!-- Incluir a classe Users-->
<?php include "../classes/user_class.php"; ?>

<!DOCTYPE html>
<html lang="pt">
<head>

	<!-- MetaTags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Incluir folha de estilos -->
	<link type="text/css" rel="stylesheet" href="../css/styles.css">

	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- Link da google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<!-- Font Awesome icons -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

	<!-- Título da página -->
	<title>BusiChat | Gerir contactos</title>
</head>
<body>


	<div id="gerir_contactos">


		<!-- Botão de regresso à Área de Gestão -->
		<a href="../area_gestao.php"><button class="btn btn-info"><i class="fas fa-arrow-circle-left"></i>Regressar à área de gestão</button></a>

			<!-- Título da página -->
			<h1 class="text-center">Gestão de contactos</h1>

			<!-- Formulário de adicionar contactos -->
			<div class="form-container listagem_contactos">

				<!-- Vizualize aqui os seus contactos -->
				<div class="listagem">
					<h3>A sua lista de contactos atual:</h3>
					<ul>

						<?php

									# Adicionar contactos à listagem
									if(isset($_POST['add_contacto'])) {

											$novo_contacto = $_POST['contactos'];

											if(!file_exists("../data/contactos.csv")) {

													$file = fopen("../data/contactos.csv", "w");
													fclose($file);

													}


											if($_SERVER["REQUEST_METHOD"] == "POST") {

													$file = fopen("../data/contactos.csv", "r");

													while (!feof($file)) {

														$data = fgetcsv($file, 0, ";");

														if($data[0] == ""){

														break;

									}

								}

							}

						}


						?>

					</ul>
				</div>

				<form action="" method="post">

	        	<!-- Contacto que irá ser adicionado -->
	        	<div class="form-group">
	          	<label for="contactos">Adicionar contacto à sua lista:</label>
							<br>
							<select class="custom-select col-sm-3" name="contactos">

								<?php

										# OPERAÇÕES COM O FICHEIRO CSV
										$filename = '../data/users.csv';

											$file = fopen($filename, 'r'); //ler o ficheiro .csv
											while (!feof($file)) {

												$data = fgetcsv($file, 0, ";"); //ir buscar dados ao ficheiro .csv

												if($data == "") {

														break;

											}

												$user = new User($data[2], $data[3], $data[4], $data[5], $data[6], $data[7]);

												$username = $user->getUsername();

												# Impedir que o seu próprio contacto apareça na listagem
												if($username == $_SESSION['username']) {

														break;

												}

														echo "<option value='{$username}'>{$username}</option>";

									}

							?>

							</select>

							<button type="submit" name="add_contacto" class="btn btn-primary btn_add_contacto">Adicionar contacto</button>
						</div>

						<!-- Opção de eliminar contactos -->
						<div class="form-group">
	          	<label for="subject">Eliminar contacto da sua lista:</label>
							<br>
							<select class="custom-select col-sm-3" name="">
								<?php

										# OPERAÇÕES COM O FICHEIRO CSV
										$filename = '../data/users.csv';

											$file = fopen($filename, 'r'); //ler o ficheiro .csv
											while (!feof($file)) {

												$data = fgetcsv($file, 0, ";"); //ir buscar dados ao ficheiro .csv

												if($data == "") {

														break;

											}

												$user = new User($data[2], $data[3], $data[4], $data[5], $data[6], $data[7]);

												$username = $user->getUsername();

												# Impedir que o seu próprio contacto apareça na listagem
												if($username == $_SESSION['username']) {

														break;

												}

														echo "<option value='{$username}'>{$username}</option>";

									}

							?>
							</select>
							<button type="submit" name="del_contacto" class="btn btn-success btn_del_contacto">Eliminar contacto</button>
						</div>

				</form>
	</div>

<!-- JavaScript -->
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>