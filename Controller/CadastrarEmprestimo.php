<?php
session_start();
require_once "../Model/EmprestimoRepository.php";
require_once "../Model/LivroRepository.php";
require_once "../Model/PessoaRepository.php";
$livrorepository=  new LivroRepository();
$pessoarepository= new PessoaRepository();
$emprestimoRepository = new EmprestimoRepository();

$emprestimo = $emprestimoRepository->createmprestimo($_POST);
$existepessoa = $pessoarepository->Pegarpessoaporid($_POST['pessoa_id']);
$existelivro = $livrorepository->ConsultarStatus($_POST['id_livro']);
if(empty($existepessoa)){
    $_SESSION['error']="Essa pessoa não existe!";
header("location: ../View/Imprestimo/CadastroVinculo.php");
exit();
}

if(empty($existelivro)){

 $_SESSION['error1']="Esse livro nao existe, informe um verdadeiro por favor!";
header("location: ../View/Imprestimo/CadastroVinculo.php");
exit();

}

if($livro["status"]==0){
$_SESSION['error2']="Livro emprestado !";
header("location: ../View/Imprestimo/CadastroVinculo.php");
exit();
    
}

$post = $_POST;
$emprestimo = $emprestimoRepository->createmprestimo($_POST);
$livro = $livrorepository->AtualizarStatus($_POST['id_livro']);
header("location: /../View/Imprestimo/Listar.php");
