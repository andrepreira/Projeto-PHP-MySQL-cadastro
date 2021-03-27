<?php
session_start();
// unset($_SESSION['NOME-DA-SESSAO']); //PARA DESTRUIR APENAS 'NOME-DA-SESSAO'
session_destroy(); // DESTROI TODAS AS SESSOES
header('Location: index.php');
exit();