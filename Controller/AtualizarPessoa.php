<?php
require_once "../Model/PessoaRepository.php";
session_start();
$idPessoa = $_GET['id'];
$pessoaRepository = new PessoaRepository();
$pessoatemmesmocpf = $pessoaRepository->contempessoaporcfp($_POST["cpf"]);
if ($pessoatemmesmocpf && $pessoatemmesmocpf['id'] != $idPessoa) {
    $_SESSION['error'] = "este cpf já exist";
    header("location: ../View/Pessoa/Editarpessoa.php?id=$idPessoa");
    die();
}

$pessoaRepository->Atualizar($idPessoa, $_POST);
header("Location: ../View/Pessoa/Listar.php");
