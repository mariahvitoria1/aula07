<?php

//require_once "../Model/Conexao.php";// uma das maneiras de importar classe 
//$conexao = new Conexao();
require_once "../Model/livroRepository.php";
$livroRepository = new LivroRepository();
$resultado= $livroRepository->listarLivros();
$pdo = Conexao:: conectar();
$stmt= $pdo->query("SELECT * FROM livro");
$resultados = $stmt->fetchAll();//retorna todas as colunas do pd pois o fetchAll retorna a list atoda que ali estiver 
 foreach($resultados as $result){
  echo $result['nome'];
  echo $result['descricao'];
  echo $result['data_publicacao'];
 };