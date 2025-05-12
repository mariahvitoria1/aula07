<?php
require_once "Conexao.php";
class EmprestimoRepository{

 private ?PDO $PDO;
public function __construct()
{
    $this->PDO = Conexao:: conectar();
}

public function listarEmprestimos(){

$stmt = $this->PDO->query("SELECT pl.id, pl.data_emprestimo, pl.data_devolucao, pessoa.nome AS pessoa_nome, livro.nome AS livro_nome FROM pessoa_livro AS pl INNER JOIN pessoa ON pessoa.id = pl.pessoa_id INNER JOIN livro ON livro.id = pl.livro_id  ");

  return $stmt->fetchAll(PDO:: FETCH_ASSOC);

}

}