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
    <link rel="stylesheet" href="cadastro.css">
    <title>Document</title>
</head>

<body>
    <div class="Cadastrar">
        <form action="../../Controller/SalvarLivro.php" id="form_cadastro" method="post">
            <h1> Cadastrar Publicacao</h1>
            <div class="text-Field">
    
                                    
            <label for="nome"> Nome </label>
            <input type="text" name="nome" value="<?php echo DeixarCampospreenchidos('nome')?>"></input>
           

          
            <label for="data_publicacao">data de publicacao </label>
            <input type="date" name="data_publicacao" value="<?php DeixarCampospreenchidos('data_publicacao')?>"></input>
           
            
            <label for="calss_etaria"> classe etaria </label>
            <input type="text" name="class_etaria" value="<?php echo DeixarCampospreenchidos('class_etaria')?>"> </input>

            <label for="editora"> editora</label>
            <input type="text" name="editora" value="<?php echo DeixarCampospreenchidos('editora')?>"> </input>
          

            
            <label for="codigo"> codigo </label>
            <input type="text" name="codigo"></input>
          


            <label for="descricao"> descricao </label>
            
            <textarea type="text" name="descricao"><?php echo DeixarCampospreenchidos('descricao')?></textarea>
            
            <label for="autor"> autor </label>
            <input type="text" name="autor" value="<?php echo DeixarCampospreenchidos('autor')?>"></input>
            <?php 
            if(isset($_SESSION['error'])){

                echo "<p class='error-message' style='color: red'>{$_SESSION['error']}</p>";
                unset($_SESSION['error']);

            }
            
            ?>
          
            
            <button id="btSalvar" type="submit"> salvar </button>
            <button id="btCancelar" type="submit"> cancelar </button>

        </form>

</body>

</html>