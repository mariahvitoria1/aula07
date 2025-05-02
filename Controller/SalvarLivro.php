<?php
require_once"../Model/LivroRepository.php";

$autor = $_POST["autor"];
$nome = $_POST["nome"];
$data_publicacao = $_POST["data_publicacao"];
$classe_etaria= $_POST["class_etaria"];
$codigo= $_POST["codigo"];
$descricao = $_POST["descricao"];


$livroRepository =  new LivroRepository();
$var = $livroRepository->contemLivroPorCodigo($codigo);
$vardois = $livroRepository->InserirOutrosdados($_POST);
var_dump($var);
var_dump($vardois);