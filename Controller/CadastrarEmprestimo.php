<?php
session_start();
require_once "../Model/EmprestimoRepository.php";
$emprestimoRepository = new EmprestimoRepository();
$emprestimo = $emprestimoRepository->createmprestimo($_POST);

header("location: /../View/Imprestimo/Listar.php");