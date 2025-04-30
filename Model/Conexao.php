<?php
class Conexao 
{
 public static function conectar(){
    $host = "localhost";
    $usuario = "root";
    $senha ="";
    $banco = "biblioteca";
    $porta = 3306;
    try{
        $pdo = new PDO("mysql:host=$host:$porta;dbname=$banco", $usuario, $senha);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexao realizada com sucesso!";
        return $pdo;
    }catch(PDOException $erro){
        echo "Erro ao conectar o banco de dados:{$erro->getMessage()}";
        return null;

    }
  

 }
}
