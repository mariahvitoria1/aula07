<?php
session_start();
require_once"../Model/LivroRepository.php";

$autor = $_POST["autor"];
$nome = $_POST["nome"];
$data_publicacao = $_POST["data_publicacao"];
$classe_etaria= $_POST["class_etaria"];
$codigo= $_POST["codigo"];
$descricao = $_POST["descricao"];


$livroRepository =  new LivroRepository();
$var = $livroRepository->contemLivroPorCodigo($codigo);


if($var){
$_SESSION['error'] = "este codigo ja é destinado a um livro que foi cadastrado, informe os dados corretamente!";
$_SESSION['Post'] = $_POST;
header("Location:../View/Livro/Cadastrar.php");
exit();
}else{
    $vardois = $livroRepository->InserirOutrosdados($_POST);//salva o livro que ta sendo cadastrado caso o codigo esteja certo
    $_SESSION['sucess'] = "Livro cadastrar com sucesso, obrigada!";
    header("Location:../View/Livro/Listar.php");
    exit();
}
