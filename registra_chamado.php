<?php

    session_start();

    //estamos trablhando na montagem do ovo
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $_SESSION['id'] . '#' . $titulo .'#'. $categoria .'#'. $descricao.PHP_EOL;

    //PHP_EOL = quebra a linha do arquivo de texto

    //Função para abrir um arquivo no php
    $arquivo = fopen('arquivo.hd','a');

   

    //Função para escrever um texto no arquivo aberto
    fwrite($arquivo, $texto);


    //Função para fechar o arquivo 
    fclose($arquivo);

    //echo $texto;
header('Location: abrir_chamado.php');