<!-- Iniciar a sessão -->
<?php session_start(); ?>

<?php require '../classes/user_class.php'; ?>

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
	<title>BusiChat | Nova mensagem</title>
</head>
<body>


	<div id="nova_msg">


		<!-- Botão de regresso à Área de Gestão -->
		<a href="../area_gestao.php"><button class="btn btn-info"><i class="fas fa-arrow-circle-left"></i>Regressar à área de gestão</button></a>

		<?php

		if(!file_exists("../data/mensagens.csv")) {

				$file = fopen("../data/mensagens.csv", "w");
				fclose($file);

				}


		if($_SERVER["REQUEST_METHOD"] == "POST") {

				$file = fopen("../data/mensagens.csv", "r");

				while (!feof($file)) {

					$data = fgetcsv($file, 0, ";");

					if($data[0]==""){

						break;

					}

					$message = new Message($data[1], $data[2], $data[3], $data[4], $data[5], $data[6]);

				}

				fclose($file);

				$from = $_SESSION['username'];

				$message = new Message($_POST['to'], $from, $_POST['subject'],
					 $_POST['text'], $_POST['date_hour']);

				$file = fopen("../data/mensagens.csv", "a");

				$message = (array)$message;

				fputcsv($file, $message, ";");

				fclose($file);

						echo "<strong><p class='text-center alert alert-primary'>Mensagem enviada com sucesso!</p></strong>";

		}

?>



			<!-- Título da página -->
			<h1 class="text-center">Envio de nova mensagem</h1>

			<!-- Formulário da nova mensagem -->
			<div class="form-container form-mensagem">

				<form action="" method="post" enctype="multipart/form-data">

	        	<!-- Assunto da nova mensagem -->
	        	<div class="form-group">
	          	<label for="subject">Assunto da sua nova mensagem</label>
	          	<input type="text" name="subject" placeholder="Escreve aqui uma breve descrição da mensagem que pretende enviar" class="form-control col-sm-7">
						</div>

						<!-- Escolha dos contactos a receber a mensagem -->
						<div class="form-group">
							<label for="contactos_msg">Contactos que receberão a mensagem</label>

							<select name="to" class="custom-select col-sm-2">


							<?php

								$filename = '../data/users.csv';

									$file = fopen($filename, 'r'); //ler o ficheiro
									while (!feof($file))

									{

									  $data = fgetcsv($file, 0, ";"); //ir buscar dados ao csv

									if($data[0] == "") {

									break;



								}

									  $user = new User($data[2], $data[3], $data[4],$data[5],$data[6],$data[7]);

									  if(!$data[0] == $_SESSION['user']) {

									  $nome = $user->getName();

									  echo "<option value='$nome'>$nome</option><br>";


									}

								}


							?>

						</div>

						<!-- Corpo da mensagem -->
						<div class="form-group">
							<textarea name="text" rows="5" cols="110" placeholder="Escreva aqui a sua mensagem..."></textarea>
						</div>

						<!-- Data da mensagem -->
						<div class="form-group">
							 <label for="data">Data da mensagem</label>
							 <input type="date" name="date_hour" value="<?php date('Y-m-d'); ?>">
						</div>

						<!-- Ficheiros de anexo -->
						<div class="form-group">
				      <label for="image">Anexar ficheiros</label>
				      <input type="file" name="attachment" class="anexos_msg">
				    </div>

						<!-- Botão de mensagem -->
						<div class="form-group">
				      <button type="submit" name="submeter_envio_msg" class="btn">Enviar nova mensagem</button>
				    </div>

				</form>
	</div>

<!-- JavaScript -->
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>