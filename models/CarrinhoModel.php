<?php

require_once "Conexao.php";
require_once "carrinho.php";

class CarrinhoModel
{

    public $tabela = "Carrinho";

    public function create(Carrinho $c){
        try{
            $sql = "INSERT INTO $this->tabela (forma_de_pagamento, valor_total) VALUES (?,?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getForma_de_Pagamento());
            $stmt->bindValue(2, $c->getValor_Total());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Carrinho');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela WHERE id = ?");
        $stmt->bindParam(1,$id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Carrinho');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Carrinho $c){
        try{
            $sql = "UPDATE $this->tabela SET forma_de_pagamento = ?, valor_total = ? WHERE id = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getForma_de_Pagamento());
            $stmt->bindValue(2, $c->getValor_Total());
            $stmt->bindValue(3, $c->getId());
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
