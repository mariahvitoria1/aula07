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
        <a class="btCadastro" href="Cadastrar.php"> Cadastrar </a>
    </div>
    <table>
        <thead>
            <th>ID</th>
            <th>NOME</th>
            <th>DATA DE NASCIMENTO </th>
            <th>TELEFONE</th>
        </thead>
        <tbody>
            <?php foreach ($pessoa as $resultado) {


                echo "
            <tr>
            <td>{$resultado['id']} </td>
            <td> {$resultado['nome']} </td>
            <td> {$resultado['data_nascimento']} </td>
            <td> {$resultado['telefone']}</td>
            <td><a href='../../Controller/DeletarId.php?id={$resultado['id']}'>Deletar</a></td>
            <td><a href='../../Controller/VizualizarLivro.php?id={$resultado['id']}'>Editar</a></td>
            </tr>";
            }

            ?>
        </tbody>
    </table>
</table>

</html>