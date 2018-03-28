<?php

$filename = 'data/users.csv';

$username = $_POST['username'];
$password = $_POST['password'];

$file = fopen($filename, "r");

while(!feof($file)){

  $user = fgetcsv($file,0,";");

  if ($username == $user[5] && $password == $user[6]){
	  
    $idUser = $user[0];
    fclose($file);
    session_start();
    $_SESSION['user'] = $idUser;
    header('location: area_gestao.php');
    break;
  }
  else
	  header('location: index.php');
}

?>
