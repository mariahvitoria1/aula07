<?php
require_once "../Model/PessoaRepository.php";
session_start();
$pessoarepority = new PessoaRepository();
$contemPessoaMesmocpf = $pessoarepority->contempessoaporcfp($_POST["cpf"]);

if ($contemPessoaMesmocpf) {
    $_SESSION['error'] = "ja existe algume com esse cpf {$_POST['cpf']} cadastro.";
    header("Location:../View/Pessoa/CadastrarPessoa.php?id=$id");
    exit();
}

$pessoarepority->CreatPessoa($_POST);
header("Location:../View/Pessoa/Listar.php");
