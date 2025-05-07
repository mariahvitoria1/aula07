<?php
require_once "Conexao.php";
class LivroRepository
{

    private ?PDO $PDO;
    public function __construct()
    {
        $this->PDO = Conexao::conectar();
    }
    public function listarLivros(): array
    {
        $stmt = $this->PDO->query("SELECT * FROM livro");
        return $stmt->fetchAll();
    }

    public function contemLivroPorCodigo(string|int $codigo): bool
    {
        $stmt = $this->PDO->prepare("SELECT COUNT(livro.id) as count FROM livro WHERE livro.codigo = :codigo");
        $stmt->execute(["codigo" => $codigo]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['count'] != 0;
    }

    public function InserirOutrosdados($data)
    {
        var_dump($data);
        $stmt = $this->PDO->prepare("INSERT INTO livro (nome, data_publicacao, editora, class_etaria, codigo, descricao, status, criado_em, atualizado_em, autor)
   VALUES(?,?,?,?,?,?,?,?,?,?)");
        $datanova = (new DateTime())->format('Y-m-d H:i:s');
        $stmt->execute([
            $data['nome'],
            $data['data_publicacao'],
            $data['editora'],
            $data['class_etaria'],
            $data['codigo'],
            $data['descricao'],
            1,
            $datanova,
            $datanova,
            $data['autor'],

        ]);

        return true;
    }

    public function contemLivroid(string|int $id){
 
        $stmt = $this->PDO->prepare("SELECT COUNT(livro.id) as count FROM livro WHERE livro.id = :id");
        $stmt->execute(["id" => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['count'] != 0;

    }

    public function Deletar(string|int $id)
    
    {
           $stmt = $this->PDO->prepare("DELETE FROM livro WHERE id = :id");
           $stmt->execute(["id"=> $id]);
           return true;
    }

    public function PegarLivroporId($id){

        $stmt= $this->PDO->prepare("SELECT * FROM livro WHERE livro.id = :id");
        $stmt->execute(["id"=> $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    
    

    }
     public function Atualizardados(string|int $id, array $post)
     {
        $datetimeNow = (new DateTime())->format('Y-m-d H:i:s');
        $stmt= $this->PDO->prepare("UPDATE livro SET nome=?, data_publicacao=?, editora=?, class_etaria=?, codigo=?, descricao=?, autor=?, atualizado_em=? WHERE id=?");
        $stmt->execute([
            $post["nome"],
            $post['data_publicacao'],
            $post["editora"],
            $post["class_etaria"],
            (int) $post["codigo"],
            $post["descricao"],
            $post["autor"],
            $datetimeNow,
            $id,
        ]);
        return true;




    }

    
}
