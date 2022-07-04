<?php

session_start();

/*
ECHO '<pre>';
print_r($_SESSION);
echo '</pre>';
//Remover indices do array de sessão
//unset() -> remove indices de qualquer array


unset($_SESSION['x']);


ECHO '<pre>';
print_r($_SESSION);
echo '</pre>';
//Destruir á variavel de sessão
//ou seja remover todos os indices de uma vez so
// session_destroy() 

session_destroy();
//forçar redirecionamento

ECHO '<pre>';
print_r($_SESSION);
echo '</pre>';
*/

session_destroy();
header('Location: index.php');

?>