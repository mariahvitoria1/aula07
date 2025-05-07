<?php
require_once "../Utils/Validador.php";
require_once "../Model/LivroRepository.php";

if(!Validador::existeCampoGet('id')){

    header('Location: ../View/Livro/Listar.php');
    exit();
}
$id = $_GET['id'];
$livroRepository = new LivroRepository();
$livro = $livroRepository->contemLivroid($id);

if(!$livro){

    header('Location: ../View/Livro/Listar.php');
    exit();
}

header('Location: ../View/Livro/Editar.php?id=' . $id);
exit();