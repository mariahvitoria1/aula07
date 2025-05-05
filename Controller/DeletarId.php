<?php

require_once '../Model/LivroRepository.php';

if(!isset($_GET['id'])){
    header('Location: ../View/Livro/Listar.php');
    exit();
}
$id = $_GET['id'];
$livroRepository = new LivroRepository();

if(!$livroRepository->contemLivroid($id)){
    header('Location: ../View/Livro/Listar.php');
    exit();
}

$livroRepository->deletar($id);
header('Location: ../View/Livro/Listar.php');
exit();