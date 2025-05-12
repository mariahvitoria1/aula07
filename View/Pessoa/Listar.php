<?php
require_once "../../Model/PessoaRepository.php";
$pessoaRepository = new PessoaRepository();
$pessoa = $pessoaRepository->Listarpessoa();

?>

<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta name="viewrpor" content="width=device-widht, initial-scale=1.0">
<title>Listar pessoas</title>
<link rel="stylesheet" href="estilo.css">
<table>
    <h1>Listar as pessoas</h1>
    <div class="div-button">
        <a class="btCadastro" href="CadastrarPessoa.php"> Cadastrar </a>
    </div>
    <table>
        <thead>
            <th>Id</th>
            <th>Nome</th>
            <th>Data de Nascimento </th>
            <th>Telefone</th>
            <th>Ação</th>
        </thead>
        <tbody>
            <?php foreach ($pessoa as $resultado) {
            echo "
            <tr>
            <td>{$resultado['id']} </td>
            <td> {$resultado['nome']} </td>
            <td> {$resultado['data_nascimento']} </td>
            <td> {$resultado['telefone']}</td>
            <td><a href='../../Controller/Deletarpessoa.php?id={$resultado['id']}'>Deletar</a>
            <a href='Editarpessoa.php?id={$resultado['id']}'>Editar</a></td>
            </tr>";
            }

            ?>
        </tbody>
    </table>
</table>

</html>