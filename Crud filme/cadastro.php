<?php

include 'conexao.php';
$nome = $_post['nome'];
$diretor = $_post['diretor'];
$atores = $_post['atores'];
$producao = $_post['produtor'];
$tempo = $_post['tempo'];
$data = $_post['data'];
$linguagem = $_post['linguagem'];
$genero = $_post['genero'];

$recebendo_cadastros = "INSERT INTO
sua_tabela
VALUES('','$nome','$diretor','$atores','$producao','$tempo','$data','$linguagem','$genero')";
$query_cadastros = mysqli_query($connx, $recebendo_cadastros);

header('location:listagem.php');



?>