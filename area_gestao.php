<!DOCTYPE html>

<?php

session_start();

include'user.php';

    $filename = 'data/users.csv';

      $file = fopen($filename, 'r'); //ler o ficheiro csv
      while (!feof($file))

      {

        $data = fgetcsv($file, 0, ";"); //ir buscar dados ao ficheiro csv

        if($data == "") {

            break;

        }
		
		
		if($data[0] == $_SESSION['user']) {
			
			
		  $user = new User($data[2], $data[3], $data[4], $data[5], $data[6], $data[7]);

		  
		  $nome = $user->getName();
		  
		
		}
		
		
	  }

?>
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
	<title>BusiChat | Área de Gestão</title>
</head>
<body>
	<div id="area_gestao">

		<!-- Área de Gestão -->
		<h1 class="text-center">Bem-vindo à sua Área de Gestão, <?php echo $nome ?></h1>

		<!-- Menu lateral -->
		<div id="sideMenu" class="sidenav">
			<a href="javascript:void(0)" class="closeBtnGestao" onclick="closeNav()">&times;</a>
			<a href="#"><i class="fas fa-comment fa-1x"></i> Escrever nova mensagem</a>
			<a href="#"><i class="fas fa-users fa-1x"></i> Gerir contactos</a>
			<a href="#"><i class="fas fa-envelope-open fa-1x"></i> Histórico de mensagens recebidas</a>
			<a href="#"><i class="far fa-envelope fa-1x"></i> Histórico de mensagens enviadas</a>
			<a href="#"><i class="fas fa-cogs fa-1x"></i> Editar dados da conta</a>
			<a href="logout.php"><i class="fas fa-sign-out-alt fa-1x"></i> Encerrar Sessão</a>
		</div>

		<span onclick="openNav()" class="gerir_conta">&#9776; Gerir conta</span>

	</div>

<!-- JavaScript -->
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>
