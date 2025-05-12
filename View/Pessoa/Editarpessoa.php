<?php
session_start();
require_once"../../Model/PessoaRepository.php";

function get_attribute($key): string
{
    if (isset($_SESSION['Post'])) {
          return $_SESSION['Post'][$key];
    }
    return "";
}

$id = $_GET['id'];
$pessoaRepository = new PessoaRepository();
$pegarIdpessoa = $pessoaRepository->Pegarpessoaporid($id);
if(!$pegarIdpessoa){
    header("location: listar.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastrar.css">
    <title>Document</title>
</head>

<body>
    <div class="Cadastrar">
        <form action="../../Controller/AtualizarPessoa.php?id=<?php echo $id ?>" enctype="multipart/form-data" id="form_cadastro" method="POST">
            <h1> Cadastrar Pessoa</h1>
            <div class="text-Field">
    
                                    
            <label for="nome"> Nome </label>
            <input type="text" name="nome" value="<?php echo $pegarIdpessoa['nome'] ?>">

          
            <label for="data_publicacao"> Data de Nascimento </label>
            <input type="date" name="data_nascimento"value="<?php echo $pegarIdpessoa['data_nascimento'] ?>">
           
            
            <label for="calss_etaria"> Telefone </label>
            <input type="text" name="telefone" value="<?php echo $pegarIdpessoa['telefone'] ?>" >

            <label for="calss_etaria"> cpf </label>
            <input type="text" name="cpf" value="<?php echo $pegarIdpessoa['cpf'] ?>">

            <label for="calss_etaria"> Endereco </label>
            <input type="text" name="endereco" value="<?php echo $pegarIdpessoa['endereco'] ?>">
            

            
          
            <button id="btSalvar" type="submit"> salvar </button>
            <button id="btCancelar" type="submit"> cancelar </button>

        </form>

</body>

</html>