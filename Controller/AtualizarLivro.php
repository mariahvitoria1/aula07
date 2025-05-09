<?php
session_start();
require_once "../Model/LivroRepository.php";
if (isset($GET_['id'])) {
    header("Location:../View/Livro/Listar.php");
    exit();
}
$idlivro = $_GET['id'];

$livroRepository = new LivroRepository();
$codigoLivro= $_POST['codigo'];
$livro =$livroRepository->contemLivroPorCodigo($codigoLivro);

if($livro && $livro == $codigoLivro){

$livroRepository->Atualizardados($idlivro, $_POST);
$_SESSION['atualizado'] = "Livro atualizado!";
header("Location:../View/Livro/Editar.php?id=$idlivro");
exit();
}
if ($livroRepository->contemLivroPorCodigo($_POST['codigo'])) {
    $_SESSION['error'] = "esse codigo ja é de um livro que ja foi registrado ";
    header("Location:../View/Livro/Editar.php?id=$idlivro");
    exit();
}
$livroRepository->Atualizardados($idlivro, $_POST);

header("Location: ../View/Livro/Listar.php");
exit();
