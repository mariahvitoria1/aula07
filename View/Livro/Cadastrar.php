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
            <input type="text" name="nome"></input>
           

          
            <label for="data_publicacao">data de publicacao </label>
            <input type="date" name="data_publicacao"></input>
           
            
            <label for="calss_etaria"> classe etaria </label>
            <input type="text" name="class_etaria"> </input>

            <label for="editora"> editora</label>
            <input type="text" name="editora"> </input>
          

            
            <label for="codigo"> codigo </label>
            <input type="text" name="codigo"></input>
          


            <label for="descricao"> descricao </label>
            <textarea type="text" name="descricao"></textarea>
           
            <label for="autor"> autor </label>
            <input type="text" name="autor"></input>
          
            
            <button id="btSalvar" type="submit"> salvar </button>
            <button id="btCancelar" type="submit"> cancelar </button>

        </form>

</body>

</html>