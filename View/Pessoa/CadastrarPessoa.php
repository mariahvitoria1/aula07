
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
        <form action="../../Controller/Cadastrarpessoa.php" id="form_cadastro" method="post">
            <h1> Cadastrar Publicacao</h1>
            <div class="text-Field">
    
                                    
            <label for="nome"> Nome </label>
            <input type="text" name="nome">

          
            <label for="data_publicacao"> Data de Nascimento </label>
            <input type="date" name="data_nascimento">
           
            
            <label for="calss_etaria"> Telefone </label>
            <input type="text" name="telefone" >

            <label for="calss_etaria"> cpf </label>
            <input type="text" name="cpf" >
            <label for="calss_etaria"> Endereco </label>
            <input type="text" name="endereco" >
            

            
          
            <button id="btSalvar" type="submit"> salvar </button>
            <button id="btCancelar" type="submit"> cancelar </button>

        </form>

</body>

</html>