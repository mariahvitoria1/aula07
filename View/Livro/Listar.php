<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href="style.css">
    <title>Livro listar</title>
    <?php
   require_once "../../Model/LivroRepository.php";
   $livroReository = new LivroRepository();
   $livros = $livroReository->listarLivros();
   if(isset($_SESSION['sucess'])){
    echo "<p style ='color:green'> Livro Cadastrado com sucesso, obrigada!</p>";
    unset($_SESSION['sucess']);
   }
   ?> 
</head>
<body>
  <div id="container">
  <h1> Lista de Livros </h1>
  <a class="button" href="Cadastrar.php"> Cadastrar </a>
  <Table>
    <thead>
    <th>Id</th>
    <th>Nome</th>
   <th>Autor</th>
   <th>Codigo</th>
    </thead>
    <tbody>
      <?php
 foreach($livros as $resultado){
   
   echo "
   <tr>
   <td>{$resultado['id']} </td>
   <td> {$resultado['nome']} </td>
   <td> {$resultado['autor']} </td>
   <td> {$resultado['codigo']}</td>
   <td><a href='../../Controller/DeletarId.php?id={$resultado['id']}'>Deletar</a></td>
  
   </tr> ";
  }
  ?>
 
</tbody>
</Table>
</div>
</body>
</html>