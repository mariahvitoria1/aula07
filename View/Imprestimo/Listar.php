<?php
require_once "../../Model/EmprestimoRepository.php";
$emprestimoRepository = new EmprestimoRepository();
$emprestimo = $emprestimoRepository->listarEmprestimos();

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
            <th>#</th>
            <th>Nome da pessoa</th>
            <th>nome do livro </th>
            <th>data de emprestimo</th>
            <th>Data devolução</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php foreach ($emprestimo as $resultado) {
            echo "
            <tr>
            <td>{$resultado['id']} </td>
            <td> {$resultado['pessoa_nome']} </td>
            <td> {$resultado['livro_nome']} </td>
            <td> {$resultado['data_emprestimo']} </td>
            <td> {$resultado['data_devolucao']}</td>
            <td><a>notificar</a>
            <a>Devolver</a>
            </td>
            </tr>";
            $datadevolucao['data_devolucao']= (new DateTime())->format('Y-m-d H:i:s');
            $datahoje= (new DateTime())->format('Y-m-d H:i:s');
            if($datadevolucao < $datahoje)
            {

           echo "<tr color: 'red' ></tr>"

            }
            }

            ?>
        </tbody>
    </table>
</table>

</html>