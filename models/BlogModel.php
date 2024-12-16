<?php

require_once "Conexao.php";
require_once "blog.php";

class BlogModel
{

    public $tabela = "Blog";

    public function create(Blog $c){
        try{
            $sql = "INSERT INTO $this->tabela (descricao_blog, data_de_lancamento, duracao, autor) VALUES (?,?,?,?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getDescricao_Blog());
            $stmt->bindValue(2, $c->getData_de_Lancamento());
            $stmt->bindValue(3, $c->getDuracao());
            $stmt->bindValue(4, $c->getAutor());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Blog');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela WHERE id = ?");
        $stmt->bindParam(1,$id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Blog');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Blog $c){
        try{
            $sql = "UPDATE $this->tabela SET descricao_blog = ?, data_de_lancamento = ?, duracao = ?, autor = ? WHERE id = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getDescricao_Blog());
            $stmt->bindValue(2, $c->getData_de_Lancamento());
            $stmt->bindValue(3, $c->getDuracao());
            $stmt->bindValue(4, $c->getAutor());
            $stmt->bindValue(5, $c->getId());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function delete($id){
        try{
            $sql = "DELETE FROM $this->tabela WHERE id = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
}
