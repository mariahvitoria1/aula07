<?php
require_once 'Conexao.php';
class PessoaRepository
{

    private ?PDO $PDO;

    public function __construct()
    {
        $this->PDO = Conexao::conectar();
    }

    public function ListarPessoa()
    {
        $stmt = $this->PDO->query("SELECT nome,data_nascimento, telefone FROM pessoa");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function CreatPessoa(array $post)
    {
        $stmt = $this->PDO->prepare("INSERT INTO pessoa(nome, data_nascimento, telefone, cpf, enderco )VALUE(?,?,?,?,?");
        $stmt->bindParam(1, $post["nome"]);
        $stmt->bindParam(2, $post["data_nascimento"]);
        $stmt->bindParam(3, $post["telefone"]);
        $stmt->bindParam(4, $post["cpf"]);
        $stmt->bindParam(5, $post["enderco"]);
        return $this->PDO->lastInsertId();
    }
}
