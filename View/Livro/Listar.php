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

   ?> 
</head>
<body>
  <div id="container">
  <h1> Lista de Livros </h1>
  <a class="button" href="Cadastrar.php"> Cadastrar </a>
  <Table>
    <thead>
    <th>Nome</th>
   <th>Autor</th>
   <th>Codigo</th>
    </thead>
    <tbody>
      <?php
 foreach($livros as $resultado){
   
   echo "
   <tr>
   <td> {$resultado['nome']} </td>
   <td> {$resultado['autor']} </td>
   <td> {$resultado['codigo']}</td>
   </tr> ";
  }
  ?>
 
</tbody>
</Table>
</div>
</body>
</html>