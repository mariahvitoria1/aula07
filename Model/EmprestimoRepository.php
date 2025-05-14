<?php
require_once "Conexao.php";
class EmprestimoRepository
{

  private ?PDO $PDO;
  public function __construct()
  {
    $this->PDO = Conexao::conectar();
  }

  public function listarEmprestimos()
  {

    $stmt = $this->PDO->query("SELECT pl.id, pl.data_emprestimo, pl.data_devolucao, pessoa.nome AS pessoa_nome, livro.nome AS livro_nome FROM pessoa_livro AS pl INNER JOIN pessoa ON pessoa.id = pl.pessoa_id INNER JOIN livro ON livro.id = pl.livro_id  ");

    return $stmt->fetchAll();
  }
  public function createmprestimo($post)
  {
    $stmt = $this->PDO->prepare("INSERT INTO pessoa_livro (data_emprestimo, data_devolucao, pessoa_id, livro_id) VALUE (?,?,?,?)");
    $stmt->bindParam(1, $post["data_emprestimo"]);
    $stmt->bindParam(2, $post["data_devolucao"]);
    $stmt->bindParam(3, $post["pessoa_id"]);
    $stmt->bindParam(4, $post["id_livro"]);
    $stmt->execute();
  }
}
