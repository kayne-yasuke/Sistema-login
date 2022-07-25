<?php
session_start();
include_once('verifica_login.php');
?>

<h1>Bem Vindo,<?php echo $_SESSION['nome']; ?></h1>