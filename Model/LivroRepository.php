<?php
require_once "Conexao.php";
class LivroRepository{

    private ?PDO $PDO;
    public function __construct()
    {
        $this->PDO = Conexao::conectar();
    }
    public function listarLivros(): array {
        $stmt = $this ->PDO->query("SELECT * FROM livro");
        return $stmt->fetchAll();

    }
}