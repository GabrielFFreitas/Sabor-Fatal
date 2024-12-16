<?php

require_once "Conexao.php";
require_once "produto.php";

class ProdutoModel
{

    public $tabela = "Produto";

    public function create(Produto $c){
        try{
            $sql = "INSERT INTO $this->tabela (nome_produto, preco_produto, quantidade) VALUES (?,?,?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNome_produto());
            $stmt->bindValue(2, $c->getPreco_Produto());
            $stmt->bindValue(3, $c->getQuantidade());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Produto');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela WHERE id = ?");
        $stmt->bindParam(1,$id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Produto');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Produto $c){
        try{
            $sql = "UPDATE $this->tabela SET nome_produto = ?, preco_produto = ?, quantidade = ? WHERE id = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNome_produto());
            $stmt->bindValue(2, $c->getPreco_Produto());
            $stmt->bindValue(3, $c->getQuantidade());
            $stmt->bindValue(4, $c->getId());
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
