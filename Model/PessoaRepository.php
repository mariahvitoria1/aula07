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
        $stmt = $this->PDO->query("SELECT id, nome,data_nascimento, telefone FROM pessoa");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function ListarPessoa2()
    {
        $stmt = $this->PDO->query("SELECT id, nome FROM pessoa ");
        return $stmt->fetchAll();
    }
    public function CreatPessoa(array $post)
    {
        $stmt = $this->PDO->prepare("INSERT INTO pessoa (nome, data_nascimento, telefone, cpf, endereco) VALUES (?,?,?,?,?)");
        $stmt->bindParam(1, $post["nome"]);
        $stmt->bindParam(2, $post["data_nascimento"]);
        $stmt->bindParam(3, $post["telefone"]);
        $stmt->bindParam(4, $post["cpf"]);
        $stmt->bindParam(5, $post["endereco"]);
        $stmt->execute();
        return $this->PDO->lastInsertId();
    }

    public function contempessoaporcfp($cpf){

        $stmt= $this->PDO->prepare("SELECT cpf, id  FROM pessoa Where cpf= ?");
        $stmt->execute([$cpf]);
        return $stmt->fetch();
    }

        public function Pegarpessoaporid(int|string $id){
        $stmt= $this->PDO->prepare("SELECT * FROM pessoa WHERE id = :id");
        $stmt->bindParam("id", $id, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
        
     }

      public function atualizar( int $id, $post){

        $stmt= $this->PDO->prepare("UPDATE pessoa SET nome=?, data_nascimento=?, telefone=?, cpf=?, endereco=? WHERE id=?");
        $stmt->bindParam(1, $post['nome']);
        $stmt->bindParam(2, $post['data_nascimento']);
        $stmt->bindParam(3, $post['telefone']);
        $stmt->bindParam(4, $post['cpf']);  
        $stmt->bindParam(5, $post['endereco']);
        $stmt->bindParam(6, $id);
        $stmt->execute();
      }

    


}
