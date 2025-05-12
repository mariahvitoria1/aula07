<?php
session_start();
function DeixarCampospreenchidos($key)
{
 if(isset($_SESSION['Post'])){
  if(isset($_SESSION['Post'][$key])){
      return $_SESSION['Post'][$key]; 
  }  
 }
 return "";
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
        <form action="../../Controller/Cadastrarpessoain.php" enctype="multipart/form-data" id="form_cadastro" method="POST">
            <h1> Cadastrar Pessoa</h1>
            <div class="text-Field">
    
                                    
            <label for="nome"> Nome </label>
            <input type="text" name="nome" value="<?php echo DeixarCampospreenchidos('nome')?>">

          
            <label for="data_publicacao"> Data de Nascimento </label>
            <input type="date" name="data_nascimento" value="<?php echo DeixarCampospreenchidos('data_nascimento')?>">
           
            
            <label for="calss_etaria"> Telefone </label>
            <input type="text" name="telefone"  value="<?php echo DeixarCampospreenchidos('telefone')?>">

            <label for="calss_etaria"> cpf </label>
            <input type="text" name="cpf" value="<?php echo DeixarCampospreenchidos('cpf')?>">

            <label for="calss_etaria"> Endereco </label>
            <input type="text" name="endereco" value="<?php echo DeixarCampospreenchidos('endereco')?>" >
            

            
          
            <button id="btSalvar" type="submit"> salvar </button>
            <button id="btCancelar" type="submit"> cancelar </button>

        </form>

</body>

</html>