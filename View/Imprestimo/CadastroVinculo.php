<?php
session_start();
require_once "../../Model/EmprestimoRepository.php";
$emprestimorepository = new EmprestimoRepository();
$emprestimo = $emprestimorepository->listarEmprestimos();
require_once "../../Model/PessoaRepository.php";
$pessoanome = new PessoaRepository();
$passapessoa = $pessoanome->ListarPessoa2();
require_once "../../Model/LivroRepository.php";
$passalivro = new LivroRepository();
$passaralgo = $passalivro->naoseioq();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosla.css">
    <title>vinculoseila</title>
</head>

<body>
    <div class="Vincular">
        <form action="../../Controller/CadastrarEmprestimo.php" enctype="multipart/form-data" id="form_cadastro" method="POST">
            <h1>Vincular Pessoa/livro</h1>
            <label>Campos a selecionar</label>
            <select name="pessoa_id">
                <?php
                foreach ($passapessoa as $resultado) {

                    echo "  <option value='{$resultado['id']}'> {$resultado['nome']}</option>";
                }

                ?>
            </select>
            <select name="id_livro">
                <?php

                foreach ($passaralgo as $resultado) {
                    echo "<option value='{$resultado['id']}'> {$resultado['nome']}</option>";
                }
                ?>
            </select>
            <label for="datadevolucao"> Data de emprestimo</label>
            <input type="date" name="data_emprestimo" id="data_devolucao">

            <label for="datadevolucao"> Data de devolucao</label>
            <input type="date" name="data_devolucao" id="data_devolucao">

            <button class="bt-cancelar" type="submit"> Cancelar </button>
            <button class="bt-emprestimo" type="submit"> Emprestimo </button>
        </form>

    </div>
</body>

</html>