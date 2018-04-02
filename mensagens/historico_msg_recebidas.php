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
	<title>BusiChat | Mensagens recebidas</title>
</head>
<body>


	<div id="msg_recebidas_msg_enviadas">

		<!-- Botão de regresso à Área de Gestão -->
		<a href="../area_gestao.php"><button class="btn btn-info"><i class="fas fa-arrow-circle-left"></i>Regressar à área de gestão</button></a>

			<!-- Título da página -->
			<h1 class="text-center">A sua lista de mensagens recebidas</h1>

	</div>

<!-- JavaScript -->
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>