<!DOCTYPE html>
<html lang="en">
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
	<title>BusiChat | Página inicial</title>
</head>
<body>

<!-- Landing page -->
<div class="jumbotron jumbotron-fluid">
	<h1 class="display-4">Bem-vindo à BusiChat</h1>
  <p class="lead">Aqui poderás comunicar com todos os teus colegas de trabalho de forma facilitada e dinâmica</p>

<!-- Botão de login -->
<button id="modalBtn" class="login_button nav-item">Prossiga para a sua área de gestão</button></a>

 	<div id="modalLogin" class="the-modal">
 		<div class="modal-content">
			<div class="modal-header">
				<h2>Iniciar Sessão</h2>
				<span class="closeBtn">&times;</span>
		</div>
		<div class="modal-body">

			<form action="login.php" method="post">

					<div class="form-group">
						<!-- Nome de utilizador -->
						<i class="fas fa-user fa-2x"></i>
						<label for="username">Nome de utilizador</label>
						<input type="text" name="username" placeholder="Introduza o seu nome de utilizador" class="form-control col-sm-6">
				</div>

				<div class="form-group">
						<!-- Palavra-passe -->
						<i class="fas fa-key fa-2x"></i>
						<label for="password">Palavra-passe</label>
						<input type="password" name="password" placeholder="Introduza a sua palavra-passe" class="form-control col-sm-6">
				</div>

				<!-- Botão de submissão -->
				<button type="submit" name="login" class="btn btn-primary">Efetuar Login</button>

		</form>

		</div>
 		</div>
 	</div>
</div>

<!-- JavaScript -->
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>
